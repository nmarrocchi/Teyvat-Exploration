-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 avr. 2021 à 23:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `teyvat_exploration`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

DROP TABLE IF EXISTS `characters`;
CREATE TABLE IF NOT EXISTS `characters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Element` varchar(30) NOT NULL,
  `Weapon_Type` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`ID`, `Name`, `Element`, `Weapon_Type`) VALUES
(1, 'Amber', 'Pyro', 'Bow'),
(2, 'Barbara', 'Hydro', 'Catalyst'),
(3, 'Beidou', 'Electro', 'Two Hand Sword'),
(4, 'Bennett', 'Pyro', 'One Hand Sword'),
(5, 'Chongyun', 'Cryo', 'Two Hand Sword'),
(6, 'Diona', 'Cryo', 'Bow'),
(7, 'Fishl', 'Electro', 'Bow'),
(8, 'Kaeya', 'Cryo', 'One Hand Sword'),
(9, 'Lisa', 'Electro', 'Catalyst'),
(10, 'Ningguang', 'Geo', 'Catalyst'),
(11, 'Noelle', 'Geo', 'Two Hand Sword'),
(12, 'Razor', 'Electro', 'Two Hand Sword'),
(13, 'Sucrose', 'Anemo', 'Catalyst'),
(14, 'Xiangling', 'Pyro', 'Spear'),
(15, 'Xingqiu', 'Hydro', 'One Hand Sword'),
(16, 'Xinyan', 'Pyro', 'Two Hand Sword'),
(17, 'Albedo', 'One Hand Sword', 'Geo'),
(18, 'Diluc', 'Two Hand Sword', 'Pyro'),
(19, 'Ganyu', 'Cryo', 'Bow'),
(20, 'Hu Tao', 'Pyro', 'Spear'),
(21, 'Jean', 'Anemo', 'One Hand Sword'),
(22, 'Klee', 'Pyro', 'Catalyst'),
(23, 'Keqing', 'Electro', 'One Hand Sword'),
(24, 'Mona', 'Hydro', 'Catalyst'),
(25, 'Qiqi', 'Cryo', 'One Hand Sword'),
(26, 'Tartaglia', 'Hydro', 'Bow'),
(27, 'Traveler (Geo)', 'Geo', 'One Hand Sword'),
(28, 'Traveler (Anemo)', 'Anemo', 'One Hand Sword'),
(29, 'Venti', 'Anemo', 'Bow'),
(30, 'Xiao', 'Anemo', 'Spear'),
(31, 'Zhongli', 'Geo', 'Spear'),
(32, 'Ayaka', 'Cryo', 'One Hand Sword');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, '0ver_Draw', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
