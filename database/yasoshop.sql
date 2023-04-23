-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 avr. 2023 à 22:00
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yasoshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `description`, `date_creation`, `icone`) VALUES
(1, 'Parfumerie', 'les parfums editon yaso collection sont à la fois doux et efficace avec des odeurs à couper le souffle assorti a vos plus importantes sorties', '2023-04-03 16:08:05', ''),
(2, 'Horlogerie', 'Les montres edition yaso collection ressortant avec un style classe et luxueux', '2023-04-03 16:04:08', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_client` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `valide` int NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_client`, `total`, `valide`, `date_creation`) VALUES
(1, 2, '40', 0, '2023-04-03 16:03:26'),
(2, 1, '80', 0, '2023-04-04 16:05:10'),
(3, 2, '40', 0, '2023-04-05 16:09:25'),
(4, 2, '40', 0, '2023-04-05 13:08:14');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_produit` int NOT NULL,
  `id_commande` int NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `quantite` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ligne_commande_ibfk_1` (`id_commande`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id`, `id_produit`, `id_commande`, `prix`, `quantite`, `total`) VALUES
(1, 2, 1, '40', 1, '40'),
(2, 2, 2, '40', 2, '80'),
(3, 2, 3, '40', 1, '40'),
(4, 2, 4, '40', 1, '40');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix` int NOT NULL,
  `discount` int NOT NULL,
  `id_categorie` int NOT NULL,
  `date_creation` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie_produit` (`id_categorie`)
 ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `discount`, `id_categorie`, `date_creation`, `description`, `image`) VALUES
(21, 'Horlogerie', '129', '0', '6', '2023-03-24 15:14:22', 'Montre G-Shock Noir GA-B001-1AER', 'montre-g-shock-noir-ga-b001-1aer-casio-g-shock.webp'),
(25, 'Horlogerie', '299', '0', '6', '2023-03-17 22:17:44', 'Montre GW-3000M-4AER', 'montre-casio-g-shock-gw-3000m-4aer.webp'),
(26, 'Horlogerie', '920', '0', '6', '2023-03-07 18:24:12', 'Montre GWG-2040FR-1AER', 'montre-gwg-2040fr-1aer-casio-g-shock.webp'),
(28, 'Horlogerie', '160', '0', '8', '2023-03-10 15:17:44', 'Montre GM-6900B-4ER', 'montre-gm-6900b-4er-casio-g-shock.webp'),
(29, 'Horlogerie', '132', '0', '1', '2023-03-08 20:17:54', 'Montre Street Spirit GA-110SS-1AER', 'montre-street-spirit-ga-110ss-1aer-casio-g-shock.webp'),
(30, 'Horlogerie', '175', '0', '1', '2023-03-04 16:28:19', 'Montre GM-5600G-9ER', 'montre-gm-5600g-9er-casio-g-shock.webp'),
(31, 'Parfumerie', '81', '0', '1', '2023-03-07 12:39:22', 'Yves Saint Laurent La Nuit de LHomme Le Parfum Eau de Parfum', 'shopping.png'),
(27, 'Parfumerie', '104', '0', '1', '2023-03-09 17:45:42', 'Tom Ford Black Orchid Eau De Parfum', 'Untitled.jpg'),
(24, 'Parfumerie', '199', '0', '1', '2023-03-19 19:14:33', 'Eau de parfum Madawi 90ml – Arabian Oud', 'parfum-madawi-arabian-oud.jpg'),
(20, 'Parfumerie', '20', '0', '1', '2023-03-17 10:14:28', 'Eau de parfum Iconic Oud 65ml – El Nabil', 'parfum-iconic-oud-el-nabil-dubai-collection.jpg.webp'),
(19, 'Parfumerie', '53', '0', '1', '2023-03-17 15:19:36', 'Guerlain LHomme Idéal Eau de Toilette', '3346470301863_1.jpg'),
(18, 'Parfumerie', '82', '0', '1', '2023-03-17 15:14:22', 'Le Male Le Parfum ', '515090_swatch.webp');



-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `date_creation`) VALUES
(1, 'yassine', '$2y$10$rv7N1uE0HQozoXJHOtCeheTmg4e99jxv3Qd5bfgke34.NnymEZNOe', '2023-04-02'),
(2, 'admin', '$2y$10$Pxiqjdv6X6PVu6azr.bH/uqwX8uD50sTA3UXMo2O8VCFZ11D1PhEK', '2023-04-02'),
(3, 'yassine', '$2y$10$5A/rRBlyqk8cHLA4uHLimOi5FQJwKZfV4LdL34r7P8MpkapqeHnC6', '2023-04-03'),
(4, 'Sofiane', '$2y$10$5rHVoA70fkPOdPDCtJjk2.znTbE7Raks27rfmJ2UNU8V/a6NnSkuC', '2023-04-03'),
(5, 'yassine', '$2y$10$aBXGxIB0qSAaDS7l03YOeufpwYG.NJE6hPBwSQWss9LrWY.XEcmmq', '2023-04-03');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
 COMMIT;
--
-- Contraintes pour la table `produit`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
