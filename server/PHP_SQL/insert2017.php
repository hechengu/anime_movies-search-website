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
	
$sql = "INSERT INTO 2017_tbl ".
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
		'Coco',
		'Lee Unkrich',
		'Walt Disney Pictures, Pixar Animation Studios',
		'November 22, 2017(USA)',
		'105',
		'Fantasy/Mystery',
		'English',
		'8.4',
		'https://m.media-amazon.com/images/M/MV5BYjQ5NjM0Y2YtNjZkNC00ZDhkLWJjMWItN2QyNzFkMDE3ZjAxXkEyXkFqcGdeQXVyODIxMzk5NjA@._V1_SY1000_CR0,0,699,1000_AL_.jpg',
		'Young Miguel simply loves music. But his family has a mysterious ban on anyone from their clan performing music. The ban dates back for many generations yet Miguel dreams of becoming an accomplished musician just like his idol, Ernesto de la Cruz. Longing to prove his musical talents, Miguel finds himself in the technicolor Land of the Dead. Along his way, he meets the charming trickster Hector, and together, they set out to find the real story behind his family\'s mysterious ban on music.',
		'https://www.imdb.com/title/tt2380307/',
		'https://en.wikipedia.org/wiki/Coco_(2017_film)',
		'zNCz4mQzfEI'), ".

	//#2
	"(
		'The Lego Batman Movie',
		'Chris McKay',
		'Warner Animation Group,DC Entertainment[',
		'February 10, 2017(USA)',
		'129',
		'Fantasy/Adventure',
		'English',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BMTcyNTEyOTY0M15BMl5BanBnXkFtZTgwOTAyNzU3MDI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'In the Lego Universe, Batman continues to protect Gotham City and fight crime. During his latest mission to stop Joker from destroying the city, he hurts his arch-rival\'s feelings by telling him he is not as important in his life as he thinks he is, leading Joker to seek the ultimate revenge on him. The following day, Batman\'s alter ego, Bruce Wayne, attends the city\'s winter gala, which is celebrating both the retirement of Commissioner Gordon and the ascension of his daughter Barbara as the city\'s new police commissioner, only to be infuriated by Barbara\'s plans to restructure the police to function without the need of Batman. Without warning, Joker crashes the party with the city\'s other villains, all of whom surrender, with the exception of Harley Quinn who disappears during the confusion. Suspecting his arch-rival is up to something, Batman plots to steal Superman\'s Phantom Zone Projector, a device that can banish anyone to the Phantom Zone which houses some of the most dangerous villains in the Lego multiverse..',
		'https://www.imdb.com/title/tt4116284/',
		'https://en.wikipedia.org/wiki/The_Lego_Batman_Movie',
		'aBJyp2LFHgk'), ".

	
	//#3
	"(
		'Captain Underpants: The First Epic Movie',
		'David Soren',
		'DreamWorks Animation',
		'May 21, 2017(USA)',
		'89',
		'Action/Adventure',
		'English',
		'6.2',
		'https://m.media-amazon.com/images/M/MV5BMjE1MzM2NzgzNV5BMl5BanBnXkFtZTgwODU3NTI0MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'In the city of Piqua, Ohio, two fourth-grade friends and next-door neighbors named George Beard and Harold Hutchins are the pranksters at their school, Jerome Horwitz Elementary School. They excessively pull numerous pranks on the cruel teachers, many of which are directed at their mean-spirited principal, Benjamin Krupp, putting the two at odds with him. The duo also create comic books about a superhero named Captain Underpants, who fights crime while wearing underwear and a cape. They distribute these to their schoolmates through a comic company called Treehouse Comix Inc., located in their tree-house. George and Harold\'s pranks come to an apparent end after they\'re caught tampering with a toilet invention, the Turbo Toilet 2000, made by the school\'s local snitch and intellectual, Melvin Sneedly (Jordan Peele), on video with Melvin\'s tattle-turtle. Finally having solid proof of the boys\' antics, Mr. Krupp excitedly prepares to annihilate their friendship by putting them in separate classes..',
 		'https://www.imdb.com/title/tt2091256/',
		'https://en.wikipedia.org/wiki/Captain_Underpants:_The_First_Epic_Movie',
		'zs2SrqLum1M'), ".

	//#4
	"(
		'The Emoji Movie',
		'Tony Leondis',
		'Columbia Pictures, Sony Pictures Animation',
		'July 28, 2017(USA)',
		'86',
		'Sci-fi/Adventure',
		'English',
		'3.2',
		'https://m.media-amazon.com/images/M/MV5BMTkzMzM3OTM2Ml5BMl5BanBnXkFtZTgwMDM0NDU3MjI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Gene is an emoji that lives in Textopolis, a digital city inside the phone of his user Alex. He is the son of two meh emoji named Mel and Mary, and is able to make multiple expressions despite his parents\' upbringing. His parents are hesitant of him going to work, but Gene insists so that he can feel useful. Upon receiving a text from his crush Addie, Alex decides to send her an emoji. When Gene is selected, he panics, makes a panicked expression, and wrecks the text center. Gene is called in by Smiler, a smiley emoji and leader of the text center, who concludes that Gene is a \"malfunction\" and therefore must be deleted. Gene is chased by bots, but is rescued by Hi-5, a once popular emoji who has since lost his fame due to lack of use. He tells Gene that he can be fixed if they find a hacker, and Hi-5 accompanies him so that he can reclaim his fame..',
 		'https://www.imdb.com/title/tt4877122/',
		'https://en.wikipedia.org/wiki/The_Emoji_Movie',
		'r8pJt4dK_s4'), ".				
		

	//#5
	"(
		'Despicable Me 3',
		'Pierre Coffin, Kyle Balda',
		'Universal Pictures',
		'June 30, 2017(USA)',
		'96',
		'Sci-fi/Action',
		'English',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BNjUyNzQ2MTg3Ml5BMl5BanBnXkFtZTgwNzE4NDM3MTI@._V1_SY1000_CR0,0,631,1000_AL_.jpg',
		'Balthazar Bratt, a child star from the 1980s, rises to power and wants world domination. As Gru and Lucy Wilde attempt to stop him from stealing the largest diamond in the world, they fail as he flies away. Gru and Lucy are fired by Valerie Da Vinci from the AVL, and are jobless. As Agnes tries to sell things to get money, Gru receives news he has a twin brother. He flies to Dru\'s location, but finds out he is a more successful and rich super villain. Dru wants Gru to team up for one more heist, which he gives in to. Without Lucy knowing, they plan to steal the largest diamond in the world from Bratt, as the Minions get themselves in prison.',
 		'https://www.imdb.com/title/tt3469046/',
		'https://en.wikipedia.org/wiki/Despicable_Me_3',
		'6DBi41reeF0'), ".	

	//#6
	"(
		'Ferdinand',
		'Carlos Saldanha',
		'Blue Sky Studios, 20th Century Fox Animation',
		'February 27, 2018(USA)',
		'108',
		'Drama/Fantasy',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BOTIwMDI0NjQ4OF5BMl5BanBnXkFtZTgwNjU0MzAyNDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Destined to become a fearless fighting bull, the young pacifist and flower-loving calf, Ferdinand, summons up the courage to escape from a Spanish bull-training camp, to finally find himself on little Nina\'s idyllic and fragrant farm. However, an unfortunate run-in with a busy golden bee will send the immense but peaceful animal back to the old Casa del Toro academy, where the famous matador, El Primero, usually selects his worthy bovine opponents for the arena. Does Ferdinand hide a fierce champion underneath a mountain of muscles, or is he a gentle giant after all?',
 		'https://www.imdb.com/title/tt3411444/',
		'https://en.wikipedia.org/wiki/Ferdinand_(film)',
		'n7RkOfN8KvE'), ".

	//#7
	"(
		'Cars 3',
		'Brian Fee',
		'Walt Disney Pictures, Pixar Animation Studios',
		'June 16, 2017(USA)',
		'109',
		'Sport/Comedy',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BMTc0NzU2OTYyN15BMl5BanBnXkFtZTgwMTkwOTg2MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Lightning McQueen is happily winning all of his races until a new generation of high-tech racers are trained. They all zoom past McQueen, leaving him fading behind. Jackson Storm, a new-gen, wins four times in a row as McQueen pushes himself too hard and crashes. In order to get back on the race track, he needs training from a young racing technician at the Rust-eze Racing Center, Cruz Ramirez. Cruz and Smokey Yunick, the former engineer for the Fabulous Hudson Hornet, help McQueen best they can. With cheering from Mater, Luigi, Guido, and Sally, McQueen could possibly beat Storm in the Florida 500 by learning a few tricks from the history of the Fabulous Hudson Hornet.',
		'https://www.imdb.com/title/tt3606752/',
		'https://en.wikipedia.org/wiki/Cars_3',
		'2LeOH9AGJQM'), ".

	//#8
	"(
		'The LEGO Ninjago Movie',
		'Charlie Bean, Paul Fisher',
		'Warner Bros. Pictures',
		'September 22, 2017(USA)',
		'101',
		'Action/Adventure',
		'English',
		'6.0',
		'https://m.media-amazon.com/images/M/MV5BNDI3MDljMTQtYzBiYS00NDk2LTlhYzUtYmM0NWIyMmZkMDZkXkEyXkFqcGdeQXVyNjk5NDA3OTk@._V1_SY1000_CR0,0,703,1000_AL_.jpg',
		'A young boy visits an old relic shop where he meets the mysterious elderly owner Mr. Liu, who begins to tell him the story of Ninjago, a city within the Lego Universe which is frequently terrorized by the evil Lord Garmadon who is the father of teenager Lloyd Garmadon and ex-husband of Misako (a.k.a. Koko). Ninjago despises Lloyd for being Lord Garmadon\'s son thus putting Lloyd under emotional stress. Unbeknownst to them, Lloyd is part of the secret ninja force consisting of Nya, Zane, Jay, Cole, Kai and their master named Wu, who always stop Garmadon from taking over Ninjago City by fighting with Mechs. After another fight, Garmadon\'s army\'s tech division shows him a new Mech..',
		'https://www.imdb.com/title/tt3014284/',
		'https://en.wikipedia.org/wiki/The_Lego_Ninjago_Movie',
		'sZSYYiATFTI'), ".
		

	//#9
	"(
		'Smurfs: The Lost Village',
		'Kelly Asbury',
		'Columbia Pictures, Sony Pictures Animation',
		'April 7, 2017(USA)',
		'91',
		'Fantasy/Adventure',
		'English',
		'6.0',
		'https://m.media-amazon.com/images/M/MV5BMTg1NjgyMTYzM15BMl5BanBnXkFtZTgwMzIxNDc4MDI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'In Smurf Village, the Smurfs live peacefully among themselves and their leader is Papa Smurf. Some of the Smurfs include Clumsy Smurf, Brainy Smurf, Hefty Smurf and Smurfette, who was created by Gargamel from a lump of clay, but redeemed by Papa Smurf and became part of the village. Gargamel makes it his mission to capture the Smurfs, steal all of their essence, and become the most powerful wizard in the world..',
		'https://www.imdb.com/title/tt2398241/',
		'https://en.wikipedia.org/wiki/Smurfs:_The_Lost_Village', 
		'8LdpyRBE0aA'), ".

	//#10
	"(
		'The Boss Baby',
		'Tom McGrath',
		'DreamWorks Animation',
		'March 31, 2017(USA)',
		'97',
		'Fantasy/Comedy',
		'English',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BMTg5MzUxNzgxNV5BMl5BanBnXkFtZTgwMTM2NzQ3MjI@._V1_SY1000_CR0,0,685,1000_AL_.jpg',
		'Seven-year-old Tim Templeton has always had an overactive imagination--and for the past seven years--life has been all peaches for him, getting all the love and affection from his caring parents. However, after the arrival of Boss Baby, an unexpected new brother dressed in a black suit complete with a tie and a briefcase, Tim won\'t be the centre of attention anymore, as the powerful sibling takes over the whole house, robbing him of all care, little by little. But, soon, Tim and the new Boss in a diaper will need to put differences aside and join forces, as a sneaky scheme involving the head of Puppy Co. threatens to tilt the balance of power towards their insidiously adorable furry antagonists, not to mention that the next Pet Convention is only in two days. Brothers, hurry up.',
		'https://www.imdb.com/title/tt3874544/',
		'https://en.wikipedia.org/wiki/The_Boss_Baby', 
		'A_CGtuDwl-A'), ".

	//#11
	"(
		'The Nut Job 2: Nutty by Nature',
		'Cal Brunker',
		'Open Road Films,ToonBox Entertainment',
		'August 2017(UK)',
		'95',
		'Fantasy/Action',
		'English',
		'5.4',
		'https://m.media-amazon.com/images/M/MV5BZTA5ZDZhMjgtNjNkOC00MzM0LWFlZmItZTM4MjJkMGEyZGQwXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SY1000_CR0,0,673,1000_AL_.jpg',
		'After his relationship with the other animals improved over the past nine months, Surly Squirrel is now loved by Liberty Park\'s Urban wildlife community, and currently overseeing an all-you-can-eat buffet at Maury\'s Nut Shop. This worries Andie, as she prefers a more hard-working outlook on life. Despite Surly\'s reassurances all is well, Maury\'s Nut Shop is accidentally blown up by Mole after he forgets to cut down pressure from the boiler. Andie takes the opportunity to try getting the animals back to their roots by foraging for food in Liberty Park while Surly and Buddy try to find other food-packed places, but fail each time. Defeated, he and Buddy decide to return to the park..',
		'https://www.imdb.com/title/tt3486626/',
		'https://en.wikipedia.org/wiki/The_Nut_Job_2:_Nutty_by_Nature', 
		'Yeclx4pf9lo'), ".
	
	//#12
	"(
		'The Breadwinner',
		'Nora Twomey',
		'Cartoon Saloon, Aircraft Pictures',
		'November 17, 2017(USA)',
		'94',
		'Drama/War',
		'English',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BMWM2MzQ4YTAtMTBkZS00ODA1LWFmNTEtMjEwNzk3ZGJiZDc3XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg',
		'From executive producer Angelina Jolie and the creators of the Academy Award nominated The Secret of Kells and Song of the Sea, comes the highly-anticipated new feature based on Deborah Ellis\' bestselling novel. Parvana is an 11-year-old girl growing up under the Taliban in Afghanistan in 2001. When her father is wrongfully arrested, Parvana cuts off her hair and dresses like a boy in order to support her family. Working alongside her friend Shauzia, Parvana discovers a new world of freedom-and danger. With undaunted courage, Parvana draws strength from the fantastical stories she invents, as she embarks on a quest to find her father and reunite her family. Equal parts thrilling and enchanting, The Breadwinner is an inspiring and luminously animated tale about the power of stories to sustain hope and carry us through dark times.',
		'https://www.imdb.com/title/tt3901826/',
		'https://en.wikipedia.org/wiki/The_Breadwinner_(film)', 
		'ZKxzlNE9_7Y'), ".

	//#13
	"(
		'My Little Pony: The Movie',
		'Jayson Thiessen',
		'Allspark Pictures,DHX Media',
		'September 24, 2017(USA)',
		'99',
		'Drama/Fantasy',
		'English',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BMmMxNWNhNjItZjhmMC00ZmViLThlYjItZDk5YTQ1MWZkOGM1XkEyXkFqcGdeQXVyNzY2ODYzOTU@._V1_SY1000_CR0,0,657,1000_AL_.jpg',
		'The ponies of Equestria prepare for their first Friendship Festival, overseen by Princess Twilight Sparkle in Canterlot. The festivities are interrupted by an invasion of monsters commanded by the broken-horned unicorn Tempest Shadow, who uses magical obsidian orbs to petrify Twilight\'s fellow princesses; Princess Celestia gives Princess Luna incomplete instructions to seek help from \"the queen of the hippo\" before they are both petrified. Twilight flees the city alongside her five pony friends - Pinkie Pie, Rainbow Dash, Rarity, Applejack, and Fluttershy - and her dragon assistant, Spike. Tempest is contacted by her superior, the Storm King, who reminds her to gather all of Equestria\'s princesses for him to harness their magic through his mystical staff, promising to restore her horn in exchange..',
		'https://www.imdb.com/title/tt4131800/',
		'https://en.wikipedia.org/wiki/My_Little_Pony:_The_Movie_(2017_film)', 
		'kIv_ConaZ1c'), ".

	//#14
	"(
		'The Star',
		'Timothy Reckart',
		'Columbia Pictures, Sony Pictures Animation',
		'November 17, 2017(USA)',
		'86',
		'Fantasy/Adventure',
		'English',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BMTU4MDQ4NTM2N15BMl5BanBnXkFtZTgwNDM1NTIzMzI@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'A small but brave donkey named Bo yearns for a life beyond his daily grind at the village mill. One day, he finds the courage to break free, embarking on the adventure of his dreams. On his journey, he teams up with Ruth, a lovable sheep who has lost her flock, and Dave, a dove who has lofty aspirations. Along with three camels and some eccentric stable animals, Bo and his new friends follow the Star and become accidental heroes in the greatest story ever told -- the first Christmas.',
		'https://www.imdb.com/title/tt4587656/',
		'https://en.wikipedia.org/wiki/The_Star_(2017_film)', 
		'jn_EItr5xUo'), ".

	//#15
	"(
		'Loving Vincent',
		'Dorota Kobiela, Hugh Welchman',
		'BreakThru Productions,Trademark Films',
		'September 22, 2017(USA)',
		'95',
		'Drama/Mystery',
		'English',
		'7.8',
		'https://m.media-amazon.com/images/M/MV5BMTU3NjE2NjgwN15BMl5BanBnXkFtZTgwNDYzMzEwMzI@._V1_SY1000_CR0,0,683,1000_AL_.jpg',
		'A year after the death of the artist, Vincent van Gogh, Postman Roulin gets his slacker son, Armand, to hand deliver the artist\'s final letter written to his now late brother, Theo, to some worthy recipient after multiple failed postal delivery attempts. Although disdainful of this seemingly pointless chore, Armand travels to Auvers-sur-Oise where a purported close companion to Vincent, Dr. Gachet, lives. Having to wait until the doctor returns from business, Armand meets many of the people of that village who not only knew Vincent, but were apparently also models and inspirations for his art. In doing so, Armand becomes increasingly fascinated in the psyche and fate of Van Gogh as numerous suspicious details fail to add up. However, as Armand digs further, he comes to realize that Vincent\'s troubled life is as much a matter of interpretation as his paintings and there are no easy answers for a man whose work and tragedy would only be truly appreciated in the future.',
		'https://www.imdb.com/title/tt3262342/',
		'https://en.wikipedia.org/wiki/Loving_Vincent', 
		'CGzKnyhYDQI'), ".
	
	//#16
	"(
		'Batman and Harley Quinn',
		'Sam Liu',
		'Warner Bros. Animation, DC Entertainment',
		'August 14, 2017(USA)',
		'74',
		'Fantasy/Sci-fi',
		'English',
		'5.9',
		'https://m.media-amazon.com/images/M/MV5BNTQzM2JkYTAtY2ExNi00N2ZhLWE5NDctMDQyMWU5ZjcwZDEwXkEyXkFqcGdeQXVyMjM5NDQzNTk@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'Batman and Nightwing discover that Poison Ivy and Floronic Man have teamed up. Much to their reluctance, they decide to look for Harley Quinn (Ivy\'s best friend and Joker\'s usual sidekick), to find out where the duo are hiding; however, Harley has gone off the grid since getting paroled. Batman leaves finding Harley to Nightwing, while he gets information from A.R.G.U.S.
At A.R.G.U.S. HQ, Batman learns that Ivy and Woodrue stole the information on Swamp Thing\'s birth and kidnapped a scientist named Dr. Harold Goldbloom who could help them replicate the process and turn everyone into plant people. ',
 		'https://www.imdb.com/title/tt6556890/',
		'https://en.wikipedia.org/wiki/Batman_and_Harley_Quinn', 	
		'z0pI8TT9AZ0'), ".			
		
	//#17
	"(
		'The Son of Bigfoot',
		'Ben Stassen,Jeremy Degruson',
		'nWave Pictures StudioCanal',
		'16 August 2017(France)',
		'92',
		'Fantasy/Comedy',
		'English',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BNWE4ZGU0ZjItZjgwMi00YzEyLTkzMWMtZDkwMjRhNDU5MzBjL2ltYWdlXkEyXkFqcGdeQXVyNjQzMzk3MTY@._V1_SY1000_CR0,0,670,1000_AL_.jpg',
		'Teenage outsider Adam sets out on an epic and daring quest to uncover the mystery behind his long-lost dad, only to find out that he is none other than the legendary Bigfoot! He has been hiding deep in the forest for years to protect himself and his family from HairCo., a giant corporation eager to run scientific experiments with his special DNA. As father and son start making up for lost time after the boy\'s initial disbelief, Adam soon discovers that he too is gifted with superpowers beyond his imagination. But little do they know, HairCo. is on their tail as Adam\'s traces have led them to Bigfoot!',
		'https://www.imdb.com/title/tt5715410/',
		'https://en.wikipedia.org/wiki/The_Son_of_Bigfoot',
		'TKNYU_M6O5Y'), ".

	//#18
	"(
		'Mary and the Witch\'s Flower',
		'Hiromasa Yonebayashi',
		'Studio Ponoc',
		'July 7, 2017(Japan)',
		'103',
		'Fantasy/Adventure',
		'Japanese',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BNDVkYmFiNmQtMjc3Ni00YTY5LTk0NTAtZDc4YjZiZjU2YjNlXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SY1000_CR0,0,684,1000_AL_.jpg',
		'Mary is an ordinary young girl stuck in the country with her Great-Aunt Charlotte and seemingly no adventures or friends in sight. She follows a mysterious cat into the nearby forest, where she discovers an old broomstick and the strange Fly-by-Night flower, a rare plant that blossoms only once every seven years and only in that forest. Together the flower and the broomstick whisk Mary above the clouds and far away to Endor College - a school of magic run by headmistress Madam Mumblechook and the brilliant Doctor Dee. But there are terrible things happening at the school, and, when Mary tells a lie, she must risk her life to try to set things right. Based on Mary Stewart\'s 1971 classic children\'s book \"The Little Broomstick\", \"Mary and The Witch\'s Flower\" is an action-packed film full of jaw-dropping imaginative worlds, ingenious characters, and the stirring, heartfelt story of a young girl trying to find a place in the world. Featuring the voices of Ruby Barnhill and Academy ...',
		'https://www.imdb.com/title/tt6336356/',
		'https://en.wikipedia.org/wiki/Mary_and_the_Witch%27s_Flower',
		'u8tsjNYEYKQ'), ".
	
	//#19
	"(
		'Justice League Dark',
		'Jay Oliva',
		'Warner Bros. Animation, DC Entertainment',
		'February 7, 2017(USA)',
		'75',
		'Fantasy/Sci-fi',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMmNkMGU4YzEtZTdhZS00YzBhLTgzYzAtZWM2NTQ0ZGU2ZjM3XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'In Metropolis, Gotham and Washington, D.C., violent murders are committed by people who think their victims are demonic creatures before they are stopped by members of the Justice League. The League conclude that magic is the source of the crimes, but Batman is skeptical. However, at Wayne Manor, Batman is briefly possessed by Deadman and left with a single word (\"Constantine\") as a message. Batman finds Zatanna, who had a failed romantic history with Constantine, and Deadman possesses Batman once more to tell Zatanna that she and Batman need to see Constantine. The trio is attacked by a magically controlled tornado as they travel to meet Constantine at the House of Mystery. The group is joined by Black Orchid, the spiritual embodiment of the House, and decide to investigate the cause behind these supernatural occurrences. ',
 		'https://www.imdb.com/title/tt2494376/',
		'https://en.wikipedia.org/wiki/Justice_League_Dark_(film)',		
		'IqZKxOU_s6g'), ".

	//#20
	"(
		'Tehran Taboo',
		'Ali Soozandeh',
		'Little Dream Entertainment',
		'16 November 2017(Germany)',
		'96',
		'Drama/Animation',
		'Persian',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BZDM0OTZlOWQtZGU0My00MmIxLTk0N2ItMjU3OGY0ODRlODYxXkEyXkFqcGdeQXVyNTQ0NjIwNDU@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'A single mother forced into prostitution befriends a young woman who needs an operation to restore her virginity. Both women push against the restrictions of an oppressive Iranian society.',
 		'https://www.imdb.com/title/tt5584796/',
		'https://en.wikipedia.org/wiki/Tehran_Taboo',		
		'xUnSemNTycE'), ".
	//#21
	"(
		'Hey Arnold!: The Jungle Movie',
		'Raymie Muzquiz',
		'Nickelodeon Animation Studios',
		'November 23, 2017(USA)',
		'81',
		'Adventure/Comedy',
		'English',
		'7.6',
		'https://m.media-amazon.com/images/M/MV5BMzU3MDE4NTMtNDY3My00MWQ4LWEwZTQtMDA1NTE0NGQ5YTcyXkEyXkFqcGdeQXVyNzQ4MzcwODk@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'Arnold and his best friend Gerald plan to make a humanitarian video during the summer to win a trip to San Lorenzo, where Arnold\'s parents, Miles and Stella, went right before disappearing years ago. They try to record themselves making a home out of junk for one of their friends, the eccentric Monkeyman, but that backfires as homeless people dismantle it; Arnold leaves heartbroken.<br/>

