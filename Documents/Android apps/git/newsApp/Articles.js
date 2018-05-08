import React from 'react';
import {
  FlatList,
  RefreshControl,
} from 'react-native';


import Article from './Article';
export default class Articles extends React.Component {
   constructor(props) {
      super(props);
      this.state = { news: [], refreshing: false};
   }

   componentWillMount(){
      fetch('https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=00795cc0d33048de847d055598c884a7').then((res) => res.json()).then((res) => {
         this.setState({
            news: res.articles
         })
      });

   }

   onRefresh() {
     this.setState({refreshing: true});
     fetch('https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=00795cc0d33048de847d055598c884a7').then((res) => res.json()).then((res) => {
       this.setState({
           news: res.articles
       })
       this.setState({refreshing: false});
     });
   }

   render(){
      return(
         <FlatList
           data={this.state.news}
           keyExtractor={item => item.title}
           renderItem={({ item }) => (
             <Article navigation={this.props.navigation} detail={item} />

           )}
           refreshControl={
             <RefreshControl
               refreshing={this.state.refreshing}
               onRefresh={this.onRefresh.bind(this)}
             />
           }
         />
      )
   }
}
