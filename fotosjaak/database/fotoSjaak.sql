-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 09:58 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `am1b-fotoSjaak`
--
CREATE DATABASE IF NOT EXISTS `am1b-fotoSjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b-fotoSjaak`;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `answer_english` text NOT NULL,
  `answer_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `answer_english`, `answer_dutch`) VALUES
(1, 'When is the game finished', 'Wanneer is het spel afgelopen', 'When the score is less then 0 point', 'Wanneer de score lager is dan 0 punten'),
(2, 'Is this game hard to play', 'Is het een moeilijk spel', 'Yes, this game is very hard to master', 'Ja, dit is een zeer complex spel'),
(3, 'is the game violent', 'is het spel geweldaadig', 'no, the game isnt violent', 'nee, het spel is niet geweldaadig'),
(4, 'is the game for free', 'is het spel gratis', 'yes, the game is free', 'ja, het spel is gratis'),
(5, 'is it a large game', 'is het spel groot', 'no, the game isnt large', 'nee, het het spel is niet groot'),
(6, 'does the game have a objective', 'heeft  het spel een doel', 'no, the game doesnt have a objective', 'nee, het spel heeft geen doel'),
(7, 'is the game downloadble', 'is het spel downloadable ', 'yes, on the download page', 'ja, op de download pagina'),
(8, 'is the game multiplayer', 'is het spel multiplayer', 'no, the game isnt multiplayer', 'nee, het het spel is niet multiplayer'),
(9, 'is the game for every age', 'is het spel voor elke leeftijd', 'no, the game is or every ege', 'ja, het het spel is voor elke leeftijd'),
(10, 'does the game gets more updates', 'word het spel geupdate', 'no, no is isnt', 'nee, dat word het niet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `city` varchar(163) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `street` varchar(163) NOT NULL,
  `house_number` int(4) NOT NULL,
  `birthday` date NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `game_type` enum('no_choice','fps','strategy','adventure','rpg','horror','retro','sport','puzzle','party','casual','education') NOT NULL,
  `favo_game` varchar(300) NOT NULL,
  `userrole` enum('customer','admin','root') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `city`, `zip_code`, `street`, `house_number`, `birthday`, `sex`, `email`, `password`, `game_type`, `favo_game`, `userrole`) VALUES
(35, 'customer', 'de', 'customer', 'CustomerStad', '1901CB', 'customerstraat', 17, '1901-01-01', 'male', 'customer@gmail.com', 'geheim', 'casual', 'IloMilo', 'customer'),
(36, 'Admin', 'de', 'Admin', 'Adminstad', '1901CB', 'Adminstraat', 17, '1990-01-01', 'male', 'admin@gmail.com', 'geheim', 'puzzle', 'Tomb Raider', 'admin'),
(37, 'Root', 'de', 'Root', 'Rootstad', '1901CB', 'Rootstraat', 12, '1990-01-01', 'male', 'root@gmail.com', 'geheim', 'retro', 'IloMilo', 'root'),
(39, 'pieter', '', '', '', '', '', 3, '0000-00-00', 'male', 'aap@artis.com', 'lol', 'strategy', 'age of war', 'customer'),
(40, 'piet', 'van de', 'berg', 'naarde', '1245AP', 'lindelaan', 15, '2002-01-09', 'male', 'pietvandeberg@gmail.com', 'vis', 'puzzle', 'maplestory', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
