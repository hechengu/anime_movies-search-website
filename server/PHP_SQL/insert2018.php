<!-- This file is used to insert data into 2018 table -->
<!-- Please be noticed that this file can only insert once a time, if you have done before and want to add new lines later on, please change content and execute this file again -->

<?php
$servername = "localhost";
$username = "guangguang";
$password = "911GT3RS";

// Creating connection
$conn = mysqli_connect($servername, $username, $password);
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn , "set names utf8");
	
$sql = "INSERT INTO 2018_tbl ".
        "(Name, Directed_by, Produced_company, Released_date, Running_time, Genre, Language, IMDb, Poster, Plot, Link, Wiki, Trailer) ".
        "VALUES ".

	//followed by listing sequence:
	//Name
	//Directed_by
	//Produced_company
	//Released_date
	//Running_time
	//Genre
	//Language
	//IMDb
	//Poster
	//Plot
	//Link
	//Wiki
	//Trailer

	//#1
	"(
		'Incredibles 2',
		'Yarrow Cheney,Scott Mosier',
		'Walt Disney Pictures, Pixar Animation Studios',
		'June 15, 2018(USA)',
		'118',
		'Sci-fi/Action',
		'English',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BMTEzNzY0OTg0NTdeQTJeQWpwZ15BbWU4MDU3OTg3MjUz._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'It has been 14 to 15 years and superheroes have been illegal for, frankly, they cause more damage than they prevent. Leading to many countries not even calling for them to be used in secret, and that includes Elastigirl, Mr. Incredible, and Frozone. However, one man, Winston Deavor, an advocate for supers and a lover of them, like his father, wishes to undo all that with a campaign. One which will have Elastigirl front and center and, at first, it goes quite well. She stops multiple situations caused by the “Screenslaver” and it seems supers are going to be back in action.

That is, until she realizes the person she caught was under the Screenslaver\’s control. Thus forcing the investigation to continue. And, while all this happens, Bob is trying to raise the kids, handle Jack-Jack\’s 17 different power manifestations, and deal with the fact it isn\’t him playing the hero. A serious hit to his ego.

But, after a certain point, it becomes clear the Screenslaver is too much for one hero and so multiple heroes get involved. Though, whether they may make it in time, never mind cause the type of damage to maybe make them legal, but put on some kind of retainer, you have to watch to find out.',
		'https://www.imdb.com/title/tt3606756/',
		'https://en.wikipedia.org/wiki/Incredibles_2',
		'i5qOzqD9Rms'), ".

	//#2
	"(
		'Sherlock Gnomes',
		'John Stevenson',
		'Paramount Animation, Metro-Goldwyn-Mayer',
		'March 23, 2018 (USA)',
		'86',
		'Fantasy/Mystery',
		'English',
		'5.1',
		'https://m.media-amazon.com/images/M/MV5BMTk4NzU3NzU2NV5BMl5BanBnXkFtZTgwNDc4NTI3NDM@._V1_SY1000_CR0,0,640,1000_AL_.jpg',
		'Sherlock Gnomes and his assistant, Gnome Watson, storm into London\'s natural history museum, where their nemesis, a pie mascot named Moriarty, is holding gnomes hostage, planning to smash them. After a brief battle, Moriarty is defeated by getting seemingly crushed by a dinosaur skeleton. Meanwhile, Gnomeo and Juliet, as well as the other gnomes, are moving to London. While there, Gnomeo and Juliet are declared the new leaders of the garden. Noticing that Juliet has cast him aside to improve the garden, Gnomeo leaves to find a flower as a centerpiece, but nearly gets caught in a shop, forcing Juliet to rescue him. Gnomeo and Juliet return to the garden, but then find out that all the other gnomes have gone missing. Sherlock and Watson show up at the scene to investigate, and after Gnomeo and Juliet help them escape from a sewer flood, Sherlock agrees for them to team up.',
		'https://www.imdb.com/title/tt2296777/',
		'https://en.wikipedia.org/wiki/Sherlock_Gnomes',
		'UtbiOl506ms'), ".

	
	//#3
	"(
		'The Grinch',
		'Brad Bird',
		'Universal Pictures, Illumination',
		'November 9, 2018(USA)',
		'86',
		'Fantasy/Musical',
		'English',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BYmE5Yjg0MzktYzgzMi00YTFiLWJjYTItY2M5MmI1ODI4MDY3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_CR0,0,631,1000_AL_.jpg',
		'A grumpy Grinch plots to ruin Christmas for the village of Whoville.
In the town of Whoville, human-like creatures called Whos are filled with excitement about celebrating Christmas. The only one who isn\'t amused is a cantankerous, green furred creature called The Grinch, who has a heart \"two sizes too small\" and lives in a cave on the top of Mount Crumpit just north of Whoville. The Grinch\'s only friend is his loyal pet dog Max and they both only visit Whoville when the Grinch needs to buy food and do bad things. Meanwhile, 6-year-old Cindy Lou Who notices that her mother Donna is overworked trying to take care of herself and her twin infant brothers, Buster and Bean. She at first decides to send a letter to Santa Claus to help her mother but after encountering the Grinch, who sarcastically says that she\'ll have to talk to Santa face-to-face about it, she eventually decides to try and trap Santa with the help of her friends..',
 		'https://www.imdb.com/title/tt2709692/',
		'https://en.wikipedia.org/wiki/The_Grinch_(film)',
		'_UOh0UX3alI'), ".

	//#4
	"(
		'Early Man',
		'Nick Park',
		'Aardman Animations',
		'January 26, 2018(UK)',
		'87',
		'Fantasy/Adventure',
		'English',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BYWMxYWVjNzAtMTY0YS00YWQyLWExMGItMjUxODkwYzQyNzMwXkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_SY1000_CR0,0,657,1000_AL_.jpg',
		'Set at the dawn of time, when prehistoric creatures and woolly mammoths roamed the earth, Early Man tells the story of Dug, along with sidekick Hognob as they unite his tribe against a mighty enemy Lord Nooth and his Bronze Age City to save their home.
