import { NavigationContainer } from "@react-navigation/native";
import {
  StyleSheet,
  Text,
  View,
  image,
  TextInput,
  Button,
  TouchableOpacity,
} from "react-native";
import "react-native-gesture-handler";
import React, { useState } from "react";

import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import { createStackNavigator } from "@react-navigation/stack";
import ExcersizesScreen from "./components/ExcersizesScreen";
import LoginScreen from "./components/LoginScreen";
import ExcersizesDetailScreen from "./components/ExcersizesDetailScreen";
import Over from "./components/Over";

const Stack = createStackNavigator();

function ExcersizesStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="home" component={ExcersizesTabs} />
      <Stack.Screen
        name="stackExcersizesDetails"
        component={ExcersizesDetailScreen}
      />
    </Stack.Navigator>
  );
}

const Tab = createBottomTabNavigator();

function ExcersizesTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="tabLogin" component={LoginScreen} />
      <Stack.Screen name="Home" component={ExcersizesScreen} />
      <Tab.Screen name="Over de App" component={Over} />
    </Tab.Navigator>
  );
}

const App = () => {
  return (
    <NavigationContainer>
      <ExcersizesStack />
    </NavigationContainer>
  );
};

export default App;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
    alignItems: "center",
    justifyContent: "center",
  },
});
