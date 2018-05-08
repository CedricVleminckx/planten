import React from 'react';
import {
  StyleSheet,
  Text,
  View,
  Image,
  TouchableOpacity
} from 'react-native';

export default class Article extends React.Component {
   constructor(props) {
      super(props);
   }

   render() {
      return (
         <TouchableOpacity onPress={() => {
          /* 1. Navigate to the Details route with params */
          this.props.navigation.navigate('Details', {
             item: this.props.detail,
          });
         }}>
             <View style={styles.content}>
               <Image source={{uri: this.props.detail.urlToImage}} style={styles.imageSize} />
               <Text style={styles.articleTitle}>{this.props.detail.title}</Text>
            </View>
         </TouchableOpacity>
      )
   }
}

const styles = StyleSheet.create({
   content: {
      marginBottom: 20,
      marginTop: 20
   },
   imageSize: {
      width: 415,
      height: 200
   },
   articleTitle: {
      fontSize: 22,
      color: 'black',
      marginLeft: 7,
      marginRight: 7,
   }
});
