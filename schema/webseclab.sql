-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2015 at 04:07 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webseclab`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passwd` varchar(35) NOT NULL,
  `codigo` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`admin_id`, `nome`, `email`, `passwd`, `codigo`) VALUES
(1, 'padilha', 'padilha@test.com', 'padilha123', 79797987);

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `comentario_id` int(5) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(5) NOT NULL,
  `noticia_id` int(5) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`comentario_id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `noticia_id` (`noticia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `noticia_id` int(5) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(144) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(45) NOT NULL,
  PRIMARY KEY (`noticia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  `codigo` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `email`, `passwd`, `codigo`) VALUES
(1, 'John', 'john@usermail.com', 'pwdtest', 271828178);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`noticia_id`) REFERENCES `noticia` (`noticia_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
