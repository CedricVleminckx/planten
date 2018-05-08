import React from 'react';
import {
  StyleSheet,
  Text,
  View,
} from 'react-native';

export default class Header extends React.Component {
   constructor(props){
      super(props);
   }

   render(){
      return(
         <View style={styles.header}>
            <Text style={styles.headerText}>RTL top 10 artikels</Text>
         </View>
      )
   }
}

const styles = StyleSheet.create({
   header: {
      height: 60,
      width: 415,
      backgroundColor: '#d42323',
      justifyContent: 'center',
      alignItems: 'center'
   },
   headerText: {
      color: 'white',
      fontSize: 35
   },
});
