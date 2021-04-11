-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 11 avr. 2021 à 17:08
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
-- Base de données : `corona`
--

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `Id` int(20) NOT NULL,
  `Prenom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateDeNaissance` date NOT NULL,
  `LieuDeNaissance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CodePostal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateDeSortie` date NOT NULL,
  `HeureDeSortie` time NOT NULL,
  `Motif` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `attestation`
--

INSERT INTO `attestation` (`Id`, `Prenom`, `Nom`, `DateDeNaissance`, `LieuDeNaissance`, `Adresse`, `Ville`, `CodePostal`, `DateDeSortie`, `HeureDeSortie`, `Motif`) VALUES
(1, 'Camille', 'Dupond', '2021-04-23', 'Paris', '6 Rue dupont', 'Paris', '95200', '2021-04-07', '15:18:00', 'sante,famille,handicap,convocation,'),
(2, 'Camille', 'Dupond', '2021-04-23', 'Paris', '6 Rue dupont', 'Paris', '95200', '2021-04-07', '15:18:00', 'travail,sante,famille,handicap,convocation,missions,transits,animaux,'),
(3, 'Camille', 'Dupond', '2021-04-07', 'Paris', '6 Rue dupont', 'Paris', '95200', '2021-04-21', '15:18:00', 'travail,sante,famille,handicap,convocation,missions,transits,animaux,');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
