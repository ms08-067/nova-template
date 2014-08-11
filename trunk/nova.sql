-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 12:30 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nova`
--

-- --------------------------------------------------------

--
-- Table structure for table `d6k20_jv_product`
--

DROP TABLE IF EXISTS `d6k20_jv_product`;
CREATE TABLE IF NOT EXISTS `d6k20_jv_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_thumb` text,
  `img_thumb_alt` varchar(255) DEFAULT NULL,
  `img` text NOT NULL,
  `img_alt` varchar(255) DEFAULT NULL,
  `name_project` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `publish` int(3) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `count_buy` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_categories_product` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `d6k20_jv_product`
--

INSERT INTO `d6k20_jv_product` (`id`, `img_thumb`, `img_thumb_alt`, `img`, `img_alt`, `name_project`, `short_des`, `des`, `publish`, `created_date`, `count_buy`, `price`, `id_categories_product`) VALUES
(11, 'images/portfolio/thumb/item4.jpg', 'template joomla 3', 'images/portfolio/full/item4.jpg', 'Template joomla 3', 'Thangvietsecurity  Company', 'Templates joomla 3', '<p>Thi web introduction to company . :)</p>', 1, '2014-08-11 14:30:24', 0, 16, 5),
(13, 'images/portfolio/thumb/item1.jpg', 'template joomla 3', 'images/portfolio/full/item1.jpg', 'Template joomla 3', 'Thangvietsecurity  Company', 'Templates joomla 3', '<p>Introduct to company , website introduction Introduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introductionIntroduct to company , website introduction</p>', 1, '2014-08-11 15:18:43', 0, 15, 5),
(14, 'images/portfolio/thumb/item3.jpg', 'template joomla 3', 'images/portfolio/full/item3.jpg', 'Template joomla 3', 'Simsodepsaithanh Website', 'Shop mobile sim numbere', '<p>&nbsp;</p>\r\n<p>Sim sodep sai thanh , shop sim mobile, template joomla,</p>\r\n<p>Sim sodep sai thanh , shop sim mobile, template joomla</p>\r\n<p>Sim sodep sai thanh , shop sim mobile, template joomla</p>\r\n<p>Sim sodep sai thanh , shop sim mobile, template joomla</p>\r\n<p>Sim sodep sai thanh , shop sim mobile, template joomla</p>\r\n<p>&nbsp;</p>', 1, '2014-08-11 15:22:04', 0, 18, 3),
(16, 'images/portfolio/thumb/item2.jpg', 'template joomla 3', 'images/portfolio/full/item3.jpg', 'Template joomla 3', 'Thangvietsecurity  Company', 'Templates joomla 3', '<p>Website management product Website management product Website management product Website management product Website management product Website management product Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>', 0, '2014-08-11 15:34:15', 0, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `d6k20_jv_product_categories`
--

DROP TABLE IF EXISTS `d6k20_jv_product_categories`;
CREATE TABLE IF NOT EXISTS `d6k20_jv_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `d6k20_jv_product_categories`
--

INSERT INTO `d6k20_jv_product_categories` (`id`, `name`) VALUES
(1, 'Templates Boostrap'),
(2, 'Templates Admin'),
(3, 'Templates Responsive'),
(4, 'Extension Joomla'),
(5, 'Templates Joomla');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
