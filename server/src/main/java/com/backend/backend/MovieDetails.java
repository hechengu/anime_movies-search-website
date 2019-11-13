package com.backend.backend;

public class MovieDetails {
	private Long id;
	private String name;
	private String director;
	private String company;
	private String date;
	private String length;
	private String genre;
	private String language;
	private Float IMDb;
	private String poster;
	private String plot;
	private String link;
	private String wiki;
	private String trailer;
	
	public MovieDetails() {}
	
	public MovieDetails(long id, String name, String director, String company, String date, String length, String genre, String language, float IMDb, String poster, String plot, String link, String wiki, String trailer) {
		super();
		this.id = id;
		this.name = name;
		this.director = director;
		this.company = company;
		this.date = date;
		this.length = length;
		this.genre = genre;
		this.language = language;
		this.IMDb = IMDb;
		this.poster = poster;
		this.plot = plot;
		this.link = link;
		this.wiki = wiki;
		this.trailer = trailer;
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

	public String getDirector() {
		return director;
	}

	public void setDirector(String director) {
		this.director = director;
	}

	public String getCompany() {
		return company;
	}

	public void setCompany(String company) {
		this.company = company;
	}

	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}

	public String getLength() {
		return length;
	}

	public void setLength(String length) {
		this.length = length;
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

	public float getIMDb() {
		return IMDb;
	}

	public void setIMDb(float IMDb) {
		this.IMDb = IMDb;
	}
	
	public String getPoster() {
		return poster;
	}

	public void setPoster(String poster) {
		this.poster = poster;
	}

	public String getPlot() {
		return plot;
	}

	public void setPlot(String plot) {
		this.plot = plot;
	}

	public String getLink() {
		return link;
	}

	public void setLink(String link) {
		this.link = link;
	}

	public String getWiki() {
		return wiki;
	}

	public void setWiki(String wiki) {
		this.wiki = wiki;
	}

	public String getTrailer() {
		return trailer;
	}

	public void setTrailer(String trailer) {
		this.trailer = trailer;
	}
}
