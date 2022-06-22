import { StyleSheet, Text, View } from 'react-native'
import React from 'react'

const Over = () => {
  return (
    <View>
      <Text>Als je veel op de Computer zit voor bijvoorbeeld je werk is het belangrijk om te blijven bewegen. 
        daarvoor bestaat deze app, een sportieve app waarmee je toch kan blijven bewegen en uitleg over de oefeningen kan krijgen
      </Text>
      <Text style={styles.Hulp}>Heeft u hulp nodig of vragen?</Text>
      <Text>Mail dan naar : RandomMail@outlook.com</Text>
      <Text style={styles.Versie}>Versie Nummer: 0.6</Text>
    </View>
  )
}

export default Over

const styles = StyleSheet.create({
    Versie : {
        marginTop : 100,
    },
    Hulp : {
        marginTop : 50,
    }
})