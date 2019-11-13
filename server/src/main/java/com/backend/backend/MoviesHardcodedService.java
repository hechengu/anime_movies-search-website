package com.backend.backend;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import org.springframework.stereotype.Service;

@Service
public class MoviesHardcodedService {
	  private static List<MovieContent> movies = new ArrayList<>();
	  private static List<MovieDetails> movie = new ArrayList<>();
	  private static long idCounter = 0;
	  private static String prev_year = "";
	  static final String DB_URL = "jdbc:mysql://127.0.0.1:3306/ANIMATED_MOVIE?useSSL=false&serverTimezone=UTC";
	  static final String USER = "root";
	  static final String PASSWORD = "911GT3RS";
	  
	  @SuppressWarnings("finally")
	  public List<MovieContent> findAll(String year) throws SQLException{
		  movies.clear();
		  idCounter = 0;

		  if(year.equals("")) {
			  year = prev_year;
		  }
		  else {
			  prev_year = year;
		  }
		  Connection conn = null;
		  Statement stat = null;
		  try {
				  //System.out.println("Start Connection I ...");
				  conn = DriverManager.getConnection(DB_URL, USER, PASSWORD);
			
				  //connection established
				  //System.out.println("Connection I successes!");
				  stat = conn.createStatement();
				  String sql = "";
				  //System.out.println("year="+year);
				  switch(year) {
				  	case "2017":
					  sql = "SELECT * FROM 2017_tbl";
					  break;
				  	case "2018":
				  	  sql = "SELECT * FROM 2018_tbl";
				  	  break;
				  	case "2019":
				  	  sql = "SELECT * FROM 2019_tbl";
				  	  break;
				  	default:
				  		break;				 
				  }
				  ResultSet ret = stat.executeQuery(sql);
				  while(ret.next()) {
					  movies.add(new MovieContent(++idCounter, 
							  			   ret.getString("Name"),
							  			   ret.getString("Released_date"),
							  			   ret.getString("Genre"),
							  			   ret.getString("Language"),
							  			   ret.getString("Poster")));
				  }
				  ret.close();
		  }finally{
			  stat.close();
			  conn.close();
			  return movies;  
		  }		  
	  }
	  
	  @SuppressWarnings("finally")
	  public MovieDetails findInd(String year, long id) throws SQLException{
		  movie.clear();
		  idCounter = 0;

		  Connection conn = null;
		  Statement stat = null;
		  try {
			  //System.out.println("Start Connection II ...");
			  conn = DriverManager.getConnection(DB_URL, USER, PASSWORD);
		
			  //connection established
			  //System.out.println("Connection II successes!");
			  stat = conn.createStatement();
			  String sql = "";
			  //System.out.println("year="+year+" and id="+id);
			  switch(year) {
			  	case "2017":
				  sql = "SELECT * FROM 2017_tbl";
				  break;
			  	case "2018":
			  	  sql = "SELECT * FROM 2018_tbl";
			  	  break;
			  	case "2019":
			  	  sql = "SELECT * FROM 2019_tbl";
			  	  break;
			  	default:
			  		break;				 
			  }
			  ResultSet ret = stat.executeQuery(sql);
			  while(ret.next()) {
				  movie.add(new MovieDetails(++idCounter, 
			  			  ret.getString("Name"),
			  			  ret.getString("Directed_by"),
			  			  ret.getString("Produced_company"),
			  			  ret.getString("Released_date"),
			  			  ret.getString("Running_time"),
			  			  ret.getString("Genre"),
			  			  ret.getString("Language"),
			  			  ret.getFloat("IMDb"),
			  			  ret.getString("Poster"),
			  			  ret.getString("Plot"),
			  			  ret.getString("Link"),
			  			  ret.getString("Wiki"),
			  			  ret.getString("Trailer")));					  
			  }
			  ret.close();
	  }finally{
		  stat.close();
		  conn.close();
		  return movie.get((int) (id-1));  
	  }		  
	  }
}
