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
	
$sql = "INSERT INTO 2019_tbl ".
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
		'How to Train Your Dragon: The Hidden World',
		'Dean DeBlois',
		'DreamWorks Animation',
		'February 22, 2019(USA)',
		'104',
		'Fantasy/Action',
		'English',
		'7.5',
		'https://m.media-amazon.com/images/M/MV5BMjIwMDIwNjAyOF5BMl5BanBnXkFtZTgwNDE1MDc2NTM@._V1_SY1000_CR0,0,631,1000_AL_.jpg',
		'The Vikings continue to rescue captured dragons in order to bring them to Berk and its bustling dragon and human utopia. Their efforts have resulted in the island becoming overpopulated with dragons. In a response to the overcrowding, Hiccup desires to find the \"Hidden World\", a safe haven for dragons spoken of by his late father Stoick. Meanwhile Toothless finds his perfect date and that was this Light Fury who was held captive by warlords and she was given to infamous dragon hunter Grimmel the Grisly (Night Fury Killer) as bait for him to capture Toothless himself for the warlords\' use as an alpha. But the Light Fury falls in love with Toothless (Night Fury) and teaches him how to use his power.',
		'https://www.imdb.com/title/tt2386490/',
		'https://en.wikipedia.org/wiki/How_to_Train_Your_Dragon:_The_Hidden_World',
		'SkcucKDrbOI'), ".

	//#2
	"(
		'Frozen 2',
		'Jennifer Lee, Chris Buck',
		'Walt Disney Pictures, Walt Disney Animation Studios',
		'November 22, 2019 (USA)',
		'0',
		'Drama/Fantasy',
		'English',
		'0.0',
		'https://m.media-amazon.com/images/M/MV5BMjA0YjYyZGMtN2U0Ni00YmY4LWJkZTItYTMyMjY3NGYyMTJkXkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_SY1000_SX675_AL_.jpg',
		'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.',
		'https://www.imdb.com/title/tt4520988/',
		'https://en.wikipedia.org/wiki/Frozen_2',
		'bwzLiQZDw2I'), ".

	
	//#3
	"(
		'Toy Story 4',
		'Josh Cooley',
		'Walt Disney Pictures, Pixar Animation Studios',
		'June 15, 2018(USA)',
		'100',
		'Fantasy/Adventure',
		'English',
		'8.0',
		'https://m.media-amazon.com/images/M/MV5BMTYzMDM4NzkxOV5BMl5BanBnXkFtZTgwNzM1Mzg2NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Nine years earlier, after the events of Toy Story 2 and prior to the events of Toy Story 3, Bo Peep and Woody are trying to rescue RC, Andy\'s remote controlled car. Just as they finish the rescue, Bo is donated to a new owner. Woody considers going with her, but remains with Andy. Years later, a teenage Andy donates them to Bonnie, a younger child. While the toys are grateful to have a new child, Woody struggles with accepting that Bonnie does not love him like Andy did.<br/>

On the day of Bonnie\'s kindergarten orientation, Woody sneaks into her backpack and goes with her. After a classmate takes away Bonnie\'s arts and crafts supplies, Woody covertly recovers materials from the trash, including a spork. Bonnie turns the spork into a handmade toy she names Forky. Forky comes to life and begins to experience an existential crisis, considering himself to be trash rather than a toy. As Forky becomes Bonnie\'s favorite toy, Woody takes it upon himself to prevent Forky from throwing himself away.<br/>

When Bonnie\'s family goes on a road trip, Forky jumps out of the RV window and Woody pursues him. After Woody explains to him how important he is to Bonnie, Forky decides to return to her. Near the RV park where Bonnie\'s family is staying, Woody spots Bo Peep\'s lamp in an antique store window and goes inside to find her. Inside, he and Forky encounter a talking doll, Gabby Gabby, who desires Woody\'s voice box to replace her broken one. Woody escapes from the ventriloquist dummies, but Gabby Gabby captures Forky. At a playground, Woody reunites with Bo and her sheep Billy, Goat and Gruff, who now live as \"lost\" toys. Bo agrees to help Woody save Forky and get back to Bonnie.',
 		'https://www.imdb.com/title/tt1979376/',
		'https://en.wikipedia.org/wiki/Toy_Story_4',
		'wmiIUN-7qhE'), ".

	//#4
	"(
		'Spies in Disguise',
		'Nick Bruno,Troy Quane',
		'20th Century Fox Animation',
		'December 25, 2019(USA)',
		'110',
		'Sci-fi/Action',
		'English',
		'0.0',
		'https://m.media-amazon.com/images/M/MV5BNzg1MzM3OWUtNjgzZC00NjMzLWE1NzAtOThiMDgyMjhhZDBhXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_SY1000_SX675_AL_.jpg',
		'Super spy Lance Sterling and scientist Walter Beckett are almost exact opposites. Lance is smooth, suave and debonair. Walter is not. But what Walter lacks in social skills he makes up for in smarts and invention, creating the awesome gadgets Lance uses on his epic missions. But when events take an unexpected turn, Walter and Lance suddenly have to rely on each other in a whole new way. And if this odd couple can\'t learn to work as a team, the whole world is in peril.',
 		'https://www.imdb.com/title/tt5814534/',
		'https://en.wikipedia.org/wiki/Spies_in_Disguise',
		'LSSGHvzMY60'), ".				
		

	//#5
	"(
		'Missing Link',
		'Chris Butler',
		'Annapurna Pictures',
		'April 12, 2019(USA)',
		'94',
		'Fantasy/Adventure',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BMWFmNWZmZWYtMWM3OC00YTYyLWIxNDMtOTRjNzhiYWQ0MDIwXkEyXkFqcGdeQXVyODk2NDQ3MTA@._V1_SY999_CR0,0,672,999_AL_.jpg',
		'Mavis surprises Dracula with a family voyage on a luxury Monster Cruise Ship so he can take a vacation from providing everyone else\'s vacation at the hotel. The rest of Drac\'s Pack cannot resist going along. But once they leave port, romance arises when Dracula meets the mysterious ship Captain, Ericka. Now it\'s Mavis\' turn to play the overprotective parent, keeping her dad and Ericka apart. Little do they know that his \"too good to be true\" love interest is actually a descendant of Abraham Van Helsing, ancient nemesis to Dracula and all other monsters.',
 		'https://www.imdb.com/title/tt6348138/',
		'https://en.wikipedia.org/wiki/Missing_Link_(2019_film)',
		'vM5VC7nCv_Y'), ".	

	//#6
	"(
		'UglyDolls',
		'Kelly Asbury',
		'STX Family, Reel FX Animation Studios',
		'May 3, 2019(USA)',
		'87',
		'Fantasy/Adventure',
		'English',
		'4.8',
		'https://m.media-amazon.com/images/M/MV5BMTc0NjE2ODM2OV5BMl5BanBnXkFtZTgwMjQyNDUzNzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'In the adorably different town of Uglyville, weirdness is celebrated, strangeness is special and beauty is embraced as more than meets the eye. After traveling to the other side of a mountain, Moxy and her UglyDoll friends discover Perfection -- a town where more conventional dolls receive training before entering the real world to find the love of a child. Soon, the UglyDolls learn what it means to be different -- ultimately realizing that they don\'t have to be perfect to be amazing.',
 		'https://www.imdb.com/title/tt1946502/',
		'https://en.wikipedia.org/wiki/UglyDolls',
		'7-VGKtQbS24'), ".

	//#7
	"(
		'The Lion King',
		'Jon Favreau',
		'Walt Disney Pictures',
		'July 19, 2019(USA)',
		'118',
		'Drama/Adventure',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMjIwMjE1Nzc4NV5BMl5BanBnXkFtZTgwNDg4OTA1NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Simba idolizes his father, King Mufasa, and takes to heart his own royal destiny on the plains of Africa. But not everyone in the kingdom celebrates the new cub\'s arrival. Scar, Mufasa\'s brother -- and former heir to the throne -- has plans of his own. The battle for Pride Rock is soon ravaged with betrayal, tragedy and drama, ultimately resulting in Simba\'s exile. Now, with help from a curious pair of newfound friends, Simba must figure out how to grow up and take back what is rightfully his.',
		'https://www.imdb.com/title/tt6105098/',
		'https://en.wikipedia.org/wiki/The_Lion_King_(2019_film)',
		'7TavVZMewpY'), ".

	//#8
	"(
		'Reign of the Supermen',
		'Sam Liu',
		'Warner Bros. Animation, DC Entertainment',
		'January 10, 2019(USA)',
		'87',
		'Fantasy/Sci-fi',
		'English',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BYTY0OGIxNDMtNzIwZi00NTFmLThhYzUtYzUzYzc5ZjYwMThjXkEyXkFqcGdeQXVyNzU3NjUxMzE@._V1_.jpg',
		'Six months following Superman\'s death after defeating Doomsday, four new versions of the hero appear: Superboy, Steel, Cyborg Superman, and the Eradicator. Each one of them is different in their personalities and crime-fighting style compared to Superman, leaving the world questioning which one is the true Superman. Lois Lane, still reeling from Clark\'s death, decides to investigate. Lex Luthor holds a press conference introducing Superboy as the true Superman, sponsored and bankrolled by LexCorp. Lois attends the conference, along with Steel, and sneaks inside one of the labs inside LexCorp. There, Lois learns from scientist Dabney Donovan that Superboy is a clone of Superman. Suddenly, the conference is attacked by the Eradicator, who seeks to \"eradicate\" Luthor. Superboy and later Steel try to stop him, only to be defeated until the timely arrival of Cyborg Superman, who fights and drives away Eradicator. Many see him as the real Superman, angering Luthor. Lois writes an expose revealing Superboy to be a clone and asking if all of the Supermen are fakes. This leads to a meeting between her and Cyborg Superman, telling him she knows he isn\'t the Superman she knew and loved. ',
		'https://www.imdb.com/title/tt7167686/',
		'https://en.wikipedia.org/wiki/Reign_of_the_Supermen_(film)',
		'HlC7veaQizk'), ".
		

	//#9
	"(
		'Playmobil: The Movie',
		'Lino DiSalvo',
		'Method Animation, DMG Entertainment',
		'August 30, 2019(USA)',
		'99',
		'Fantasy/Adventure',
		'English',
		'4.6',
		'https://m.media-amazon.com/images/M/MV5BM2IwMDE2YzgtMDI2MC00N2UwLTlhMWMtOTY2Nzk5YWViNDIyXkEyXkFqcGdeQXVyODIyOTEyMzY@._V1_SY1000_CR0,0,734,1000_AL_.jpg',
		'Marla is a young spirit-free girl who dreams of traveling the world but her plans are postponed after receiving the news that her parents have died in a car accident.Four years later, Marla has grown up to take care of her younger brother Charlie, who is lonely since the death of his parents. Charlie sneaks out on Marla to visit a toy museum with a Playmobil exhibit. After Marla arrives and scolds Charlie for running away, a lighthouse illuminates and begins levitating the exhibits figurines. They are transported into a Playmobil universe.
