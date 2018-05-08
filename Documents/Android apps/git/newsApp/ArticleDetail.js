import React from 'react';
import {
  StyleSheet,
  Text,
  View,
  Image,
  Button,
  Linking,
  ScrollView
} from 'react-native';

export default class Article extends React.Component {
   constructor(props) {
      super(props);
   }

   static navigationOptions = {
    title: 'Detail artikel',
  };

   render() {
      const { params } = this.props.navigation.state;
      const title = params ? params.item.title : null;
      const img = params.item.urlToImage;
      const description = params ? params.item.description : null;
      const url = params.item.url;
      const author = params.item.author;
      return (
         <ScrollView  style={styles.content}>
            <Text style={styles.articleTitle}>{title}</Text>
            <Text style={styles.author}>{author}</Text>
           <Image source={{uri: img}} style={styles.imageSize} />
          <Text style={styles.description}>{description}</Text>
          <Button
            title="Lees meer op de site"
            onPress={() => Linking.openURL(url).catch(err => console.error('An error occurred', err))}
          />
        </ScrollView >
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
      height: 250
   },
   articleTitle: {
      fontSize: 25,
      color: 'black',
      marginLeft: 7,
      marginRight: 7,
   },
   author: {
      marginBottom: 20,
      marginLeft: 7,
      marginRight: 7,
   },
   description: {
      marginTop: 20,
      marginBottom: 20,
      marginLeft: 7,
      marginRight: 7,
      fontSize: 16
   }
});
