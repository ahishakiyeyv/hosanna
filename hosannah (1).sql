-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2022 at 02:10 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosannah`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnes`
--

DROP TABLE IF EXISTS `abonnes`;
CREATE TABLE IF NOT EXISTS `abonnes` (
  `id_ab` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `messages` varchar(500) NOT NULL,
  PRIMARY KEY (`id_ab`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abonnes`
--

INSERT INTO `abonnes` (`id_ab`, `email`, `messages`) VALUES
(1, 'ahishakiyeyvan@yahoo.fr', 'bonsoir'),
(2, 'irrifaty@gmail.com', 'veuillez reserver un chambre simple svp'),
(3, 'irrifaty@gmail.com', 'veuillez reserver un chambre simple svp');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_co` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `messages` longtext NOT NULL,
  PRIMARY KEY (`id_co`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_co`, `nom`, `prenom`, `email`, `telephone`, `messages`) VALUES
(1, 'NKURUNZIZA', 'Angelot Arnaud', 'nkurunzizaarnaud@gmail.com', '76545489', 'Bonjour, je voulais demander si je ne me presente pas alors que j\'ai deja fait une reservation, est ce que vous allez me rembourser l\'argent ou bien ma reservation sera reporte pour l\'autre jour voulue,\r\nMerci.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) NOT NULL,
  `newmessage` longtext NOT NULL,
  `datepublication` date NOT NULL,
  `dateexpiration` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `newmessage`, `datepublication`, `dateexpiration`) VALUES
(1, 'Promotion Nouveau', 'Du nouveau, Hosannah Village Hotel vient de reduire les prix de toutes les boissons, le prix des bierres de 75cl est desormais à 1300fbu. Venez decouvrir ces promotions.', '2021-09-30', '2021-10-30'),
(2, 'Nouvelle Promotion', 'Promotion!, les chambres VIP et les APPARTEMENT sont au bas prix, merci de passer a HvH pour plus d\'eclaircissement.', '2021-10-15', '2021-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `visiteur` varchar(250) NOT NULL,
  `datearrive` varchar(250) NOT NULL,
  `datedepart` varchar(250) NOT NULL,
  `chambres` varchar(250) NOT NULL,
  PRIMARY KEY (`id_res`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_res`, `nom`, `prenom`, `telephone`, `email`, `visiteur`, `datearrive`, `datedepart`, `chambres`) VALUES
(1, 'Ahishakiye', 'yvan igor', '76038723', 'ahishakiyeyvan@yahoo.fr', '2', '30/6/2022', '12/6/2022', 'vip'),
(2, 'Irambona', 'Rifaty', '76273996', 'irrifaty@gmail.com', '2', '1/10/2021', '1/11/2021', 'SIMPLE');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `email`, `password`) VALUES
(1, 'beddygrant@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
