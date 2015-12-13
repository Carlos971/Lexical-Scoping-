-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 14 Décembre 2015 à 00:23
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `basedonneessiteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE IF NOT EXISTS `reunion` (
  `ID` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `nomequipe` varchar(30) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `reunion`
--

INSERT INTO `reunion` (`ID`, `nomequipe`, `topic`, `date`, `heure`) VALUES
(4, 'BONOFA CJ', 'commission', '2016-01-01', '10h00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
