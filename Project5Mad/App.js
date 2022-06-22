import { NavigationContainer } from '@react-navigation/native';
import { StyleSheet, Text, View } from 'react-native';
import 'react-native-gesture-handler';

import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { createStackNavigator } from '@react-navigation/stack';
import ExcersizesScreen from './components/ExcersizesScreen';
import LoginScreen from './components/LoginScreen';
import ExcersizesDetailScreen from './components/ExcersizesDetailScreen';

const Stack = createStackNavigator();

function ExcersizesStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="stackLogin" component={LoginScreen} />
      <Stack.Screen name="stackExcersizes" component={ExcersizesScreen} />
      <Stack.Screen name="stackExcersizesDetails" component={ExcersizesDetailScreen} />
    </Stack.Navigator>
  );
}


const Tab = createBottomTabNavigator();

function ExcersizesTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="tabLogin" component={LoginScreen} />
      <Tab.Screen name="tabExcercise" component={ExcersizesStack} />
    </Tab.Navigator>
  );
}

const App = () => {
  return (
    <NavigationContainer>
      <ExcersizesTabs/>
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
