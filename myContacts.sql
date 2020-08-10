-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 10 août 2020 à 16:40
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contacts`
--

-- --------------------------------------------------------

--
-- Structure de la table `myContacts`
--

CREATE TABLE `myContacts` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `myContacts`
--

INSERT INTO `myContacts` (`id`, `name`, `tel`, `mail`, `picture`) VALUES
(1, 'tarik', '0763740559', 'prince@gmail.com', 'image1.jpg'),
(5, 'the Great Sam', '0645845847', 'sam@gmail.com', 'image2.jpg'),
(6, 'peter', '0745421254', 'pete@gmail.com', 'image3.jpg'),
(10, 'john', '0608021545', 'john@gmail.com', 'image4.jpg'),
(12, 'aurelien', '0647498426', 'aurelien@gmail.com', 'image5.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `myContacts`
--
ALTER TABLE `myContacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `myContacts`
--
ALTER TABLE `myContacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
