-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 24 mai 2020 à 09:12
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `personnalwebsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `mail`, `password`, `date`) VALUES
(1, 'Philippe', 'philippe.frager@wanadoo.fr', '$2y$10$ANpMfK61ApamUM9Wlm3UBeRiJ4UYh6VeiZoz0RZ8/a8d3LpCd4PGC', '2020-04-29'),
(2, 'Olivier', 'olivier.frager@wanadoo.fr', '$2y$10$hQIi1csQ6V2pnKvzg3lXbe.8GCrmEu7SiWBFXulwlf10GpmLIMi/C', '2020-04-29'),
(3, 'Monique', 'monique.dutreux@wanadoo.fr', '$2y$10$/imL2GkjEcjA5DiQ7x.7v.6UkynyXt837Fo/I9T2F.ighlMX1ScNK', '2020-05-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
