package com.backend.backend;

import java.sql.SQLException;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@CrossOrigin(origins = { "http://localhost:3000", "http://localhost:4200" })
@RestController
public class MoviesResource {
	@Autowired
	private MoviesHardcodedService movieManagementService;
	  
	@RequestMapping("/Movies")
	public List<MovieContent> getAllMovies(@RequestParam(value="year", defaultValue="") String year) throws SQLException{
		return movieManagementService.findAll(year);
	}
	
	@RequestMapping("/Details")
	public MovieDetails getMovie(@RequestParam(value="year", defaultValue="") String year, @RequestParam(value="id", defaultValue="0") long id) throws SQLException{
		return movieManagementService.findInd(year, id);
	}

}