An asteroid collides with the prehistoric Earth, causing the extinction of the planet\'s dinosaurs, but sparing a tribe of cavemen living near the impact site. Finding a roughly spherical chunk of the asteroid that is too hot to touch, the cavemen begin to kick it around and invent the game of football. Many years later during the Stone Age, a young caveman named Dug (Eddie Redmayne) lives in the village with the chief Bobnar (Timothy Spall) and many other cavemen such as Asbo, (Johnny Vegas), Gravelle (Gina Yashere), Treebor (Richard Ayoade), Magma (Selina Griffiths), Barry (Mark Williams), Grubup (Richard Webber), Thongo (Simon Greenall) and Eemak (Simon Greenall). One day, Dug suggests to Bobnar that they should try hunting woolly mammoths instead of rabbits, but Bobnar brushes him off..
',
 		'https://www.imdb.com/title/tt5220122/',
		'https://en.wikipedia.org/wiki/Early_Man_(film)',
		'43OVm86-4rU'), ".				
		

	//#5
	"(
		'Hotel Transylvania 3: Summer Vacation',
		'Genndy Tartakovsky',
		'Sony Pictures Animation',
		'July 13, 2018 (USA)',
		'97',
		'Fantasy/Adventure',
		'English',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BNjA1MzU5MTY3OF5BMl5BanBnXkFtZTgwNTU5MDA3NTM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Mavis surprises Dracula with a family voyage on a luxury Monster Cruise Ship so he can take a vacation from providing everyone else\'s vacation at the hotel. The rest of Drac\'s Pack cannot resist going along. But once they leave port, romance arises when Dracula meets the mysterious ship Captain, Ericka. Now it\'s Mavis\' turn to play the overprotective parent, keeping her dad and Ericka apart. Little do they know that his \"too good to be true\" love interest is actually a descendant of Abraham Van Helsing, ancient nemesis to Dracula and all other monsters.',
 		'https://www.imdb.com/title/tt4701724/',
		'https://en.wikipedia.org/wiki/Hotel_Transylvania_3:_Summer_Vacation',
		'ZRiPQ8YNrVs'), ".	

	//#6
	"(
		'Isle of Dogs',
		'Wes Anderson',
		'Studio Babelsberg, Indian Paintbrush',
		'March 23, 2018(USA)',
		'101',
		'Drama/Fantasy',
		'English/Japanese',
		'7.9',
		'https://m.media-amazon.com/images/M/MV5BMTYyOTUwNjAxM15BMl5BanBnXkFtZTgwODcyMzE0NDM@._V1_.jpg',
		'When, by executive decree, all the canine pets of Megasaki City are exiled to a vast garbage-dump called Trash Island, 12-year-old Atari sets off alone in a miniature Junior-Turbo Prop and flies across the river in search of his bodyguard-dog, Spots. There, with the assistance of a pack of newly-found mongrel friends, he begins an epic journey that will decide the fate and future of the entire Prefecture.',
 		'https://www.imdb.com/title/tt5104604/',
		'https://en.wikipedia.org/wiki/Isle_of_Dogs_(film)',
		'dt__kig8PVU'), ".

	//#7
	"(
		'Smallfoot',
		'Karey Kirkpatrick',
		'Warner Animation Group',
		'June 15, 2018(USA)',
		'96',
		'Fantasy/Adventure',
		'English',
		'6.6',
		'https://m.media-amazon.com/images/M/MV5BNTVkYTZlZWItZTc0ZS00MTIzLThlNjItNmNkNDA5YzIwZGZjXkEyXkFqcGdeQXVyODQzNTE3ODc@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'Migo is a friendly Yeti whose world gets turned upside down when he discovers something that he didn\'t know existed -- a human. He soon faces banishment from his snowy home when the rest of the villagers refuse to believe his fantastic tale. Hoping to prove them wrong, Migo embarks on an epic journey to find the mysterious creature that can put him back in good graces with his simple community.',
		'https://www.imdb.com/title/tt6182908/',
		'https://en.wikipedia.org/wiki/Smallfoot_(film)',
		'uBw6EvIxIS8'), ".

	//#8
	"(
		'Spider-Man: Into the Spider-Verse',
		'Bob Persichetti',
		'Columbia Pictures, Sony Pictures Animation',
		'December 14, 2018(USA)',
		'117',
		'Fantasy/Sci-fi',
		'English',
		'8.4',
		'https://m.media-amazon.com/images/M/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Bitten by a radioactive spider in the subway, Brooklyn teenager Miles Morales suddenly develops mysterious powers that transform him into the one and only Spider-Man. When he meets Peter Parker, he soon realizes that there are many others who share his special, high-flying talents. Miles must now use his newfound skills to battle the evil Kingpin, a hulking madman who can open portals to other universes and pull different versions of Spider-Man into our world.',
		'https://www.imdb.com/title/tt4633694/',
		'https://en.wikipedia.org/wiki/Spider-Man:_Into_the_Spider-Verse',
		'g4Hbz2jLxvQ'), ".
		

	//#9
	"(
		'Ralph Breaks the Internet',
		'Rich Moore, Phil Johnston',
		'Walt Disney Pictures, Walt Disney Animation Studios',
		'November 21, 2018(USA)',
		'112',
		'Fantasy/Adventure',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMTYyNzEyNDAzOV5BMl5BanBnXkFtZTgwNTk3NDczNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Wreck-It Ralph and Vanellope Van Schweetz have been best friends since their misadventures six years prior, hanging out every night after work in Litwak\'s Family Fun Center and Arcade. While Ralph is content with his current life, Vanellope admits to being bored with her game\'s predictability and wishes for something new. The next day, Ralph attempts to fulfill her desires by creating a secret bonus track during a race. Vanellope overrides player control to test it out, but the resulting conflict between her and the player results with the cabinet\'s steering wheel being broken. Since the company that made Sugar Rush is defunct, one of the kids finds a replacement for Mr. Litwak on eBay. Litwak finds it too expensive and has no choice but to unplug Sugar Rush, leaving the game\'s characters homeless..',
		'https://www.imdb.com/title/tt5848272/',
		'https://en.wikipedia.org/wiki/Ralph_Breaks_the_Internet', 
		'T73h5bmD8Dc'), ".

	//#10
	"(
		'Peter Rabbit',
		'Will Gluck',
		'Columbia Pictures, Sony Pictures Animation',
		'February 9, 2018(USA)',
		'95',
		'Fantasy/Adventure',
		'English',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BMzI5MzZmZjItOGQzZC00NjNiLWFjMjQtMGNhY2NmNDMyNGM1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_SX675_AL_.jpg',
		'Peter Rabbit and his three sisters -- Flopsy, Mopsy and Cotton-Tail -- enjoy spending their days in Mr. McGregor\'s vegetable garden. When one of McGregor\'s relatives suddenly moves in, he\'s less than thrilled to discover a family of rabbits in his new home. A battle of wills soon breaks out as the new owner hatches scheme after scheme to get rid of Peter -- a resourceful rabbit who proves to be a worthy and wily opponent.',
		'https://www.imdb.com/title/tt5117670/',
		'https://en.wikipedia.org/wiki/Peter_Rabbit_(film)', 
		'3ittn4f0Em4'), ".

	//#11
	"(
		'Duck Duck Goose',
		'Chris Jenkins',
		'Original Force Animation',
		'July 20, 2018(USA)',
		'91',
		'Adventure/Comedy',
		'English',
		'5.1',
		'https://m.media-amazon.com/images/M/MV5BYjljMWMyMDItMTU4NS00OTY4LWI5NTItNjRjNjM2YTU1OWQwXkEyXkFqcGdeQXVyMjEyMzc1Njg@._V1_SY1000_CR0,0,682,1000_AL_.jpg',
		'Peng rejects the community of his tight-knit flock of geese in an attempt to live life on his own terms, but when he narrowly rescues two young ducklings from an eccentric but deadly cat, the two latch onto Peng like a parent. The makeshift trio embark on a beautiful and dangerous journey through mountains and lakes, bamboo forests, marble caves and deep river valleys to reach their respective flocks.',
		'https://www.imdb.com/title/tt4940416/',
		'https://en.wikipedia.org/wiki/Duck_Duck_Goose_(film)', 
		'w_R0-5ZVC3w'), ".
	
	//#12
	"(
		'Charming',
		'Ross Venokur',
		'Vanguard Animation',
		'April 20, 2018(Spain)',
		'85',
		'Fantasy/Adventure',
		'English',
		'5.6',
		'https://m.media-amazon.com/images/M/MV5BYjUwNTFiNjctZDE0NS00YmNmLWI3NTctNGY4MTRhZWVhNGI1XkEyXkFqcGdeQXVyNzYxNDg0NTg@._V1_SY1000_CR0,0,672,1000_AL_.jpg',
		'Charming is an irreverent animated comedy about a young Prince with an irresistible appeal and one kick-ass maiden who wants him only for his money. Cursed as a child, Prince Philippe Charming compulsively proposes to every woman he encounters, leaving a trail of lovesick ladies and scorned lovers to wreak vengeful havoc on the Kingdom. Ultimately, Prince Philippe\'s exasperated father, King Charming, gives the young Prince an ultimatum... Find a true, true-love before his 21st Birthday or lose all claim to the throne.',
		'https://www.imdb.com/title/tt4086018/',
		'https://en.wikipedia.org/wiki/Charming_(film)', 
		'XUGPG-iPSWs'), ".

	//#13
	"(
		'Sgt. Stubby: An American Hero',
		'Richard Lanni',
		'Fun Academy Media Group',
		'April 13, 2018(USA)',
		'84',
		'History/Adventure',
		'English',
		'6.9',
		'https://m.media-amazon.com/images/M/MV5BMTY5NzEwNDczMl5BMl5BanBnXkFtZTgwMjY1MTY4NDM@._V1_SY1000_CR0,0,678,1000_AL_.jpg',
		'With World War I looming, Robert Conroy, a young Army private, adopts a stray, stump-tailed terrier. Conroy names his new friend Stubby and gives him a home, a family, and a chance to embark on the adventure that would define a century. The two quickly find themselves in the trenches of France and on the path to history. French soldier Gaston Baptiste befriends the man and dog and accompanies them along their epic journey through harsh conditions and incredible acts of courage.',
		'https://www.imdb.com/title/tt5314190/',
		'https://en.wikipedia.org/wiki/Sgt._Stubby:_An_American_Hero', 
		'L2rekx-k5X0'), ".

	//#14
	"(
		'Teen Titans Go! To the Movies',
		'Peter Rida Michail',
		'Warner Bros. Animation,DC Entertainment',
		'July 27, 2018(USA)',
		'88',
		'Sci-fi/Action',
		'English',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BOTZhMTIwZDUtYjZjZS00MmViLTg3NzEtNWE5NzI1NDUwNDJmXkEyXkFqcGdeQXVyODQxMTI4MjM@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'It seems that all the major superheroes out there are starring in their own movies -- all but the Teen Titans. Robin is bound and determined to remedy that situation by becoming a star instead of a sidekick. With a few madcap ideas and a song in their hearts, the Teen Titans head to Hollywood to fulfill their dreams. Things soon go awry, however, when a supervillain plans to take over the planet -- putting the very fate of the young heroes on the line.',
		'https://www.imdb.com/title/tt7424200/',
		'https://en.wikipedia.org/wiki/Teen_Titans_Go!_To_the_Movies', 
		'r9WhJyyTtqo'), ".

	//#15
	"(
		'Scooby-Doo! & Batman: The Brave and the Bold',
		'Jake Castorena',
		'Warner Bros. Animation,DC Entertainment',
		'January 9, 2018(digital)',
		'75',
		'Action/Comedy',
		'English',
		'6.6',
		'https://m.media-amazon.com/images/M/MV5BNzg1NGY1YjItMDc5MC00NDkwLTgxZTItNjFlYWM5YzI1ZGNiXkEyXkFqcGdeQXVyMzc1MzYxMjc@._V1_SX704_CR0,0,704,999_AL_.jpg',
		'Batman teams up with the Scooby-Doo gang when villains from both of their worlds unite to wreak havoc on the city.',
		'https://www.imdb.com/title/tt7578566/',
		'https://en.wikipedia.org/wiki/Scooby-Doo!_%26_Batman:_The_Brave_and_the_Bold', 
		'FBrPQYTuvMI'), ".
	
	//#16
	"(
		'Batman: Gotham by Gaslight',
		'Sam Liu',
		'Warner Bros. Animation, DC Entertainment',
		'January 12, 2018(USA)',
		'78',
		'Thriller/Action',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BYTJhNjYyMGItODdhOC00ZTZmLTk1MTMtZDRhMmZkYTRiOGJkXkEyXkFqcGdeQXVyMTg2NjYzOA@@._V1_.jpg',
		'In an age of mystery and superstition, how would the people of Gotham react to a weird creature of the night, a bat-garbed vigilante feared by the guilty and the innocent alike? The very first Elseworlds tale re-imagines the Dark Knight detective in Victorian times and pits him against the infamous murderer Jack the Ripper.',
 		'https://www.imdb.com/title/tt7167630/',
		'https://en.wikipedia.org/wiki/Batman:_Gotham_by_Gaslight', 	
		'TJ6EX6zX4FU'), ".			
		
	//#17
	"(
		'Maquia: When the Promised Flower Blooms',
		'Mari Okada',
		'P.A.Works',
		'February 24, 2018(Japan)',
		'115',
		'Drama/Fantasy',
		'Japanese',
		'7.4',
		'https://m.media-amazon.com/images/M/MV5BMDY4YmM0YjUtNTE0OC00NDgwLWE1ZmQtNDIyN2U2MjlhMjI2XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_.jpg',
		'In the land of Iolph, all the people stop aging in their mid-teens and can live for hundreds of years. One resident, Maquia, feels lonely despite the peaceful and idyllic land she lives in. But one day, the Mesarte army invades Iolph, seeking the peoples\' blood for their immortality. Maquia manages to escape the destruction and chaos of war, but with no home or people, she becomes a wanderer in a dark forest. She comes across Erial, an infant mortal boy who has lost his parents, and becomes his guardian. The story follows the relationship that evolves between the two as Erial grows up while Maquia does not.',
		'https://www.imdb.com/title/tt7339826/',
		'https://en.wikipedia.org/wiki/Maquia:_When_the_Promised_Flower_Blooms',
		'AEWvRqZQ0RU'), ".

	//#18
	"(
		'Batman Ninja',
		'Junpei Mizusaki',
		'Warner Bros. Animation, DC Entertainment',
		'April 24, 2018(USA)',
		'85',
		'Action/Adventure',
		'English,Japanese',
		'5.6',
		'https://m.media-amazon.com/images/M/MV5BZjkwNjAzMWYtMzZiZi00MGNlLWExNzMtMWFiYTBhMTBhMmRjXkEyXkFqcGdeQXVyNzQzNDM3NTI@._V1_SX788_CR0,0,788,999_AL_.jpg',
		'Batman Ninja takes a journey across the ages as Gorilla Grodd\'s time displacement machine transports many of Batman\'s worst enemies to feudal Japan - along with the Dark Knight and a few of his allies. The villains take over the forms of the feudal lords that rule the divided land, with the Joker taking the lead among the warring factions. As his traditional high-tech weaponry is exhausted almost immediately, Batman must rely on his intellect and his allies - including Catwoman and the extended Bat-family - to restore order to the land, and return to present-day Gotham City.',
		'https://www.imdb.com/title/tt7451284/',
		'https://en.wikipedia.org/wiki/Batman_Ninja',
		'08dHXfIprYE'), ".
	
	//#19
	"(
		'Christopher Robin',
		'Marc Forster',
		'Walt Disney Pictures',
		'July 30, 2018(USA)',
		'104',
		'Drama/Fantasy',
		'English',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BMjAzOTM2OTAyNF5BMl5BanBnXkFtZTgwNTg5ODg1NTM@._V1_SY1000_SX675_AL_.jpg',
		'Christopher Robin -- now a family man living in London -- receives a surprise visit from his old childhood pal, Winnie-the-Pooh. With Christopher\'s help, Pooh embarks on a journey to find his friends -- Tigger, Eeyore, Owl, Piglet, Rabbit, Kanga and Roo. Once reunited, the lovable bear and the gang travel to the big city to help Christopher rediscover the joy of life.',
 		'https://www.imdb.com/title/tt4575576/',
		'https://en.wikipedia.org/wiki/Christopher_Robin_(film)',		
		'0URpDxIjZrQ'), ".

	//#20
	"(
		'Luis and the Aliens',
		'Christoph Lauenstein',
		'Ulysses Filmproduktion',
		'May 24, 2018(Germany)',
		'86',
		'Sci-fi/Adventure',
		'Germany',
		'6.0',
		'https://m.media-amazon.com/images/M/MV5BOWQ1MTUwMWYtOTQ5OC00ZjRkLWIzNDUtODIwMDQ2NzI5MTZhXkEyXkFqcGdeQXVyNDg1NDcyMDI@._V1_SY1000_CR0,0,709,1000_AL_.jpg',
		'Luis is a lonely and astute 12 year old boy who establishes a friendship with three adorable aliens who land their spaceship at an abandon gas station. Because of this, Luis\' life changes completely. Together with his new extraterrestrial friends he will embark on an exciting adventure in search of a huge ship with which they can return to their home in the stars.',
 		'https://www.imdb.com/title/tt4410000/',
		'Not Available',		
		'C7jPsACD-O0'), ".

	//#21
	"(
		'The Stolen Princess',
		'Oleg Malamuzh',
		'UFD',
		'March 7, 2018(Ukraine)',
		'90',
		'Fantasy/Adventure',
		'Germany',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BOTUyYmZhNzktNGJiOS00NDZlLWJmY2MtYTMzZjM5NGZmOGVhXkEyXkFqcGdeQXVyODQwNTU3MjU@._V1_SY999_CR0,0,702,999_AL_.jpg',
		'This wonderful story happened in the age of valiant knights, beautiful princesses, and battling sorcerers. Ruslan, a wandering artist dreaming to become a knight, met beautiful Mila and fell in love with her; he didn\'t even suspect that she is the King\'s daughter. However, the lovers\' happiness wasn\'t meant to last too long. Chernomor, the evil sorcerer, appeared in a magic vortex and stole Mila right before Ruslan\'s eyes to transform her power of love into his own magic power. Without further ado, Ruslan sets out on a chase after the stolen princess to overcome all obstacles and to prove that real love is stronger than magic.',
 		'https://www.imdb.com/title/tt5378092/',
		'https://en.wikipedia.org/wiki/The_Stolen_Princess',		
		'lRYeiHqg1ew'), ".

	//#22
	"(
		'Mirai',
		'Mamoru Hosoda',
		'Studio Chizu',
		'July 20, 2018(Japan)',
		'98',
		'Drama/Fantasy',
		'Japanese',
		'7.0',
		'https://m.media-amazon.com/images/M/MV5BZjc4NGJiOWUtOWNjOS00M2QzLWFlMmMtMTU3ODMzNWU5ODk4XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_CR0,0,684,1000_AL_.jpg',
		'Four year-old Kun is disappointed when the new baby in his family promptly replaces him as the center of attention; he refuses to accept his little sister, Mirai. When a magical and mysterious gateway opens in the garden, Kun has the chance to encounter his family members when they were young themselves. He is also visited by an older girl with the same name as his sister, leading to a series of surprising adventures, which change how he sees the world.
