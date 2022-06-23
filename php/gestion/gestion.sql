-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 déc. 2021 à 15:01
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idM` int(11) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `depart` date NOT NULL,
  `retour` date NOT NULL,
  `adultes` varchar(10) NOT NULL,
  `enfant` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idM`, `phone`, `prenom`, `nom`, `depart`, `retour`, `adultes`, `enfant`, `email`) VALUES
(14, '00000000', 'tommy', 'ramihoatrarivo', '0000-00-00', '0000-00-00', '2', '1', 'tommyramihoatrarivo@gmail.com'),
(15, '0345212260', 'jessy', 'ramihoatrarivo', '2021-12-03', '0000-00-00', '2', '2', 'jessyramihoatrarivo@gmail.com'),
(16, '0345212260', 'jessy', 'ramihoatrarivo', '2021-12-10', '2021-12-31', '1', '1', 'ony@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int(11) NOT NULL,
  `idM` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `idM`, `nom`, `message`) VALUES
(1, 1, 'John', 'Salut'),
(2, 1, 'John', 'comment allez vous?'),
(3, 6, 'Angela', 'Salut cv, et toi?'),
(4, 6, 'Angela', 'manahoana ianareo?'),
(5, 6, 'Angela', 'android\r\n'),
(6, 6, 'Angela', ':)'),
(7, 1, 'John', 'kaiza\r\n'),
(8, 6, 'Angela', 'siora'),
(9, 10, 'raveloson ', 'marin zany \r\n'),
(10, 11, 'ramihoatrarivo tommy', 'mafy zany \r\n'),
(11, 12, 'ismail', 'vody');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idM`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