Marla and Charlie find themselves in the middle of a Viking battle, to which Charlie joins until he is kidnapped by some pirates and mysteriously disappear. Disappointed, Marla goes to the nearest town hoping to ask for help. Unable to get, Marla runs into Del, the driver of a food truck, whose client refuses to pay him over pink hay that causes the town\'s horses to sprout wings. As Marla tries to form a posse to find Charlie, Del gets her out of trouble when she shows Viking gold to the whole town. He agrees to help Marla find her brother for the gold.<br/>

Elsewhere, Charlie is taken to a city called Constantinopolis, where he and other characters are caged and presented by Emperor Maximus who intends them to fight to death. Charlie and the rest of the characters attempt to escape by retrieving the ship of one of the prisoners, but backfires.
Meanwhile, Marla and Del run into Rex Dasher, a secret agent and an old friend of Del. Rex explains that a number of characters have disappeared including Charlie. They sneak into a villainous spy headquarters to find information about Charlie\'s disappearance. Despite some issues, they successfully gather the data. The three depart until Rex is captured by the pirates as well. He is taken away to Constantinopolis and meets Charlie, who tells him that Marla has been looking for him. Filled with hope, Charlie breaks away from their imprisonment and lets the rest of the characters run away as he decides to get taken by the guards.',
		'https://www.imdb.com/title/tt4199898/',
		'https://en.wikipedia.org/wiki/Playmobil:_The_Movie', 
		'xgyP9GG9Ecw'), ".

	//#10
	"(
		'Aladdin',
		'Guy Ritchie',
		'Walt Disney Pictures',
		'May 24, 2019(USA)',
		'128',
		'Fantasy/Romance',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMjQ2ODIyMjY4MF5BMl5BanBnXkFtZTgwNzY4ODI2NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'A young kindly street thief named Aladdin finds his world turned upside down when he falls in love with a beautiful young girl, who in reality is the gorgeous Princess Jasmine. As Aladdin is determined to win her heart, he comes across a mysterious oil lamp, which holds a powerful genie, who may be the key to making his dreams come true. As the duo becomes close friends, they soon find out that the lamp is also being sought by the wily Jafar, who intends to use the lamp in an evil plot to take over the kingdom and wage war on the neighboring towns.',
		'https://www.imdb.com/title/tt6139732/',
		'https://en.wikipedia.org/wiki/Aladdin_(2019_film)', 
		'foyufD52aog'), ".

	//#11
	"(
		'Abominable',
		'Jill Culton',
		'DreamWorks Animation',
		'September 27, 2019(USA)',
		'97',
		'Fantasy/Adventure',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BMTYzY2U0NjctNDJkNS00MmE3LWFiZGQtZjllZTIzYTQ4ODJkXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SY1000_CR0,0,631,1000_AL_.jpg',
		'When a teenager named Yi encounters a young Yeti on the roof of her apartment building in Shanghai, she and her mischievous friends Jin and Peng name him \“Everest\” and embark on an epic quest to reunite the magical creature with his family at Mount Everest. But the trio of friends will have to stay one-step ahead of Burnish and Dr. Zara to help Everest get home. ',
		'https://www.imdb.com/title/tt6324278/',
		'https://en.wikipedia.org/wiki/Abominable_(2019_film)', 
		'Ap0NRJD-2ts'), ".
	
	//#12
	"(
		'The Addams Family',
		'Conrad Vernon, Greg Tiernan',
		'Metro-Goldwyn-Mayer',
		'October 11,2019(Spain)',
		'87',
		'Fantasy/Horror',
		'English',
		'5.9',
		'https://m.media-amazon.com/images/M/MV5BODBjOTAzZmMtNGJkOC00M2M3LWI1MTctZjZlMzdiODBkMzc0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Members of the mysterious and spooky Addams family -- Gomez, Morticia, Pugsley, Wednesday, Uncle Fester and Grandma -- are readily preparing for a visit from their even creepier relatives. But trouble soon arises when shady TV personality Margaux Needler realizes that the Addams\' eerie hilltop mansion is standing in the way of her dream to sell all the houses in the neighborhood.',
		'https://www.imdb.com/title/tt1620981/',
		'https://en.wikipedia.org/wiki/The_Addams_Family_(2019_film)', 
		'xFCrR3Uw6Mk'), ".

	//#13
	"(
		'The Lego Movie 2: The Second Part',
		'Mike Mitchell',
		'Warner Animation Group',
		'February 8, 2019(USA)',
		'107',
		'Fantasy/Sci-fi',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BMTkyOTkwNDc1N15BMl5BanBnXkFtZTgwNzkyMzk3NjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'The citizens of Bricksburg face a dangerous new threat when LEGO DUPLO invaders from outer space start to wreck everything in their path. The battle to defeat the enemy and restore harmony to the LEGO universe takes Emmet, Lucy, Batman and the rest of their friends to faraway, unexplored worlds that test their courage and creativity.',
		'https://www.imdb.com/title/tt3513498/',
		'https://en.wikipedia.org/wiki/The_Lego_Movie_2:_The_Second_Part', 
		'cksYkEzUa7k'), ".

	//#14
	"(
		'The Secret Life of Pets 2',
		'Chris Renaud',
		'Universal Pictures, Illumination',
		'June 7, 2019(USA)',
		'86',
		'Adventure/Comedy',
		'English',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BMzdlMWQzZmItMDA5Ny00MGFjLTk0MDAtYjgzMmMyNTEwMzdhXkEyXkFqcGdeQXVyODQzNTE3ODc@._V1_SY1000_CR0,0,631,1000_AL_.jpg',
		'After adopting the oversized and dishevelled stray dog, Duke, in The Secret Life of Pets (2016), pampered Max\'s beloved owner, Katie, brings home yet another perfect stranger: the dangerous little creature humans call a baby. However, as an unexpected bond between boy and dog timidly forms, Max finds himself consumed with worry about the defenceless child\'s safety. Now, the insecure and overprotective dog-dad needs to learn how to be less controlling with the aid of the tough shepherd dog, Rooster, as Snowball, the heroic bunny, and Daisy, the feisty Shih Tzu, join forces to rescue a white tiger cub from the clutches of a ruthless circus owner. Of course, Gidget, the fuzzy Pomeranian, too, has her work cut out for her to retrieve a precious object. Will things work out for the best?',
		'https://www.imdb.com/title/tt5113040/',
		'https://en.wikipedia.org/wiki/The_Secret_Life_of_Pets_2', 
		'mYocfuqu2A8'), ".

	//#15
	"(
		'Shaun the Sheep: Farmageddon',
		'Will Becher,Richard Phelan',
		'Aardman Animations',
		'October 18, 2019(UK)',
		'87',
		'Sci-fi/Adventure',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BNTdjZjBkMDMtODBlNi00N2E0LWE1OGItOTgxODNmMDkzNGJmXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'When Lu-La, an impish and adorable alien with amazing powers crash lands near the farm, Shaun soon sees an opportunity for alien powered fun and adventure, setting off on a mission to send the intergalactic visitor home before a sinister Men in black style organization can capture her. Can Shaun, Bitzer and the flock avert Farmageddon on Mossy Bottom Farm before it\'s too late? ',
		'https://www.imdb.com/title/tt6193408/',
		'https://en.wikipedia.org/wiki/A_Shaun_the_Sheep_Movie:_Farmageddon', 
		'SvmRUuM1M7I'), ".
	
	//#16
	"(
		'The Angry Birds Movie 2',
		'Thurop Van Orman',
		'Columbia Pictures, Rovio Animation, Sony Pictures Animation',
		'August 14, 2019(USA)',
		'96',
		'Action/Adventure',
		'English',
		'6.4',
		'https://m.media-amazon.com/images/M/MV5BYzdkNGJhNzQtMjY1OC00MDI3LTk0ZDUtNzU0MGZiY2YwZGUxXkEyXkFqcGdeQXVyNzMxNjQxMTk@._V1_.jpg',
		'After saving Bird Island from an all-out green-pig invasion in The Angry Birds Movie (2016), the isle\'s always cranky local hero, Red, still finds himself doing battle with Pig Island. As the prank war between pigs and birds is raging, massive icy projectiles coming from the feathery tyrant Zeta\'s ice-capped Eagle Island threaten the security of both havens, unless Red and King Leonard agree to form a difficult but honest truce. Now, Red, Bomb, Mighty Eagle, Chuck, and his brilliant sister, Silver, have to join forces with Leonard\'s mighty porcine team to thwart the megalomaniac Zeta\'s bold schemes for world domination. However, is Red capable of change? ',
 		'https://www.imdb.com/title/tt6095472/',
		'https://en.wikipedia.org/wiki/The_Angry_Birds_Movie_2', 	
		'egDqXpwKwnk'), ".			
		
	//#17
	"(
		'Arctic Dogs',
		'Aaron Woodley',
		'AMBI Group, AIC Studios',
		'November 1, 2019(USA)',
		'93',
		'Adventure/Comedy',
		'English',
		'0.0',
		'https://m.media-amazon.com/images/M/MV5BNTY1OTQyM2YtM2ZjOC00OWQwLTkzM2YtZjAyOGZkYjlhNWFhXkEyXkFqcGdeQXVyMTk5MzE1MTY@._V1_SY1000_SX675_AL_.jpg',
		'Swifty the Arctic Fox works in the mailroom of the Arctic Blast Delivery Service, but he has much bigger dreams. He yearns to become a Top Dog, the Arctic\'s star husky couriers. To prove he can do it, he commandeers one of the sleds and delivers a mysterious package to a secret location. Once there, he stumbles on a hidden fortress overseen by the nefarious Otto Von Walrus. The blubbery evil genius commands an army of oddly polite puffin henchmen. Swifty discovers Otto Von Walrus\' villainous plan to drill beneath the snow-packed surface to unleash masses of ancient gas to melt the Arctic and become the world\'s supreme ruler. To stop this sinister scheme, Swifty enlists the help of his friends: PB, a neurotic polar bear, Lemmy, a scatterbrained albatross, Jade Fox, a brainy engineer, Leopold and Bertha, two conspiracy theorist otters and Magda, his curmudgeonly boss. ',
		'https://www.imdb.com/title/tt4426464/',
		'https://en.wikipedia.org/wiki/Arctic_Dogs',
		'_2Wn0mwoJJA'), ".

	//#18
	"(
		'Weathering with You',
		'Makoto Shinkai',
		'CoMix Wave Films, Story Inc',
		'July 19, 2019(Japan)',
		'114',
		'Fantasy/Romance',
		'Japanese',
		'7.8',
		'https://m.media-amazon.com/images/M/MV5BNDNhN2MwMjktMzE4NS00ODljLTgxZjktZDJlYzdhYzFlYjBhXkEyXkFqcGdeQXVyNzE5ODMwNzI@._V1_SY1000_CR0,0,684,1000_AL_.jpg',
		'High school freshman Hodaka Morishima leaves his home on an isolated island and moves to Tokyo, but he immediately becomes broke. He lives his days in isolation, but finally finds a job as a writer for a shady occult magazine. After he starts his job, the weather has been rainy day after day. Then one day in a alley of the crowded and busy city, Hodaka meets a young girl named Hina Amano. Due to certain circumstances, Hina and her younger brother live together, but have a cheerful and sturdy life. This bright and strong­willed girl possesses a strange and wonderful ability: the power to stop the rain and clear the sky.',
		'https://www.imdb.com/title/tt9426210/',
		'https://en.wikipedia.org/wiki/Weathering_with_You',
		'Q6iK6DjV_iE'), ".
	
	//#19
	"(
		'Klaus',
		'Sergio Pablos',
		'Sergio Pablos Animation Studios',
		'November 8, 2019(USA)',
		'0',
		'Adventure/Fantasy',
		'English',
		'0.0',
		'https://m.media-amazon.com/images/M/MV5BMWYwOThjM2ItZGYxNy00NTQwLWFlZWEtM2MzM2Q5MmY3NDU5XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'When Jesper distinguishes himself as the postal academy\’s worst student, he is stationed on a frozen island above the Arctic Circle, where the feuding locals hardly exchange words let alone letters. Jesper is about to give up when he finds an ally in local teacher Alva, and discovers Klaus, a mysterious carpenter who lives alone in a cabin full of handmade toys. These unlikely friendships return laughter to Smeerensburg, forging a new legacy of generous neighbors, magical lore and stockings hung by the chimney with care. ',
 		'https://www.imdb.com/title/tt4729430/',
		'https://en.wikipedia.org/wiki/Klaus_(film)',		
		'YotjrZbrAPM'), ".

	//#20
	"(
		'Batman: Hush',
		'Justin Copeland',
		'Warner Bros. Animation',
		'July 20, 2019(Germany)',
		'81',
		'Thriller/Mystery',
		'English',
		'7.0',
		'https://m.media-amazon.com/images/M/MV5BOWRjZWM4YmYtNDZjMi00YmMwLTk0ZmUtZmIyZTI0YjAxMGNiXkEyXkFqcGdeQXVyNzI1NzMxNzM@._V1_SY1000_CR0,0,788,1000_AL_.jpg',
		'Bruce Wayne is attending an evening party where he meets Selina Kyle and his childhood friend and renowned brain surgeon Thomas Elliot. There, he receives an alert from Alfred about a child kidnapping by Bane. After a brief fight, Batman is informed by Lady Shiva who tells him an unknown intruder has used the Lazarus Pit and asks for his assistance in identifying them. Batman rescues the child, but Catwoman steals the ransom money. As Batman is in pursuit of her, a mysterious figure shoots his grapple line and he falls to the ground, fracturing his skull. He is nearly killed by a group of nearby criminals until he is saved by Catwoman and Batgirl. Catwoman delivers the ransom money to Poison Ivy, who is controlling her through a hypnotic kiss. ',
 		'https://www.imdb.com/title/tt8752440/',
		'https://en.wikipedia.org/wiki/Batman:_Hush_(film)',		
		'cQFFnUg0u70'), ".

	//#21
	"(
		'Batman vs. Teenage Mutant Ninja Turtles',
		'Jake Castorena',
		'Warner Bros. Animation, DC Entertainment',
		'March 31, 2019(USA)',
		'84',
		'Action/Superhero',
		'English',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BNzk3MGZlYWQtNDU4Ny00Y2I5LTk2YmItM2QxYjFiMjM0ZmQxXkEyXkFqcGdeQXVyNDUzMTkzMDI@._V1_.jpg',
		'While touring at Powers Industrial, Barbara Gordon witnesses a powerful generator being stolen by the Foot Clan and also spots four mysterious creatures during the robbery that she believes are metahumans. She informs Batman, who fights the Foot Clan at Wayne Enterprises before he is defeated by the Shredder. The four metas Batgirl spoke of are actually the Teenage Mutant Ninja Turtles, who have arrived in Gotham to stop Shredder\'s schemes and find out who his new ally is. After defending Wayne Enterprises from the Penguin, the Turtles meet Batman in an alley and proceed to fight as both sides believe the other is working with the Shredder. The Turtles are forced to retreat when Batman proves more experienced in combat.',
 		'https://www.imdb.com/title/tt9775360/',
		'https://en.wikipedia.org/wiki/Batman_vs._Teenage_Mutant_Ninja_Turtles',		
		'wpZPPrnEd_k'), ".

	//#22
	"(
		'Pokémon Detective Pikachu',
		'Rob Letterman',
		'Legendary Pictures',
		'May 10, 2019(USA)',
		'104',
		'Fantasy/Mystery',
		'English',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BNDU4Mzc3NzE5NV5BMl5BanBnXkFtZTgwMzE1NzI1NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'The story begins when ace detective Harry Goodman goes mysteriously missing, prompting his 21-year-old son Tim to find out what happened. Aiding in the investigation is Harry\'s former Pokémon partner, Detective Pikachu: a hilariously wise-cracking, adorable super-sleuth who is a puzzlement even to himself. Finding that they are uniquely equipped to communicate with one another, Tim and Pikachu join forces on a thrilling adventure to unravel the tangled mystery. Chasing clues together through the neon-lit streets of Ryme City--a sprawling, modern metropolis where humans and Pokémon live side by side in a hyper-realistic live-action world--they encounter a diverse cast of Pokémon characters and uncover a shocking plot that could destroy this peaceful co-existence and threaten the whole Pokémon universe.',
 		'https://www.imdb.com/title/tt5884052/',
		'https://en.wikipedia.org/wiki/Detective_Pikachu_(film)',		
		'1roy4o4tqQM'), ".

	//#23
	"(
		'Ne Zha',
		'Jiaozi',
		'Chengdu Coco Cartoon',
		'11 July 2019(China)',
		'110',
		'Fantasy/Sci-fi',
		'Mandarin',
		'7.8',
		'https://m.media-amazon.com/images/M/MV5BNGI1NjcwNWEtOGVkZC00OTVkLWE3ZGItZGQwNThkMTdiZTk2XkEyXkFqcGdeQXVyOTE4NzcwNzI@._V1_SY1000_CR0,0,714,1000_AL_.jpg',
		'A Chaos Pearl, birthed from primordial essences, began to siphon energies gluttonously. Tianzun dispatched his disciples Taiyi Zhenren, a portly Taoist immortal riding on a flying pig steed and Shen Gongbao to subdue the sentient pearl. Due to its ability to absorb energy, Taiyi and Shen\'s are unable to gain the upper hand. Eventually Yuanshi Tianzun contains the Chaos Pearl in his heavenly stove, separating the pearl into two opposite components: the Spirit Pearl and the Demon Orb. Tianzun places a heavenly curse upon the Demon Orb: in three years time it will be destroyed by a powerful lightning strike. Tianzun then instructs Taiyi to take the Spirit Pearl to be reincarnated as the third son of Li Jing, to be named Ne Zha.<br/>

