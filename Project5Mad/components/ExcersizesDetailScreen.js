import { StyleSheet, Text, View, FlatList } from 'react-native'
import React, { useState, useEffect } from 'react'
import { ActivityIndicator, Avatar, Card, Provider as PaperProvider } from 'react-native-paper';

const ExcersizesDetailScreen = ({ route }) => {

    const [excersizesDetails, setExcersizesDetails] = useState(route.params.item);

    const render = ({ item }) => (
        <View>
            <Text>{item}</Text>
        </View>
    );
    return (
        <View style={styles.container}>
            <Card>
                <Card.Cover style={{ height: 500 }} source={{ uri: excersizesDetails.Image }} />
                <Card.Title style={{ height: 50 }} title={excersizesDetails.Name} />
                <Card.Content>
                    <Text>Beschrijving: {excersizesDetails.Description}</Text>
                    <FlatList
                        data={excersizesDetails.release}
                        renderItem={render}
                    />
                </Card.Content>
            </Card>
        </View>
    )
}
export default ExcersizesDetailScreen

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "gray",
    },

    activityIndicator: {
        flex: 1,
    },

    statsList: {
        flexGrow: 1,
        backgroundColor: "gray",
    },

    statItem: {
        marginHorizontal: 10,
        marginVertical: 3,
        backgroundColor: "black",
    },

    statItemText: {
        fontSize: 15,
        color: "wheat",
        padding: 10,
    },
});
