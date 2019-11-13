import React, { Component } from 'react';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Movies.css';


class Movies extends Component {

	constructor(props){
		super(props);
		this.state={
			movies: [],
			message: null
		}
		this.refreshContent = this.refreshContent.bind(this);
	}

	componentDidMount(){
			this.refreshContent();
	}

	refreshContent(){
		this.retrieveAllMovies().then(response => {console.log(response.data); this.setState({ movies : response.data })})
	}


	retrieveAllMovies() {
		var urlParams = new URLSearchParams(window.location.search);
		var year = urlParams.get('year');
		//console.log('http://localhost:8080/Movies?year='+year);
		return axios.get('http://localhost:8080/Movies?year='+year);
	}

	render(){


		var urlParams = new URLSearchParams(window.location.search);
		var year = urlParams.get('year');

		//console.log(this.state.movies.length);
		if(this.state.movies.length != 0){
		  //console.log(this.state.movies['1']['name']);
		    var title = "<div><div class = \"text-info\" id = \"title\"><h3>All "+year+" anime movies we can find are shown as follow:</h3></div>"+
            "<button type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"location.href=\'/\'\">Back to search page</button></div>";

            var output = "";

            for(var i = 0; i<this.state.movies.length; i++){
            	//console.log(this.state.movies[i]['id']);
            	//console.log(this.state.movies[i]['name']);
            	var link_str = "<a class=\"media-left\" href=\'/Details?year="+year+"&id="+this.state.movies[i]['id']+"\'>"+this.state.movies[i]['name']+"</a>";
            	var img_str = "<img src = \""+this.state.movies[i]['poster']+"\" alt = \"Poster Not Available\"/>";

            	output += 
                    "<div class = \"col-md-8 col-md-offset-2 pull-left\" id = \"app-container\">"+
                      "<div class = \"col-xs-1\">"+
                      img_str+
                      "</div>"+
                      "<div class = \"col-xs-4 pull-right\">"+
                        "<table>"+
                          "<tr>"+
                            "<nav><th>"+link_str+"</th></nav>"+
                          "</tr>"+
                          "<tr>"+
                            "<td>Released on "+this.state.movies[i]['date']+"</td>"+
                          "</tr>"+
                          "<tr>"+
                            "<td>Type: "+this.state.movies[i]['genre']+"</td>"+
                          "</tr>"+
                          "<tr>"+
                            "<td>Languages: "+this.state.movies[i]['language']+"</td>"+
                          "</tr>"+
                        "</table>"+
                      "</div>"+
                    "</div>";
            }
        }


      return (
      	  <div className="body-container"> 
      	    <div className="title-container" dangerouslySetInnerHTML={{__html : title}}></div>      
        	<div className="app-container" dangerouslySetInnerHTML={{__html: output}}></div>
          </div>
      );

	}

}

export default Movies;


