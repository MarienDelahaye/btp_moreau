-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 03 oct. 2017 à 09:43
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `btpmoreau`
--

-- --------------------------------------------------------

--
-- Structure de la table `db_btp`
--

CREATE TABLE `db_btp` (
  `user` varchar(255) NOT NULL,
  `task` text NOT NULL,
  `description` text NOT NULL,
  `deadline` text NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `db_btp`
--

INSERT INTO `db_btp` (`user`, `task`, `description`, `deadline`, `project_title`, `id`) VALUES
('Froid', 'Froid', 'Froid', 'Froid', 'Froid', 8),
('Froid', 'Froid', 'Froid', 'Froid', 'Froid', 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `db_btp`
--
ALTER TABLE `db_btp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `db_btp`
--
ALTER TABLE `db_btp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