',
 		'https://www.imdb.com/title/tt6900448/',
		'https://en.wikipedia.org/wiki/Mirai_(film)',		
		'6d-lsJZgmJs'), ".

	//#23
	"(
		'My Hero Academia: Two Heroes',
		'Kenji Nagasaki',
		'Bones',
		'August 3, 2018(Japan)',
		'96',
		'Fantasy/Sci-fi',
		'Japanese',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BYjViOWY3YTQtNTliOC00NzkwLTllMGMtMjNiZTU0MmZjZTgzXkEyXkFqcGdeQXVyODgzNTQ1NTU@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		'All Might and Deku accept an invitation to visit a floating man-made city called I Island where they meet a girl and battle against a villain who takes the island hostage.',
 		'https://www.imdb.com/title/tt7745068/',
		'https://en.wikipedia.org/wiki/My_Hero_Academia:_Two_Heroes',		
		'QFNwukuWJ4I'), ".

	//#24
	"(
		'I want to eat your pancreas',
		'Shinichirô Ushijima',
		'Studio VOLN',
		'September 1, 2018(Japan)',
		'108',
		'Drama/Romance',
		'Japanese',
		'7.8',
		'https://m.media-amazon.com/images/M/MV5BMDc0OTMyM2MtOWYzNy00OGQ2LTkxYjEtMWU3MTY1NTEzOTMxXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'One day, \"Me\" - a highschooler - found a paperback in the hospital. The \"Disease Coexistence Journal\" was its title. It was a diary that \"Me\"\'s classmate, Sakura Yamauchi, had written in secret. Inside, it was written that due to her pancreatic disease, her days were numbered. And thus, \"Me\" coincidentally went from Just-a-Classmate to a Secret-Knowing-Classmate. It was as if he were being drawn to her, who was his polar opposite. However, the world presented the girl that was already suffering from an illness with an equally cruel reality.',
 		'https://www.imdb.com/title/tt7236034/',
		'https://en.wikipedia.org/wiki/I_Want_to_Eat_Your_Pancreas',
		'H4fUYnHvM6w'), ".

	//#25
	"(
		'Henchmen',
		'Adam Wood',
		'Bron Studios',
		'December 7, 2018(Canada)',
		'87',
		'Action/Comedy',
		'English',
		'5.1',
		'https://m.media-amazon.com/images/M/MV5BYTk4MDZlNDAtMzY3MS00MmQyLWI2OWQtNTE3ZjhmYzM5ZGU0XkEyXkFqcGdeQXVyNzAwMjU2MTY@._V1_SY1000_CR0,0,692,1000_AL_.jpg',
		'In a world of super-villains, evil schemes and global domination, someone has to take out the trash. Welcome to the world of Henchmen, third class. When a fresh-faced new recruit joins the Union of Evil, he is assigned to a motley crew of blue-collar workers led by fallen henchmen Hank. But when The Kid accidentally steals the super villain\'s ultimate weapon, Hank must break his risk-nothing code to save the boy he\'s befriended, even if it means becoming the one thing he has always avoided being: a hero.',
 		'https://www.imdb.com/title/tt3076510/',
		'https://en.wikipedia.org/wiki/Henchmen_(film)',		
		'fo2Rze_W1uE'), ".

	//#26
	"(
		'Another Day of Life',
		'Raul de la Fuente,Damian Nenow',
		'List',
		'September 13, 2019(USA)',
		'86',
		'Drama/Animation',
		'English,Spanish',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BZjc0YTYwM2EtZGUyMi00MDMwLThmMjYtMGZhMTViZDMxMmNiXkEyXkFqcGdeQXVyODc0OTEyNDU@._V1_.jpg',
		'In 1975 Warsaw, Ryszard persuades his boss to send him to Angola to cover a bloody civil war, just as the country is about to gain independence. The things he witnesses in Angola change him forever.',
 		'https://www.imdb.com/title/tt2967856/',
		'https://en.wikipedia.org/wiki/Another_Day_of_Life_(film)',		
		'q7ASutCFetE'), ".

	//#27
	"(
		'Elliot the Littlest Reindeer',
		'Jennifer Westcott',
		'Awesometown Entertainment',
		'November 30, 2018(USA)',
		'90',
		'Fantasy/Animation',
		'English',
		'5.0',
		'https://m.media-amazon.com/images/M/MV5BNmMyMjkyNjEtMTAyYy00OWY3LTk3NjgtZjNjMDJjYTAxYWRkXkEyXkFqcGdeQXVyMzA1MjMyNTY@._V1_SY1000_CR0,0,749,1000_AL_.jpg',
		'When Blitzen suddenly announces his retirement, Santa needs to find a replacement. Against all odds, Elliot and his best friend, Hazel, set out to prove that he is the horse for the job. As Elliot and Hazel take on the North Pole reindeer try-outs, Hazel learns that Christmas, as we know it, may be headed for disaster. Meanwhile, back at the farm, a sinister lady threatens the lives of their friends, and Elliot is faced with the biggest decision of his life.',
 		'https://www.imdb.com/title/tt4177856/',
		'Not Available',		
		'viUFB3Oitnk'), ".

	//#28
	"(
		'Buñuel in the Labyrinth of the Turtles',
		'Salvador Simó',
		'Manuel Cristobal',
		'April 26, 2019(Spain)',
		'77',
		'Drama/History',
		'Spanish',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BNTU1YmRiZGEtODE3OS00ZDVmLWE0NzQtMTdiMDdlYmJjNDM4XkEyXkFqcGdeQXVyNzIwNjgwOTE@._V1_SY1000_SX700_AL_.jpg',
		'Paris, 1930. The infamous surrealist filmmaker Luis Buñuel is left penniless after the scandalous release of L\'Age d\'Or leads to a falling out with collaborator Salvador Dalí. On a whim, Buñuel\'s good friend, sculptor Ramón Acín, buys a lottery ticket and promises to devote his winnings to fund Buñuel\'s next film. Incredibly, Ramón wins the jackpot, sending the two friends to the remote mountains of their native Spain to film the documentary Las Hurdes: Land Without Bread. Driven by mad artistic impulse and haunted by childhood memories, Buñuel must confront the specter of mortality looming over the lives of his subjects and his own.',
 		'https://www.imdb.com/title/tt7336470/',
		'https://en.wikipedia.org/wiki/Bu%C3%B1uel_in_the_Labyrinth_of_the_Turtles',		
		'KWm5exhStVs'), ".

	//#29
	"(
		'Dilili in Paris',
		'Michel Ocelot',
		'Nord-Ouest Films,Studio O',
		'October 4, 2019(USA)',
		'95',
		'Mystery/Adventurey',
		'French',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BMzhhNjcyOGEtMjJkMC00MWY4LTg3ODYtNDNlZWYyODQ2ZGY5XkEyXkFqcGdeQXVyODc0OTEyNDU@._V1_.jpg',
		'In Belle Époque Paris, accompanied by a young scooter deliveryman, little Kanak Dilili investigates mysterious kidnappings of girls. She meets extraordinary men and women who give her clues. She discovered underground very particular villains, male masters. The two friends will fight with enthusiasm for an active life in the light and living together.',
 		'https://www.imdb.com/title/tt7169514/',
		'https://en.wikipedia.org/wiki/Dilili_in_Paris',		
		'jVRUX8tloNw'), ".

	//#30
	"(
		'Penguin Highway',
		'Hiroyasu Ishida',
		'Yōko Matsuzaki',
		'April 12, 2019(USA)',
		'118',
		'Fantasy/Adventure',
		'Japanese',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BYzBhZjIzZTEtMGUxNi00ZWMzLThhMmEtNjI5OTI4NDc3ZWQ3XkEyXkFqcGdeQXVyMDc2NTEzMw@@._V1_SX692_CR0,0,692,999_AL_.jpg',
		'Schoolboy Aoyama is bright, inquisitive and a bit headstrong. He has a lot of brainwork to get busy with – after all, he\'ll be an adult in just a few thousand days. For the moment, though, he\'ll have to live life as a fourth-grader. Not that it\'s a bad life.