Shen conspires to steal the Spirit Pearl and in the ensuing battle, the Demon Orb is placed on the ritual altar instead, causing Li Jing\'s pregnant wife Lady Yin to give birth to a child, Ne Zha, whose demonic nature is apparent. Ne Zha\'s parents refuse to allow their son to be killed. Taiyi tells them that Ne Zha\'s fate is sealed: in three years\' time the heavenly curse placed upon the Demonic Orb will kill him regardless. Li travels to Heaven with Taiyi in an attempt to plead for Ne Zha\'s life, but is told that the curse is unremovable. ',
 		'https://www.imdb.com/title/tt10627720/',
		'https://en.wikipedia.org/wiki/Ne_Zha_(2019_film)',		
		'xdOgym7MLAU'), ".

	//#24
	"(
		'The Queen\'s Corgi',
		'Ben Stassen,Vincent Kesteloot',
		'Belga Productions',
		'February 14, 2019(Italy)',
		'85',
		'Comedy/Animation',
		'English',
		'4.8',
		'https://m.media-amazon.com/images/M/MV5BZmQzNzZkZmEtYzhjMS00Y2RjLWE3MmYtZmU2MjlkMDU2ODRhXkEyXkFqcGdeQXVyMjQ3NzUxOTM@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		'Rex is the Queen\'s favourite corgi and lives with his three other corgi companions a life of luxury at the Buckingham Palace. On a visit made by President Donald Trump with his wife Melania Trump and their own (fictional) dog Mitzi, the Queen suggests that perhaps one of her corgis might prove to be a suitable mate for Mitzi, who chooses Rex, who is not pleased at all at the prospect of marrying Mitzi. After Rex evades her multiple times, Mitzi eventually chases him into the dining hall where he accidentally bites the president, deeply angering the Queen.<br/>

