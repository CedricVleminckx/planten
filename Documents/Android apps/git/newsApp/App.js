import React from 'react';
import {
  StyleSheet,
  Text,
  View,
  DrawerLayoutAndroid,
  ToolbarAndroid
} from 'react-native';
import { StackNavigator } from 'react-navigation';

import Home from './Home';
import Article from './ArticleDetail';

const RootStack = StackNavigator(
  {
    Home: {
      screen: Home,
    },
    Details: {
      screen: Article,
    },
  },
  {
    initialRouteName: 'Home',
    navigationOptions: {
      headerStyle: {
        backgroundColor: '#f4511e',
      },
      headerTintColor: '#fff',
      headerTitleStyle: {
        fontWeight: 'bold',
      },
    },
  }
);

export default class App extends React.Component {
  render() {
    return <RootStack />;
  }
}
