-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 15 Mars 2021 à 23:53
-- Version du serveur :  10.1.48-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Teyvat_Exploration`
--

-- --------------------------------------------------------

--
-- Structure de la table `Characters`
--

CREATE TABLE `Characters` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Element` varchar(30) NOT NULL,
  `Weapon_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Characters`
--

INSERT INTO `Characters` (`ID`, `Name`, `Element`, `Weapon_Type`) VALUES
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
(11, 'Noëlle', 'Geo', 'Two Hand Sword'),
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
(27, 'Lumine', 'Anemo', 'One Hand Sword'),
(28, 'Aether', 'Geo', 'One Hand Sword'),
(29, 'Venti', 'Anemo', 'Bow'),
(30, 'Xiao', 'Anemo', 'Spear'),
(31, 'Zhongli', 'Geo', 'Spear');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Password`) VALUES
(1, '0ver_Draw', '1234');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Characters`
--
ALTER TABLE `Characters`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Characters`
--
ALTER TABLE `Characters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
