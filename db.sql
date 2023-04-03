-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 mars 2023 à 12:48
-- Version du serveur : 5.7.36
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `plusdimmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(225) DEFAULT NULL,
  `prenom` varchar(225) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` text,
  `datecreation` datetime DEFAULT NULL,
  `dateactivation` datetime DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`iduser`, `nom`, `prenom`, `username`, `email`, `password`, `datecreation`, `dateactivation`) VALUES
(1, 'teddy', 'ranto', 'rantoooo', 'ranto@gmail.com', '25278537fdfgd', NULL, NULL),
(2, 'teddy', 'teddy', 'teddy112', 'ezfzefze@gmail.com', 'azedaz28', NULL, NULL),
(3, 'zaboda', 'rakoto', 'rakotobe', 'rakoto@gmail.com', 'ghfft417', NULL, NULL),
(4, 'zean', 'pierra', 'pierrazean', 'pierra@gmail.com', '1425jkl', NULL, NULL),
(5, 'zorgety', 'bebe', 'boby', 'zorgety@gmail.com', '5815qsqssqq', NULL, NULL),
(6, 'kapsy', 'loko', 'fotsy', 'fosty@gmail.com', 'dqad4547', NULL, NULL),
(7, 'huile', 'eau', 'misaraka', 'huile@gmail.com', 'sqdqs', NULL, NULL),
(8, 'ordinatera', 'mafybe', 'cori7', 'tera@gmail.com', 'sdqcfsqd447', NULL, NULL),
(9, 'asus', 'acera', 'intel', 'acera@gmail.com', 'zdadaz1012', NULL, NULL),
(10, 'sakay', 'malemy', 'kely', 'sakay@gmail.com', 'dqaszdaq454', NULL, NULL),
(11, 'tes1', 'test1', 'tesoa', 'test@gmail.com', 'mkjljuil424', '2023-03-23 12:09:52', '2023-03-23 12:09:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
