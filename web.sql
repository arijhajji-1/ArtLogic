-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 02 mai 2021 à 14:50
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `IdActualite` int NOT NULL AUTO_INCREMENT,
  `TitreActualite` varchar(30) DEFAULT NULL,
  `DateActualite` date DEFAULT NULL,
  `DescriptionActualite` varchar(150) DEFAULT NULL,
  `ImageActualite` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdActualite`)
) 
--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`IdActualite`, `TitreActualite`, `DateActualite`, `DescriptionActualite`, `ImageActualite`) VALUES
(1, 'Actualite1test', '2021-05-22', 'Description Actualite 123 ', 'showcase_2_img_6@2x.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `NomC` varchar(40) NOT NULL,
  `Id_categorie` int NOT NULL AUTO_INCREMENT,
  `DescriptionC` varchar(40) NOT NULL,
  PRIMARY KEY (`NomC`),
  UNIQUE KEY `Id_categorie` (`Id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`NomC`, `Id_categorie`, `DescriptionC`) VALUES
('souf', 4, 'mamou'),
('tapis', 1, 'lux'),
('vetement', 2, 'zvenden1'),
('zarbiya', 3, 'lixlox');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `prix_total` int NOT NULL,
  `mode_de_payement` varchar(20) NOT NULL,
  `description_commande` varchar(255) NOT NULL,
  `produits` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `IdEvenement` int NOT NULL AUTO_INCREMENT,
  `TitreEvenement` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LieuEvenement` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateEvenement` date NOT NULL,
  `DureeEvenement` int NOT NULL,
  `DescriptionEvenement` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ImageEvenement` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`IdEvenement`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`IdEvenement`, `TitreEvenement`, `LieuEvenement`, `DateEvenement`, `DureeEvenement`, `DescriptionEvenement`, `ImageEvenement`) VALUES
(26, 'Galerie123 ', 'ariana', '2022-08-31', 2, 'azeEt il est très facile de rendre raison de ce que j\'avance. Car, lorsque nous sommes tout à fait libres, ', 'showcase_2_img_6.jpg'),
(29, 'Okok', 'beja', '2021-08-13', 4, 'azeEEAZEAZEAZEaeza', 'showcase_2_img_6@2x.jpg'),
(30, 'Azze', 'tunis', '2021-05-21', 3, 'PAOALZAEAZEAPZE', 'pricing_table_4_bg.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `IDlivraison` int NOT NULL AUTO_INCREMENT,
  `IDproduit` int NOT NULL,
  `Nomcat` text NOT NULL,
  `IDclient` int NOT NULL,
  `NUMclient` int NOT NULL,
  PRIMARY KEY (`IDlivraison`)
) ENGINE=MyISAM AUTO_INCREMENT=12345679 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`IDlivraison`, `IDproduit`, `Nomcat`, `IDclient`, `NUMclient`) VALUES
(6844, 984, '8949', 44, 984),
(6969969, 78787878, 'FOKHAR', 26565, 8),
(12345678, 12345678, 'sejir', 98765431, 55454);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `IDlivreur` int NOT NULL AUTO_INCREMENT,
  `Nomlivreur` text NOT NULL,
  `Matricule` text NOT NULL,
  `Numlivreur` text NOT NULL,
  `Zone` varchar(20) NOT NULL,
  PRIMARY KEY (`IDlivreur`)
) ENGINE=MyISAM AUTO_INCREMENT=98653215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`IDlivreur`, `Nomlivreur`, `Matricule`, `Numlivreur`, `Zone`) VALUES
(98653214, 'SAAAD', 'A98SEVRG', 'Nabeul', '78452396'),
(78451265, 'ahmed', 'A16484DSF', 'MÃ©denine', '20335009'),
(123456, 'srij', 'edada484', 'Bizerte', 'edada484'),
(48548, 'F', '7', 'Ariana', '95'),
(54949, '', '', 'Ariana', ''),
(656, '', '', 'Ariana', ''),
(12345679, 'SEJIRFF', 'APOEFES65', 'Ariana', '99335009');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_produit` int NOT NULL,
  `id_client` int NOT NULL,
  `quantite` int NOT NULL,
  `prix_total` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id_produit` int NOT NULL AUTO_INCREMENT,
  `NomP` varchar(40) NOT NULL,
  `DateA` varchar(40) NOT NULL,
  `Description1` varchar(40) NOT NULL,
  `Genre` varchar(40) NOT NULL,
  `Couleur` varchar(40) NOT NULL,
  `Taille` varchar(40) NOT NULL,
  `poids` float NOT NULL,
  `Prix` float NOT NULL,
  `Quantite` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_produit`),
  KEY `catprod` (`Genre`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `NomP`, `DateA`, `Description1`, `Genre`, `Couleur`, `Taille`, `poids`, `Prix`, `Quantite`, `image`) VALUES
