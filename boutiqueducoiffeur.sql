-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 fév. 2023 à 13:31
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutiqueducoiffeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bill_number` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `id_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_order` (`id_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ident_order` int(11) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `ident_product` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_photo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_photo` (`id_photo`),
  KEY `id_parent` (`id_parent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `inc_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id_product` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_discount`),
  KEY `id_discount` (`id_discount`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reduction_value` decimal(15,2) DEFAULT NULL,
  `percentage_value` decimal(15,2) DEFAULT NULL,
  `promotion_code` varchar(255) DEFAULT NULL,
  `free_shipping` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `street_number` int(11) NOT NULL,
  `apartment_number` int(11) DEFAULT NULL,
  `country_code` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `currency` decimal(19,4) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `ident_cart` int(11) NOT NULL,
  `message` text,
  `total_price` decimal(15,2) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `is_enabled` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `ident_product` int(11) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product_color_size`
--

DROP TABLE IF EXISTS `product_color_size`;
CREATE TABLE IF NOT EXISTS `product_color_size` (
  `id_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_color`,`id_size`),
  KEY `id_color` (`id_color`),
  KEY `id_size` (`id_size`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product_photo`
--

DROP TABLE IF EXISTS `product_photo`;
CREATE TABLE IF NOT EXISTS `product_photo` (
  `id_photo` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  PRIMARY KEY (`id_photo`,`id_product`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `inc_number` int(11) NOT NULL,
  `description` text,
  `is_enabled` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `street_number` int(11) NOT NULL,
  `apartment_number` int(11) DEFAULT NULL,
  `country_code` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
