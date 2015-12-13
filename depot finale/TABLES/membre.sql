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
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `pseudo` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`) VALUES
(7, 'Test2', 'test2', 'test2', 'test2', 'test2@aol.fr'),
(5, 'ABASSI', 'Jonathan', 'john', 'john', 'john@aol.fr'),
(6, 'Test1', 'test1', 'test1', 'test1', 'test1@aol.fr'),
(4, 'CARLET', 'Medhy', 'medhy', 'medhy', 'medhy@aol.fr'),
(3, 'CARLET', 'Jean', 'jean', 'jean', 'jean@aol.fr'),
(2, 'CARLET', 'Jocelyne', 'jocelyne', 'jocelyne', 'jocelyne@aol.fr'),
(1, 'CARLET', 'Aimy', 'aimy', 'aimy', 'aimy@aol.fr'),
(21, 'bruno', 'immaculÃ©e', 'imma', 'IMMA', 'imma@aol.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
