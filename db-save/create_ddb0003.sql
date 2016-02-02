-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2016 at 05:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `site_incidents`
--

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `id_incident` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `fk_pers` int(6) unsigned DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `severite` int(11) DEFAULT NULL,
  `pref` int(10) DEFAULT NULL,
  `srcImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_incident`),
  KEY `cfk_pers` (`fk_pers`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`id_incident`, `fk_pers`, `description`, `severite`, `pref`, `srcImage`) VALUES
(15, 98, 'sf', 2, 4, 'dsfsd'),
(16, 98, 'a description to debug', 0, 0, 'uploads/tralalera.jpg'),
(17, 98, 'sf', 2, 4, 'dsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `tel`) VALUES
(98, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(99, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(100, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(101, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(102, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(103, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(104, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(105, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(106, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(107, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(108, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(109, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(110, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(111, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(112, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(113, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(114, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(115, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(116, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(117, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(118, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(119, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000'),
(120, 'todebug', 'todebugSurname', 'todebug@mail.ciom', '0000000000');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `cfk_pers` FOREIGN KEY (`fk_pers`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
