import React from 'react';
import {
  StyleSheet,
  Text,
  View,
  StatusBar
} from 'react-native';

import Articles from './Articles';

export default class App extends React.Component {
   constructor(props) {
      super(props);
   }

   static navigationOptions = {
    title: 'Top 10 RTL artikels',
  };

  render() {
    return (
      <View >
         <StatusBar
           backgroundColor="#f4511e"
           barStyle="light-content"
         />
         <Articles navigation={this.props.navigation}/>
      </View>
    );
  }
}

const styles = StyleSheet.create({
   container: {
      marginBottom: 60
   },
});