Summer has arrived and school\'s nearly out. He has a crush on an intriguing older woman he\'s met at his dentist\'s office, who\'s coaching him in his chess game. And a colony of penguins has materialized in the middle of Aoyama\'s sleepy little town. Where on Earth – or elsewhere – did these waddling interlopers come from? Aoyama and his friends embark on a research mission, applying rigorous scientific methods and principles. Their discoveries, however, only lead to ever more puzzling wonders...',
		'https://www.imdb.com/title/tt8076344/',
		'https://en.wikipedia.org/wiki/Penguin_Highway',
		'Vs3w1X3GSAg'), ".

	//#31
	"(
		'Pachamama',
		'Juan Antin',
		'Netflix',
		'December 12, 2018(France)',
		'72',
		'Fantasy/Adventure',
		'French',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BNTE2N2Q0OWMtNmU5MS00MGY5LWE0ZjItMWUyMGZiOGU4NTlhXkEyXkFqcGdeQXVyNjYxNzY5MjE@._V1_SY1000_SX750_AL_.jpg',
		'Tepulpai, a young 10-year-old boy, is rejected approval to becoming a \"Great One\", although he dreams of becoming a Shaman. The village is soon visited by an Incan tax collector, who takes away the village\'s most precious treasure, the Huaca, and takes away most of their crops, leaving the villagers with nothing left to eat. Walumama, an elderly woman, faints at the absence of the statue, while Tepulpai is very angry and says they must get the Huaca back. When he is asked to leave, he is determined to find the Huaca, and starts on his journey. ',
		'https://www.imdb.com/title/tt5541002/',
		'https://en.wikipedia.org/wiki/Pachamama_(film)',
		'QrOwxPPfzy8'), ".	
		
	//#32
	"(
		'Okko\'s Inn',
		'Mitsuyuki Masuhara',
		'DLE',
		'September 21, 2018(Japan)',
		'94',
		'Drama/Fantasy',
		'Japanese',
		'7.0',
		'https://m.media-amazon.com/images/M/MV5BMDM3NjAzNTMtZTZiOS00OTUxLWE5NGYtOTU4YWI4NWJlN2M2XkEyXkFqcGdeQXVyNDU4MTI0NDE@._V1_SY1000_CR0,0,684,1000_AL_.jpg',
		'After losing her parents in a car accident, Okko goes to live in the countryside with her grandmother, who runs a traditional Japanese inn built on top of an ancient spring said to have healing waters. While she goes about her chores and prepares to become the inn\'s next caretaker, Okko discovers there are ghosts who live there that only she can see – not scary ghosts, but playful child ghosts who keep her company and help her feel less lonely. A sign outside says the spring welcomes all and will reject none, and this is soon put to the test as a string of new guests challenge Okko\'s ability to be a gracious host. But ultimately Okko discovers that dedicating herself to the happiness of others becomes the key to taking care of herself.',
		'https://www.imdb.com/title/tt8328740/',
		'https://en.wikipedia.org/wiki/Okko%27s_Inn',
		'uIXc0S3t3LY'), ".
			
	//#33
	"(
		'The Death of Superman',
		'Sam Liu,James Tucker',
		'Warner Bros. Animation, DC Entertainment',
		'July 20, 2018(digital)',
		'81',
		'Sci-fi/Superhero',
		'English',
		'7.4',
		'https://m.media-amazon.com/images/M/MV5BNWZkMjYzNjctYTMyZi00MjdjLTg5MzMtYjdhM2M0MTI5ZWFkXkEyXkFqcGdeQXVyNTc4MjczMTM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'Superman has become a hero to the citizens of Metropolis while infuriating billionaire and super villain Lex Luthor, who considers our hero a threat to his city and the influence he has in it. In an attempt to kidnap the mayor, Intergang – armed with Apokolips technology, including the Mother Box – are foiled by Superman; he and the Justice League send the recovered devices to S.T.A.R. Labs for analysis. In an interview with the Daily Planet\’s ace reporter Lois Lane, Superman presents the rocket that brought him to Earth from Krypton and its birthing matrix, containing Kryptonian DNA technology to the world. Lois is in a relationship with fellow reporter Clark Kent who, unbeknownst to her, is Superman\’s alter-ego. Despite meeting his parents Jonathan and Martha, Lois remains apprehensive of Clark\'s secrecy. His reluctance to reveal his past makes Lois reconsider their relationship. ',
		'https://www.imdb.com/title/tt7167658/',
		'https://en.wikipedia.org/wiki/The_Death_of_Superman_(film)',
		'J5aMJ1qMgA8'), ".
			
	//#34
	"(
		'Cinderella and the Secret Prince',
		'Lynne Southerland',
		'Gold Valley Films',
		'October 11, 2018(Brazil)',
		'90',
		'Fantasy/Adventure',
		'English',
		'4.4',
		'https://m.media-amazon.com/images/M/MV5BNjk3NDkxNTAtN2ZiMS00OWE2LWI0ZDYtNDU4MzhkMTkxODc5XkEyXkFqcGdeQXVyNjI1MTgwMzE@._V1_SY1000_SX675_AL_.jpg',
		'During the Royal Ball, Cinderella and her mice fellows discover a secret that could shake their world: the real prince has turned into a mouse by the evil witch, and the \"Prince\" from the Royal Ball is in fact a fraud. Now, Cinderella and her friends are going to begin a whole new adventure to save the real Prince, and help him defeat the evil force.',
		'https://www.imdb.com/title/tt6241270/',
		'Not Available',
		'dJTH2NxMhxI'), ".
	//#35
	"(
		'Spy Cat',
		'Christoph Lauenstein',
		'Grid Animation',
		'April 18, 2019(Germany)',
		'92',
		'Adventure/Comedy',
		'English,German',
		'5.5',
		'https://m.media-amazon.com/images/M/MV5BYTJiYTIwYmItNjE0Yi00OWU2LTk2YjgtMjk2YTFmMDQwNTY0XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_CR0,0,751,1000_AL_.jpg',
		'Four crazy antiheroes on the run. Their leader is the unworldly innocent, naive Marnie, a house cat who is not allowed to leave the house and only knows about real life from television. Based loosely on Grimms \"The Bremen Town Musicians\" a modern, hilarious road movie is told.',
		'https://www.imdb.com/title/tt5746054/',
		'Not Available',
		'skAw553EoT4'), ".
	//#36
	"(
		'Cats and Peachtopia',
		'Gary Wang',
		'Light Chaser Animation Studios',
		'April 5, 2018(China)',
		'105',
		'Adventure/Comedy',
		'Chinese',
		'5.0',
		'https://m.media-amazon.com/images/M/MV5BMjA5YTFlNzYtZmU5Ni00Y2Y2LWFmMTktNGFlZjE0MWIwMDJmXkEyXkFqcGdeQXVyMjMwODE4ODI@._V1_SY1000_CR0,0,692,1000_AL_.jpg',
		'Cape, a restless, curious and smart yellow kitten, lives in a high-rise apartment with his father Blanket and a lively parrot named Mack. Cape dreams of adventure outside of his sheltered home whereas Blanket prefers the safety of staying indoors. When Cape learns about a mythical land where cats can live freely and happily, he sets out on a quest to find it.',
		'https://www.imdb.com/title/tt7886614/',
		'Not Available',
		'5g-SEFebWXM'), ".
	//#37
	"(
		'Checkered Ninja',
		'Thorbjørn Christoffersen',
		'A. Film',
		'25 December 2018(Denmark)',
		'81',
		'Adventure/Comedy',
		'English',
		'7.5',
		'https://m.media-amazon.com/images/M/MV5BNDVjZGJiNDItYThhNy00NDRkLTk2MjktZTI3NGNkM2I4NGEwXkEyXkFqcGdeQXVyNTMwNDUzODU@._V1_.jpg',
		'A cat named Blanket has long been living in a high-rise apartment in the city with his son, Cape. One day, curious about the outside world, Cape decides to leave home and embarks on an adventure to find the legendary cat\'s paradise. To find his son, Blanket must overcome his fear and reconcile with his past, with the help of a female Macaw.',
		'https://www.imdb.com/title/tt7367960/',
		'https://en.wikipedia.org/wiki/Checkered_Ninja',
		'xSmhnwkmSXc'),".														
	//#38
	"(
		'Liz and the Blue Bird',
		'Naoko Yamada',
		'Kyoto Animation',
		'November 9, 2018(USA)',
		'90',
		'Drama/Fantasy',
		'Japanese',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BZmFmNTU0N2QtNGM2YS00NzY5LTllZTYtZDNlZThjOTg1ZThiXkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		'Mizore Yoroizuka and Nozomi Kasaki are a pair of best friends in their final year of high school. They\'re both obsessed with the school\'s brass band club. With Mizore on the oboe and Nozomi on the flute, they spend their days in happiness, until the club begins to practice songs inspired by the fairy tale Liz und ein Blauer Vogel - \"Liz and the Blue Bird\". Immersed in this story, Mizore and Nozomi begin to realize that there may be no such thing as being together forever.',
		'https://www.imdb.com/title/tt7089878/',
		'https://en.wikipedia.org/wiki/Liz_and_the_Blue_Bird', 
		'yyysLf1FkvE'), ".
	//#39
	"(
		'Louis & Luca - Mission to the Moon',
		'Rasmus A. Sivertsen',
		'Maipo Film, Qvisten Animation',
		'September 21, 2018(Norway)',
		'159',
		'Adventure/Comedy',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BM2M3Mzg4NmUtYjQ5Mi00ZTdlLTk5MzUtZDU0NmNiYTJlZGI2XkEyXkFqcGdeQXVyNjk4MzY1MTk@._V1_SY999_CR0,0,708,999_AL_.jpg',
		'In the international race to the moon, the Norwegian mission is led by brilliant inventor Reodor from the village of Flaklypa. With Nolan the Magpie as the brave astronaut, what could possibly go wrong? Quite a bit, actually - on the daring mission, secret passengers are discovered, hidden agendas are revealed, and nothing seems to work out the way it was planned. Nolan and his friend Louis the Hedgehog are in for some surprises on their trip to the moon. This is the third film in the stop-motion trilogy featuring the beloved characters from the Flaklypa universe.',
		'https://www.imdb.com/title/tt7533756/',
		'Not Available', 
		'y0U6DhL3MFE'), ".
	//#40
	"(
		'Mary Poppins Return',
		'Rob Marshall',
		'Walt Disney Pictures',
		'December 19, 2018(USA)',
		'130',
		'Fantasy/Adventure',
		'English',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BMjQxNjE3NjYxN15BMl5BanBnXkFtZTgwMTk2NDQ3NjM@._V1_SY1000_SX700_AL_.jpg',
		'Now an adult with three children, bank teller Michael Banks learns that his house will be repossessed in five days unless he can pay back a loan. His only hope is to find a missing certificate that shows proof of valuable shares that his father left him years earlier. Just as all seems lost, Michael and his sister receive the surprise of a lifetime when Mary Poppins -- the beloved nanny from their childhood -- arrives to save the day and take the Banks family on a magical, fun-filled adventure.',
		'https://www.imdb.com/title/tt5028340/',
		'https://en.wikipedia.org/wiki/Mary_Poppins_Returns', 
		'-3jsfXDZLIY'), ".

	//#41
	"(
		'Asterix: The Secret of the Magic Potion',
		'Louis Clichy,Alexandre Astier',
		'M6 Group',
		'December 5, 2018(France)',
		'86',
		'Adventure/Comedy',
		'French',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BZTEzNGRiYTEtYmIxOC00NzA2LTg4MzUtNDc0MjJiODhjYTY2XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_SX675_AL_.jpg',
		'Following a fall during mistletoe picking, Druid Panoramix decides that it is time to secure the future of the village. Accompanied by Astérix and Obelix, he undertakes to travel the Gallic world in search of a talented young druid to transmit the Secret of the Magic Potion.',
		'https://www.imdb.com/title/tt8001346/',
		'https://en.wikipedia.org/wiki/Asterix:_The_Secret_of_the_Magic_Potion', 
		'NcTX_U0SMJs'), ".	
	//#42
	"(
		'The Last Fiction',
		'Ashkan Rahgozar',
		'Hoorakhsh studio',
		'June 12, 2018(Annecy)',
		'120',
		'Fantasy/Adventure',
		'Persian,English',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BMjEyMDM0MTg0MV5BMl5BanBnXkFtZTgwNjkzMDQxNjE@._V1_SY1000_CR0,0,699,1000_AL_.jpg',
		'After defeating the Nether world, the king of Persist, decides to destroy the Devil. He leaves the power to Prince Zahak. The Evil reappear in Zahak\'s soul.Kaveh, a blacksmith, leads a revolt. Will the eternal battle between darkness and light end ?',
		'https://www.imdb.com/title/tt4773054/',
		'https://en.wikipedia.org/wiki/The_Last_Fiction', 
		'vfkPSnD6tDs'), ".	
	//#43
	"(
		'Ruben Brandt, Collector',
		'Milorad Krstic',
		'Sony Pictures',
		'February 15, 2018(USA)',
		'96',
		'Drama/Mystery',
		'Italian,English',
		'7.5',
		'https://m.media-amazon.com/images/M/MV5BOGQ3N2E3ODQtYjVkMi00MDZlLWIzMzMtMGNlYmRjODkxMzY0XkEyXkFqcGdeQXVyOTgxNDIzMTY@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'A psychotherapist suffers violent nightmares inspired by legendary works of art. Four of his patients, expert thieves, offer to steal the works, since he believes that once he owns them, the nightmares will disappear. He becomes a wanted criminal know as \"The Collector\". Who will dare to catch him and his gang?',
		'https://www.imdb.com/title/tt6241872/',
		'https://en.wikipedia.org/wiki/The_Last_Fiction', 
		'5dOZpivfNxw'), ".	
	//#44
	"(
		'Tito and the Birds',
		'Gustavo Steinberg',
		'Bits Producoes',
		'January 25, 2018(USA)',
		'73',
		'Drama/Action',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BYWFkN2E0MmUtNDA0Ni00MjRmLWEzNDYtYzBjYjgwMWVkMjQ4XkEyXkFqcGdeQXVyNTc5OTMwOTQ@._V1_SY1000_CR0,0,736,1000_AL_.jpg',
		'A boy and his two friends set out to find his father\'s missing research on bird songs, something that just might save their world from an epidemic where fear makes you sick.',
		'https://www.imdb.com/title/tt8327492/',
		'https://en.wikipedia.org/wiki/Tito_e_os_p%C3%A1ssaros', 
		'9aMR9dWWar0'), ".
	//#45
	"(
		'Detective Conan: Zero the Enforcer',
		'Tachikawa Yuzuru',
		'TMS Entertainment',
		'April 13, 2018(Japan)',
		'110',
		'Drama/Thriller',
		'Japanese',
		'6.2',
		'https://m.media-amazon.com/images/M/MV5BNjMzMDA3MDYtNTNlMS00YTc3LTlkYmItYjViMjZjY2U1YzNmXkEyXkFqcGdeQXVyMjY2OTU0MTg@._V1_.jpg',
		'In the film\'s story, there is a sudden explosion at Tokyo Summit\'s giant Edge of Ocean facility. The shadow of Tooru Amuro, who works for the National Police Agency Security Bureau as Zero, appears at the site. In addition, the \"triple-face\" character is known as Rei Furuya as a detective and Kogorou Mouri\'s apprentice, and he is also known as Bourbon as a Black Organization member. Kogorou is arrested as a suspect in the case of the explosion. Conan conducts an investigation to prove Kogorou\'s innocence, but Amuro gets in his way.',
		'https://www.imdb.com/title/tt7880466/',
		'https://en.wikipedia.org/wiki/Detective_Conan:_Zero_the_Enforcer', 
		'LYHWr3JSAQ8'), ".
	//#46
	"(
		'Natsume\'s Book of Friends the Movie: Tied to the Temporal World',
		'Takahiro Omori',
		'Shuka',
		'September 29, 2018(Japan)',
		'110',
		'Drama/Fantasy',
		'Japanese',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BZmY1ODRkNDMtNjNiMS00MjU2LWFkYTgtODkyMTI2ZmExYzYwXkEyXkFqcGdeQXVyNzEyMDQ1MDA@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'Ever since he was little, Takashi Natsume has been able to see what others could not, namely monstrous spirits known as Yokai. Natsume\'s late grandmother, Reiko, would challenge Yokai to contests and the ones that lost had to sign a contract with her, binding their names to her \"Yujin-cho.\" Ever since Natsume has inherited the book, together with Nyanko Sensei, his self-proclaimed bodyguard, he spends his days trying to return the names within the book to their owners.