Helga, who secretly has a long-lasting crush on Arnold, uses recorded footage showing Arnold\'s good deeds over the years to make a video, and everyone in town surprises Arnold with it. Arnold\'s teacher, Mr. Simmons, reveals to everyone that Arnold\'s video won and he, his classmates, and Helga\'s older sister, Olga, get a plane ride to San Lorenzo.
',
 		'https://www.imdb.com/title/tt5257726/',
		'https://en.wikipedia.org/wiki/Hey_Arnold!:_The_Jungle_Movie',		
		'OMAo4feHJ5s'), ".

	//#22
	"(
		'Cinderella the Cat',
		'Alessandro Rak,Ivan Cappiello',
		'Mad Entertainment',
		'September 14, 2017(Italy)',
		'86',
		'Crime/Thriller',
		'Italian',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BY2UzNjdiYTEtMjE4OC00MGQzLWFmYzgtNzcyOTkwYTMxNWNiL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjYxNzY5MjE@._V1_SY1000_SX750_AL_.jpg',
		'Mia\'s father Basile, who owns the ship Megaride, marries Angelica, who has six children. On their wedding day, Basile is killed by Angelica\'s lover. Mia is the only heir to the Megaride and has to fight against the evil plans of her stepmother and her six step-siblings. A brave young man steps forward to try and save Mia.
