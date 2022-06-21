import { ImageBackground, StyleSheet, Text, View } from 'react-native'
import React from 'react'

const LoginScreen = (props) => {
  return (
    <View style={styles.container}>
          <Text style={styles.text}>Deze App geeft informatie over beweging</Text>
    </View>
  )
}

export default LoginScreen

const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems: 'stretch',
      justifyContent: 'center',
    },
    imageBackground : {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
    },
    text : {
        fontSize: 25,
        fontStyle: 'italic',
        color: 'purple',
        textAlign: 'center'
    }
  });