Natsume has been busy, navigating between humans and Yokai when he coincidentally reunites with an old classmate, Yuki. It brings back painful memories of a certain Yokai. Meanwhile, Natsume also became acquainted with Yorie Tsumura, a woman in the memories of a Yokai whose name he had returned. Yorie knew much about Reiko, but now lived a peaceful life with her only son, Mukuo. Being with this family was comforting for Natsume, but apparently a mysterious Yokai has been lurking in their town.
On the way back from investigating, a \"Yokai seed\" that had latched itself to Nyanko Sensei drops into the Fujiwaras\' garden and grows overnight into a fruit tree. When Nyanko Sensei eats a fruit that is somehow shaped like himself, he suddenly splits into three!',
		'https://www.imdb.com/title/tt9081300/',
		'https://en.wikipedia.org/wiki/Natsume%27s_Book_of_Friends_the_Movie:_Tied_to_the_Temporal_World#Voice_Cast', 
		'urtKQZmyxQE'), ".
	//#47
	"(
		'Crayon Shin-chan: Burst Serving! Kung Fu Boys ~Ramen Rebellion~',
		'Wataru Takahashi',
		'Shin-Ei Animation',
		'May 29, 2018(Japan)',
		'104',
		'Comedy/Anime',
		'Japanese',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMGEwMTVkYmMtY2E0Ny00MWY1LTgwN2YtZmE2OGExYmQyYWQyXkEyXkFqcGdeQXVyODMxNzcyNDI@._V1_SY1000_CR0,0,667,1000_AL_.jpg',
		'Shin-chan and the Kasukabe Defense Group are planning to perform an absolutely no-stunt Kung Fu challenge on the stage in Aiya Town, also known as the Chinatown of Kasukabe city.',
		'https://www.imdb.com/title/tt7994070/',
		'https://en.wikipedia.org/wiki/Crayon_Shin-chan:_Burst_Serving!_Kung_Fu_Boys_~Ramen_Rebellion~', 
		'4EHx9RFcXXk'), ".
	//#48
	"(
		'The Seven Deadly Sins the Movie: Prisoners of the Sky',
		'Noriyuki Abe',
		'A-1 Pictures',
		'August 18, 2018(Japan)',
		'99',
		'Comedy/Anime',
		'Japanese',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BMTQ0OTY3NjAxMF5BMl5BanBnXkFtZTgwMzE4NDAzNzE@._V1_SY1000_CR0,0,701,1000_AL_.jpg',
		'The story takes place in a time when humans and non-humans alike lived in the same society. The Kingdom of Liones was almost annihilated thanks to the evildoings of the Demon Clan, but were saved thanks to the efforts of the Kingdom\’s third Princess, Elizabeth, and a band of strong yet terrible knights known as the Seven Deadly sins. With peace returning to the Kingdom, preparations are underway to celebrate the King\’s birthday. Dishes using lots of rare ingredients are being prepared at The Boar Hat Tavern, which is being run by the leader of the Seven Deadly Sins, Meliodas: the Dragon\'s Sin of Wrath.',
		'https://www.imdb.com/title/tt9089294/',
		'https://en.wikipedia.org/wiki/The_Seven_Deadly_Sins_the_Movie:_Prisoners_of_the_Sky', 
		'XKoIbQP7fxs'), ".
	//#49
	"(
		'Haikara-San: Here Comes Miss Modern, Part 2',
		'Toshiaki Kidokoro',
		'Nippon Animation',
		'October 19, 2018(Japan)',
		'99',
		'Drama/Romance',
		'Japanese',
		'5.9',
		'https://m.media-amazon.com/images/M/MV5BNDZlMTA3YmYtNjY4Zi00ZWE4LWJjYjktYmY1MzQ3MmJlMTczXkEyXkFqcGdeQXVyMzUzMzgxNA@@._V1_.jpg',
		'After marrying the head of the military, Benio hears her husband died in Siberia during a war. However after finding out he\'s alive and fighting against his home land, Benio starts looking for her first love. Wondering why he didn\'t return and wanting to welcome him back. Hardships will happen and hearts may be broken, as he might have moved on.',
		'https://www.imdb.com/title/tt7058884/',
		'https://en.wikipedia.org/wiki/Haikara-San:_Here_Comes_Miss_Modern', 
		'PABXyseknb0'), ".
	//#50
	"(
		'Attack on Titan: The Roar of Awakening',
		'Tetsurō Araki',
		'Wit Studio',
		'January 13, 2018(Japan)',
		'120',
		'Fantasy/Sci-fi',
		'Japanese',
		'7.8',
		'https://m.media-amazon.com/images/M/MV5BZjNjYTlmYWYtMGY3Zi00NzhkLTliZDQtYTNhNTZjNzViNzYyXkEyXkFqcGdeQXVyNjMxNzQ2NTQ@._V1_.jpg',
		'Eren Yeager and others of the 104th Training Corps have just begun to become full members of the Survey Corps. As they ready themselves to face the Titans once again, their preparations are interrupted by the invasion of Wall Rose-but all is not as it seems as more mysteries are unraveled. As the Survey Corps races to save the wall, they uncover more about the invading Titans and the dark secrets of their own members.',
		'https://www.imdb.com/title/tt7941892/',
		'https://en.wikipedia.org/wiki/Attack_on_Titan', 
		'NO079o58Vgg'), ".
	//#51
	"(
		'Love, Chunibyo & Other Delusions the Movie: Take on Me',
		'Tatsuya Ishihara',
		'Kyoto Animation',
		'January 6, 2018(Japan)',
		'90',
		'Teen/Romance',
		'Japanese',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BYmM0N2NiMGUtMzBkYy00NTc4LWFkZmEtMWRhZDY1N2NjNWVlXkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_.jpg',
		'Rikka is 18 and in the last year of high school. But she still acts like she\'s in puberty.
