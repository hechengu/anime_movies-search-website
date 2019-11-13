import React, { Component } from 'react';
import axios from 'axios';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Details.css';

class Details extends Component{

	constructor(props){
		super(props);
		this.state={
			movie: [],
			message: null
		}
		this.refreshContent = this.refreshContent.bind(this);
	}

	componentDidMount(){
			this.refreshContent();
	}

	refreshContent(){
		this.retrieveAllMovies().then(response => {console.log(response.data); this.setState({ movie : response.data })})
	}


	retrieveAllMovies() {
		var urlParams = new URLSearchParams(window.location.search);
		var year = urlParams.get('year');
		var id = urlParams.get('id');
		//console.log('http://localhost:8080/Movies?year='+year);
		return axios.get('http://localhost:8080/Details?year='+year+'&id='+id);
	}

	render(){
		var urlParams = new URLSearchParams(window.location.search);
		var year = urlParams.get('year');


		if(this.state.movie.length != 0){
			var trailer = "https://www.youtube.com/embed/"+this.state.movie['trailer'];
			var wiki = this.state.movie['wiki']=="Not Available"?null:"<a href=\'"+this.state.movie['wiki']+"\'";
			var output = "";

			output+=
			"<div class = \"w-100 h-25\" id = \"message-container\">"+
			  "<div>"+
			 	"<button type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"location.href=\'/Movies?year="+year+"\';\">Back to results page</button>"+
			 	 "<img src =\""+this.state.movie['poster']+"\" class=\"img-fluid\" alt = \"Poster Not Available\"/>"+
			 	  "<div class = \"row justify-content-md-center\">"+
			 	  	"<div id = \"Title\">"+(wiki==null ? "" : wiki)+"<i class = \"text-dark\">"+this.state.movie['name']+"</i>"+(wiki==null?"":"</a>")+"</div>"+
			 	  "</div>"+
			 	  "<div class = \"row\">"+
			 	  	"<div class =\"col-sm text-left\">"+
			 	  	  "<div id = \"text\">Director:  "+this.state.movie['director']+"</div>"+
			 	  	"</div>"+
			 	  	"<div class =\"col-sm text-left\">"+
			 	  	  "<div id = \"text\">Production company: "+this.state.movie['company']+"</div>"+
					"</div>"+
					"<div class =\"col-sm text-left\">"+
					  "<div id = \"text\">Genre: "+this.state.movie['genre']+"</div>"+
					"</div>"+ 
				  "</div>"+
				  "<div class = \"row\">"+
				  	"<div class =\"col-sm text-left\">"+
				  	  "<div id = \"text\">Released date and country: "+this.state.movie['date']+"</div>"+
				  	"</div>"+
				  "</div>"+
				  "<div class = \"row\">"+
				  	"<div class =\"col-sm text-left\">"+
				  	  "<div id = \"text\">Length: "+this.state.movie['length']+" minitues</div>"+
				  	"</div>"+
				    "<div class =\"col-sm text-left\">"+
				      "<div id = \"text\">Language: "+this.state.movie['language']+"</div>"+
				    "</div>"+
				    "<div class =\"col-sm text-left\">"+
				      "<div><a href=\""+this.state.movie['link']+"\" id = \"text\">IMDb: "+this.state.movie['imdb']+"</a></div>"+
				    "</div>"+
				  "</div>"+
				  "<div class = \"col col-6 offset-5 pt-5 text-md-left\">"+
				    "<p id =\"plot\">"+this.state.movie['plot']+"</p><div>"+
				  "</div>"+
				"</div>"+
				"<div class = \"embed-responsive embed-responsive-4by3\" id = \"Video\" style = \"margin-top:30px\">"+
				  "<iframe class =\"embed-responsive-item\" src = \'"+trailer+"\'></iframe>"+
				"</div>";
		}

		return(
			<div className="detail-container">
				<div className="app-container" dangerouslySetInnerHTML={{__html : output}}></div>
			</div>
		);

	}

}

export default Details;