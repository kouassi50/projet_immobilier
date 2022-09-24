-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 24 sep. 2022 à 14:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_immogest`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent_immobilier`
--

CREATE TABLE `agent_immobilier` (
  `id_agentimmobilier` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `domicile` varchar(60) CHARACTER SET utf8 NOT NULL,
  `matricule` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `agent_immobilier`
--

INSERT INTO `agent_immobilier` (`id_agentimmobilier`, `nom`, `prenom`, `domicile`, `matricule`) VALUES
(1, 'koffi', 'richmond', 'paris', '10231254'),
(3, 'kjhgjkh', 'yutrtyr', 'ioiuyg', '10-47-48-89'),
(4, 'vah', 'emmanuel', 'abidjan', '14-65-47-98');

-- --------------------------------------------------------

--
-- Structure de la table `appel_offres`
--

CREATE TABLE `appel_offres` (
  `id_offre` int(10) NOT NULL,
  `libelle` varchar(60) CHARACTER SET utf8 NOT NULL,
  `prix` int(25) NOT NULL,
  `criteres` text CHARACTER SET utf8 NOT NULL,
  `id_chefchantier` int(10) UNSIGNED DEFAULT NULL,
  `id_architecte` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `appel_offres`
--

INSERT INTO `appel_offres` (`id_offre`, `libelle`, `prix`, `criteres`, `id_chefchantier`, `id_architecte`) VALUES
(1, 'autoroute du nord', 900000, '200KM', 2, 3),
(4, 'pâte erel', 15, 'dentifrice de couleur blanche qui soigne les caries dentaires.', 1, 2),
(5, 'immeuble 10 étages', -900000000, 'construction d\'un immeuble de 10 étage sur un espace de 10 hectares.', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `cabinet_architecte`
--

CREATE TABLE `cabinet_architecte` (
  `id_architecte` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `matricule` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cabinet_architecte`
--

INSERT INTO `cabinet_architecte` (`id_architecte`, `nom`, `matricule`) VALUES
(1, 'groupe architecte', '19021007'),
(2, 'groupe euris', '19021008'),
(3, 'KOUASSI', '186587dda9152fda9550b1af740a71d46a4c25c2'),
(5, 'ehouman', '11-11-11-11'),
(6, 'wah', '14-25-87-98');

-- --------------------------------------------------------

--
-- Structure de la table `chef_chantier`
--

CREATE TABLE `chef_chantier` (
  `id_chefchantier` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `matricule` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chef_chantier`
--

INSERT INTO `chef_chantier` (`id_chefchantier`, `nom`, `matricule`) VALUES
(1, 'KOUASSI', '19021008'),
(2, 'Fabian', '14-45-87-69');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise_immobilier`
--

CREATE TABLE `entreprise_immobilier` (
  `id_entreprise` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `matricule` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `entreprise_immobilier`
--

INSERT INTO `entreprise_immobilier` (`id_entreprise`, `nom`, `matricule`) VALUES
(1, 'bulding groupe', '19021009'),
(2, 'EVRARD', '19021111'),
(4, 'chris', '14789502');

-- --------------------------------------------------------

--
-- Structure de la table `localiser`
--

CREATE TABLE `localiser` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `prix` int(15) NOT NULL,
  `ville` varchar(25) CHARACTER SET utf8 NOT NULL,
  `quartier` varchar(25) CHARACTER SET utf8 NOT NULL,
  `id_agentimmobilie` int(10) UNSIGNED NOT NULL,
  `id_maison` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `localiser`
--

INSERT INTO `localiser` (`id`, `date`, `prix`, `ville`, `quartier`, `id_agentimmobilie`, `id_maison`) VALUES
(1, '0000-00-00', 15, 'Daoukro', 'Chicago', 1, 1),
(2, '0000-00-00', 15, 'Yamoussoukro', '220 logements', 3, 2),
(3, '2022-09-20', -500000000, 'Abidjan', 'Abobo Belleville', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_maison` int(10) UNSIGNED NOT NULL,
  `numero` int(10) NOT NULL,
  `proprietaire` varchar(25) CHARACTER SET utf8 NOT NULL,
  `fichier` varchar(255) CHARACTER SET utf8 NOT NULL,
  `images` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `numero`, `proprietaire`, `fichier`, `images`) VALUES
(1, 41, 'Addoha', 'projet autoroute', '5.jpg'),
(2, 9, 'MCLU', 'le premier ministre', 'sel-img6.jpg'),
(3, 1, 'Ivoiro', 'projet de l&#039;université de Daoukro', 'sel-img6.jpg'),
(4, 5, 'Addoha', 'projet immeuble de 10 etages', 'karmelia-scaled.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `recrute`
--

CREATE TABLE `recrute` (
  `id` int(11) NOT NULL,
  `id_agentimmobilier` int(10) UNSIGNED NOT NULL,
  `id_entreprise` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `recrute`
--

INSERT INTO `recrute` (`id`, `id_agentimmobilier`, `id_entreprise`, `date`) VALUES
(1, 1, 2, '0000-00-00 00:00:00'),
(2, 3, 2, '2022-09-17 11:20:46'),
(3, 3, 1, '2022-09-20 10:19:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `matricule` varchar(25) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_architecte` int(10) UNSIGNED DEFAULT NULL,
  `id_entreprise` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `mot_de_passe`, `telephone`, `matricule`, `email`, `id_architecte`, `id_entreprise`) VALUES
(1, 'KOUASSI', 'kouakou herve', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '7', '19021007', 'kouakouhervekouassi50@gmail.com', NULL, NULL),
(2, 'kra', 'amenan', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '07-69-31-64-89', '19021008', 'jkt@gmail.com', NULL, NULL),
(4, 'kra', 'ahouman', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '07-69-31-64-90', '19021003', 'ek@gmail.com', NULL, NULL),
(6, 'lou', 'ya', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '07-45-56-47-52', '19021111', 'ya@gmail.com', NULL, NULL),
(7, 'ja', 'lou', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '07-45-56-47-54', '19021110', 'la@gmail.com', NULL, NULL),
(9, 'Ehouman', 'Ahou Rachelle', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '01-31-74-98-45', '41-47-98-12', 'ra@gmail.com', NULL, NULL),
(10, 'Ahou', 'Aya', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '02-31-65-84-98', '10-87-56-12', 'aya@gmail.com', NULL, NULL),
(12, 'Sonia', 'oli', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '10-32-65-47-25', '10-65-47-98', 'oli@gmail.com', NULL, NULL),
(14, 'yao', 'kra esaie', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '01-21-56-74-89', '41-78-23-20', 'yao@gmail.com', NULL, NULL),
(15, 'seri', 'lou', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '04-45-45-45-45', '04-45-12-74', 'lou@gmail.com', NULL, NULL),
(16, 'dago', 'benedicte', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '10-10-10-45-74', '00-41-78-89', 'dago@gmail.com', NULL, NULL),
(17, 'Amani', 'De Grâce', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '05-45-40-78-32', '10-47-65-47', 'gr@gmail.com', NULL, NULL),
(18, 'Seri ', 'Dorcas Amenan', '0623b01a853cdf8f3abfbe7962a56e2c20c154e1', '07-89-45-65-45', '14-14-14-14', 'seri@gmail.com', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent_immobilier`
--
ALTER TABLE `agent_immobilier`
  ADD PRIMARY KEY (`id_agentimmobilier`);

--
-- Index pour la table `appel_offres`
--
ALTER TABLE `appel_offres`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `appel_offres_ibfk_1` (`id_architecte`),
  ADD KEY `appel_offres_ibfk_2` (`id_chefchantier`);

--
-- Index pour la table `cabinet_architecte`
--
ALTER TABLE `cabinet_architecte`
  ADD PRIMARY KEY (`id_architecte`);

--
-- Index pour la table `chef_chantier`
--
ALTER TABLE `chef_chantier`
  ADD PRIMARY KEY (`id_chefchantier`);

--
-- Index pour la table `entreprise_immobilier`
--
ALTER TABLE `entreprise_immobilier`
  ADD PRIMARY KEY (`id_entreprise`);

--
-- Index pour la table `localiser`
--
ALTER TABLE `localiser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agentimmobilie`),
  ADD KEY `id_maison` (`id_maison`),
  ADD KEY `id_agentimmobilier` (`id_agentimmobilie`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_maison`);

--
-- Index pour la table `recrute`
--
ALTER TABLE `recrute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_recrute` (`id_agentimmobilier`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_agentimmobilier` (`id_agentimmobilier`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_architecte` (`id_architecte`),
  ADD KEY `#id_entreprise` (`id_entreprise`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent_immobilier`
--
ALTER TABLE `agent_immobilier`
  MODIFY `id_agentimmobilier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `appel_offres`
--
ALTER TABLE `appel_offres`
  MODIFY `id_offre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `localiser`
--
ALTER TABLE `localiser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `recrute`
--
ALTER TABLE `recrute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appel_offres`
--
ALTER TABLE `appel_offres`
  ADD CONSTRAINT `appel_offres_ibfk_1` FOREIGN KEY (`id_architecte`) REFERENCES `cabinet_architecte` (`id_architecte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appel_offres_ibfk_2` FOREIGN KEY (`id_chefchantier`) REFERENCES `chef_chantier` (`id_chefchantier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `chef_chantier`
--
ALTER TABLE `chef_chantier`
  ADD CONSTRAINT `chef_chantier_ibfk_1` FOREIGN KEY (`id_chefchantier`) REFERENCES `cabinet_architecte` (`id_architecte`);

--
-- Contraintes pour la table `localiser`
--
ALTER TABLE `localiser`
  ADD CONSTRAINT `localiser_ibfk_1` FOREIGN KEY (`id_agentimmobilie`) REFERENCES `agent_immobilier` (`id_agentimmobilier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `localiser_ibfk_2` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id_maison`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recrute`
--
ALTER TABLE `recrute`
  ADD CONSTRAINT `recrute_ibfk_1` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise_immobilier` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recrute_ibfk_2` FOREIGN KEY (`id_agentimmobilier`) REFERENCES `agent_immobilier` (`id_agentimmobilier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_architecte`) REFERENCES `cabinet_architecte` (`id_architecte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise_immobilier` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