It\'s spring break, and high school seniors are looking ahead to their college entrance exams. Rikka Takanashi and her boyfriend, Yuuta Togashi, have been an item for a long time and live together, but their relationship seems frozen in time, unable to mature to the next level. Then one day, Rikka\'s elder sister, Tooka, declares she\'s taking her sister and the family to Italy where she\'s landed a stable job.
Yuuta panics despite agreeing with Tooka that Rikka can\'t be left alone in Japan, and her chances of getting into college are slim. Still, the two lament the idea of being torn from each other. So at the suggestion of his friends, Yuuta decides the two will elope, and a dramatic chase across Japan begins.',
		'https://www.imdb.com/title/tt6915208/',
		'https://en.wikipedia.org/wiki/Love,_Chunibyo_%26_Other_Delusions!_Take_on_Me', 
		'uvVGwGyQRxM'), ".	
	//#52
	"(
		'Flavors of Youth',
		'Li Haoling',
		'CoMix Wave Films',
		'August 4, 2018(China)',
		'75',
		'Drama/Teen',
		'Chinese,Japanese',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BYmVkZjU5NWYtNmVhNC00Y2FjLWFiZGUtZGRlMzk3M2YzYmI5XkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_SX760_CR0,0,760,999_AL_.jpg',
		'Three stories of youth from different cities in China: memories locked in a bowl of steaming noodles, a fading beauty discovering her way, and a bittersweet first love.',
		'https://www.imdb.com/title/tt8176578/',
		'https://en.wikipedia.org/wiki/Flavors_of_Youth', 
		'CKdOr976h3Y'), ".
	//#53
	"(
		'Pokémon the Movie: The Power of Us',
		'Tetsuo Yajima',
		'OLM, Inc,Wit Studio',
		'July 13, 2018(Japan)',
		'100',
		'Fantasy/Action',
		'Japanese',
		'6.4',
		'https://m.media-amazon.com/images/M/MV5BYzg0MjUzZmEtNjQ1MS00ZGU2LTk0YzYtNDUyYTA4NDJiMDQzXkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'Every year the citizens of Fura City celebrate a Wind Festival. Where people live together with the wind. Long Ago, on the final day of the festival the Legendary Pokemon Lugia and bestow the blessings of the wind upon the people. This Film Focuses on Everyone\'s Story. from Lisa, a high school girl who is just starting out as a Pokemon trainer, to Karachi, a guy who can\'t stop lying to Torito, a researcher who lacks confidence in himself, to Hisui, an old lady who hates touching Pokemon, and Rarugo, a mysterious young girl who watches over the forest by herself.',
		'https://www.imdb.com/title/tt08108230/',
		'https://en.wikipedia.org/wiki/Pok%C3%A9mon_the_Movie:_The_Power_of_Us', 
		'8PGsP59Io20'), ".
	//#54
	"(
		'Doraemon the Movie: Nobita\'s Treasure Island',
		'Kazuaki Imai',
		'Shin-Ei Animation',
		'March 3, 2018(Japan)',
		'109',
		'Fantasy/Sci-fi',
		'Japanese',
		'6.6',
		'https://m.media-amazon.com/images/M/MV5BMDc0MjI0OGMtYTg1ZC00NDE1LTgzMzktNWIwY2RmYzJjNWE3XkEyXkFqcGdeQXVyMjUxNjcxMjU@._V1_.jpg',
		'Upon hearing about the story of Treasure Island, Nobita dreams of discovering and exploring his own treasure island, despite the fact all of the Earth has been mapped already. Doraemon provides Nobita a special treasure map that shows him the location of a treasure island. At the same time, the media announces the discovery of a completely unknown island. Believing the new island is the treasure island, Nobita recruits Doraemon and Shizuka to journey with him, with Doraemon providing a ship.',
		'https://www.imdb.com/title/tt8098546/',
		'https://en.wikipedia.org/wiki/Doraemon_the_Movie:_Nobita%27s_Treasure_Island', 
		'ZwzHBOeM4KM'), ".	
	//#55
	"(
		'Non Non Biyori the Movie: Vacation',
		'Shinya Kawatsura',
		'Silver Link',
		'August 25, 2018(Japan)',
		'71',
		'Comedy/Anime',
		'Japanese',
		'8.2',
		'https://m.media-amazon.com/images/M/MV5BOWVjYTU5ZmItMjI1NS00M2VjLWFkYzAtMjY3NjExZjdmMzBmXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'Suguru wins tickets for a four day trip to Okinawa in a department store raffle. There, Natsumi befriends Aoi Nizato, a girl who helps out at the hotel they\'re staying, over their mutual age and interest in badminton. The next day, everyone separates into snorkeling and kayaking groups, the former in which Renge starts drawing her experiences.',
		'https://www.imdb.com/title/tt7785128/',
		'https://en.wikipedia.org/wiki/Non_Non_Biyori', 
		'xT1FaUF5Kx4'), ".	
	//#56
	"(
		'Chris the Swiss',
		'Anja Kofmel',
		'Dschoint Ventschr,Ma.Ja.De,Nukleus film',
		'January 31, 2019(Germany)',
		'90',
		'Animation/Documentary',
		'German',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BNjQxOTcyZjAtMDQyNy00ZjNhLWFlODEtNzczZDdiM2U0ZjhmXkEyXkFqcGdeQXVyNTkyOTA4MjM@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'Christian \"Chris\" Würtenberg was a young Swiss reporter/journalist attracted by war activities. So he had joined an army training in Namibia before taking an interest in the Balkan war, joining the PIV, a paramilitary group of activists which was in the end integrated into the Croatian army who were fighting the Serbs. He was not really a soldier type of man, became an outsider and ended tragically before he could actually write the book he intended to publish about the war atrocities. He was called Chris or \"the Swiss\" by the fighters. His cousin, Anja Kofmel, is the director of the film which has archive footing, live interviews, and animation parts. She traveled to the war sites 25 years after the actual events and interviewed people who had known Chris. Haunting animation scenes really show the horrors of war for the civilians and also the soldiers. There is no good or bad side, both sides are involved in war crimes. Chris investigated perhaps naively about the reasons people had ...',
 		'https://www.imdb.com/title/tt4920450/',
		'https://en.wikipedia.org/wiki/Chris_the_Swiss',
		'I3VN4Nmu5C4'); ";


mysqli_select_db( $conn, 'ANIMATED_MOVIE' );

if (mysqli_multi_query($conn, $sql)) {
    echo "New data has been inserted";
} else {
    die('Failed to insert: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>

