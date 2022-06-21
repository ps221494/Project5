import { FlatList, Pressable, StyleSheet, Text, View } from 'react-native'
import React, { useState, useEffect } from 'react'
import { ActivityIndicator, Button, Provider as PaperProvider } from 'react-native-paper';

const ExcersizesScreen = ({ navigation }) => {
    const apiExcersizes = 'http://127.0.0.1:8000';
    const [isExcersizesAvailable, setExcersizesAvailable] = useState(false);
    const [ExcersizesData, setExcersizesData] = useState(null);

    useEffect(() => { GetExcersizes(); }, []);

    const BehandelFout = (error) => {
        console.log(error);
        setExcersizesData(
            { 
                        Name: "***ERROR***",
      }
    )
  }

const GetExcersizes = () => {
    fetch(apiExcersizes)
        .then((response) => response.json())
        .then((data) => {
            setExcersizesData(data);
            // console.log(data);
        })
        .catch((error) => BehandelFout(error))
        .finally(() => setExcersizesAvailable(true));
}

const RenderExcersizes = ({ item }) => {
    console.log(item);
    return (
        <View style={styles.excersizesonItem}>
            <Pressable onPress={() => navigation.navigate('stackExcersizesDetailScreen', { item: item })}>
                <Text style={styles.excersizesonItemText}>{item.name}</Text>
            </Pressable>
        </View>
    )
}

return (
    <PaperProvider>
      <View style={styles.container}>
        {isExcersizesAvailable
          ?
          (
            <View style={styles.container}>
              <FlatList
                style={styles.excersizesList}
                data={ExcersizesData.excersizes}
                renderItem={RenderExcersizes}
                keyExtractor={(item, index) => index}
              />
            </View>
          )
          :
          (
            <ActivityIndicator style={styles.activityIndicator} color='purple' size={70} />
          )
        }
      </View>
    </PaperProvider>
    
  )
}

export default ExcersizesScreen

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'lightgreen',
  },
  activityIndicator: { flex: 1, },
  amiiboList: { flexGrow: 1, backgroundColor: 'grey', },
  amiiboItem: { marginHorizontal: 10, marginVertical: 3, backgroundColor: 'black', },
  amiiboItemText: { fontSize: 15, color: 'wheat', padding: 10 },

  navButtons: { flexDirection: 'row', alignSelf: 'center', },

  button: { flexGrow: 1, marginHorizontal: 10, },


});