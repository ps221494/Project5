import { NavigationContainer } from '@react-navigation/native';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import ExerciseScreen from './components/ExerciseScreen';
import LoginScreen from './components/LoginScreen';

const Stack = createStackNavigator();

function ExercizesStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="Login" component={LoginScreen} />
      <Stack.Screen name="Exercise" component={ExerciseScreen} />
    </Stack.Navigator>
  );
}

import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

const Tab = createBottomTabNavigator();

function ExerciseTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="tabLogin" component={LoginScreen} />
      <Tab.Screen name="tabExercise" component={ExercizesStack} />
    </Tab.Navigator>
  );
}

const App = () => {
  return (
    <NavigationContainer>
      <ExerciseTabs/>
    </NavigationContainer>
  );
}

export default App;


const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
