-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Février 2018 à 14:59
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdbubuche`
--

CREATE DATABASE bdBubuche;
USE bdBubuche;

-- --------------------------------------------------------

--
-- Structure de la table `arbre`
--

CREATE TABLE `arbre` (
  `idArbre` int(11) NOT NULL,
  `hauteurEnM` int(11) DEFAULT NULL,
  `libelleFrancais` varchar(30) DEFAULT NULL,
  `datePlantation` date DEFAULT NULL,
  `commune` varchar(30) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `lattitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `idDom` int(11) DEFAULT NULL,
  `idEspece` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `arbre`
--

INSERT INTO `arbre` (`idArbre`, `hauteurEnM`, `libelleFrancais`, `datePlantation`, `commune`, `cp`, `lattitude`, `longitude`, `idDom`, `idEspece`) VALUES
(1, 0, 'Erable', '2018-02-05', 'Chevigny Saint Sauveur', '21800', NULL, NULL, 1, 1),
(2, 0, 'Marronnier', '2014-02-05', 'Dijon', '21000', NULL, NULL, 2, 2),
(3, 0, 'Noisetier de Byzance', '2018-02-05', 'Dijon', '21000', NULL, NULL, 2, 3),
(4, 9, 'Cyprès', '2014-07-05', 'Saint-Appolinaire', '21850', NULL, NULL, 2, 4),
(5, 0, 'Hêtre', '2018-07-05', 'Panthiers', '21320', NULL, NULL, 2, 6),
(6, 21, 'Platane', '2018-02-05', 'Quetigny', '21800', NULL, NULL, 2, 8),
(7, 5, 'Erable', '2017-02-05', 'Couternon', '21560', NULL, NULL, 3, 7),
(8, 5, 'Erable', '2018-02-05', 'Varois-et-Chaignot', '21490', NULL, NULL, 4, 7),
(9, 0, 'Platane', '2014-07-05', 'Dijon', '21000', NULL, NULL, 4, 9),
(10, 0, 'Platane', '0000-00-00', 'Dijon', '21000', NULL, NULL, 4, 9),
(11, 8, 'Tilleul', '0000-00-00', 'Belleneuve', '21310', NULL, NULL, 5, 10),
(12, 15, 'Erable', '0000-00-00', 'Dijon', '21000', NULL, NULL, 5, 7),
(13, 15, 'Platane', '2017-02-05', 'Pluvault', '21110', NULL, NULL, 6, 9),
(14, 10, 'Erable', '0000-00-00', 'Dijon', '21000', NULL, NULL, 6, 11),
(15, 15, 'Platane', '2018-07-05', 'Varanges', '21110', NULL, NULL, 6, 9),
(16, 11, 'Platane', '2018-07-05', 'Fauverney', '21110', NULL, NULL, 6, 9),
(17, 9, 'Platane', '2018-07-05', 'Dijon', '21000', NULL, NULL, 6, 9),
(18, 12, 'Platane', '2018-07-05', 'Dijon', '21000', NULL, NULL, 6, 9),
(19, 15, 'Platane', '2017-02-05', 'Chevigny Saint Sauveur', '21800', NULL, NULL, 6, 9),
(20, 11, 'Marronnier', '2018-02-05', 'Dijon', '21000', NULL, NULL, 6, 2),
(21, 5, 'Frêne', '2017-02-05', 'Panthiers', '21320', NULL, NULL, 6, 12),
(22, 10, 'Platane', '0000-00-00', 'Dijon', '21000', NULL, NULL, 6, 9),
(23, 18, 'Marronnier', '0000-00-00', 'Dijon', '21000', NULL, NULL, 2, 2),
(24, 0, 'Marronnier', '2018-02-05', 'Époisses', '21110', NULL, NULL, 2, 2),
(25, 5, 'Erable', '2018-02-05', 'Dijon', '21000', NULL, NULL, 6, 11),
(26, 3, 'Lilas des indes', '2018-02-05', 'Longvic', '21600', NULL, NULL, 2, 13),
(27, 5, 'Charme-Houblon', '2014-02-05', 'Longvic', '21600', NULL, NULL, 3, 14),
(28, 5, 'Erable', '0000-00-00', 'Dijon', '21000', NULL, NULL, 6, 1),
(29, 8, 'Sophora', '0000-00-00', 'Sennecey-lès-Dijon', '21800', NULL, NULL, 6, 15),
(30, 5, 'Tilleul', '2014-02-05', 'Dijon', '21000', NULL, NULL, 6, 10),
(31, 10, 'Tilleul', '2018-02-05', 'Pontailler-sur-Saône', '21270', NULL, NULL, 6, 16),
(32, 15, 'Peuplier', '2014-02-05', 'Dijon', '21000', NULL, NULL, 6, 17),
(33, 12, 'Orme', '2018-02-05', 'Auxonne', '21130', NULL, NULL, 1, 18),
(34, 10, 'Cedrele', '0000-00-00', 'Dijon', '21000', NULL, NULL, 7, 19),
(35, 13, 'Marronnier', '2017-02-05', 'Dijon', '21000', NULL, NULL, 3, 2),
(36, 13, 'Marronnier', '2017-02-05', 'Beaune', '21200', NULL, NULL, 6, 2),
(37, 10, 'Cedrele', '2018-02-05', 'Dijon', '21000', NULL, NULL, 6, 19),
(38, 8, 'Platane', '2018-02-05', 'Dijon', '21000', NULL, NULL, 6, 8),
(39, 7, 'Micocoulier', '2017-02-05', 'Dijon', '21000', NULL, NULL, 6, 20),
(40, 9, 'Poirier à fleurs', '2018-02-05', 'Dijon', '21000', NULL, NULL, 6, 21),
(41, 12, 'Mûrier', '0000-00-00', 'Corgonloin', '21700', NULL, NULL, 6, 22),
(42, 20, 'Peuplier', '0000-00-00', 'Dijon', '21000', NULL, NULL, 6, 23),
(43, 18, 'Tilleul', '0000-00-00', 'Dijon', '21000', NULL, NULL, 6, 16),
(44, 15, 'Tilleul', '2016-02-08', 'Sennecey-lès-Dijon', '21800', NULL, NULL, 6, 16),
(45, 12, 'Tulipier', '0206-02-08', 'Dijon', '21000', NULL, NULL, 6, 24),
(46, 5, 'Marronnier', '2016-02-08', 'Dijon', '21000', NULL, NULL, 6, 2),
(47, 10, 'Erable', '2016-02-08', 'Dijon', '21000', NULL, NULL, 6, 25),
(48, 0, 'Marronnier', '2016-02-08', 'Dijon', '21000', NULL, NULL, 6, 2),
(49, 7, 'Micocoulier', '2016-02-08', 'Dijon', '21000', NULL, NULL, 6, 20),
(50, 10, 'Noisetier de Byzance', '2016-02-08', 'Dijon', '21000', NULL, NULL, 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `domanialite`
--

CREATE TABLE `domanialite` (
  `idDom` int(11) NOT NULL,
  `libelleDom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `domanialite`
--

INSERT INTO `domanialite` (`idDom`, `libelleDom`) VALUES
(1, 'CIMETIERE'),
(2, 'JARDIN'),
(3, 'DASCO'),
(4, 'PERIPHERIQUE'),
(5, 'DJS'),
(6, 'ALIGNEMENT'),
(7, 'DFPE');

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

CREATE TABLE `espece` (
  `idEspece` int(11) NOT NULL,
  `libelleEspece` varchar(30) DEFAULT NULL,
  `idGenre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `espece`
--

INSERT INTO `espece` (`idEspece`, `libelleEspece`, `idGenre`) VALUES
(1, 'negundo', 1),
(2, 'hippocastanum', 2),
(3, 'colurna', 3),
(4, 'Cupressus', 4),
(5, 'sempervirens', 3),
(6, 'sylvatica', 5),
(7, 'platanoides', 1),
(8, 'orientalis', 6),
(9, 'x hispanica', 6),
(10, 'x europaea', 7),
(11, 'cappadocicum', 1),
(12, 'excelsior', 8),
(13, 'indica', 9),
(14, 'carpinifolia', 10),
(15, 'japonica', 11),
(16, 'tomentosa', 7),
(17, 'x canadensis', 12),
(18, 'ulmacées', 13),
(19, 'sinensis', 14),
(20, 'australis', 15),
(21, 'calleryana', 16),
(22, 'alba', 17),
(23, 'alba', 12),
(24, 'tulipifera', 18),
(25, 'saccharinum', 1);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL,
  `libelleGenre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `libelleGenre`) VALUES
(1, 'Acer'),
(2, 'Aesculus'),
(3, 'Corylus'),
(4, 'Cupressus'),
(5, 'Fagus'),
(6, 'Platanus'),
(7, 'Tilia'),
(8, 'Fraxinus'),
(9, 'Lagerstroemia'),
(10, 'Ostrya'),
(11, 'Sophora'),
(12, 'Populus'),
(13, 'Ulmus'),
(14, 'Toona'),
(15, 'Celtis'),
(16, 'Pyrus'),
(17, 'Morus'),
(18, 'Liriodendron');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE `intervention` (
  `idIntervention` int(11) NOT NULL,
  `dateIntervention` date DEFAULT NULL,
  `heureIntervention` time DEFAULT NULL,
  `observations` varchar(100) DEFAULT NULL,
  `idArbre` int(11) DEFAULT NULL,
  `idType` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idIntervention`, `dateIntervention`, `heureIntervention`, `observations`, `idArbre`, `idType`) VALUES
(1, '2012-11-25', '15:00:00', NULL, 1, 1),
(2, '2013-01-10', '10:00:00', 'Croissance convenable, aucune maladie à signaler', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `typeintervention`
--

CREATE TABLE `typeintervention` (
  `idType` int(11) NOT NULL,
  `libelleType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeintervention`
--

INSERT INTO `typeintervention` (`idType`, `libelleType`) VALUES
(1, 'Plantation'),
(2, 'Elagage'),
(3, 'Diagnostique'),
(4, 'Remplacement');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `arbre`
--
ALTER TABLE `arbre`
  ADD PRIMARY KEY (`idArbre`),
  ADD KEY `FK_arbre_idDom` (`idDom`),
  ADD KEY `FK_arbre_idEspece` (`idEspece`);

--
-- Index pour la table `domanialite`
--
ALTER TABLE `domanialite`
  ADD PRIMARY KEY (`idDom`);

--
-- Index pour la table `espece`
--
ALTER TABLE `espece`
  ADD PRIMARY KEY (`idEspece`),
  ADD KEY `FK_espece_idGenre` (`idGenre`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`idIntervention`),
  ADD KEY `FK_intervention_idArbre` (`idArbre`),
  ADD KEY `FK_intervention_idType` (`idType`);

--
-- Index pour la table `typeintervention`
--
ALTER TABLE `typeintervention`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `arbre`
--
ALTER TABLE `arbre`
  MODIFY `idArbre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `domanialite`
--
ALTER TABLE `domanialite`
  MODIFY `idDom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `espece`
--
ALTER TABLE `espece`
  MODIFY `idEspece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `idIntervention` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `typeintervention`
--
ALTER TABLE `typeintervention`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `arbre`
--
ALTER TABLE `arbre`
  ADD CONSTRAINT `FK_arbre_idDom` FOREIGN KEY (`idDom`) REFERENCES `domanialite` (`idDom`),
  ADD CONSTRAINT `FK_arbre_idEspece` FOREIGN KEY (`idEspece`) REFERENCES `espece` (`idEspece`);

--
-- Contraintes pour la table `espece`
--
ALTER TABLE `espece`
  ADD CONSTRAINT `FK_espece_idGenre` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`);

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `FK_intervention_idArbre` FOREIGN KEY (`idArbre`) REFERENCES `arbre` (`idArbre`),
  ADD CONSTRAINT `FK_intervention_idType` FOREIGN KEY (`idType`) REFERENCES `typeintervention` (`idType`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'adminBDbubuche'@'localhost' IDENTIFIED BY 'mdpBDbubuche';
GRANT ALL PRIVILEGES ON bdBubuche.* to "adminBDbubuche"@"localhost";

CREATE USER 'adminBDbubuche'@'%' IDENTIFIED BY 'mdpBDbubuche';
GRANT ALL PRIVILEGES ON bdBubuche.* to "adminBDbubuche"@"%";
