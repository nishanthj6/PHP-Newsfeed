/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `newsfeed_database` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `newsfeed_database`;


CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` tinytext NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `author`, `title`, `text`, `date`, `likes`) VALUES
	(1, 'Nordh', 'nice', 'whoaaa wheres the boys at huuuh?', '2017-10-29', 0),
	(2, 'Jesus', 'BANG!', 'I just initlized the time. How great am i?<br><img src="https://upload.wikimedia.org/wikipedia/en/9/93/Buddy_christ.jpg" height="300px" width="200px">', '0000-00-00', 0),
	(3, 'batman', 'BATOEM (Bat Poem)', 'Breathe in your fears. Face them. To conquer fear, you must become fear. <br>\r\nYou must bask in the fear of other men. And men fear most what they cannot see. You have to become a terrible thought. A wraith. \r\nYou have to become an idea! Feel terror cloud your senses. Feel its power to distort. To control. And know that this power can be yours. <br><br>Embrace your worst fear. Become one with the darkness.', '2017-10-23', 0),
	(4, 'War Doctah', 'What is Life though?', 'Am I having a midlife crisis? Why are you pointing your screwdrivers like that? They\'re scientific instruments not water pistols! Why are you pointing your screwdrivers like that? They\'re scientific instruments, not water pistols. Great men are forged in fire. It is the privilege of lesser men to light the flame. Whatever the cost. Are you capable of speaking without flapping your hands about? Do you have to talk like children? What is it that makes you so ashamed of being a grown-up? Then, all things considered...it\'s time I grew up.', '2017-04-13', 0),
	(5, 'Vinkla', 'TURN IN THE ASSIGNMENT, PATRICNOX!', 'You should have been done with the assignment by now.', '2017-10-30', 0);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