',
 		'https://www.imdb.com/title/tt5432712/',
		'https://en.wikipedia.org/wiki/Cinderella_the_Cat',		
		'85GJEWYyrPw'), ".

	//#23
	"(
		'Sahara',
		'Pierre Coré',
		'Mandarin Films',
		'February 1, 2017(France)',
		'86',
		'Romance/Adventure',
		'French',
		'5.5',
		'https://m.media-amazon.com/images/M/MV5BY2NmMGY5M2EtYTUxMy00OTY4LTgwYWMtM2YzODdhZTI2Yzc4L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjYxNzY5MjE@._V1_SY1000_CR0,0,734,1000_AL_.jpg',
		'Two clans of snakes cohabit in the desert. Beautiful green serpents that live under the shelter of an oasis, protected and venerated by men and venomous snakes that survive in the sand, dust and heat, hunted and killed by the Tuaregs. Here is the story of Ajar, a young venomous serpent, laughed at by his peers because he still has not done his first molt and that of Eva, rebellious princess of the oasis who wants to escape an arranged marriage. These two will meet and fall in love. Alas, Eva will be kidnapped by the Tuaregs and Ajar, accompanied by his best friend, Pitt the Scorpion, will have to cross the ruthless Sahara to save Eva from the terrible fate awaiting her.',
 		'https://www.imdb.com/title/tt4466894/',
		'https://en.wikipedia.org/wiki/Sahara_(2017_film)',		
		'90EyWL5eTcA'), ".

	//#24
	"(
		'Surf\'s Up 2: WaveMania',
		'Henry Yu',
		'Sony Pictures Animation',
		'January 17, 2017(USA)',
		'84',
		'Sport/Comedy',
		'English',
		'4.6',
		'https://m.media-amazon.com/images/M/MV5BYjJkNjM4ODUtNDJlYy00ZGI1LTk1OTctODc2OWJlNmM1YTM3L2ltYWdlXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_.jpg',
		'Two years after the events of Surf\'s Up, the now 19-year-old northern rockhopper penguin Cody Maverick lives in obscurity on Pen Gu Island, where he teaches children to surf in his own surf school alongside his now-wife, gentoo penguin Lani Aliikai, opposed by his former rival Tank Evans, who also runs his own surf school. As a result of winning the Big Z Memorial, Chicken Joe has become a world-famous surfer, performing in competitions around the world.',
 		'https://www.imdb.com/title/tt5513260/',
		'https://en.wikipedia.org/wiki/Surf%27s_Up_2:_WaveMania',
		'zJarcJEmwgQ'), ".

	//#25
	"(
		'Tad Jones: The Hero Returns',
		'Enrique Gato, David Alonso',
		'Telecinco Cinema',
		'August 25, 2017(Spain)',
		'86',
		'Adventure/Comedy',
		'Spanish',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BMzNjOTkzMTAtZDJmMi00Zjk3LWFjZDEtYzhlYjhkZGI5MjdiXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_SX675_AL_.jpg',
		'Two years later of their first adventure, Tad Jones and Sara Lavrof have separate lives, he as a simple construction worker studying archaeology to graduate, and she as a renowned archaeologist and explorer. After discovering the final clue of the existence of King Midas\' necklace, Sara invites Tad to an exposition in Las Vegas, where he hopes that she accepts turning in his girlfriend. Just before to travel, Tad realizes that the mummy of Paititi has been exiled from the Inca city by help him and he appears on his home, forcing Tad to travel Las Vegas with his dog Jeff and the mummy. But all hopes and dreams of Tad breaks when a millionaire named Jack Rackham kidnaps Sara to force her revealing the location of the three parts of Midas\' necklace. Forming team with Tiffany (Sara\'s scholar), Mummy, the dog Jeff and Belzoni (Sara\'s pet, a grouch and intelligent bird who talks using show-bills), Tad Jones and his friends will travel around the world trying rescue Sara and defeat Rackham ...',
 		'https://www.imdb.com/title/tt3896102/',
		'Not Available',		
		'3NOX6BMFllk'), ".

	//#26
	"(
		'Animal Crackers',
		'Tony Bancroft, Scott Sava',
		'Blue Dream Studios',
		'September 1, 2017(USA)',
		'94',
		'Fantasy/Adventure',
		'English',
		'5.4',
		'https://m.media-amazon.com/images/M/MV5BNDk1MjY1NjQzMV5BMl5BanBnXkFtZTgwNDY1MTY4NDM@._V1_SY1000_SX674_AL_.jpg',
		'Owen Huntington\'s life is one continuous loop of work, eat, and sleep. A loop that keeps him from ever seeing his wife Zoe, or his three-year-old daughter MacKenzie. A loop that is sure to kill him. Then, one day, Owen discovers a long-lost Uncle died, and left his circus to Owen. What could have been a blessing soon unfolds into a curse. The circus is broke. The animals are all gone, and most of the crew are too old to be of any use. It\'s a disaster. But something magical happens. Owen discovers Buffalo Bob\'s secret. A box of Animal Crackers that gives the bearer the ability to become any animal in the box. Suddenly, there\'s hope. If Owen can use the box to become these animals and perform, people will come. He\'ll be rich. But Owen forgot one thing. Buffalo Bob had a brother: Horatio P. Huntington. Owner of the largest chain of circuses in the world, and Horatio would stop at nothing to get his hands on the magical Animal Crackers.',
 		'https://www.imdb.com/title/tt4155534/',
		'https://en.wikipedia.org/wiki/Animal_Crackers_(2017_film)',		
		'6yrtrDjmw5c'), ".

	//#27
	"(
		'Monster Family',
		'Holger Tappe',
		'Ambient Entertainment',
		'24 August 2017(Germany)',
		'96',
		'Horror/Comedy',
		'English',
		'4.8',
		'https://m.media-amazon.com/images/M/MV5BMjIzNzUxMjMzNl5BMl5BanBnXkFtZTgwNzg0MTY2NDM@._V1_SY1000_CR0,0,699,1000_AL_.jpg',
		'Seeking to foster a sense of family, Emma makes a handful of monster costumes for her family - her as a vampire, Frank as Frankenstein\'s monster, Fay as a mummy, and Max as a werewolf - to wear to a monster-themed costume party presented by Cheyenne. Though the family is clearly not in the mood for such an outing, they nevertheless reach their destination. They unexpectedly receive a star treatment only to discover that they have been mistaken for a monster-themed rock-and-roll band that was meant to perform at the party. Security guards deposit the family into the alleyway behind the building, where Emma finally snaps.',
 		'https://www.imdb.com/title/tt6572702/',
		'https://en.wikipedia.org/wiki/Monster_Family',		
		'F5opINLm7NY'), ".

	//#28
	"(
		'The Night Is Short, Walk on Girl',
		'Masaaki Yuasa',
		'Science Saru',
		'April 7, 2017(Japan)',
		'93',
		'Fantasy/Romance',
		'Japanese',
		'7.6',
		'https://m.media-amazon.com/images/M/MV5BZGU0Mjc1ZTctZDdmYi00YzU0LWI4MjctMDM3Y2VjMzkzYmNiXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg',
		'The story of the titular girl known only as \"Otome\" and her insanely long night of partying and drinking-complete with a book fair, festival, and many adventures in between. It is also the story of \"Senpai\", her upper class man who has been attempting to get closer to her by \"coincidentally\" running into her again and again. However, on this night, meeting up with her may be the greatest challenge of his life.',
 		'https://www.imdb.com/title/tt6335734/',
		'https://en.wikipedia.org/wiki/Night_Is_Short,_Walk_On_Girl',		
		'RGHXqjCbyEQ'), ".

	//#29
	"(
		'Fate/Stay Night: Heaven\'s Feel - I. Presage Flower',
		'Tomonori Sudō',
		'ufotable',
		'October 14, 2017(Japan)',
		'120',
		'Drama/Fantasy',
		'Japanese',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BODljMTI0MDQtMTY2Mi00YjljLThhZTItYjc4MWViMWM5M2RiXkEyXkFqcGdeQXVyNjg3MDM4Mzc@._V1_.jpg',
		'Ten years after the Holy Grail War—a battle waged by Masters and Servants over the wish-granting container, the Holy Grail—another war breaks out in Fuyuki City. Shirou Emiya—the adopted son of Kiritsugu Emiya, a participant of the previous Holy Grail War—resolves to fight, carrying out Kiritsugu’s dying wish. There\’s a young girl by Shirou\’s side who\’s in love with him—Sakura Matou. Every morning, she goes to Shirou\’s house to make breakfast and dinner for him, bringing kindness into the life of a boy utterly alone in the world. But once the Holy Grail War starts, there\’s a change in the air in Fuyuki City. Murders abound across the city, and the atmosphere grows ominous. Shirou decides to shelter Sakura in his home. Along with Saber, the Servant he summons, Shirou allies himself with the magus Rin Tohsaka and takes part in the Holy Grail War. But the battle starts to go awry as secret maneuvers by unseen forces are put into play.',
 		'https://www.imdb.com/title/tt4054952/',
		'https://en.wikipedia.org/wiki/Fate/stay_night:_Heaven%27s_Feel_I._presage_flower',		
		'r_sf0-o9tS0'), ".

	//#30
	"(
		'Napping Princess',
		'Kenji Kamiyama',
		'Signal.MD',
		'March 18, 2017(Japan)',
		'111',
		'Drama/Fantasy',
		'Japanese',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BNDcwZjIyMmItY2IzNC00YjQyLThjZTMtNGY5NjJkNTM3ZTY3XkEyXkFqcGdeQXVyNjc2NTgzMzc@._V1_.jpg',
		'Napping Princess takes place in two concurrent settings: a near-future Japan, and Heartland, a fantastical realm. The main character, Kokone Morikawa, has strange dreams of Heartland while taking naps. In these dreams, Heartland is a society entirely revolving around cars; the King\'s castle is a car factory, and his subjects all come to it to make a constant stream of new cars. His daughter, Ancien (who appears as a younger Kokone), has a \"magic tablet\" computer she uses to give life to various machines: notably, a blue toy bear named Joy, and a motorcycle named Heart. The king disapproves of this, however, and orders Ancien confined to her tower. Additionally, the society of Heartland is under threat from a gigantic monster of molten metal called the Colossus. The king builds giant robots to face the Colossus. Ancien, spying a motorcycle-driving subject of the king\'s named Peach, decides to ally with him and seek to defeat the Colossus together with him, while the king\'s chief adviser Bewan plots against the king and Ancien alike. ',
		'https://www.imdb.com/title/tt5731132/',
		'https://en.wikipedia.org/wiki/Napping_Princess',
		'oT6vxe4aoy0'), ".

	//#31
	"(
		'Zombillenium',
		'Arthur de Pins,Alexis Ducord',
		'Maybe Movies',
		'October 18, 2017(France)',
		'78',
		'Fantasy/Comedy',
		'French',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BZTY1YWI5NzEtNTZkMi00ZjNiLTkyNmEtMWJjNDFhNTFjM2QzXkEyXkFqcGdeQXVyMTAzMTE0NTM@._V1_SY1000_CR0,0,734,1000_AL_.jpg',
		'Zombillenium, the Halloween theme park, happens to be the one place on earth where real monsters can hide in plain sight. When Hector, a human, threatens to disclose the true identity of his employees, the Vampire Park Manager has no other choice but to hire him. To see his daughter, Hector must escape from his Zombies and Werewolves coworkers.',
		'https://www.imdb.com/title/tt5313906/',
		'https://en.wikipedia.org/wiki/Zombillenium',
		'fosbwa_zhb8'), ".	
		
	//#32
	"(
		'Bunyan and Babe',
		'Louis Ross',
		'Exodus Film Group',
		'February 3, 2017(USA)',
		'84',
		'Fantasy/Adventure',
		'English',
		'5.0',
		'https://m.media-amazon.com/images/M/MV5BMTU4NzIzMzQ1NF5BMl5BanBnXkFtZTgwMTU4OTQwMTI@._V1_SY1000_SX675_AL_.jpg',
		'Twelve-year-old Travis Barclay and his little sister Whitney are sent begrudgingly on a summer trip to visit their grandparents\' farm in Delbert County. A greedy land developer, Norm Blandsford, has been buying up the little country town, running the hard working residents off their land. After Travis has a run-in with one of Blandsford\'s men, he is chased into the forest, where he stumbles upon a magic portal to the hidden world where Paul Bunyan lives. Paul has been in self-imposed exile for one hundred years, ever since the advent of machines made his role in society obsolete, and left him feeling of little value to the new world. Paul, reluctantly, escorts Travis back to the farm. But upon returning, Paul witnesses Blandsford\'s sinister plan. Suddenly filled by a long-forgotten sense of purpose, Bunyan and Babe, the blue ox, get wrapped up in a brand new adventure, and together with the help of their new friends, Travis and Whitney, they save the town. Together they learn ...',
		'https://www.imdb.com/title/tt0331314/',
		'https://en.wikipedia.org/wiki/Bunyan_and_Babe',
		'y59PLLi5sFg'), ".
			
	//#33
	"(
		'Pokémon the Movie: I Choose You!',
		'Kunihiko Yuyama',
		'OLM, Inc',
		'July 15, 2017(Japan)',
		'112',
		'Fantasy/Action',
		'Japanese',
		'6.4',
		'https://m.media-amazon.com/images/M/MV5BM2U3NmI4YzItYmRiNi00M2UxLWExNTYtNDZkZmJlNzlmM2M3XkEyXkFqcGdeQXVyNDkzMjE0NDE@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'Ash Ketchum wakes up late one morning after having broken his alarm clock in his sleep. He eventually makes it to Professor Oak\'s lab, but is told that the three starter Pokémon (Bulbasaur, Squirtle, and Charmander) have already been taken by Trainers who were on time. However, Oak reveals that he has one more Pokémon, an Electric-type named Pikachu. Despite its volatile and feisty personality, as well as its refusal to get inside a Poké Ball, Ash happily takes Pikachu for his journey.',
		'https://www.imdb.com/title/tt6595896/',
		'https://en.wikipedia.org/wiki/Pok%C3%A9mon_the_Movie:_I_Choose_You!',
		'r12w4iRBLp4'), ".
			
	//#34
	"(
		'Batman vs. Two-Face',
		'Rick Morales',
		'Warner Bros. Animation,DC Entertainment',
		'October 8, 2017(USA)',
		'72',
		'Action/Comedy',
		'English',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BMzI2MzU4NDY2OV5BMl5BanBnXkFtZTgwOTA1OTExMjE@._V1_SY1000_SX750_AL_.jpg',
		'Batman and Robin meet Gotham District Attorney Harvey Dent at a top-secret demonstration hosted by Professor Hugo Strange. With his assistant Dr. Harleen Quinzel, Strange operates a machine called the \"Evil Extractor\" designed to siphon evil from criminals and store it in a vat. Batman scoffs, noting there is no easy path to righteousness, but the machine does work -- too well, as the Joker and other volunteers laugh manically in an attempt to overload the machine. The containment vat explodes, drenching Dent with liquified evil, which scars half his face and changes his personality.<br/>

