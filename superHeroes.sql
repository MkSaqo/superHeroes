-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 20 2018 г., 18:24
-- Версия сервера: 5.6.35
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `superHeroes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `superHeroes`
--

CREATE TABLE `superHeroes` (
  `id` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `desc` varchar(577) CHARACTER SET utf8 DEFAULT NULL,
  `realName` varchar(27) CHARACTER SET utf8 DEFAULT NULL,
  `height` varchar(21) CHARACTER SET utf8 DEFAULT NULL,
  `weight` varchar(29) CHARACTER SET utf8 DEFAULT NULL,
  `powers` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `abilities` varchar(400) CHARACTER SET utf8 DEFAULT NULL,
  `group` varchar(180) CHARACTER SET utf8 DEFAULT NULL,
  `first` varchar(126) CHARACTER SET utf8 DEFAULT NULL,
  `origin` varchar(167) CHARACTER SET utf8 DEFAULT NULL,
  `header_image` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `icon` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `image1` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image2` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image3` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image4` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image5` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image6` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image7` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image8` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `image9` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `background` varchar(36) CHARACTER SET utf8 DEFAULT NULL,
  `page1` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `superHeroes`
--

INSERT INTO `superHeroes` (`id`, `name`, `desc`, `realName`, `height`, `weight`, `powers`, `abilities`, `group`, `first`, `origin`, `header_image`, `icon`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `background`, `page1`) VALUES
(1, 'Thor', 'As the Norse God of thunder and lightning, Thor wields one of the greatest weapons ever made, the enchanted hammer Mjolnir.While others have described Thor as an over-muscled, oafish imbecile, hes quite smart and compassionate.  Hes self-assured, and he would never, ever stop fighting for a worthwhile cause.  ', 'Thor Odinson', '66\"; (Blake) 5’9\" ', '640 lbs; (Blake) 150 lbs.', 'As the son of Odin and Gaea, Thors strength, endurance and resistance to injury are greater than the vast majority of his superhuman race. He is extremely long-lived (though not completely immune to aging), immune to conventional disease and highly resistant to injury. His flesh and bones are several times denser than a humans.As Lord of Asgard, Thor possessed the Odinforce, which enabled him to t', 'Thor is trained in the arts of war, being a superbly skilled warrior, highly proficient in hand-to-hand combat, swordsmanship and hammer throwing.                     ', 'Gods of Asgard, Avengers; formerly Queen’s Vengeance, Godpack, Thor Corps                    ', 'Venus #12 (1951); (modern) Journey into Mystery #83 (1962)', 'Journey into Mystery #83 (1962), Thor #159 (1968), Thor Annual #11 (1983)', 'images/header_imageThor.jpg', 'images/iconThor.jpg', 'images/image1Thor.jpg', 'images/image2Thor.jpg', 'images/image3Thor.jpg', 'images/image4Thor.jpg', 'images/image5Thor.jpg', 'images/image6Thor.jpg', 'images/image7Thor.jpg', 'images/image8Thor.jpg', 'images/image9Thor.jpg', 'images/backgroundThor.jpg', 'images/page1Thor.png'),
(2, 'Daredevil', 'Abandoned by his mother, Matt Murdock was raised by his father, boxer \"Battling Jack\" Murdock, in Hells Kitchen. Realizing that rules were needed to prevent people from behaving badly, young Matt decided to study law; however, when he saved a man from an oncoming truck, it spilled a radioactive cargo that rendered Matt blind while enhancing his remaining senses. Under the harsh tutelage of blind martial arts master Stick, Matt mastered his heightened senses and became a formidable fighter.                       ', 'Matthew Michael Murdock', '60\"', '200 lbs.', 'In compensation for his lost sight, Daredevil’s other four senses have been preternaturally enhanced.His sense of touch is sensitive enough to detect the faint impressions of ink on paper, allowing him to read by touch.  He is also able to feel minute changes in temperature and pressure, enough to sense a human body at a distance of five feet, due to body heat and air disturbance.  His sensitivity', 'Daredevil possesses the strength, speed, agility, and endurance, not to mention acrobatic and gymnastic skills, of an Olympic-level athlete. Through a combination of the tutelage of Stick and self-training, Daredevil is a master of a unique martial art form, which is a hybridized form of American boxing and the Japanese arts of ninjutsu, judo and aiki-jujutsu.  Martial arts training has given him ', 'Formerly Defenders, Marvel Knights, \"Marvel Knights\"                    ', 'Daredevil #1 (1964)', 'Daredevil #1 (1964); Daredevil: The Man Without Fear #1-5 (1993-1994); Daredevil: Yellow #1-6 (2001-2002)', 'images/header_imageDaredevil.jpg', 'images/iconDaredevil.jpg', 'images/image1Daredevil.jpg', 'images/image2Daredevil.jpg', 'images/image3Daredevil.jpg', 'images/image4Daredevil.jpg', 'images/image5Daredevil.jpg', 'images/image6Daredevil.jpg', 'images/image7Daredevil.jpg', 'images/image8Daredevil.jpg', 'images/image9Daredevil.jpg', 'images/backgroundDaredevil.jpg', 'images/page1Daredevil.png'),
(3, 'Spider-Man', 'Bitten by a radioactive spider, high school student Peter Parker gained the speed, strength and powers of a spider. Adopting the name Spider-Man, Peter hoped to start a career using his new abilities. Taught that with great power comes great responsibility, Spidey has vowed to use his powers to help people. ', 'Peter Benjamin Parker', '510\"', '167 lbs.', 'Peter can cling to most surfaces, has superhuman strength (able to lift 10 tons optimally) and is roughly 15 times  agile than a regular human. The combination of his acrobatic leaps and web-slinging enables him to travel rapidly from place to place. His spider-sense provides an early warning detection system linked with his superhuman kinesthetics, enabling him the ability to evade most any injur', 'Peter is an accomplished scientist, inventor and photographer.                      ', 'Avengers, formerly the Secret Defenders, \"New Fantastic Four\", the Outlaws                    ', 'Amazing Fantasy #15 (1962) ', 'Amazing Fantasy #15 (1962)', 'images/header_imageSpider-Man.jpg', 'images/iconSpider-Man.jpg', 'images/image1Spider-Man.jpg', 'images/image2Spider-Man.jpg', 'images/image3Spider-Man.jpg', 'images/image4Spider-Man.jpg', 'images/image5Spider-Man.jpg', 'images/image6Spider-Man.jpg', 'images/image7Spider-Man.jpg', 'images/image8Spider-Man.jpg', 'images/image9Spider-Man.jpg', 'images/backgroundSpider-Man.jpg', 'images/page1Spider-Man.png'),
(4, 'Iron Man', 'Wounded, captured and forced to build a weapon by his enemies, billionaire industrialist Tony Stark instead created an advanced suit of armor to save his life and escape captivity. Now with a new outlook on life, Tony uses his money and intelligence to make the world a safer, better place as Iron Man. ', 'Anthony Edward \"Tony\" Stark', '61\"; (in armor) 66\"', '225 lbs.; (in armor) 425 lbs.', 'None; Tonys body had been enhanced by the modified techno-organic virus, Extremis, but it is currently inaccessible and inoperable. ', 'Tony has a genius level intellect that allows him to invent a wide range of sophisticated devices, specializing in advanced weapons and armor. He possesses a keen business mind.                     ', 'The Avengers, Initiative, Hellfire Club (outer circle), S.H.I.E.L.D., Illuminati, Thunderbolts, Force Works, Queens Vengeance, Alcoholics Anonymous                    ', 'Tales of Suspense #39 (1963) ', 'Tales of Suspense #39 (1963)', 'images/header_imageIron Man.jpg', 'images/iconIronMan.jpg', 'images/image1Iron Man.jpg', 'images/image2Iron Man.jpg', 'images/image3Iron Man.jpg', 'images/image4Iron Man.jpg', 'images/image5Iron Man.jpg', 'images/image6Iron Man.jpg', 'images/image7Iron Man.jpg', 'images/image8Iron Man.jpg', 'images/image9Iron Man.jpg', 'images/backgroundIron Man.jpg', 'images/page1IronMan.png'),
(5, 'Captain America', 'Vowing to serve his country any way he could, young Steve Rogers took the super soldier serum to become Americas one-man army. Fighting for the red, white and blue for over 60 years, Captain America is the living, breathing symbol of freedom and liberty.  ', 'Steven \"Steve\" Rogers', '62\"', '220 lbs', 'Captain America represented the pinnacle of human physical perfection. He experienced a time when he was augmented to superhuman levels, but generally performed just below superhuman levels for most of his career. Captain America had a very high intelligence as well as agility, strength, speed, endurance, and reaction time superior to any Olympic athlete who ever competed. The Super-Soldier formul', 'Captain America had mastered the martial arts of American-style boxing and judo, and had combined these disciplines with his own unique hand-to-hand style of combat. He had also shown skill and knowledge of a number of other martial arts. He engaged in a daily regimen of rigorous exercise (including aerobics, weight lifting, gymnastics, and simulated combat) to keep himself in peak condition. Capt', 'Secret Avengers; formerly the Avengers, Invaders, Captains Unnamed Superhero Team, Redeemers; formerly partner of Winter Soldier, Bucky, Jones, Rick, Rick Jones, Falcon (Sam Wilson', '(Captain America) Captain America Comics #1 (1941); (Nomad) Captain America #180 (1974); (Captain) Captain America #337 (1988)', 'Captain America Comics #1 (1941); Tales of Suspense #63 (1965); Captain America #109 (1969); Captain America #255 (1981); Adventures of Captain America #1-2 (1991)', 'images/header_imageCaptainAmerica.jpg', 'images/iconCaptainAmerica.jpg', 'images/image1Captain America.jpg', 'images/image2Captain America.jpg', 'images/image3Captain America.jpg', 'images/image4Captain America.jpg', 'images/image5Captain America.jpg', 'images/image6Captain America.jpg', 'images/image7Captain America.jpg', 'images/image8Captain America.jpg', 'images/image9Captain America.jpg', 'images/backgroundCaptain America.jpg', 'images/page1CaptainAmerica.png'),
(6, 'Ultron', 'Arguably the greatest and certainly the most horrific creation of scientific genius Dr. Henry Pym, Ultron is a criminally insane rogue sentient robot dedicated to conquest and the extermination of humanity. ', 'Ultron', '69\" (variable)', '735 lbs. (variable)', 'Ultrons abilities vary with each redesign, but typically include superhuman strength and durability, the power of flight, and various offensive weapons such as concussion blasters, radiation emitters and his \"encephalo-ray\", which plunges its victims into a deathlike coma. The latter ray also allows Ultron to mesmerize and outright mind-control his victims, or implant subliminal hypnotic commands ', 'Phalanx; formerly Sons of Yinsen, Lethal Legion, Masters of Evil                    ', 'Avengers #54 (1968) ', 'Avengers #54 (1968)', 'No Origin', 'images/header_imageUltron.jpg', 'images/iconUltron.jpg', 'images/image1Ultron.jpg', 'images/image2Ultron.jpg', 'images/image3Ultron.jpg', 'images/image4Ultron.jpg', 'images/image5Ultron.jpg', 'images/image6Ultron.jpg', 'images/image7Ultron.jpg', 'images/image8Ultron.jpg', 'images/image9Ultron.jpg', 'images/backgroundUltron.jpg', 'images/page1Ultron.png'),
(7, 'Ronan', 'Born a Kree on the planet Hala, Ronan joined the Accuser Corps and quickly ascended to the top of the ranks. As The Supreme Accuser, Ronan enforces the laws of the Kree Empire throughout the galaxy and frequently clashes with Earthâ€™s`superHeroes`and other alien races.  ', 'Ronan', '75\" (with armor)', '480 lbs. (with armor)', 'Can currently adapt his body to survive any hostile environment. Strength-enhancing armor. Generate cold to put certain lifeforms into suspended animation. Render himself  invisible. ', 'Formerly Accuser Corps, Starforce                    ', 'Fantastic Four #65 (1967)', 'No Origin', 'No Origin', 'images/header_imageRonan.jpg', 'images/iconRonan.jpg', 'images/image1Ronan.jpg', 'images/image2Ronan.jpg', 'images/image3Ronan.jpg', 'images/image4Ronan.jpg', 'images/image5Ronan.jpg', 'images/image6Ronan.jpg', 'images/image7Ronan.jpg', 'images/image8Ronan.jpg', 'images/image9Ronan.jpg', 'images/backgroundRonan.jpg', 'images/page1Ronan.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `superHeroes`
--
ALTER TABLE `superHeroes`
  ADD PRIMARY KEY (`id`);
