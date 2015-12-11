-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Décembre 2015 à 11:33
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
-- Structure de la table `chefequipe`
--

CREATE TABLE IF NOT EXISTS `chefequipe` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `nomEquipe` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `chefequipe`
--

INSERT INTO `chefequipe` (`ID`, `nom`, `prenom`, `nomEquipe`) VALUES
(3, 'ABASSI', 'Jonathan', 'INSAA');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`ID`, `nomEquipe`, `nomChefEquipe`, `prenomChefEquipe`) VALUES
(2, 'Esigelec', 'CARLET', 'Aimy'),
(3, 'BONOFA CJ', 'CARLET', 'Jocelyne'),
(7, 'INSAA', 'ABASSI', 'Jonathan');

-- --------------------------------------------------------

--
-- Structure de la table `equipier`
--

CREATE TABLE IF NOT EXISTS `equipier` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `nomEquipe` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `pseudo`, `password`, `email`) VALUES
(13, 'CARLET', 'Aimy', 'Menou', '5f4dcc3b5a', 'carletaimy@aol.fr'),
(14, 'CARLET', 'Jocelyne', 'Joce', 'ca2d4be080', 'joce@aol.fr'),
(15, 'ABASSI', 'Jonathan', 'John', '202cb962ac', 'Anna@aol.fr'),
(16, 'CARLET', 'Jean', 'Jean', '123', 'jean@aol.fr'),
(18, 'niane', 'mame diarra', 'chipiniane', 'df86158c63', 'mamediarraniane@gmail.com'),
(19, 'test', 'test', 'test', 'test', 'test@test'),
(20, 'CARLET', 'Medhy', 'dydy', '81dc9bdb52', 'joce@aol.fr');

-- --------------------------------------------------------

--
-- Structure de la table `postulant`
--

CREATE TABLE IF NOT EXISTS `postulant` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `raison` text NOT NULL,
  `nomEquipe` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `postulant`
--

INSERT INTO `postulant` (`ID`, `nom`, `prenom`, `raison`, `nomEquipe`) VALUES
(1, 'ABASSI', 'Jonathan', 'aaaaa', 'Esigelec'),
(2, 'ABASSI', 'Jonathan', 'Je suis motiv&eacute; !', 'Esigelec'),
(3, 'CARLET', 'Jean', 'Je suis prof.', 'Esigelec');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `reunion`
--

INSERT INTO `reunion` (`ID`, `nomequipe`, `topic`, `date`, `heure`) VALUES
(1, 'Esigelec', 'ping', '2015-12-20', '12h00'),
(2, 'BONOFA JC', 'commission', '2015-12-15', '19h30'),
(3, 'Esigelec', 'Double diplome', '2016-01-12', '8h00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