Rex, feeling ashamed of having embarrassed the Queen, is consoled by Charlie, another of the Queen\'s corgis who is secretly jealous of Rex\'s position. Luring him outside the palace with the false promise that the pope in the Vatican is looking for dogs, Charlie disposes Rex\'s collar and Rex leaves the palace, Charlie then leads Rex into a river with the intention of drowning him. ',
 		'https://www.imdb.com/title/tt6563576/',
		'https://en.wikipedia.org/wiki/The_Queen%27s_Corgi',
		'-aZ7y1Rz2_M'), ".

	//#25
	"(
		'The Big Trip',
		'Natalia Nilova',
		'Licensing Brands',
		'April 12, 2019(Turkey)',
		'75',
		'Adventure/Comedy',
		'English',
		'5.3',
		'https://m.media-amazon.com/images/M/MV5BOGM2ZWI0YWUtNTU4Yy00YWUzLWI1NmItZjBmZGI4ODU1Zjg5XkEyXkFqcGdeQXVyMjExNjkyNTQ@._V1_.jpg',
		'A goofy stork mistakenly delivers a baby panda to the wrong door. A bear, a moose, a tiger and a rabbit set on an arduous but fun filled adventure through wilderness to return the panda to its rightful home.',
 		'https://www.imdb.com/title/tt7403614/',
		'Not Available',		
		'ccGGKvVd6Wg'), ".

	//#26
	"(
		'I Lost My Body',
		'Jérémy Clapin',
		'Xilam',
		'November 15, 2019(USA)',
		'81',
		'Drama/Fantasy',
		'English',
		'7.6',
		'https://m.media-amazon.com/images/M/MV5BZmRhYjIwNmItNzg2Ny00MWMwLWIyMTItMmZkYmM0ODEwOTEyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg',
		'In a Parisian laboratory, a severed hand escapes its unhappy fate and sets out to reconnect with its body. During a hair-raising escapade across the city, the extremity fends off pigeons and rats alike to reunite with pizza boy Naoufel. Its memories of Naoufel and his love for librarian Gabrielle may provide answers about what caused the hand\'s separation, and a poetic backdrop for a possible reunion between the three. Based on Guillaume Laurant\'s novel \"Happy Hand\".',
 		'https://www.imdb.com/title/tt9806192/',
		'https://en.wikipedia.org/wiki/I_Lost_My_Body',		
		'7EotTxCNtsA'), ".

	//#27
	"(
		'White Snake',
		'Amp Wong,Zhao Ji',
		'Light Chaser Animation',
		'January 11, 2019(China)',
		'99',
		'Fantasy/Romance',
		'Mandarin',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BMDJiMzRkOGEtYWFkYi00NjczLWFlYjQtN2E3OGFhYWY1ZDE2XkEyXkFqcGdeQXVyMjAyOTY3OTY@._V1_.jpg',
		'As a young boy, Xu-Xian is forced to free his pet, a small snake. Unbeknownst to him, the snake is actually a young snake goddess named Bai-Niang and she is in love with him. Many years later, when they are both adults, the princess is magically transformed into a human and sets out to find her love. But the local wizard believes her to be a vampire, and banishes Xu-Xian from the village in order to save him. Xu-Xian\'s pet pandas Panda and Mimi set out to save him and bring him, in the process becoming leaders of an animal gang.',
 		'https://www.imdb.com/title/tt9288776/',
		'https://en.wikipedia.org/wiki/White_Snake_(film)',		
		'k1olZ3xLdz4'), ".

	//#28
	"(
		'Children of the Sea',
		'Ayumu Watanabe',
		'Studio 4 °C',
		'May 19, 2019(Japan)',
		'111',
		'Fantasy/Adventure',
		'Japanese',
		'6.5',
		'https://m.media-amazon.com/images/M/MV5BN2M4OWIzMjgtMmIzZS00ZmEzLTkwNWUtNTFmZGIwMzQyZjdmXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		'Ruka is a young girl whose parents are separated and whose father works in an aquarium. When two boys, Umi and Sora, who were raised in the sea by dugongs, are brought to the aquarium, Ruka feels drawn to them and begins to realize that she has the same sort of supernatural connection to the ocean that they do. Umi and Sora\'s special power seems to be connected to strange events that have been occurring more and more frequently, such as the appearance of sea creatures far from their home territory and the disappearance of aquarium animals around the world.',
 		'https://www.imdb.com/title/tt9850064/',
		'https://en.wikipedia.org/wiki/Children_of_the_Sea_(film)',		
		'HJoPvlRXZOY'), ".

	//#29
	"(
		'Fate/stay night: Heaven\'s Feel II. Lost Butterfly',
		'Tomonori Sudō',
		'ufotable',
		'January 12, 2019(Japan)',
		'117',
		'Drama/Thriller',
		'Japanese',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BZjM0ZmIwNjEtNDE4YS00MDQ2LWI2ZTMtYTNkZmMwN2YyZmMwXkEyXkFqcGdeQXVyNzEyMDQ1MDA@._V1_.jpg',
		'Ten years after the Holy Grail War—a battle waged by Masters and Servants over the wish-granting container, the Holy Grail—another war breaks out in Fuyuki City. Shirou Emiya—the adopted son of Kiritsugu Emiya, who was a participant of the previous Holy Grail War—resolves to fight, carrying out Kiritsugu\'s dying wish. Shirou attempts to protect Sakura, a girl from the Matoi family who has been by his side for over a year. But once the Holy Grail War starts, there\'s a change in the air of Fuyuki City. Murders abound across the city, and the atmosphere grows ominous. The battle starts to go awry as secret maneuvers by unseen forces are put into play.',
 		'https://www.imdb.com/title/tt8091892/',
		'https://en.wikipedia.org/wiki/Fate/stay_night:_Heaven%27s_Feel_II._lost_butterfly',		
		'NhJQDAIwQVc'), ".

	//#30
	"(
		'Manou the Swift',
		'Andrea Block',
		'LUXX Film',
		'January 25, 2019(Bulgaria)',
		'90',
		'Adventure/Comedy',
		'English',
		'7.3',
		'https://m.media-amazon.com/images/M/MV5BNTU0MDk1YmMtNDkzMS00Mjg1LWE0ZmQtZjNiYjNlMDdlMzI0XkEyXkFqcGdeQXVyMjEwNjEyMA@@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'The little swift Manou grows up believing he\'s a seagull. Learning to fly he finds out he never will be. Shocked, he runs away from home. He meets birds of his own species and finds out who he really is. When both seagulls and swifts face a dangerous threat, Manou becomes the hero of the day.',
		'https://www.imdb.com/title/tt4153828/',
		'Not Available',
		'6GdtRcdQfY8'), ".

	//#31
	"(
		'Penguins',
		'Alastair Fothergill',
		'Disneynature',
		'April 17, 2019(USA)',
		'76',
		'Nature documentary/Documentary',
		'English',
		'6.8',
		'https://m.media-amazon.com/images/M/MV5BMjA4NDc2Njc3MV5BMl5BanBnXkFtZTgwMTcyNTAwNzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'An Adélie penguin named Steve joins millions of fellow males in the icy Antarctic spring on a quest to build a suitable nest, find a life partner and start a family. None of it comes easily for him, especially considering he\'s targeted by everything from killer whales to leopard seals, who unapologetically threaten his happily ever after.',
		'https://www.imdb.com/title/tt8080302/',
		'https://en.wikipedia.org/wiki/Penguins_(film)',
		'VubxHFy7ocE'), ".	
		
	//#32
	"(
		'Rascal Does Not Dream of a Dreaming Girl',
		'Sōichi Masui',
		'CloverWorks',
		'June 15, 2019(Japan)',
		'89',
		'Fantasy/Teen',
		'Japanese',
		'8.6',
		'https://m.media-amazon.com/images/M/MV5BYjJmZGUyYmItNzBmNi00MTc0LTljNmUtNWU0NGYxZjVmYTUxXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg',
		'In Fujisawa, Sakuta Azusagawa is in his second year of high school. He enjoys his great days with Mai Sakurajima, who is both his girlfriend and senior. However, their peaceful lives are interrupted by the appearance of Sakuta\'s first crush, Shoko Makinohara. For reasons unknown, Sakuta encounters two Shokos — one is in middle school, the other an adult. While Sakuta finds himself helplessly living with the two Shokos, the adult Shoko plays him around, which causes rifts in his relationship with Mai. In the midst of all this, Sakuta discovers that the middle school Shoko is suffering from a grave illness, causing his scar to throb. ',
		'https://www.imdb.com/title/tt10472884/',
		'https://en.wikipedia.org/wiki/Rascal_Does_Not_Dream_of_a_Dreaming_Girl',
		'UbLBbxSm8hs'), ".		
	//#33
	"(
		'Red Shoes & the 7 Dwarfs',
		'Sung-ho Hong',
		'Locus Animation Studio',
		'February 9, 2019(Germany)',
		'92',
		'Fantasy/Romance',
		'English',
		'6.9',
		'https://m.media-amazon.com/images/M/MV5BZjVlM2E5MzAtMjcyZi00NmViLTkyOGYtODliYzM4ZDNiZjJhXkEyXkFqcGdeQXVyNjQxMDIzMjY@._V1_SY1000_CR0,0,708,1000_AL_.jpg',
		'Princes who have turned into Dwarfs seek the red shoes of a lady in order to break the curse, although it won\'t be easy. A parody with a twist.',
		'https://www.imdb.com/title/tt4429160/',
		'Not Available',
		'CmxEEE-KRpw'), ".
			
	//#34
	"(
		'One Piece: Stampede',
		'Takashi Otsuka',
		'Toei Animation',
		'October 24, 2019(USA)',
		'101',
		'Fantasy/Action',
		'Japanese',
		'8.5',
		'https://m.media-amazon.com/images/M/MV5BMjNlZDIwYzUtY2UwNS00NjA4LWEyYjEtYWQyZmZjMzU3MWE1XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SY1000_CR0,0,706,1000_AL_.jpg',
		' The world\’s greatest exposition of the pirates, by the pirates, for the pirates - the Pirates Festival. Luffy and the rest of the Straw Hat Crew receive an invitation from its host Buena Festa who is known as the Master of Festivities. They arrive to find a venue packed with glamorous pavilions and many pirates including the ones from the Worst Generation. The place is electric..',
		'https://www.imdb.com/title/tt9430698/',
		'https://en.wikipedia.org/wiki/One_Piece:_Stampede',
		'S8_YwFLCh4U'), ".
	//#35
	"(
		'Doraemon: Nobita\'s Chronicle of the Moon Exploration',
		'Shinnosuke Yakuwa',
		'Fujiko Pro',
		'March 1, 2019(Japan)',
		'111',
		'Sci-fi/Animation',
		'Japanese',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BNmI3MTQ2NjEtMWI1ZC00NDExLWI5MmEtMjJkYjJhMWQxOTEzXkEyXkFqcGdeQXVyNzYzNjg0NDk@._V1_.jpg',
		'A mysterious boy named Luca shows up as a transfer student in Nobita\'s class. Nobita and Luca go to the Rabbit Kingdom that they built on the far side of the moon using one of Doraemon\'s secret gadgets. There, they meet kids with the mysterious power called \'espal.\'',
		'https://www.imdb.com/title/tt9735672/',
		'https://en.wikipedia.org/wiki/Doraemon:_Nobita%27s_Chronicle_of_the_Moon_Exploration',
		'YKcp-F0Uy4w'), ".
	//#36
	"(
		'Detective Conan: The Fist of Blue Sapphire',
		'Chika Nagaoka',
		'TMS Entertainment',
		'April 12, 2019(Japan)',
		'110',
		'Action/Animation',
		'Japanese',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BMmRmZDc2OGYtNTNiOC00ZjMxLTg4MzItZWE5ZDk4ZGQwZTEyXkEyXkFqcGdeQXVyNzEyMDQ1MDA@._V1_.jpg',
		'The world\'s greatest blue sapphire, the \"blue lapis fist\", said to have sunk in a pirate ship in the late 19th century, on the coasts of Singapore. A local millionaire plots to retrieve it, and when it\'s exhibited in an exhibition at the Singaporean Marina Sands hotel, a murder takes place.',
		'https://www.imdb.com/title/tt9501310/',
		'https://en.wikipedia.org/wiki/Detective_Conan:_The_Fist_of_Blue_Sapphire',
		'3rzJtw5EtTw'), ".
	//#37
	"(
		'Astro Kid',
		'Éric Tosti',
		'TAT Productions',
		'April 3, 2019 (France)',
		'89',
		'Sci-fi/Adventure',
		'French',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BZGQyMWMwZjItNTAyZS00ZmMxLWI4N2UtMzM4MzQ2NzBhNmI2XkEyXkFqcGdeQXVyODIyOTEyMzY@._V1_SX749_CR0,0,749,999_AL_.jpg',
		'Following the destruction of their ship, William is separated from his parents with whom he travelled in space. His spare capsule lands on a wild and unexplored planet and has to survive with the help of Buck, a survival robot.',
		'https://www.imdb.com/title/tt8329148/',
		'Not Available',
		'SuLb3MX5q8M'),".														
	//#38
	"(
		'Lady and the Tramp',
		'Charlie Bean',
		'Walt Disney Pictures',
		'November 12, 2019(USA)',
		'0',
		'Drama/Romance',
		'English',
		'0.0',
		'https://m.media-amazon.com/images/M/MV5BM2U3ZDBkYWUtNDY3Ny00OTliLTgxNTAtY2QwZTQxMmEwOTQ1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
		'Lady and the Tramp is set to tell the story of \"an upper-middle-class American cocker spaniel named Lady who meets a streetsmart, downtown stray Schnauzer called the Tramp, and the two embark on many romantic adventures including that iconic spaghetti smooch scene.\"',
		'https://www.imdb.com/title/tt8096832/',
		'https://en.wikipedia.org/wiki/Lady_and_the_Tramp_(2019_film)', 
		'uE0XfdIohME'), ".
	//#39
	"(
		'Is It Wrong to Try to Pick Up Girls in a Dungeon?: Arrow of the Orion',
		'Yoshiki Yamakawa',
		'J.C.Staff',
		'February 15, 2019(Japan)',
		'82',
		'Fantasy/Action',
		'Japaneseh',
		'6.6',
		'https://m.media-amazon.com/images/M/MV5BMmVhYTM2ZWUtNWFmYi00ZjI0LWJkZTQtZWEwYzQwODU4ZDY5XkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'In the city of Orario, beneath an impossibly tall tower, lies the dungeon. Only adventurers who form partnerships with the gods themselves have any hope of defeating the monsters that lie within. But the dungeon is not the only place where monsters exist. Far from Orario, in the ruins of an ancient city, a new threat arises. To counter this threat, the goddess Artemis has come to Orario in search of a champion—but it\'s not Ais Wallenstein (the legendary Sword Princess) nor Ottar (the strongest warrior to ever enter the dungeon) that she chooses. Rather it is Bell Cranel, a newbie adventurer partnered with a low-tier goddess.',
		'https://www.imdb.com/title/tt9526152/',
		'https://en.wikipedia.org/wiki/Is_It_Wrong_to_Try_to_Pick_Up_Girls_in_a_Dungeon%3F', 
		'a0WTZ9WtRog'), ".
	//#40
	"(
		'City Hunter: Shinjuku Private Eyes',
		'Kenji Kodama',
		'Sunrise',
		'February 8, 2019(Japan)',
		'95',
		'Crime/Action',
		'Japaneseh',
		'7.2',
		'https://m.media-amazon.com/images/M/MV5BOTNjZWFjN2MtMGU1Mi00ODU5LWFhNGYtZWNhNTA4ODRiMmUyXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_.jpg',
		'Ryo Saeba is a sniper and private eye (\"sweeper\") based in Tokyo\'s Shinjuku Ward, who possesses unrivaled marksmanship and an over-the-top obsession for the opposite sex. He and his partner Kaori Makimura serve as bodyguards and perform other duties for his clients. Their latest client is Ai Shindo, a model who\'s being attacked by mysterious people and unknowingly holds the key to a vast city-wide conspiracy.',
		'https://www.imdb.com/title/tt8161914/',
		'https://en.wikipedia.org/wiki/City_Hunter', 
		'K5sf4YzjWbA'), ".

	//#41
	"(
		'Made in Abyss: Journey\'s Dawn & Wandering Twilight',
		'Masayuki Kojima',
		'Kinema Citrus',
		'January 4 & 18, 2019(Japan)',
		'108',
		'Fantasy/Adventure',
		'Japanese',
		'6.2',
		'https://m.media-amazon.com/images/M/MV5BOTY3ODYxYTYtMGNmYy00MjhkLThlMTctNzYyM2M0Y2NjZjQxXkEyXkFqcGdeQXVyMzExMzk5MTQ@._V1_SY1000_CR0,0,705,1000_AL_.jpg',
		'<b>Journey\'s Dawn</b>: The enigmatic Abyss is an unforgiving and deadly place. Despite the dangers, it still captures the imagination of explorers such as Riko who wishes to follow in her mother\'s footsteps and trains hard to become a Cave Raider. One day, she receives news that her mother died in the Abyss, yet a mysterious note tells Riko that her mother may still be alive. Vowing to uncover the truth about her mother\'s fate, Riko embarks on a journey with a humanoid robot boy name Reg. Together, they will discover if they have what it takes to survive where so many others have perished.<br/>

		<b>Wandering Twilight</b>: Despite a harrowing encounter while descending the Great Fault, Reg and Riko safely make it down to the fourth layer, the Goblets of Giants. There calamity strikes, leaving Riko gravely injured. In Reg\'s darkest hour, help comes from an unexpected source: a humanoid rabbit who calls herself Nanachi and claims to be a Hollow – a former human mutated by ascending from the Abyss\'s sixth layer. Nanachi helps save Riko but asks a dear price in return when she learns about Reg\'s Incinerator. For each of them, that price and Riko\'s process of healing become the keys to the next stage of their journey. But a new potential threat looms in the form of an amoral White Whistle.',
		'https://www.imdb.com/title/tt10068544/',
		'https://en.wikipedia.org/wiki/Made_in_Abyss', 
		'r93F1363Bv0'), ".	
	//#42
	"(
		'The Relative Worlds',
		'Yuhei Sakuragi',
		'Craftar Studio',
		'January 25, 2019(Japan)',
		'93',
		'Drama/Sci-fi',
		'Japanese',
		'6.3',
		'https://m.media-amazon.com/images/M/MV5BMDg4NjFiYjAtMDJiOC00OTI5LWIwYjctYjgxZGIzN2Y2YzFlXkEyXkFqcGdeQXVyNzEyMDQ1MDA@._V1_.jpg',
		'Shin and Kotori are both third years in high school. Shin lost his mother when he was little, and since then he has a tendency to close himself off. Kotori is his childhood friend who always looks out for him. One day, another \"self\" from another Japan appears in front of them.',
		'https://www.imdb.com/title/tt9648078/',
		'Not Available', 
		'jnheTEjVWr4'), ".	
	//#43
	"(
		'Love Live! Sunshine!! The School Idol Movie: Over the Rainbow',
		'Kazuo Sakai',
		'Sunrise',
		'January 4, 2019(Japan)',
		'100',
		'Music/Animation',
		'Japanese',
		'8.3',
		'https://m.media-amazon.com/images/M/MV5BMDYyNDA0MGUtODFlOC00MGVhLTk4MzctNjkwMjg1ZTc3Mzc1XkEyXkFqcGdeQXVyNTI1MDU0MzM@._V1_.jpg',
		'Uranohoshi Girls\' High School\'s idol group Aquors won the final Love Live contest. While preparing to enroll at a new school, the first and second-year students encounter unexpected trouble. After heading for a graduation trip in Italy, the third-year students go missing.',
		'https://www.imdb.com/title/tt8659948/',
		'https://en.wikipedia.org/wiki/Love_Live!_Sunshine!!', 
		'DAz6Gy3DVKU'), ".	
	//#44
	"(
		'Hello World',
		'Tomohiko Itō',
		'Graphinica',
		'September 20, 2019(Japan)',
		'98',
		'Sci-fi/Teen',
		'Japanese',
		'7.1',
		'https://m.media-amazon.com/images/M/MV5BOGIwYjZlOTctZTNhOC00OTdiLWI5ZWItOTdiMWRjMjUwMDlhXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'In Kyoto in the year 2027, Naomi Katagaki, a male high school student encounters a person who claiming to be Naomi from 10 years in the future. Together, they must change the future and save a classmate, Ruri, whom the younger Naomi starts to date in three months.',
		'https://www.imdb.com/title/tt9418812/',
		'https://en.wikipedia.org/wiki/Hello_World_(film)', 
		'juwLvKPz7Ks'), ".
	//#45
	"(
		'The Wonderland',
		'Keiichi Hara',
		'Fuji TV',
		'April 26, 2019(Japan)',
		'115',
		'Fantasy/Adventure',
		'Japanese',
		'6.0',
		'https://m.media-amazon.com/images/M/MV5BMTkwNTcyNjQtMDA2ZC00ZmQ5LTkzM2UtYzk5YzYzZTUyZTllXkEyXkFqcGdeQXVyMzQ3NTE0ODM@._V1_SY1000_CR0,0,708,1000_AL_.jpg',
		'Akane is a girl with no self-confidence. On the day before her birthday, she meets a mysterious alchemist Hippocrates and their student Pipo, who both tell her they\'re on a mission to save the world. Together, they set out from the basement for \"Wonderland,\" and Akane finds herself labelled Wonderland\'s savior.',
		'https://www.imdb.com/title/tt9563632/',
		'Not Available', 
		'jSMNewEFRR8'), ".
	//#46
	"(
		'Crayon Shin-chan: Honeymoon Hurricane ~The Lost Hiroshi~',
		'Masakazu Hashimoto',
		'Shin-Ei Animation',
		'April 19, 2019(Japan)',
		'100',
		'Action/Adventure',
		'Japanese',
		'6.1',
		'https://m.media-amazon.com/images/M/MV5BOTAwMDE5NGYtOTJkMi00MzY2LWIwNTEtZmMyNDQ5NTRhNDUwXkEyXkFqcGdeQXVyNzEyMDQ1MDA@._V1_SY1000_CR0,0,693,1000_AL_.jpg',
		'Hiroshi and Misae have never been to a honeymoon trip to a foreign country. One day, Misae discovered an inexpensive and family-friendly holiday package to Australia and the Nohara family decided to make it their first honeymoon vacation.<br/>

