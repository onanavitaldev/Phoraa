-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 juin 2024 à 16:27
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phoraa`
--

-- --------------------------------------------------------

--
-- Structure de la table `all_img`
--

CREATE TABLE `all_img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `theDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `all_img`
--

INSERT INTO `all_img` (`id`, `title`, `category`, `img_path`, `theDate`) VALUES
(14, 'Liberté des esclaves noirs', 'Humains', 'Phoraa/_We Shall Overcome_ Gesture.jpg', '2024-05-26'),
(15, 'Un magnifique paysage aux Philipines', 'Nature', 'Phoraa/wp7542107-mac-os-4k-wallpapers.jpg', '2024-05-26'),
(16, 'Un aprçu du désert du Sahara en pleinenuit', 'Nature', 'Phoraa/wp3268406-mac-os-4k-wallpapers.jpg', '2024-05-26'),
(17, 'Le building 95 de Microsoft à Seattle aux USA', 'IA', 'Phoraa/Building_95.jpg', '2024-05-26'),
(18, 'Reconnaissance audio avec l&#039;IA de OpenIA', 'IA', 'Phoraa/vall-e-microsoft.jpg', '2024-05-26'),
(19, 'Des jeunes camerounais passionnés par la technologie', 'Humains', 'Phoraa/WhatsApp Image 2022-12-21 at 09.31.19.jpeg', '2024-05-26'),
(20, 'Un noir en pleine reflexion sur le Design d&#039;un site web', 'Humains', 'Phoraa/work.jpg', '2024-06-08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `all_img`
--
ALTER TABLE `all_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `all_img`
--
ALTER TABLE `all_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
