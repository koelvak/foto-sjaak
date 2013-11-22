-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2013 at 10:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `am1b`
--
CREATE DATABASE IF NOT EXISTS `am1b` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b`;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `city`) VALUES
(1, 'd', 'd', 'd', 'd'),
(2, 'd', 'd', 'd', 'd');
--
-- Database: `klas`
--
CREATE DATABASE IF NOT EXISTS `klas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `klas`;

-- --------------------------------------------------------

--
-- Table structure for table `klas`
--

CREATE TABLE IF NOT EXISTS `klas` (
  `klasafk` varchar(5) NOT NULL DEFAULT '',
  `omschrijving` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`klasafk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klas`
--

INSERT INTO `klas` (`klasafk`, `omschrijving`) VALUES
('AM1A', 'programmeurs'),
('AM1B', 'programmeurs'),
('AM1C', 'programmeurs'),
('AM1D', 'programmeurs');

-- --------------------------------------------------------

--
-- Table structure for table `leerling`
--

CREATE TABLE IF NOT EXISTS `leerling` (
  `naam` varchar(45) NOT NULL DEFAULT '',
  `klasafk` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`naam`),
  KEY `klasafk` (`klasafk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leerling`
--

INSERT INTO `leerling` (`naam`, `klasafk`) VALUES
('Kjell', 'AM1B'),
('Martijn', 'AM1B'),
('Mitchell', 'AM1B');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leerling`
--
ALTER TABLE `leerling`
  ADD CONSTRAINT `leerling_ibfk_1` FOREIGN KEY (`klasafk`) REFERENCES `klas` (`klasafk`);
--
-- Database: `selma`
--
CREATE DATABASE IF NOT EXISTS `selma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `selma`;

-- --------------------------------------------------------

--
-- Table structure for table `werknemer`
--

CREATE TABLE IF NOT EXISTS `werknemer` (
  `wnr` varchar(10) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `voorletters` varchar(10) NOT NULL,
  `voorvoegsel` varchar(10) DEFAULT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `datum_in_dienst` varchar(8) NOT NULL,
  `sal` varchar(12) DEFAULT NULL,
  `chef` varchar(10) DEFAULT NULL,
  `sofinummer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`wnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