Harvey, now re-christened Two-Face, embarks on a criminal career as seen in the opening credits, all of which his attempts are foiled by the Dynamic Duo. He is eventually whisked to a hospital where his face has been given reconstructive surgery. His sanity has apparently been restored as well, and he is allowed to resume crimefighting as the assistant to the Assistant District Attorney.',
		'https://www.imdb.com/title/tt2322377/',
		'https://en.wikipedia.org/wiki/Batman_vs._Two-Face',
		'5VD0kfTeznE'), ".
	//#35
	"(
		'A Stork\'s Journey',
		'Toby Genkel',
		'Den Siste Skilling',
		'May 11, 2017(Germany)',
		'85',
		'Fantasy/Adventure',
		'English',
		'5.8',
		'https://m.media-amazon.com/images/M/MV5BMTFhYjJhMzctMWI2NC00ODRiLWE0YmItODBlYWJkNTU4NjgxXkEyXkFqcGdeQXVyOTE2MTYxOQ@@._V1_SX699_CR0,0,699,999_AL_.jpg',
		'Orphaned at birth and raised by storks, the teenage sparrow Richard believes he is one of them. But when the time comes to migrate to Africa, his stork family is forced to reveal his true identity and leave him behind in the forest, since he is not a migratory bird and would not survive the journey. Determined to prove he is a stork after all, Richard ventures south on his own. But only with the help of Olga, an eccentric owl with an imaginary friend and Kiki, a narcissistic, disco-singing parakeet, does he stand a chance to reach his goal and learn to accept who he really is.',
		'https://www.imdb.com/title/tt3823116/',
		'https://en.wikipedia.org/wiki/Richard_the_Stork',
		'rFts6e6PtCQ'), ".
	//#36
	"(
		'The Big Bad Fox and Other Tales...',
		'Benjamin Renner,Patrick Imbert',
		'Folivari',
		'21 June 2017(French)',
		'83',
		'Fantasy/Adventure',
		'French',
		'7.4',
		'https://m.media-amazon.com/images/M/MV5BM2FmMGM0ZjYtZjI4ZC00NzMwLWJlMGItMzIyMGZjMGM1YWQ0XkEyXkFqcGdeQXVyNzI1NzMxNzM@._V1_SY1000_CR0,0,734,1000_AL_.jpg',
		'On the farm, A Stork claims to have a broken wing and leaves a baby that he was to deliver to Avignon, with the name of Pauline, in the hands of a trio of farm animals: a Pig, a Rabbit and a Duck. These last two being immature and clumsy, therefore potentially dangerous for the baby, the Pig tries to compensate for their mistakes so that the little Pauline finds her parents, even if he refuses initially to take care of it. After several clumsy and misunderstanding events, the trio manages to leave Pauline with her family, emotionally saying goodbye to her. Once they get back to the farm, the Pig discovers the Stork was lying to the trio because he\'s too lazy to do his job. The Pig takes this calmly, just so he can put the stork in a catapult and ejecting him away.',
		'https://www.imdb.com/title/tt5851904/',
		'https://en.wikipedia.org/wiki/The_Big_Bad_Fox_and_Other_Tales...',
		'x3QkSzpNGW8'), ".
	//#37
	"(
		'Gnome Alone',
		'Peter Lepeniotis',
		'Vanguard Animation',
		'October 19, 2018(USA)',
		'85',
		'Comedy/Animation',
		'English',
		'5.6',
		'https://m.media-amazon.com/images/M/MV5BZDQ0MTM0Y2UtM2RjMC00OGI5LWI2YTktMDg4NjUwODVkNzFhXkEyXkFqcGdeQXVyNzQ3MTA4MDk@._V1_SY1000_CR0,0,690,1000_AL_.jpg',
		'The film centers on a centuries-old war waged between the grizzled Gnomes who protect earth and the wacky and hungry Troggs determined to consume everything in sight. When the reluctant middle school student Chloe discovers that her new home\'s garden gnomes are not what they seem, she must decide between the pursuit of a desired middle school life or taking up the fight against the Troggs.',
		'https://www.imdb.com/title/tt5851786/',
		'https://en.wikipedia.org/wiki/Gnome_Alone',
		'cAtcc6SXWE0'),".														
	//#38
	"(
		'Resident Evil: Vendetta',
		'Takanori Tsujimoto',
		'Marza Animation Planet',
		'May 27, 2017(Japan)',
		'115',
		'Mystery/Sci-fi',
		'English',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BMTg0OTQ0ODY1N15BMl5BanBnXkFtZTgwNjkxNjI4MTI@._V1_SY1000_CR0,0,664,1000_AL_.jpg',
		'The story is set in between the events of Resident Evil 6 and Resident Evil 7: Biohazard. BSAA agent Chris Redfield is tracking Glenn Arias, a Brazilian-American death merchant and a former CIA operative who is wanted by both the Interpol and FBI. Arias is on a mission of vengeance against the U.S. government for killing his friends and family in a drone strike at his wedding. Chris and his fellow agents infiltrate a mansion in Mexico, to rescue their missing undercover source, Cathy White. Inside the mansion, Chris\'s fellow agents are ambushed by zombies and death traps, with Chris being the sole survivor and barely making it out alive. Chris then comes face-to-face with Arias outside the mansion and is defeated by him in close quarters combat. Arias then reveals that Cathy has become a zombie under his control. As Arias leaves with his associates, Maria and Diego Gomez, the BSAA rescues Chris by slaughtering Cathy and the remaining zombie horde. Meanwhile, Professor Rebecca Chambers, former S.T.A.R.S. unit member and survivor of the Mansion incident, studies a new virus coined the \"Animality Virus\"—\"A-Virus\" for short—that is capable of laying dormant inside any individual until the right trigger is presented. She identifies three components to the virus: the base virus, the triggering virus, and the vaccine. The research labs are attacked by Maria and releases the virus via aerosol form. While her colleagues quickly turn into zombies, Rebecca is able to formulate a vaccine to make herself immune. After fending off some zombies, Rebecca is then rescued by Chris, who briefs her on his mission.',
		'https://www.imdb.com/title/tt5776208/',
		'https://en.wikipedia.org/wiki/Resident_Evil:_Vendetta', 
		'Uw2Styd2RAU'), ".
	//#39
	"(
		'Godzilla: Planet of the Monsters',
		'Kōbun Shizuno',
		'Polygon Pictures',
		'November 17, 2017(Japan)',
		'88',
		'Sci-fi/Action',
		'Japanese',
		'6.0',
		'https://m.media-amazon.com/images/M/MV5BMzc1NjliZDktZjQ0ZS00OTY5LWJkYmItODU0MmQzZGYxNmQ3XkEyXkFqcGdeQXVyNTU1Nzc3NjA@._V1_SY999_CR0,0,706,999_AL_.jpg',
		'The final summer of the 20th century... when mankind learns it is no longer the sole ruler of planet Earth.
