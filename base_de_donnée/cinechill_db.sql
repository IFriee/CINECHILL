-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 déc. 2022 à 13:32
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinechill`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande_tab`
--

CREATE TABLE `commande_tab` (
  `id_commande` int(11) NOT NULL,
  `fk_user_commande` int(11) DEFAULT NULL,
  `fk_projection_commande` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `film_tab`
--

CREATE TABLE `film_tab` (
  `id_film` int(11) NOT NULL,
  `nom_film` varchar(50) DEFAULT NULL,
  `auteur_film` varchar(50) DEFAULT NULL,
  `duree_film` time DEFAULT NULL,
  `fk_genre_film` int(11) DEFAULT NULL,
  `date_sortie_film` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film_tab`
--

INSERT INTO `film_tab` (`id_film`, `nom_film`, `auteur_film`, `duree_film`, `fk_genre_film`, `date_sortie_film`) VALUES
(1, 'pretty women', 'louis', '01:30:00', 1, '2012-11-04');

-- --------------------------------------------------------

--
-- Structure de la table `genre_tab`
--

CREATE TABLE `genre_tab` (
  `id_genre` int(11) NOT NULL,
  `nom_genre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `genre_tab`
--

INSERT INTO `genre_tab` (`id_genre`, `nom_genre`) VALUES
(1, 'romance'),
(2, 'romance');

-- --------------------------------------------------------

--
-- Structure de la table `image_tab`
--

CREATE TABLE `image_tab` (
  `id_image` int(11) NOT NULL,
  `fk_film_image` int(11) DEFAULT NULL,
  `nom_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `place_count_tab`
--

CREATE TABLE `place_count_tab` (
  `id_place_count` int(11) NOT NULL,
  `total_place_count` int(11) DEFAULT NULL,
  `left_place_count` int(11) DEFAULT NULL,
  `fk_projection_place_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projection_tab`
--

CREATE TABLE `projection_tab` (
  `id_projection` int(11) NOT NULL,
  `fk_salle_projection` int(11) DEFAULT NULL,
  `fk_film_projection` int(11) DEFAULT NULL,
  `horraire_projection` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle_tab`
--

CREATE TABLE `salle_tab` (
  `id_salle` int(11) NOT NULL,
  `nombre_place_salle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle_tab`
--

INSERT INTO `salle_tab` (`id_salle`, `nombre_place_salle`) VALUES
(1, 200),
(2, 200),
(3, 200),
(4, 200),
(5, 200),
(6, 200),
(7, 200),
(8, 200),
(9, 200),
(10, 200);

-- --------------------------------------------------------

--
-- Structure de la table `url_tab`
--

CREATE TABLE `url_tab` (
  `id_url` int(11) NOT NULL,
  `fk_film_url` int(11) DEFAULT NULL,
  `nom_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user_tab`
--

CREATE TABLE `user_tab` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(25) DEFAULT NULL,
  `prenom_user` varchar(50) DEFAULT NULL,
  `pseudo_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(60) DEFAULT NULL,
  `mail_user` varchar(100) DEFAULT NULL,
  `date_naissance_user` date DEFAULT NULL,
  `fidelite_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_tab`
--

INSERT INTO `user_tab` (`id_user`, `nom_user`, `prenom_user`, `pseudo_user`, `password_user`, `mail_user`, `date_naissance_user`, `fidelite_user`) VALUES
(1, 'Coppens', 'Louis', 'Thejazzman', '$2y$10$I8BN7QdJV1Z60BfgxiN7gu3.J5QoCDnGsrh62tlnWIDsXouQKXAOC', 'Louis.coppens.idb@gmail.com', '2000-07-26', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande_tab`
--
ALTER TABLE `commande_tab`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `fk_user_commande` (`fk_user_commande`),
  ADD KEY `fk_projection_commande` (`fk_projection_commande`);

--
-- Index pour la table `film_tab`
--
ALTER TABLE `film_tab`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `fk_genre_film` (`fk_genre_film`);

--
-- Index pour la table `genre_tab`
--
ALTER TABLE `genre_tab`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `image_tab`
--
ALTER TABLE `image_tab`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `fk_film_image` (`fk_film_image`);

--
-- Index pour la table `place_count_tab`
--
ALTER TABLE `place_count_tab`
  ADD PRIMARY KEY (`id_place_count`),
  ADD KEY `fk_projection_place_count` (`fk_projection_place_count`);

--
-- Index pour la table `projection_tab`
--
ALTER TABLE `projection_tab`
  ADD PRIMARY KEY (`id_projection`),
  ADD KEY `fk_salle_projection` (`fk_salle_projection`),
  ADD KEY `fk_film_projection` (`fk_film_projection`);

--
-- Index pour la table `salle_tab`
--
ALTER TABLE `salle_tab`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `url_tab`
--
ALTER TABLE `url_tab`
  ADD PRIMARY KEY (`id_url`),
  ADD KEY `fk_film_url` (`fk_film_url`);

--
-- Index pour la table `user_tab`
--
ALTER TABLE `user_tab`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `pseudo_user` (`pseudo_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande_tab`
--
ALTER TABLE `commande_tab`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `film_tab`
--
ALTER TABLE `film_tab`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `genre_tab`
--
ALTER TABLE `genre_tab`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `image_tab`
--
ALTER TABLE `image_tab`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `place_count_tab`
--
ALTER TABLE `place_count_tab`
  MODIFY `id_place_count` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projection_tab`
--
ALTER TABLE `projection_tab`
  MODIFY `id_projection` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle_tab`
--
ALTER TABLE `salle_tab`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `url_tab`
--
ALTER TABLE `url_tab`
  MODIFY `id_url` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_tab`
--
ALTER TABLE `user_tab`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande_tab`
--
ALTER TABLE `commande_tab`
  ADD CONSTRAINT `commande_tab_ibfk_1` FOREIGN KEY (`fk_user_commande`) REFERENCES `user_tab` (`id_user`),
  ADD CONSTRAINT `commande_tab_ibfk_2` FOREIGN KEY (`fk_projection_commande`) REFERENCES `projection_tab` (`id_projection`);

--
-- Contraintes pour la table `film_tab`
--
ALTER TABLE `film_tab`
  ADD CONSTRAINT `film_tab_ibfk_1` FOREIGN KEY (`fk_genre_film`) REFERENCES `genre_tab` (`id_genre`);

--
-- Contraintes pour la table `image_tab`
--
ALTER TABLE `image_tab`
  ADD CONSTRAINT `image_tab_ibfk_1` FOREIGN KEY (`fk_film_image`) REFERENCES `film_tab` (`id_film`);

--
-- Contraintes pour la table `place_count_tab`
--
ALTER TABLE `place_count_tab`
  ADD CONSTRAINT `place_count_tab_ibfk_1` FOREIGN KEY (`fk_projection_place_count`) REFERENCES `projection_tab` (`id_projection`);

--
-- Contraintes pour la table `projection_tab`
--
ALTER TABLE `projection_tab`
  ADD CONSTRAINT `projection_tab_ibfk_1` FOREIGN KEY (`fk_salle_projection`) REFERENCES `salle_tab` (`id_salle`),
  ADD CONSTRAINT `projection_tab_ibfk_2` FOREIGN KEY (`fk_film_projection`) REFERENCES `film_tab` (`id_film`);

--
-- Contraintes pour la table `url_tab`
--
ALTER TABLE `url_tab`
  ADD CONSTRAINT `url_tab_ibfk_1` FOREIGN KEY (`fk_film_url`) REFERENCES `film_tab` (`id_film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
