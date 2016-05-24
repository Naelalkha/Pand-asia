-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 20 Mai 2016 à 09:29
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `phonegap_panda`
--

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(1) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `description` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `origine` varchar(20) NOT NULL,
  `cout` varchar(4) NOT NULL,
  `difficulte` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`id`, `nom`, `description`, `type`, `origine`, `cout`, `difficulte`) VALUES
(7, 'Rouleau de printemps', 'crepe vietnamienne', 'entree', 'Vietnam', 'Faib', 'Facile'),
(11, 'sdv', 'sdv', 'sdv', 'ddd', 'dvvv', 'vvvv');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;