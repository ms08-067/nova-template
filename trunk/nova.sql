-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2014 at 12:31 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `d6k20_jv_product`
--

INSERT INTO `d6k20_jv_product` (`id`, `img_thumb`, `img_thumb_alt`, `img`, `img_alt`, `name_project`, `short_des`, `des`, `publish`, `created_date`, `count_buy`, `price`, `id_categories_product`) VALUES
(16, 'images/portfolio/thumb/item2.jpg', 'template joomla 3', 'images/portfolio/full/item3.jpg', 'Template joomla 3', 'Thangvietsecurity  Company', 'Templates joomla 3', '<p>Website management product Website management product Website management product Website management product Website management product Website management product Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>\r\n<p>Website management product Website management product Website management product</p>', 0, '2014-08-11 15:34:15', 0, 4, 2),
(17, 'images/portfolio/thumb/item1.jpg', 'template joomla 3', 'images/portfolio/full/item2.jpg', 'Template joomla 3', 'Simsodepsaithanh Website', 'Shop mobile sim numbere', '<p>Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,</p>', 1, '2014-08-12 17:12:38', 0, 8, 5),
(18, 'images/portfolio/thumb/item1.jpg', 'template joomla 3', 'images/portfolio/full/item2.jpg', 'Template joomla 3', 'Simsodepsaithanh Website OK ko', 'Shop mobile sim numbere', '<p>Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,Simsodepsaithanh.com shop of mobile number,</p>', 0, '2014-08-12 17:13:35', 0, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `d6k20_jv_product_categories`
--

DROP TABLE IF EXISTS `d6k20_jv_product_categories`;
CREATE TABLE IF NOT EXISTS `d6k20_jv_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `published` int(3) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `d6k20_jv_product_categories`
--

INSERT INTO `d6k20_jv_product_categories` (`id`, `name`, `published`, `created_date`) VALUES
(4, 'Extension Joomla', 1, NULL),
(5, 'Templates Joomla', 1, NULL),
(7, 'Templates Boostrap 3', 1, '2014-08-12 16:42:21'),
(8, 'Templates Boostrap 3', 1, '2014-08-12 16:42:26'),
(9, 'Templates Admin', 1, '2014-08-12 16:43:43'),
(10, 'Template Wordpress', 0, '2014-08-12 16:46:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
