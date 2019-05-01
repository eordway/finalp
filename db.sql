-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 12:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eordway`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_desc` text NOT NULL,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_date`, `comment_desc`, `player_id`, `game_id`) VALUES
(1, '2015-11-20', 'THE 12 KIDS: 2 are in the world map, search them out. One is in the training, upgrade it enough. One is in the shop, over the tent i think. FOUR in the museum. As you get in the main hall, there is one under the table and one near your money counter. One in the armory, scroll faaar right and then down. One is in the statues, look in the window up there. Two are in the arena. One is over the sign that says \"Choose a battle\" Then, go to battle 1 and look at the wooden sign. There is a kid hidden there. One in the hero screen, near the thing that the player stays on. Three are in the house. One is in the woods, one near the barrels and One in the windmill [+] to keep this alive!!\r\n', 2, 6),
(2, '2015-10-20', 'My favorite part about this is how many results I see after leveling and completing minigames. I could be getting my ass kicked on an arena, and after 10 minutes of playing minigames I am the one kicking the ass. Also, I love that adding skill points noticeably increases that skill. If I add a point to toxic stab, it decreases the timer by 4 seconds, rather than 0.4 seconds like most games of this genre. Oh, and also, the fact that you can get offline bonuses makes this NON-IDLE GAME a better idle game than most IDLE GAMES. Think about that. 555/5\r\n', 4, 6),
(3, '2015-10-20', '6/5 tutorial that didn\'t drag for half an hour.. before letting me play the game..\r\n', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `creator_id` int(11) NOT NULL,
  `creator_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`creator_id`, `creator_name`) VALUES
(1, 'Puffballs_United'),
(2, 'SoulGame'),
(3, 'Transisco'),
(4, 'Freddie990'),
(5, 'fogNG'),
(6, 'John'),
(7, 'XGENSTUDIOS'),
(8, 'IRONHIDEGAMES'),
(9, 'pixeljamgames'),
(10, 'SoulGame'),
(11, 'Brothers Chaps');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `upload_date` date NOT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `url` varchar(1000) NOT NULL,
  `description` varchar(2056) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `name`, `upload_date`, `rating`, `url`, `description`, `genre_id`, `site_id`, `creator_id`) VALUES