Hiroshi gets kidnapped upon arrival to Australia, leaving Shinnosuke, Misae and others on a dangerous journey. It turns out that Hiroshi is the key to a secret treasure. The remaining members of the Nohara Family must rescue Hiroshi, while a mysterious masked man and treasure hunters from all over the world are after him. The struggle is among three different groups in this action-filled treasure hunting adventure.',
		'https://www.imdb.com/title/tt10208548/',
		'https://en.wikipedia.org/wiki/Crayon_Shin-chan:_Honeymoon_Hurricane_~The_Lost_Hiroshi~', 
		'euc7PM41lz8'), ".
	//#47
	"(
		'Human Lost',
		'Fuminori Kizaki',
		'Polygon Pictures',
		'October 22, 2019(USA)',
		'110',
		'Sci-fi/Action',
		'Japanese',
		'4.8',
		'http://t1.gstatic.com/images?q=tbn:ANd9GcTXFauFv32MwudO1aNNac49ZtHH9VSJdSJR402ck-05JcXpxyd0',
		'The year is 2036. A revolution in medical treatment has conquered death by means of internal nanomachines and the \“Shell System\”, yet only the richest can afford to partake. Yozo Oba isn\'t the richest. Troubled by strange dreams, he flippantly joins his friend\'s biker gang on an ill-fated incursion to \“The Inside\”, where society\'s elite lives. This instigates a journey of terrifying discovery that will change Yozo\'s life forever.',
		'https://www.imdb.com/title/tt10622220/',
		'Not Available', 
		'Pe5OKDujLmw'), ".
	//#48
	"(
		'Alita: Battle Angel',
		'Robert Rodriguez',
		'20th Century Fox,Lightstorm Entertainment',
		'January 31, 2019(USA)',
		'122',
		'Sci-fi/Thriller',
		'English',
		'7.4',
		'https://m.media-amazon.com/images/M/MV5BNzVhMjcxYjYtOTVhOS00MzQ1LWFiNTAtZmY2ZmJjNjIxMjllXkEyXkFqcGdeQXVyNTc5OTMwOTQ@._V1_.jpg',
		'In 2563, three hundred years after the war \"The Fall\", the mysterious scientist Dr. Dyson Ido finds part of a female cyborg in a junkyard and brings to his laboratory. He finds that her human brain is amnetic but intact and gives the name of his deceased daughter Alita to the cyborg. Alita meets on the street Dr. Ido\'s ex-wife Chiren, who is also a scientist that works to the powerful Zapan, and befriends the young Hugo, who brings cyborg\'s parts to Dr. Ido, and learns that both dream on moving to the floating city of Zalem. Hugo teaches Alita how to play Motorball and she learns that the champion of the Motorball Tournament moves to Zalem. Soon Alita discovers that Dr. Ido is a hunter warrior and after finding her cyborg body in a crashed spaceship, she decides to become also a hunter warrior but Dr. Ido refuses to replace her body. Who was Alita and what is the secret of the cyborg body found by Alita? Let us see what happens.',
		'https://www.imdb.com/title/tt0437086/',
		'https://en.wikipedia.org/wiki/Alita:_Battle_Angel', 
		'w7pYhpJaJW8'), ".
	//#49
	"(
		'Ni no Kuni',
		'Yoshiyuki Momose',
		'OLM, Inc.',
		'August 23, 2019(Japan)',
		'106',
		'Anime',
		'Japanese',
		'6.7',
		'https://m.media-amazon.com/images/M/MV5BNDM3Y2YzZWUtMGQ2Yy00NDQ0LThmMjEtMWE3Mjc4YzcwODZhXkEyXkFqcGdeQXVyNjc3MjQzNTI@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'High schooler Yuu and his friend Haru get involved in a case involving his childhood friend Kotona, which forces them to go back and forth between another world that is different but is somewhat similar to their world, Ni no Kuni. The real world and Ni no Kuni, when Kotona\'s life is in danger, what\'s the ultimate choice the three of them have to make in Ni no Kuni?',
		'https://www.imdb.com/title/tt9760504/',
		'https://en.wikipedia.org/wiki/Ni_no_Kuni#Film', 
		'z53A2x2XWDk'), ".
	//#50
	"(
		'Her Blue Sky',
		'Tatsuyuki Nagai',
		'CloverWorks',
		'October 11, 2019(Japan)',
		'108',
		'Romance/Animation',
		'Japanese',
		'6.9',
		'https://m.media-amazon.com/images/M/MV5BNzMwMTBhMzItMzQ3OC00ZmQ2LWIwYjUtNGMzMTU5MDUyZGFiXkEyXkFqcGdeQXVyOTc3MTcwMzg@._V1_.jpg',
		'Second-year high school student Aoi Aioi is an aspiring musician Aoi Aioi. Her older sister Akane\'s ex-boyfriend Shinnosuke Kanomura is a struggling guitarist. Aoi and Akane\'s parents passed away in an accident 13 years ago, and Akane gave up her ambition of going to Tokyo with Shinnosuke to take care of Aoi. Since then, Aoi has felt indebted to her older sister. One day, she is invited to perform at a music festival as a session musician by a famous enka singer named Dankichi. At the same time, Shinnosuke returns to Aoi and Akane\'s town after a long time away. Then, Shinno mysteriously appears— who is actually Shinnosuke from 13 years ago after traveling from the past to the present—and Aoi falls in love for the first time.',
		'https://www.imdb.com/title/tt10981202/',
		'https://en.wikipedia.org/wiki/Her_Blue_Sky', 
		'0rnEi2X2RBI'), ".
	//#51
	"(
		'Pokémon the Movie: Mewtwo Strikes Back Evolution',
		'Kunihiko Yuyama',
		'OLM, Inc.',
		'July 12, 2019(Japan)',
		'98',
		'Animation',
		'Japanese',
		'6.6',
		'https://m.media-amazon.com/images/M/MV5BZTliN2Q5YzEtYzAyYS00ZWMyLTkxYzEtODg5OGM2MzE3ZDY4XkEyXkFqcGdeQXVyMzc5ODkzNDE@._V1_SY1000_CR0,0,707,1000_AL_.jpg',
		'After a scientific experiment leads to the creation of a clone of Mewtwo, he sets out to destroy the world. Ash and his friends then decide to thwart Mewtwo\'s evil plans.',
		'https://www.imdb.com/title/tt8856470/',
		'https://en.wikipedia.org/wiki/Mewtwo_Strikes_Back:_Evolution', 
		'7kS2uEjK0_0'), ".	
	//#52
	"(
		'Girls und Panzer das Finale: Part II',
		'Tsutomu Mizushima',
		'Actas',
		'June 15, 2019(Japan)',
		'55',
		'Action/Comedy',
		'Japanese',
		'9.1',
		'https://m.media-amazon.com/images/M/MV5BNGRmYTE3ZjgtOTJmYS00M2EzLWE5YmUtODdmNjU5NTI4YTU5XkEyXkFqcGdeQXVyNDI3NzQxODA@._V1_.jpg',
		'Miho Nishizumi, a girl from a prestigious family of sensha-dō practitioners who became traumatized by a past event, transfers to Ōarai Girls High School to get away from sensha-dō, as she presumed the school was no longer practicing the sport. However, shortly after Miho begins her new school life and makes some new friends, the student council announces the revival of sensha-dō at Ōarai and coerces Miho, the only student with prior experience, to join. While reluctant to join at first, having practically been forced, Miho soon warms up to sensha-dō and they enter a national championship, facing off against various other schools, in a competition that becomes a serious matter after Miho and the others learn that their school will be closed should they not win.',
		'https://www.imdb.com/title/tt7834494/',
		'https://en.wikipedia.org/wiki/Girls_und_Panzer', 
		'_zlHTYhUYFU'), ".
	//#53
	"(
		'Sound! Euphonium the Movie - Our Promise: A Brand New Day',
		'Tatsuya Ishihara',
		'Kyoto Animation',
		'April 19, 2019(Japan)',
		'100',
		'Drama/Music',
		'Japanese',
		'8.2',
		'https://m.media-amazon.com/images/M/MV5BMWU0NWI4ZjEtNDE1OC00MTY3LWFlMDYtNjFiZGY4YjFlODFiXkEyXkFqcGdeQXVyMzUzMzgxNA@@._V1_.jpg',
		'Kumiko is now a second year and one of the senior players of the euphonium section. With new underclassmen joining the concert band, Kumiko will have to learn new things in order to deal with awkward and difficult underclassmen. She and third-year trumpeter Tomoe Kabe have been chosen to lead the new underclassmen members. Among the new members to Kumiko\'s bass section are euphonist Kanade Hisaishi, whose appearances are deceiving; tuba player Mirei Suzuki, who cannot adapt to her new environment; tuba player Satsuki Suzuki, who wants to get along with Mirei; and double bassist Motomu Tsukinaga, who cannot talk about himself. Between the Sunrise Festival, chair placement auditions, and the competition, a number of problems quickly begin to arise.',
		'https://www.imdb.com/title/tt7089882/',
		'https://en.wikipedia.org/wiki/Sound!_Euphonium', 
		'dIytfSM5hAQ'), ".
	//#54
	"(
		'Osomatsu-san the Movie',
		'Yoichi Fujita',
		'Pierrot',
		'March 15, 2019(Japan)',
		'109',
		'Comedy/Animation',
		'Japanese',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BNjdjZWZiMzctZWNiNS00ODhmLWIxZjAtNDE1MmRlNzk4NzljXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SY1000_CR0,0,708,1000_AL_.jpg',
		'The sextuplets attend a high school class reunion. There, they see all their former classmates who have become \"proper\" adults with company jobs. The sextuplets sulk about this and go home and drink until they fall asleep. But when they wake up, a certain scene awaits them.',
		'https://www.imdb.com/title/tt8866460/',
		'https://en.wikipedia.org/wiki/Mr._Osomatsu', 
		'n7Khibnryiw'), ".	
	//#55
	"(
		'Code Geass: Lelouch of the Re;Surrection',
		'Gorō Taniguchi',
		'Sunrise',
		'February 9, 2019(Japan)',
		'114',
		'Drama/Fantasy',
		'Japanese',
		'7.7',
		'https://m.media-amazon.com/images/M/MV5BZmUxZmVlNGMtZGMyMy00MmM3LTg5ZjgtNzFhZWU4MTU5MjIwXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
		'Two years have passed since the end of Code Geass, and the world is well on its way to recovery. But when world-famous hero Zero and Britannian Princess Nunally are kidnapped in a surprise attack by an unknown force, a chain of events are set into motion that could spell the end for this peace that millions have already died for.',
		'https://www.imdb.com/title/tt6344664/',
		'https://en.wikipedia.org/wiki/Code_Geass:_Lelouch_of_the_Re;surrection', 
		'KVqmEV3evbc'), ".	
	//#56
	"(
		'The Legend of Hei',
		'MTJJ Mutou',
		'Beijing Jiyin Yinghua',
		'September 12, 2019(China)',
		'101',
		'Animation',
		'Mandarin',
		'8.6',
		'https://m.media-amazon.com/images/M/MV5BMzFmMjQwYTUtYjA1ZC00ZTY0LWFhNDctNzRkZTg4Yzc4MmUyXkEyXkFqcGdeQXVyNzI1NzMxNzM@._V1_SY1000_CR0,0,623,1000_AL_.jpg',
		'In bustling human world, various of goblins live peacefully with mankind. Luo Xiao-Hei, the cat demon, begins his journey of wandering because his forest home is destroyed. With sympathetic goblin partners and earnest human master appearing one after another, Hei is in the dilemma of which side will be his true attribution.',
 		'https://www.imdb.com/title/tt10734928/',
		'https://en.wikipedia.org/wiki/The_Legend_of_Luo_Xiaohei',
		'RCK_Cwb4k1k'); ";


mysqli_select_db( $conn, 'ANIMATED_MOVIE' );

if (mysqli_multi_query($conn, $sql)) {
    echo "New data has been inserted";
} else {
    die('Failed to insert: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>

