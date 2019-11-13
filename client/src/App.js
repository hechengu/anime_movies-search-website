import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';
import $ from 'jquery';
window.$ = $;

class App extends Component {

  render(){

    $(function(){
      var output = "";

      output += 
        "<div class=\"text-info\" id=\"title\"><h2>Please choose the year of anime movies</h2></div>"+
        "<div class=\"col-md-12\" id=\"contanier\">"+
        "<form action=\"/Movies\">"+
          "<select class = \"selectpicker\" data-width=\"auto\" name=\"year\" id = \"year\" required>"+
            "<option selected = \"selected\" value=\"2017\">2017</option>"+
            "<option value=\"2018\">2018</option>"+
            "<option value=\"2019\">2019</option>"+
          "</select>"+

          "<input  type=\"submit\" value=\"Submit\">"+
        "</form>"+
        "</div>";
        $('.app-container').html(output);

    });
                            
    return (
      <div className="body-container">   
        <div className = "app-container">{this.output}</div>
        </div>
    );
  }
}

export default App;