(30, 'zarbia', '12-12-2010', 'piwpiw', 'tapis', 'rouge', '11', 1, 60, 1, ''),
(35, 'safseri', '2021-04-16', 'hello', 'vetement', 'bleu', '11', 22, 45, 55, 'logo.png'),
(36, 'tapis', '12-12-2010', 'eaeazea', 'zarbiya', 'bleu', '11', 10, 55, 8, ''),
(37, 'tapis2', '2021-04-09', 'jamila', 'zarbiya', 'violet', '12', 50, 11, 44, 'sh1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `reference` int NOT NULL AUTO_INCREMENT,
  `pr` int NOT NULL,
  `dateDebut` varchar(20) NOT NULL,
  `dateFin` varchar(20) NOT NULL,
  `pourcentage` int NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `pr` (`pr`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`reference`, `pr`, `dateDebut`, `dateFin`, `pourcentage`) VALUES
(38, 36, '3/4/2021', '5/6/2021', 10),
(24, 35, '21/3/2020', '22/4/2020', 20),
(22, 35, '21/3/2020', '22/4/2020', 20),
(20, 35, '22/1/2020', '26/1/2020', 40),
(27, 30, '22/1/2020', '26/2/2020', 40),
(28, 30, '22/1/2020', '26/2/2020', 40),
(29, 30, '22/1/2020', '26/2/2020', 40),
(30, 30, '22/1/2020', '26/2/2020', 40),
(31, 30, '22/1/2020', '26/2/2020', 40),
(32, 30, '22/1/2020', '26/2/2020', 80),
(35, 35, '20/10/2020', '20/11/2020', 50),
(36, 30, '20/10/2020', '20/11/2020', 50),
(37, 0, '20/10/2020', '23/1/2021', 30);

--
-- Déclencheurs `promotion`
--
DROP TRIGGER IF EXISTS `update_promotion`;
DELIMITER $$
CREATE TRIGGER `update_promotion` AFTER INSERT ON `promotion` FOR EACH ROW update produit set Prix=Prix-(pourcentage*Prix)/100  where pr=Id_produit
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int NOT NULL AUTO_INCREMENT,
  `id_client` int NOT NULL,
  `date_reclamation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description_reclamation` varchar(50) NOT NULL,
  `type_reclamation` varchar(20) NOT NULL,
  `etat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'non regle',
  PRIMARY KEY (`id_reclamation`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `id_client`, `date_reclamation`, `description_reclamation`, `type_reclamation`, `etat`) VALUES
(1, 123, '2021-04-24 23:27:46', 'rzerzer', 'retour', 'non regle'),
(19, 225, '2021-05-02 14:06:27', 'ya raaaaaaaaaaaabiiiiiiiiii', 'ahlla wasahla', 'non regle'),
(18, 225, '2021-05-02 14:05:34', 'sssssssssssssss', 'sssssssssssss', 'non regle'),
(17, 0, '2021-05-02 14:04:00', 'dddd', 'ddd', 'non regle'),
(13, 0, '2021-05-01 13:40:25', 'ghgfhfg', 'hello', 'non regle'),
(14, 0, '2021-05-01 15:55:01', 'fsdfsdf', 'afdsf', 'non regle'),
(15, 0, '2021-05-01 16:24:32', 'dfsdf', 'fdsfd', 'non regle'),
(16, 0, '2021-05-01 17:35:37', 'dsfsdfs', 'dsdsfds', 'regle');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(20) NOT NULL,
  `prenom_user` varchar(20) NOT NULL,
  `Email_user` varchar(50) NOT NULL,
  `pseudo_user` varchar(20) NOT NULL,
  `Role_user` varchar(1) NOT NULL,
  `mot_de_passe` varchar(25) NOT NULL,
  `sexe_user` varchar(10) NOT NULL,
  `date_de_naissance_user` date NOT NULL,
  `adresse_user` varchar(100) NOT NULL,
  `cree_a_user` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `matricule_fiscale_user` int DEFAULT NULL,
  `numero_telephone_user` int DEFAULT NULL,
  `type_produit` varchar(30) NOT NULL,
  `unique_id` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=291 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `Email_user`, `pseudo_user`, `Role_user`, `mot_de_passe`, `sexe_user`, `date_de_naissance_user`, `adresse_user`, `cree_a_user`, `matricule_fiscale_user`, `numero_telephone_user`, `type_produit`, `unique_id`, `status`, `img`) VALUES
(289, 'sejir', 'bali', 'sejir.bali@esprit.tn', 'sajour', '2', 'sousou2015', 'male', '1998-03-21', 'Laouina', '2021-04-29 00:00:00', 0, 96587412, 'NULL', 0, '', ''),
(288, 'Fourat', 'Halaoua', 'fourathalawa2000@gmail.com', 'fourat15', '0', 'qsdfghjk', 'male', '2000-11-24', 'mourouj 1,ben arouss, tunisie', '2021-04-29 00:00:00', 0, 99626324, 'NULL', 0, '', ''),
(286, 'arij', 'hajji', 'arij.hajji@esprit.tn', 'arij15', '2', 'arij2121', 'female', '1999-04-15', 'jandouba', '2021-04-29 00:00:00', 0, 99999999, 'NULL', 0, '', ''),
(225, 'Fourat', 'Halaoua', 'fourat.halaoua@esprit.tn', 'azertyui', '1', 'azertyui', 'male', '2002-04-01', 'mourouj 1,ben arouss, tunisie', '0000-00-00 00:00:00', 254, 99626324, 'tapis', 0, '', ''),
(237, 'mayamen', 'Halaoua', 'mayamen.halaoua@esprit.tn', 'mayamen20', '0', 'azerty15', 'female', '1996-03-30', 'mourouj 1,ben arouss, tunisie', '0000-00-00 00:00:00', 0, 2541, 'NULL', 0, '', ''),
(244, 'aziz', 'ammar', 'aziz.ammar@esprit.tn', 'azouz', '0', 'azsd2015', 'male', '1985-04-15', 'azer', '0000-00-00 00:00:00', 0, 25487965, 'NULL', 0, '', ''),
(290, 'Arij', 'Hajji', 'arij.hajji@esprit', 'arij22', '0', 'arij1234', 'Female', '2019-06-18', 'jendouba', '2021-05-01 01:18:32', 215, 2222222, 'tapis', 125, 'Offline', '161961613420200608_150615.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `wishliste`
--

DROP TABLE IF EXISTS `wishliste`;
CREATE TABLE IF NOT EXISTS `wishliste` (
  `id_wishlist` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_produit` int NOT NULL,
  PRIMARY KEY (`id_wishlist`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `wishliste`
--

INSERT INTO `wishliste` (`id_wishlist`, `id_user`, `id_produit`) VALUES
(6, 235, 1),
(7, 235, 5),
(8, 235, 6),
(13, 237, 5),
(14, 225, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `catprod` FOREIGN KEY (`Genre`) REFERENCES `categorie` (`NomC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