The planet is beset by the emergence of colossal creatures that roam the earth, and king among them is \"Godzilla.\" For a half a century, these beasts engage in ferocious battle with each other and mankind. But humans, unable to compete, prepare for exile from their home planet. In the year 2048, a select few humans are chosen by the central government\'s artificial intelligence infrastructure to set out on an interstellar emigration vessel, the Aratrum, on an 11.9-light-year journey for the planet Tau-e in the Cetus constellation. But when they arrive after 20 years of space travel, the remnants of mankind find the environmental conditions on Tau-e to be much different than expected, and basically uninhabitable by humans.
One youth on board the emigration vessel, Haruo, had seen his parents killed by Godzilla before his eyes when he was only 4 years old. Ever since, he has thought of nothing but returning to Earth to defeat Godzilla. With the doors to emigration now closed, Haruo and other crew spearhead a \"return to Earth\" decision despite severely attenuated and hazardous conditions on board for such a long trip back.
Somehow, the Aratrum makes the return journey in one piece, but the home they return to has become an alien planet. 20,000 years have elapsed, and a new ecosystem has emerged atop the food chain. Can mankind take back its native planet? Will Haruo get his revenge?',
		'https://www.imdb.com/title/tt5979874/',
		'https://en.wikipedia.org/wiki/Godzilla:_Planet_of_the_Monsters', 
		'jn2v_FU_qQg'), ".
	//#40
	"(
		'Blame!',
		'Hiroyuki Seshita',
		'Polygon Pictures',
		'May 20, 2017(Japan)',
		'106',
		'Drama/Sci-fi',
		'Japanese',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BNTgxNDI1NzgyNl5BMl5BanBnXkFtZTgwMTgzNTIzMjI@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		'In the distant technological future, civilization has reached its ultimate Net-based form. An \"infection\" in the past caused the automated systems to spiral out of order, resulting in a multi-leveled city structure that replicates itself infinitely in all directions. Now humanity has lost access to the city\'s controls, and is hunted down and purged by the defense system known as the Safeguard. In a tiny corner of the city, a little enclave known as the Electro-Fishers is facing eventual extinction, trapped between the threat of the Safeguard and dwindling food supplies. A girl named Zuru goes on a journey to find food for her village, only to inadvertently cause doom when an observation tower senses her and summons a Safeguard pack to eliminate the threat. With her companions dead and all escape routes blocked, the only thing that can save her now is the sudden arrival of Kiri the Wanderer, on his quest for the Net Terminal Genes, the key to restoring order to the world.',
		'https://www.imdb.com/title/tt6574146/',
		'https://en.wikipedia.org/wiki/Blame!_(film)', 
		'tz5siEX72nY'), ".

	//#41
	"(
		'Deep',
		'Julio Soto Gurpide',
		'The Thinklab',
		'August 25, 2017(USA)',
		'92',
		'Adventure/Comedy',
		'English',
		'4.0',
		'https://m.media-amazon.com/images/M/MV5BMmQ0MWYzZjYtNGFiNS00MjE4LTliODUtMTFhOGIwMzY0ZWFmXkEyXkFqcGdeQXVyNjcwODQ2Nzc@._V1_.jpg',
		'In 2100, when humanity has abandoned the earth, a colony of extravagant creatures still thrives in the deepest abyss of the ocean. Deep, an adventurous \"dumbo\" octopus and the last one of his kind lives there with his two unconditional friends: Evo, a nerdy and clumsy angler fish, and Alice, a neurotic deep-sea shrimp. When an accident destroys their home, the guardian of the abyss, The Kraken, will send Deep and his friends on a perilous journey to find a new home. In their mission, they will be joined by Maura -a voracious moray eel- and together they will travel to amazing places like the submerged city of New York, the Titanic or the Arctic, facing formidable enemies and hilarious situations. Will they be able to bring the oceans back to their former glory?',
		'https://www.imdb.com/title/tt4105584/',
		'https://en.wikipedia.org/wiki/Deep_(2017_film)', 
		'h6BiC0glX_M'), ".	
	//#42
	"(
		'Teen Titans: The Judas Contract',
		'Sam Liu',
		'Warner Bros. Animation,DC Entertainment',
		'March 31, 2017(USA)',
		'84',
		'Fantasy/Sci-fi',
		'English',
		'7.0',
		'https://m.media-amazon.com/images/M/MV5BNGZlODc0YjgtNWZjNS00NGNjLTgwOTUtMTllZTEyYjE0YTMwXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg',
		' Led by Starfire, the Teen Titans - Beast Boy, Raven, Blue Beetle, Robin and the just-returned Nightwing - have built a cohesive team in their never-ending battle against evil but their newest teammate, the mysterious, and powerful, Terra, may be altering that dynamic. Meanwhile, an ancient evil - Brother Blood - has awakened, and familiar foe Deathstroke is lurking in the shadows, both waiting to pounce. Ultimately, the Teen Titans will need to battle their enemies and their own internal doubts to come together and overcome the malicious forces around them in this twisting tale of intrigue, adventure and deception.',
		'https://www.imdb.com/title/tt6315800/',
		'https://en.wikipedia.org/wiki/Teen_Titans:_The_Judas_Contract', 
		'TmpUh7U7Sqk'), ".	
	//#43
	"(
		'Sword Art Online The Movie – Ordinal Scale',
		'Tomohiko Itō',
		'A-1 Pictures ',
		'February 18, 2017(Japan)',
		'119',
		'Fantasy/Sci-fi',
		'Japanese',
		'7.4',
		'https://m.media-amazon.com/images/M/MV5BZGE4M2M2OTYtZDgwMy00NGYwLWE0YTYtYzkyMDFjYWFhN2QzXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,647,1000_AL_.jpg',
		'In 2026, a new machine called the Augma is developed to compete against the NerveGear and its successor, the Amusphere. A next-gen wearable device, the Augma doesn\'t have a full-dive function like its predecessors. Instead, it uses Augmented Reality (AR) to get players into the game. It is safe, user-friendly and lets users play while they are conscious, making it an instant hit on the market. The most popular game on the system is \"Ordinal Scale\" (aka: OS), an ARMMORPG developed exclusively for the Augma. Asuna and the gang have already been playing OS for a while, and soon Kirito decides to join them. However, they\'re about to find out that Ordinal Scale isn\'t all fun and games.',
		'https://www.imdb.com/title/tt5544384/',
		'https://en.wikipedia.org/wiki/Sword_Art_Online_The_Movie:_Ordinal_Scale', 
		'mHLuKPeE0t0'), ".	
	//#44
	"(
		'Starship Troopers: Traitor of Mars',
		'Shinji Aramaki',
		'Sola Digital Arts,Lucent Pictures',
		'August 21, 2017(USA)',
		'100',
		'Sci-fi/Action',
		'English',
		'5.5',
		'https://m.media-amazon.com/images/M/MV5BYzM4OWNlM2UtYjdiMi00MGIxLTg4NzMtZWM2MWViZjMyMzA4XkEyXkFqcGdeQXVyOTg4MDYyNw@@._V1_.jpg',
		'After the events of Invasion, Johnny Rico has been demoted to the rank of colonel and relocated to a Martian space station to train a new batch of troopers. Unfortunately, his squad is incompetent. Mars overall has low support for the war, seeing their planet unaffected by the bug conflict and even suggesting pulling out from the war. Because of their laid back attitude, the denizens of Mars weren\'t ready when the bugs attacked. Unknown to everyone, Sky Marshal Amy Snapp executes her plans for power.',
		'https://www.imdb.com/title/tt6977240/',
		'https://en.wikipedia.org/wiki/Starship_Troopers:_Traitor_of_Mars', 
		'8WP1hUxbNs8'), ".
	//#45
	"(
		'Lego DC Super Hero Girls: Brain Drain',
		'Todd Grimes',
		'DC Entertainment,Warner Bros. Animation',
		'July 25, 2017(digital)',
		'75',
		'Animation',
		'English',
		'5.2',
		'http://www.gstatic.com/tv/thumb/v22vodart/14341548/p14341548_v_v8_ac.jpg',
		'The entire planet is in peril as Wonder Woman, Supergirl and Batgirl have to battle an unknown villain as well as short-term amnesia. The trio thought they all had the same bizarre dream where they witnessed Katana and Bumblebee stealing diamonds. They gave chase, but then they all woke up. Turns out the events didn\'t only happen in their heads, and the three girls slowly started to understand they lost some time—a whole day. Others remember their missing 24 hours. The girls all acted extremely out of character, doing things like uploading an embarrassing video of Harley Quinn without her permission and replacing the school\'s Amethyst with Principal Waller\'s car. Their activities get them expelled. That makes them realize not everything is as it seems and leads them on a chase towards the hidden mastermind behind the plot, Eclipso.',
		'https://www.imdb.com/title/tt7158814/',
		'https://en.wikipedia.org/wiki/Lego_DC_Super_Hero_Girls:_Brain_Drain', 
		'1YDVbiKIeJ4'), ".
	//#46
	"(
		'The Jungle Bunch',
		'David Alaux',
		'TAT Productions',
		'July 26, 2017(France)',
		'97',
		'Fantasy/Adventure',
		'French',
		'5.2',
		'https://m.media-amazon.com/images/M/MV5BMGZmNzdmNmUtZTk4MC00ODliLWI4YjQtNTFkOTI1YTVjZGYxXkEyXkFqcGdeQXVyNzg4MDY0MTc@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Maurice may look like a penguin - but he\'s a real tiger inside! Raised by a tigress, he\'s the clumsiest Kung-Fu master ever. Along with his friends, The Jungle Bunch, he intends to maintain order and justice in the jungle, as his mother did before him. But Igor, an evil koala, wants to destroy the jungle once and for all, helped by his army of silly baboons... The Jungle Bunch - to the rescue.',
		'https://www.imdb.com/title/tt6314690/',
		'https://en.wikipedia.org/wiki/The_Jungle_Bunch_(film)', 
		'jykEhTczfkQ'), ".
	//#47
	"(
		'Condorito: The Movie',
		'Alex Orrelle',
		'Aronnax Studios',
		'October 12, 2017(Spain)',
		'88',
		'Sci-fi/Action',
		'Spanish',
		'5.2',
		'https://m.media-amazon.com/images/M/MV5BNDllZmI3YjgtZDMwNS00ZjkyLWJkNWItOWY3YmJjZTA0MWUzXkEyXkFqcGdeQXVyNTkwMDEyMTY@._V1_SY1000_CR0,0,677,1000_AL_.jpg',
		'Wanting to win the love of Yayita, Condorito sets out on an adventure with his nephew, Coné, to save her mother from an evil alien king who plans to destroy the world.',
		'https://www.imdb.com/title/tt4494382/',
		'https://en.wikipedia.org/wiki/Condorito:_La_Pel%C3%ADcula', 
		'AE2eGfHI47c'), ".
	//#48
	"(
		'Fireworks',
		'Akiyuki Shinbō',
		'Shaft',
		'August 18, 2017(Japan)',
		'90',
		'Drama/Fantasy',
		'Japanese',
		'5.5',
		'https://m.media-amazon.com/images/M/MV5BNTg1NDhkODItMGE0Ny00ZTUwLTgzYzktMGQ3YzNkZjRiNWU5XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'It\'s summer, and Norimichi Shimada and his friends want to know if fireworks look round or flat from the side. They forge a plan to find the answer at Moshimo Festival\'s fireworks display. However, Norimichi finds himself conflicted when his classmate, Nazuna Oikawa, plans to run away from home and wants Norimichi to join her. When things go awry in their attempt to escape, a strange orb in Nazuna\'s possession gives them another chance at staying together.',
		'https://www.imdb.com/title/tt6317962/',
		'https://en.wikipedia.org/wiki/Fireworks_(2017_film)', 
		'KG770hOuT2k'), ".
	//#49
	"(
		'Moomins and the Winter Wonderland',
		'Ira Carpelan',
		'Oy Filmkompaniet Alpha Ab',
		'November 23, 2017(Denmark)',
		'83',
		'Fantasy/Adventure',
		'English',
		'5.5',
		'https://m.media-amazon.com/images/M/MV5BZjY1MzAyMjUtZTJjYi00OGFjLWFjZTItOTdkODZkODZmMDMwXkEyXkFqcGdeQXVyNTYzMjkwNjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'The winter seems extraordinary in Moomin Valley, so Moomintroll decides to stay awake instead of having his typical winter slumber. Moomintroll discovers that strange creatures wander amidst the snowdrifts in the midwinter darkness, and all of the new hints imply that an eccentric guest is soon to arrive. This new guest is called Christmas, and an astounded Moomintroll learns to experience the true meaning of this wonderful holiday.',
		'https://www.imdb.com/title/tt6315872/',
		'Not Available', 
		'uI_hdoZoVpU'), ".
	//#50
	"(
		'Black Butler: Book of the Atlantic',
		'Noriyuki Abe',
		'A-1 Pictures',
		'January 21, 2017(Japan)',
		'100',
		'Fantasy/Adventure',
		'Japanese',
		'7.6',
		'https://m.media-amazon.com/images/M/MV5BNTIzZWUxMmYtMGQzYi00OTY2LTk4N2MtMGQ3N2U1ZTQ3OWYyXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		' Whispers turn into screaming headlines in Earl Ciel Phantomhive\'s morning paper as word of the dead being resurrected takes society by storm. But when the unsavoury details of the business reach Ciel\'s ear, he and his superlative butler, Sebastian, book themselves on a luxury liner to look into these alleged miracles and the \"Aurora Society\" conducting them. As the waters lap and crash all around the vessel, mysterious individuals gather under the banner of the \"Phoenix.\" Ciel and Sebastian may be one step closer to the truth, but have they sealed their fates by conducting an investigation on what could easily become a floating coffin...?',
		'https://www.imdb.com/title/tt5476944/',
		'https://en.wikipedia.org/wiki/Black_Butler:_Book_of_the_Atlantic', 
		'iGqRJGhH0LQ'), ".
	//#51
	"(
		'No Game No Life: Zero',
		'Atsuko Ishizuka',
		'Madhouse',
		'July 15, 2017(Japan)',
		'105',
		'Fantasy/Romance',
		'Japanese',
		'7.5',
		'https://m.media-amazon.com/images/M/MV5BYmM0N2NiMGUtMzBkYy00NTc4LWFkZmEtMWRhZDY1N2NjNWVlXkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_.jpg',
		'In ancient Disboard, Riku is an angry, young warrior intent on saving humanity from the warring Exceed, the sixteen sentient species, fighting to establish the \"One True God\" amongst the Old Deus. In a lawless land, humanity\'s lack of magic and weak bodies have made them easy targets for the other Exceed, leaving the humans on the brink of extinction. One day, however, hope returns to humanity when Riku finds a powerful female Ex-machina, whom he names Schwi, in an abandoned elf city. Exiled from her Cluster because of her research into human emotions, Schwi is convinced that humanity has only survived due to the power of these feelings and is determined to understand the human heart. Forming an unlikely partnership in the midst of the overwhelming chaos, Riku and Schwi must now find the answers to their individual shortcomings in each other, and discover for themselves what it truly means to be human as they fight for their lives together against all odds. Each with a powerful new ally in tow, it is now up to them to prevent the extinction of the human race and establish peace throughout Disboard!',
		'https://www.imdb.com/title/tt5914996/',
		'https://en.wikipedia.org/wiki/No_Game,_No_Life_Zero', 
		'quj8sK3Phh8'), ".	
	//#52
	"(
		'Doraemon the Movie 2017: Great Adventure in the Antarctic Kachi Kochi',
		'Atsushi Takahashi',
		'Shin-Ei Animation',
		'March 4, 2017(Japan)',
		'101',
		'Fantasy/Sci-fi',
		'Japanese',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BY2Q2ZWQ3OWEtOGZhMy00MGM0LTg4YTgtYWVlYjk4ZjgyNjY5XkEyXkFqcGdeQXVyNTQ4NzU1NzI@._V1_SY1000_CR0,0,562,1000_AL_.jpg',
		'Unable to endure the midsummer heat, Doraemon transports Nobita and his friends to a huge iceberg floating in the South Pacific. While creating an amusement parks with the secret tool \"Ice-working Iron\" the group finds a mysterious golden ring in the ice. Upon closer examination, they determine that the ring was buried in Antarctica 100,000 years ago - before people could have lived there. Doraemon and friends head to Antarctica looking for the owner of the ring and come across the ruins of a huge city buried in the ice. Using Doraemon\'s Time Belt, the group travels back 100,000 years ago and meets the young girl Kara who is connected to the mysterious ring. But now the group must fight for survival as Doraemon faces the crisis of the entire Earth freezing.',
		'https://www.imdb.com/title/tt5912470/',
		'https://en.wikipedia.org/wiki/Doraemon_the_Movie_2017:_Great_Adventure_in_the_Antarctic_Kachi_Kochi', 
		'7OrIOF5Up5A'), ".
	//#53
	"(
		'Lu Over the Wall',
		'Masaaki Yuasa',
		'Science Saru',
		'May 19, 2017(Japan)',
		'112',
		'Fantasy/Adventure',
		'Japanese',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BMTgzMTY0MTU4OF5BMl5BanBnXkFtZTgwOTA4OTQxNTM@._V1_.jpg',
		'New kid Kai is talented but adrift, spending his days sulking and isolated in a small fishing village after his family moves from Tokyo. When he demonstrates a proficiency at making music on his synthesizer, his classmates invite him to join their nascent garage band, but their practice sessions soon bring an unexpected guest: Lu, a young mermaid whose fins turn to feet when she hears the beats and whose singing causes humans to compulsively dance - whether they want to or not.',
		'https://www.imdb.com/title/tt6452332/',
		'https://en.wikipedia.org/wiki/Lu_over_the_Wall', 
		'8eN5QnoNhx0'), ".
	//#54
	"(
		'Detective Conan: The Crimson Love Letter',
		'Kobun Shizuno',
		'TMS Entertainment',
		'April 15, 2017(Japan)',
		'112',
		'Mystery/Thriller',
		'Japanese',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BZjg5NDdmNTMtYzM2My00MzUyLTllNWYtNDI1YjhkMWI2MGFhL2ltYWdlXkEyXkFqcGdeQXVyMjExMjk0ODk@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'

    A bombing case at Nichiuri TV in autumn. The Satsuki Cup, which crowns the winner of Japan\'s Hyakunin lsshu, is currently being filmed inside the facility. The incident results in a big commotion and, while the building is burning to ashes, the only people left inside are Heiji and Kazuha. They get rescued just in time by Conan, who rushes to the scene. Both the identity and purposes of the bomber are unknown. While confusion takes over due to the explosion, Conan meets a mysterious beautiful girl who claims she is \"Heiji\'s fiancée\". Her name is Momiji Ooka and she is the Kyoto High School champion of the Karuta game. As fate would have it, Kazuha is going to face Momiji in the Hyakunin Isshu, so she begins to train with the help of Heiji\'s mother, Shizuka, who is skilled Karuta player. At the same time, in a Japanese house in Arashiyama, Kyoto\'s outskirts, the reigning Satsuki Cup champion is murdered. Pictures of the crime scene reveal Momji\'s presence. Additionally, several Karuta cards were spread around the victim. Conan and He along with the Osaka and Kyoto police departments, begin their investigation on the Satsuki Cup and the related murder case. As the inquiry goes on, they come across a secret connected with the Hyakunin lsshu',
		'https://www.imdb.com/title/tt5692622/',
		'https://en.wikipedia.org/wiki/Detective_Conan:_The_Crimson_Love_Letter', 
		'lurG4q_xhEM'), ".	
	//#55
	"(
		'The Irregular at Magic High School The Movie: The Girl Who Calls the Stars',
		'Risako Yoshida',
		'Eight Bit',
		'June 17, 2017(Japan)',
		'90',
		'Fantasy/Sci-fi',
		'Japanese',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BYjQyODE3MDYtNmFiNi00YWJiLTliYTctYjIxNDE2MDBlNjk2XkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg',
		'In the story, the seasons have changed and it will soon be the second spring. Tatsuya and Miyuki have finished their first year at first magic high school and are on their spring break. The two go with their friends to a villa on the Ogasawara Island archipelago. After only a small moment of peace, they find a young girl named Kokoa. She has escaped an experimental lab at the Naval base and the group decides to save her and the others still beholden to the cruel CAD experiments.',
		'https://www.imdb.com/title/tt6580380/',
		'https://en.wikipedia.org/wiki/The_Irregular_at_Magic_High_School_The_Movie:_The_Girl_Who_Calls_the_Stars', 
		'Fi-gYdWi988'), ".	
	//#56
	"(
		'Gekijoban Haikara-san ga Toru Zenpen: Benio, Hana no 17-sai',
		'Kazuhiro Furuhashi',
		'Nippon Animation',
		'November 11, 2017(Japan)',
		'97',
		'Drama/Romance',
		'Japanese',
		'5.3',
		'https://m.media-amazon.com/images/M/MV5BOTE2ZDNlMjAtODg4Mi00Y2Y2LWI3YzEtMmRkNDFiODYzMjRhXkEyXkFqcGdeQXVyMzUzMzgxNA@@._V1_.jpg',
		'The story follows Benio \"Haikara-san\" Hanamura, who lost her mother when she was very young and has been raised by her father, a high-ranking official in the Japanese army. As a result, she has grown into a tomboy—contrary to traditional Japanese notions of femininity, she studies kendo, drinks sake, dresses in often outlandish-looking Western fashions instead of the traditional kimono, and is not as interested in housework as she is in literature. She also rejects the idea of arranged marriages and believes in a woman\'s right to a career and to marry for love.',
 		'https://www.imdb.com/title/tt7058854/',
		'https://en.wikipedia.org/wiki/Haikara-San:_Here_Comes_Miss_Modern',
		'IuSjXWGXLYQ'); ";


mysqli_select_db( $conn, 'ANIMATED_MOVIE' );

if (mysqli_multi_query($conn, $sql)) {
    echo "New data has been inserted";
} else {
    die('Failed to insert: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>