(1, 'Elephant Quest', '2011-02-21', '4.65', 'https://armorgames.com/play/10606/elephant-quest', 'The fight is on! Wooly has taken your precious bowler cap and now you are on a romp to go get it back! Explore the freeform world of 45 various areas in this RPG-Shooter hybrid. Complete sidequests to get power-ups, extra firepower, and experience! Navigate the ridiculous Level Up tree to become the most powerful elephant in the universe.', 2, 3, 6),
(2, 'MotherLoad', '2009-03-29', '3.87', 'http://www.xgenstudios.com/game.php?keyword=motherload', 'Motherload; The game that takes you under the surface of arcade-style gaming and into the roots of fun. Tipping the hat to old favorites such as Dig Dug and Boulder Dash, Motherload incorporates a modern interface, fast-paced gameplay, and an in-depth storyline. Experience exciting gameplay in the substrata of Mars, where you’ll search for the Motherload; A fabled cache of rare and valuable minerals.\r\n\r\nNavigate the dangers of Martian soil, complete with hidden gas pockets, earthquakes, and other surprises. Purchase powerful upgrades for your Mining Pod with the fruits of your labor. Compare high scores with friends to see who the champion really is. When you’ve finished the game, challenge more difficult gameplay modes.\r\n\r\nMotherload; Can you dig it?', 6, 4, 7),
(3, 'Kingdom Rush Frontiers', '2013-12-23', '4.54', 'https://armorgames.com/play/15717/kingdom-rush-frontiers', 'The world\'s most devilishly addictive defense game is back - welcome to Kingdom Rush: Frontiers!\r\n\r\n\"Kingdom Rush Frontiers\" is a game that combines Tower Defense, quirky humor and fantasy gameplay. The goal is to build many types of towers to attack incoming enemies, and stop them from getting past your defenses.\r\n\r\nBigger and badder than ever before, Kingdom Rush: Frontiers is a whole new level of the furiously fast, enchantingly charming gameplay that made the original title an award-winning hit. Tap your troops through an epic (mis)adventure as you defend exotic lands from dragons, man-eating plants, and ghastly denizens of the underworld -all with flashy new towers, levels, heroes, and more goodies to help you crush your foes to a pulp. (Don\'t worry, we\'ve still got all the good ol\' stuff from the last game, too. It\'s vintage now.)\r\n\r\nKingdom Rush: Frontiers packs in so much content, it\'s like a fully upgraded artillery blast of mouthwatering, pixelated joy launched right into your smiling little face... and it hurts so good!', 7, 3, 8),
(4, 'Dino Run', '2008-06-17', '3.80', 'https://www.pixeljam.com/dinorun/index2.html', 'The Asteroid has finally hit! Escape the pyroclastic wall of doom and find your dino sanctuary!', 8, 5, 9),
(5, 'Swords and Souls', '2015-10-18', '4.64', 'http://armorgames.com/play/17817/swords-and-souls', 'Hey SoulGamers, Argl here! I wanted to share with you this little Soul Adventure I made on my own during the last 6 months. I hope you’ll enjoy it, as usual it’s entirely free. Leave your comments and feedback, I will read them :)', 9, 3, 10),
(6, 'Peasant\'s Quest', '2004-08-02', NULL, 'http://homestarrunner.com/disk4of12.html', 'From Homestar Runner comes this hilariously funny game that pokes fun at itself and the text-based adventures and 8-bit graphics of years gone by. Boasting “lush 16-color landscapes,” this game puts you in the shoes of a short-panted peasant named Rather Dashing who sets out on a quest of revenge against Trogdor the Burninator. A fun and quirky classic.', 10, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `game_tag`
--

CREATE TABLE `game_tag` (
  `game_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_tag`
--

INSERT INTO `game_tag` (`game_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 6),
(2, 7),
(2, 4),
(2, 10),
(2, 9),
(3, 5),
(3, 17),
(4, 14),
(4, 12),
(4, 13),
(4, 15),
(5, 18),
(5, 17),
(5, 20),
(5, 22),
(5, 21),
(6, 23),
(6, 24);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Point and click'),
(2, 'RPG'),
(3, 'Action'),
(4, 'Platformer'),
(5, 'Sports'),
(6, 'Puzzle'),
(7, 'Tower Defense'),
(8, 'Side-scrolling'),
(9, 'Fighting'),
(10, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`site_id`, `site_name`, `site_url`) VALUES
(1, 'Kongregate', 'https://www.kongregate.com/'),
(2, 'Newgrounds', 'https://www.newgrounds.com'),
(3, 'Armor Games', 'https://armorgames.com'),
(4, 'XGen Studios', 'http://www.xgenstudios.com'),
(5, 'PIXELJAM', 'https://www.pixeljam.com/'),
(6, 'Homestar Runner', 'homestarrunner.com');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`) VALUES
(1, 'EpicPlaya2014'),
(2, 'Swaginatorman'),
(3, ''),
(4, 'arachnidjds'),
(5, 'shade0180');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'Online save'),
(2, 'Fire'),
(3, 'Elephant'),
(4, 'Mining'),
(5, 'Upgrades'),
(6, 'Science Fiction'),
(7, 'Business'),
(9, 'Quest'),
(10, 'Medieval'),
(11, 'Game of the Year'),
(12, 'Dinosaur'),
(13, 'Pixel'),
(14, 'Running'),
(15, 'Keyboard only'),
(17, 'Fantasy'),
(18, 'Arena combat'),
(19, 'Gladiator'),
(20, 'Reaction time'),
(21, 'Sword'),
(22, 'Archery'),
(23, 'Parody'),
(24, 'Graphic adventure');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_first` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `login_name` varchar(100) NOT NULL,
  `user_pw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_last`, `user_first`, `user_email`, `login_name`, `user_pw`) VALUES
(1, 'Joseph', 'Tyler', 'tjoseph21@yahoo.com', 'tylerj', 'jkfsap304');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`creator_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `site_id` (`site_id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `game_tag`
--
ALTER TABLE `game_tag`
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `creator`
--
ALTER TABLE `creator`
  MODIFY `creator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`site_id`) REFERENCES `location` (`site_id`),
  ADD CONSTRAINT `games_ibfk_3` FOREIGN KEY (`creator_id`) REFERENCES `creator` (`creator_id`);

--
-- Constraints for table `game_tag`
--
ALTER TABLE `game_tag`
  ADD CONSTRAINT `game_tag_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`),
  ADD CONSTRAINT `game_tag_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
