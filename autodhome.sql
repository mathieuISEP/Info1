-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Janvier 2017 à 10:19
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autodhome`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuator`
--

CREATE TABLE `actuator` (
  `id` int(11) NOT NULL,
  `id_room` int(11) DEFAULT NULL,
  `type_actuator` varchar(255) DEFAULT NULL,
  `actuator_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `client_number` int(11) NOT NULL,
  `id_card` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_number` int(11) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `bank_number` varchar(255) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`client_number`, `id_card`, `first_name`, `last_name`, `street`, `city`, `country`, `street_number`, `email_address`, `bank_number`, `isadmin`, `password`) VALUES
(1, 0, 'Galiano', '1', 'rue de la paix', 'Paris', 'France', 27, 'folco.galiano@isep.fr', '123', 1, 'root'),
(2, 0, 'Da Silva', '2', 'rue Blomet', 'Paris', 'France', 168, 'mathieu.dasilva@isep.fr', '345', 1, 'root'),
(3, 0, 'Jeannette', '3', 'rue de la paix', 'Paris', 'France', 27, 'antoine.jeannette@isep.fr', '678', 1, '$2y$12$6ZpnCFotdG6cXIfU4MibNO.BEg37UgNxEH0Pn2ipPLKllgNvNDWVq'),
(4, 0, 'Gasparini', '4', 'rue de la paix', 'Paris', 'France', 27, 'leandro.gasparini@isep.fr', '2456534543', 1, 'root'),
(5, 0, 'Demogues', '5', 'rue de la paix', 'Paris', 'France', 27, 'anthony.demogue@isep.fr', '2456534543', 1, 'root');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_number` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `Name_room` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_home` int(11) DEFAULT NULL,
  `type_room` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `room`
--

INSERT INTO `room` (`Name_room`, `id`, `id_home`, `type_room`) VALUES
('Living room', 1, 1, 'Living room'),
('Kitchen', 2, 1, 'Kitchen'),
('Bedroom 1', 3, 1, 'Bedroom'),
('Bedroom 2', 4, 1, 'Bedroom'),
('Bedroom 3', 5, 1, 'Bedroom'),
('Bedroom 4', 6, 1, 'Bedroom'),
('Bathroom 1', 7, 1, 'Bathroom'),
('Bathroom 2', 8, 1, 'Bathroom');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `id_room` int(11) DEFAULT NULL,
  `type_sensor` varchar(255) DEFAULT NULL,
  `sensor_name` varchar(255) DEFAULT NULL,
  `current_data` float DEFAULT NULL,
  `target_data` float DEFAULT NULL,
  `on_off` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sensor`
--

INSERT INTO `sensor` (`id`, `id_room`, `type_sensor`, `sensor_name`, `current_data`, `target_data`, `on_off`) VALUES
(1, 2, 'temperature_sensor', 'thermometer 1', 15, 20, 0),
(2, 1, 'Luminosity', 'Luminosity Livingroom', 0, 0, 0),
(3, 1, 'Humidity', 'House Humidity', 24, 0, 0),
(4, 1, 'Camera', 'Camera Livingroom', 1, 0, 0),
(5, 1, 'Shutters', 'Shutters 1', 0, 0, 0),
(6, 1, 'Shutters', 'Shutters 2', 0, 0, 0),
(7, 1, 'Shutters', 'Shutters 3', 0, 0, 0),
(8, 2, 'Humidity', 'Humidity kitchen 1', 50, 0, 0),
(9, 2, 'Humidity', 'Humidity kitchen 2', 46, 0, 0),
(10, 2, 'Shutters', 'Shutters kitchen 2', 0, 0, 0),
(11, 2, 'Alarm', 'House alarm', 0, 0, 1),
(12, 3, 'Shutters', 'Shutters Room1', 0, 0, 0),
(13, 3, 'Luminosity', 'Light Room 1', 0, 0, 0),
(14, 3, 'temperature_sensor', 'Temperature Room 1', 23, 0, 0),
(15, 4, 'Shutters', 'Shutters Room 2', 0, 0, 0),
(16, 4, 'Luminosity', 'Light Room 2', 0, 0, 0),
(17, 4, 'temperature_sensor', 'Temperature Room 2', 25, 0, 0),
(18, 5, 'Shutters', 'Shutters Room 3', 0, 0, 0),
(19, 5, 'Luminosity', 'Light Room 3', 0, 0, 0),
(20, 5, 'temperature_sensor', 'Temperature Room 3', 20, 0, 0),
(21, 6, 'Shutters', 'Shutters Room 4', 0, 0, 0),
(22, 6, 'Luminosity', 'Light Room 4', 0, 0, 0),
(23, 6, 'temperature_sensor', 'Temperature Room 4', 20, 0, 0),
(24, 7, 'Luminosity', 'Light Bathroom 1', 0, 0, 0),
(25, 7, 'temperature_sensor', 'Temperature Bathroom 1', 20, 0, 0),
(26, 8, 'Luminosity', 'Light Bathroom 2', 0, 0, 0),
(27, 8, 'temperature_sensor', 'Temperature Bathroom 2', 20, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actuator`
--
ALTER TABLE `actuator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_number`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `client_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
