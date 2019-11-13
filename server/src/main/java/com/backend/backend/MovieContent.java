package com.backend.backend;

public class MovieContent {
	private Long id;
	private String name;
	private String date;
	private String genre;
	private String language;
	private String poster;
	
	public MovieContent() {}
	
	public MovieContent(long id, String name, String date, String genre, String language, String poster) {
		super();
		this.id = id;
		this.name = name;
		this.date = date;
		this.genre = genre;
		this.language = language;
		this.poster = poster;
	}
	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}


	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}
	
	public String getGenre() {
		return genre;
	}

	public void setGenre(String genre) {
		this.genre = genre;
	}

	public String getLanguage() {
		return language;
	}

	public void setLanguage(String language) {
		this.language = language;
	}
	
	public String getPoster() {
		return poster;
	}

	public void setPoster(String poster) {
		this.poster = poster;
	}
	
}
