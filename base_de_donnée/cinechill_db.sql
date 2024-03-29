-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 jan. 2023 à 20:54
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
  `date_commande` date DEFAULT NULL,
  `nombre_place_commande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande_tab`
--

INSERT INTO `commande_tab` (`id_commande`, `fk_user_commande`, `fk_projection_commande`, `date_commande`, `nombre_place_commande`) VALUES
(1, 1, 2, '2013-01-23', 2),
(3, 1, 3, '2015-01-23', 2),
(4, 3, 2, '2016-01-23', 9),
(5, 1, 3, '2023-01-17', 2),
(7, 1, 3, '2023-01-17', 2),
(8, 1, 3, '2023-01-18', 2),
(9, 11, 3, '2023-01-18', 2),
(10, 11, 2, '2023-01-18', 3),
(11, 12, 3, '2023-01-18', 2);

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
  `date_sortie_film` date DEFAULT NULL,
  `fk_info_page_film` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film_tab`
--

INSERT INTO `film_tab` (`id_film`, `nom_film`, `auteur_film`, `duree_film`, `fk_genre_film`, `date_sortie_film`, `fk_info_page_film`) VALUES
(1, 'Top Gun : Maverick', 'Joseph Kosinski', '02:11:00', 2, '2022-05-25', 1),
(2, 'Avatar : la voie de l\'eau', 'James Cameron', '03:12:00', 2, '2023-01-14', 2),
(3, 'Treize vies', 'Ron Howard', '02:29:00', 4, '2022-08-05', 3),
(4, 'The Batman', 'Matt Reeves', '02:56:00', 2, '2022-03-02', 4),
(5, 'Black Panther: Wakanda Forever', 'Ryan Coogler', '02:41:00', 2, '2022-11-09', 5),
(6, 'Thor: Love and Thunder', 'Taika Waititi', '01:59:00', 2, '2022-07-13', 6),
(7, 'Uncharted', 'Ruben Fleischer', '01:56:00', 5, '2022-02-16', 7),
(8, 'Basket case 2', 'Frank Henenlotter', '01:30:00', 7, '1990-03-02', 8),
(9, 'Long Shot', 'Franklin Martin', '01:33:00', 4, '2013-08-09', 9),
(10, 'Space Jam (1996)', 'Joe Pytka', '01:35:00', 1, '1996-07-30', 10);

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
(2, 'action'),
(3, 'policier'),
(4, 'drame'),
(5, 'aventure'),
(6, 'science-fiction'),
(7, 'horreur');

-- --------------------------------------------------------

--
-- Structure de la table `info_page_tab`
--

CREATE TABLE `info_page_tab` (
  `id_info_page` int(11) NOT NULL,
  `url_info_page` varchar(255) DEFAULT NULL,
  `image_info_page` varchar(255) DEFAULT NULL,
  `resume_info_page` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `info_page_tab`
--

INSERT INTO `info_page_tab` (`id_info_page`, `url_info_page`, `image_info_page`, `resume_info_page`) VALUES
(1, 'https://www.youtube.com/embed/qSqVVswa420', 'top_gun.jpg', 'Après plus de 30 ans de service en tant que l\'un des meilleurs aviateurs de la Marine, Pete Maverick Mitchell est à sa place, repoussant les limites en tant que pilote d\'essai courageux et esquivant l\'avancement de grade qui le mettrait à la terre. Entraînant de jeunes diplômés pour une mission spéciale, Maverick doit affronter les fantômes de son passé et ses peurs les plus profondes, aboutissant à une mission qui exige le sacrifice ultime de ceux qui choisissent de la piloter.'),
(2, 'https://www.youtube.com/embed/d9MyW72ELq0', 'avatar.jpeg', 'Jake Sully et Ney\'tiri ont formé une famille et font tout pour rester aussi soudés que possible. Ils sont cependant contraints de quitter leur foyer et d\'explorer les différentes régions encore mystérieuses de Pandora. Lorsqu\'une ancienne menace refait surface, Jake va devoir mener une guerre difficile contre les humains.'),
(3, 'https://www.youtube.com/embed/R068Si4eb3Y', '0206747.jpg', 'En juin 2018, douze jeunes footballeurs d\'une équipe de football et leur entraîneur se retrouvent bloqués dans une grotte du massif de Doi Nang Non, en Thaïlande. En raison d\'une importante montée des eaux, l\'opération de sauvetage prend du temps, malgré les énormes moyens déployés.'),
(4, 'https://www.youtube.com/embed/mqqft2x_Aa4', 'the-batman.webp', 'Quand un tueur vise l\'élite de Gotham avec une série de machinations sadiques, une piste d\'indices énigmatiques lance le plus grand détective du monde dans une enquête dans le milieu de la pègre, où il rencontre des personnages comme Catwoman, Le Pingouin, Carmine Falcone et Le Riddler.'),
(5, 'https://www.youtube.com/embed/_Z3QKkl1WyM', 'wakanda.jpg', 'La reine Ramonda, Shuri, M\'Baku, Okoye et la Dora Milaje se battent pour protéger leur nation des puissances mondiales intervenantes à la suite de la mort du roi T\'Challa. Alors que les Wakandans s\'efforcent d\'embrasser leur prochain chapitre, les héros doivent s\'unir à Nakia et Everett Ross pour forger une nouvelle voie pour leur royaume bien-aimé.'),
(6, 'https://www.youtube.com/embed/tgB1wUcmbbw', 'thor-love-and-thunder.jpg', 'Thor se lance dans un voyage différent de tout ce qu\'il a connu jusqu\'à présent : une quête de paix intérieure. Cependant, sa retraite est interrompue par Gorr le boucher des dieux, un tueur galactique qui cherche l\'extinction des dieux. Pour combattre la menace, Thor fait appel à l\'aide du roi Valkyrie, de Korg et de Jane Foster. Ensemble, ils se lancent dans une aventure cosmique déchirante pour découvrir le mystère de la vengeance du Boucher des Dieux.'),
(7, 'https://www.youtube.com/embed/eHp3MbsCbMg', 'Uncharted.jfif', 'Le chasseur de trésors Victor Sully Sullivan recrute Nathan Drake pour l\'aider à récupérer une fortune vieille de 500 ans amassée par l\'explorateur Ferdinand Magellan. Ce qui commence comme un cambriolage devient rapidement une course de globe-trotters pour atteindre le prix avant que l\'impitoyable Santiago Moncada ne puisse mettre la main dessus.'),
(8, 'https://www.youtube.com/embed/Tqe6NomPSpE', '._V1_.jpg', 'Duane Bradley arrive à Manhattan tout en portant un mystérieux sac en osier. Ce qu\'il contient? Son frère jumeau siamois, Belial, affreusement mutilé. Que veut-il? Se venger des chirurgiens qui les ont séparés.'),
(9, 'https://www.youtube.com/embed/BAktlde9UTk', 'long_shot.jpg', 'Dans l\'utérus, le cordon ombilical de Laue était enroulé autour de son cou. Le manque de circulation dans le bras retenu par le cordon signifiait qu\'il se terminait juste en dessous du coude. Laue a continué à faire face à l\'adversité; son père est mort quand il était au collège. Ancien athlète et entraîneur des jeunes, son père avait du mal à accepter le handicap de Kevin. Sa famille et la perte de son père sont devenues des facteurs de motivation pour conduire Kevin dans son parcours pour devenir l\'une des rares élites à jouer au basketball de Division I.'),
(10, 'https://www.youtube.com/embed/oKNy-MWjkcU?modestbranding=1', 'space-jam-2-trailer-1.png', 'Il s\'agit d\'un cauchemar: les Nerdlucks, de méchants extraterrestres aux allures de gnomes, viennent de capturer les héros de dessins animés préférés pour redorer le blason du \"Pic des Abrutis,\" leur parc d\'attractions qui n\'attire plus grand monde! Avant de baisser les bras, les pauvres Bugs Bunny, Daffy Duck, Speedy Gonzales, Titi et consorts sollicitent une requête: jouer leur avenir lors d\'un match de basket.');

-- --------------------------------------------------------

--
-- Structure de la table `payement_tab`
--

CREATE TABLE `payement_tab` (
  `id_payement` int(11) NOT NULL,
  `type_payement` varchar(100) NOT NULL,
  `numero_payement` varchar(255) NOT NULL,
  `date_expi_payement` varchar(10) NOT NULL,
  `code_payement` int(11) NOT NULL,
  `fk_user_payement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `payement_tab`
