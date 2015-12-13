-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 14 Décembre 2015 à 00:22
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
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomEquipe` varchar(30) NOT NULL,
  `nomChefEquipe` varchar(15) NOT NULL,
  `prenomChefEquipe` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`ID`, `nomEquipe`, `nomChefEquipe`, `prenomChefEquipe`) VALUES
(8, 'BONOFA CJ', 'CARLET', 'Jocelyne'),
(9, 'Esigelec', 'ABASSI', 'Jonathan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
