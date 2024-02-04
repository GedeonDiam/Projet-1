-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 04 fév. 2024 à 00:14
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `booktop`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id_livre` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `id_genre` int NOT NULL,
  `id_edition` int NOT NULL,
  PRIMARY KEY (`id_livre`),
  KEY `livre_genre_FK` (`id_genre`),
  KEY `livre_edition0_FK` (`id_edition`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre`, `prix`, `auteur`, `id_genre`, `id_edition`) VALUES
(1, 'Le gentil chat', 5, 'moi', 5, 8),
(2, 'le gros chien sympa qui dit bonjour', 12, 'encore moi', 1, 7),
(3, 'Mystères du clair de lune', 10, 'Alice Dupont', 1, 2),
(4, 'Voyage vers l inconnu', 15, 'John Martin', 2, 3),
(5, 'Au-delà des étoiles', 20, 'Sophie Tremblay', 3, 4),
(6, 'L île aux trésors perdus', 25, 'Alexandre Leclerc', 4, 5),
(7, 'L enfant de la prophétie', 30, 'Isabelle Rocher', 5, 6),
(8, 'Secret des forêts magiques', 35, 'Martin Laroche', 1, 7),
(9, 'Amour en mille couleurs', 40, 'Catherine Girard', 2, 8),
(10, 'Ombre du passé', 45, 'Philippe Moreau', 3, 9),
(11, 'Destin de l humanité', 50, 'François Marchand', 4, 10),
(12, 'Ailes du temps', 55, 'Sylvie Lemoine', 5, 11),
(13, 'Rêves oubliés', 60, 'Jean Dufour', 1, 12),
(14, 'Jardin des illusions', 65, 'Caroline Robert', 2, 13),
(15, 'Chant des étoiles', 70, 'David Fournier', 3, 14),
(16, 'Piège du silence', 75, 'Isabelle Lefevre', 4, 15),
(17, 'Royaume des chimères', 80, 'Marc Roux', 5, 16),
(18, 'Éclats de lumière', 85, 'Anne Legrand', 1, 17),
(19, 'Ombres du passé', 90, 'Philippe Moreau', 2, 18),
(20, 'Mystères de l au-delà', 95, 'Catherine Girard', 3, 19),
(21, 'Quête du Graal', 100, 'François Marchand', 4, 20),
(22, 'Secret des fleurs enchantées', 105, 'Sylvie Lemoine', 5, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_edition0_FK` FOREIGN KEY (`id_edition`) REFERENCES `edition` (`id_edition`),
  ADD CONSTRAINT `livre_genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