--

INSERT INTO `payement_tab` (`id_payement`, `type_payement`, `numero_payement`, `date_expi_payement`, `code_payement`, `fk_user_payement`) VALUES
(3, 'Visa', '1234 1234 1234 1234', '01/2022', 123, 1),
(4, 'Visa', '1234 1234 1234 1234', '01/2022', 123, 11),
(5, 'Visa', '1234 1234 1234 1234', '01/2022', 123, 12);

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

--
-- Déchargement des données de la table `place_count_tab`
--

INSERT INTO `place_count_tab` (`id_place_count`, `total_place_count`, `left_place_count`, `fk_projection_place_count`) VALUES
(2, 200, 186, 2),
(3, 200, 184, 3),
(16, 200, 200, 4),
(17, 200, 200, 5),
(18, 200, 200, 6),
(19, 200, 200, 7),
(20, 200, 200, 8),
(21, 200, 200, 9),
(22, 200, 200, 10),
(23, 200, 200, 11),
(24, 200, 200, 12),
(25, 200, 200, 13),
(26, 200, 200, 14),
(27, 200, 200, 15),
(28, 200, 200, 16),
(29, 200, 200, 17),
(30, 200, 200, 18),
(31, 200, 200, 19),
(32, 200, 200, 20),
(33, 200, 200, 21),
(34, 200, 200, 22);

-- --------------------------------------------------------

--
-- Structure de la table `projection_tab`
--

CREATE TABLE `projection_tab` (
  `id_projection` int(11) NOT NULL,
  `fk_salle_projection` int(11) DEFAULT NULL,
  `fk_film_projection` int(11) DEFAULT NULL,
  `horraire_projection` datetime DEFAULT NULL,
  `prix_ticket_projection` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projection_tab`
--

INSERT INTO `projection_tab` (`id_projection`, `fk_salle_projection`, `fk_film_projection`, `horraire_projection`, `prix_ticket_projection`) VALUES
(2, 1, 6, '2023-01-20 18:15:00', 8),
(3, 7, 5, '2023-01-24 19:29:00', 8),
(4, 1, 1, '2023-01-28 20:30:00', 8),
(5, 6, 1, '2023-01-26 20:30:00', 8),
(6, 7, 2, '2023-01-24 15:30:00', 8),
(7, 9, 2, '2023-01-25 21:35:00', 8),
(8, 3, 3, '2023-01-27 17:30:00', 8),
(9, 10, 3, '2023-01-24 12:45:00', 8),
(10, 8, 4, '2023-01-27 20:30:00', 8),
(11, 4, 4, '2023-01-27 17:45:00', 8),
(12, 7, 5, '2023-01-23 17:45:00', 8),
(13, 1, 6, '2023-01-25 22:35:00', 8),
(14, 6, 7, '2023-01-28 16:30:00', 8),
(15, 1, 7, '2023-01-29 22:00:00', 8),
(16, 8, 8, '2023-01-29 16:45:00', 8),
(17, 5, 8, '2023-01-31 20:30:00', 8),
(18, 1, 9, '2023-01-21 16:45:00', 8),
(19, 5, 9, '2023-01-23 20:40:00', 8),
(20, 5, 1, '2023-01-30 17:40:00', 8),
(21, 4, 10, '2023-01-30 20:40:00', 8),
(22, 8, 10, '2023-01-30 17:45:00', 8);

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
(1, 'Admin', 'Admin', 'The_Administrator', '$2y$10$ji8WJ.z2qG8YsLvZxHrcY.AHSDYJi1mr3elNKZmcGMxKZ7q3uXUHy', 'cinechill@ifosup.wavre.be', '1999-07-03', 90),
(2, 'Coppens', 'Louis', 'Thejazzman', '$2y$10$TYpG6juC3ietLyoQo8sX2ujxnzNEAeriiNYyAJwaq6JvlwWmK0v9C', 'Louis.coppens.idb@gmail.com', '2000-07-26', 0),
(3, 'Wengler', 'Eliott', 'IFriee', '$2y$10$27Jt.jOT0HV3IEQ4qawW/OYtL3ho7NM6Bb36fsP5VJSpudmZgqryW', 'eliott.wengler@hotmail.fr', '1999-07-03', 45),
(4, 'Coppens', 'Louis', 'Thejazzman04', '$2y$10$7FFYIoFR9q/ZmXLJnJz/YO3qsCqcL1A0KlEAuL4mhjib.ppMEm7nK', 'Louis.cppns@gmail.com', '2000-07-26', 0),
(5, 'Tstusers', 'Testuserus', 'FantasyPotato', '$2y$10$pK75GIoGvO0v6RVvN2Vei.I1lHTw75r14ZqlQsjJN7C0to6hDQK.e', 'hirsty83@speeddataanalytics.com', '1999-07-30', 0),
(6, 'Random', 'Random', 'RealityNight', '$2y$10$aLOwfs.6uJvOOwGrLVQJFO1.W10mELDBviqjHE/4MeH53fkVDYkJ.', 'jiigga@onlinecmail.com', '1999-07-03', 0),
(8, 'Random', 'Random', 'PredatorPoke', '$2y$10$z7Fc1NHSlwrtIYdvj6a0POHjhh8PLEeYCs6AHyU/8CCd1/d.qYC4W', 'rockroot@toped888.com', '1999-07-03', 0),
(11, 'Coppens', 'Louis', 'gagaGOUGOU', '$2y$10$9pgqQfCUq8RuckiqMnNYa.YimTmkkgh1TMJ.09zos1X9g9VSPVTcW', 'Louis.coppens.idb@gmail.com', '2002-06-12', 25),
(12, 'Mignolet', 'Natacha', 'naloda', '$2y$10$CN3JagCcGznRWESew0nr0OHbGYxdCq2jPS5xZMasOo7O./YX5rTpC', 'natacha.mignolet@hotmail.fr', '1977-10-18', 10);

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
  ADD KEY `fk_genre_film` (`fk_genre_film`),
  ADD KEY `fk_info_page_film` (`fk_info_page_film`);

--
-- Index pour la table `genre_tab`
--
ALTER TABLE `genre_tab`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `info_page_tab`
--
ALTER TABLE `info_page_tab`
  ADD PRIMARY KEY (`id_info_page`);

--
-- Index pour la table `payement_tab`
--
ALTER TABLE `payement_tab`
  ADD PRIMARY KEY (`id_payement`),
  ADD KEY `fk_user_payement` (`fk_user_payement`);

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
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `film_tab`
--
ALTER TABLE `film_tab`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `genre_tab`
--
ALTER TABLE `genre_tab`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `info_page_tab`
--
ALTER TABLE `info_page_tab`
  MODIFY `id_info_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `payement_tab`
--
ALTER TABLE `payement_tab`
  MODIFY `id_payement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `place_count_tab`
--
ALTER TABLE `place_count_tab`
  MODIFY `id_place_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `projection_tab`
--
ALTER TABLE `projection_tab`
  MODIFY `id_projection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `salle_tab`
--
ALTER TABLE `salle_tab`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user_tab`
--
ALTER TABLE `user_tab`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `film_tab_ibfk_1` FOREIGN KEY (`fk_genre_film`) REFERENCES `genre_tab` (`id_genre`),
  ADD CONSTRAINT `film_tab_ibfk_2` FOREIGN KEY (`fk_info_page_film`) REFERENCES `info_page_tab` (`id_info_page`);

--
-- Contraintes pour la table `payement_tab`
--
ALTER TABLE `payement_tab`
  ADD CONSTRAINT `payement_tab_ibfk_1` FOREIGN KEY (`fk_user_payement`) REFERENCES `user_tab` (`id_user`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
