-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2014 at 06:17 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `d6k20_jv_product`
--

INSERT INTO `d6k20_jv_product` (`id`, `img_thumb`, `img_thumb_alt`, `img`, `img_alt`, `name_project`, `short_des`, `des`, `publish`, `created_date`, `count_buy`, `price`, `id_categories_product`) VALUES
(19, 'images/portfolio/thumb/item1.jpg', 'sfb research & training', 'images/portfolio/full/item1.jpg', 'sfb research & training', 'SFB Research & Trainning', 'Template html -  Templates responsive', '<h2>Features include:</h2>\r\n<ul>\r\n<li><strong>Carefully</strong> hand coded from head to toe</li>\r\n<li>Contains <strong>neatly organized</strong> and commended HTML, JS and LESS files (unminified CSS files available)</li>\r\n<li>Built with <strong>bootstrap 3.2</strong> (contains LESS files for the Custom BS Build)</li>\r\n<li><strong>Retina</strong> Graphs and Icons</li>\r\n<li>w3 valid cross browser compatible HTML5 markup</li>\r\n<li>Unique, never seen before, <strong>localStorage Widgets</strong> (<em>Jarvis Widget 2.0</em>) with custom controls for the users (now includes a robust API)</li>\r\n<li><strong>6 Level responsive navigation</strong></li>\r\n<li>Scales to almost <strong>any size</strong> (Fluid/Responsive/Boxed and Container)</li>\r\n<li>Two different navigation options (horizontal or vertical - no DOM changes required to switch between the two)</li>\r\n<li>CSS3 <strong>Animated</strong></li>\r\n<li><strong>Modern</strong> Form Elements (jQuery select2, colorpicker, datepicker, validation, iDevice buttons and wizard)</li>\r\n<li><strong>Professional Design</strong> and <strong>Branding</strong> (includes matching email templates [non-Bootstrap])</li>\r\n<li>Unique menu API that can be collapsed, or hidden (show on hover). Menu also adapts on mobile phones very swiftly.</li>\r\n<li>Unique <strong>Google Map Skins</strong> (7 in total)</li>\r\n<li>Google like Gallery with <strong>data-attribute descriptions</strong></li>\r\n<li><strong>Smart Alert</strong> and <strong>Smart Notification</strong> with sound</li>\r\n<li>Dynamic Data Table with <strong>export to PDF/Excel</strong></li>\r\n<li><strong>Smart Form elements</strong> (built on top of bootstrap library for robust form development)</li>\r\n<li><strong>AJAX pages</strong> (pages are pulled in and scripts are loaded on request per page)</li>\r\n<li>Also contains a Clean HTML Version, <a title="PHP Version" href="https://wrapbootstrap.com/out?u=http%3A%2F%2Fmyorange.ca%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fphpversion%2F" target="_blank">Advanced PHP Version</a>, and <a title="AngularJS" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fangularjs%2F" target="_blank">AngularJS Version</a> with Grunt Tasks</li>\r\n<li><a title="Documentation Demo" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fsmartadmin%2FBUGTRACK%2Ftrack_%2Fdocumentation%2Findex.html" target="_blank">Detailed Documentation</a></li>\r\n</ul>\r\n<p>&nbsp;</p>', 1, '2014-08-15 22:30:52', 0, 2, 13),
(20, 'images/portfolio/thumb/item2.jpg', 'Niem tin moi', 'images/portfolio/full/item2.jpg', 'Niem tin moi', 'The website niemtinmoi company', 'Open Source Joomla 2.5', '<h2>Features include:</h2>\r\n<ul>\r\n<li><strong>Carefully</strong> hand coded from head to toe</li>\r\n<li>Contains <strong>neatly organized</strong> and commended HTML, JS and LESS files (unminified CSS files available)</li>\r\n<li>Built with <strong>bootstrap 3.2</strong> (contains LESS files for the Custom BS Build)</li>\r\n<li><strong>Retina</strong> Graphs and Icons</li>\r\n<li>w3 valid cross browser compatible HTML5 markup</li>\r\n<li>Unique, never seen before, <strong>localStorage Widgets</strong> (<em>Jarvis Widget 2.0</em>) with custom controls for the users (now includes a robust API)</li>\r\n<li><strong>6 Level responsive navigation</strong></li>\r\n<li>Scales to almost <strong>any size</strong> (Fluid/Responsive/Boxed and Container)</li>\r\n<li>Two different navigation options (horizontal or vertical - no DOM changes required to switch between the two)</li>\r\n<li>CSS3 <strong>Animated</strong></li>\r\n<li><strong>Modern</strong> Form Elements (jQuery select2, colorpicker, datepicker, validation, iDevice buttons and wizard)</li>\r\n<li><strong>Professional Design</strong> and <strong>Branding</strong> (includes matching email templates [non-Bootstrap])</li>\r\n<li>Unique menu API that can be collapsed, or hidden (show on hover). Menu also adapts on mobile phones very swiftly.</li>\r\n<li>Unique <strong>Google Map Skins</strong> (7 in total)</li>\r\n<li>Google like Gallery with <strong>data-attribute descriptions</strong></li>\r\n<li><strong>Smart Alert</strong> and <strong>Smart Notification</strong> with sound</li>\r\n<li>Dynamic Data Table with <strong>export to PDF/Excel</strong></li>\r\n<li><strong>Smart Form elements</strong> (built on top of bootstrap library for robust form development)</li>\r\n<li><strong>AJAX pages</strong> (pages are pulled in and scripts are loaded on request per page)</li>\r\n<li>Also contains a Clean HTML Version, <a title="PHP Version" href="https://wrapbootstrap.com/out?u=http%3A%2F%2Fmyorange.ca%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fphpversion%2F" target="_blank">Advanced PHP Version</a>, and <a title="AngularJS" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fangularjs%2F" target="_blank">AngularJS Version</a> with Grunt Tasks</li>\r\n<li><a title="Documentation Demo" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fsmartadmin%2FBUGTRACK%2Ftrack_%2Fdocumentation%2Findex.html" target="_blank">Detailed Documentation</a></li>\r\n</ul>', 1, '2014-08-15 23:12:01', 0, 59, 16),
(21, 'images/portfolio/thumb/item3.jpg', 'simsodepsaithanh.com', 'images/portfolio/full/item3.jpg', 'simsodepsaithanh.com', 'The simsodepsaithanh.com website', 'Open Source Joomla', '<h2>Features include:</h2>\r\n<ul>\r\n<li><strong>Carefully</strong> hand coded from head to toe</li>\r\n<li>Contains <strong>neatly organized</strong> and commended HTML, JS and LESS files (unminified CSS files available)</li>\r\n<li>Built with <strong>bootstrap 3.2</strong> (contains LESS files for the Custom BS Build)</li>\r\n<li><strong>Retina</strong> Graphs and Icons</li>\r\n<li>w3 valid cross browser compatible HTML5 markup</li>\r\n<li>Unique, never seen before, <strong>localStorage Widgets</strong> (<em>Jarvis Widget 2.0</em>) with custom controls for the users (now includes a robust API)</li>\r\n<li><strong>6 Level responsive navigation</strong></li>\r\n<li>Scales to almost <strong>any size</strong> (Fluid/Responsive/Boxed and Container)</li>\r\n<li>Two different navigation options (horizontal or vertical - no DOM changes required to switch between the two)</li>\r\n<li>CSS3 <strong>Animated</strong></li>\r\n<li><strong>Modern</strong> Form Elements (jQuery select2, colorpicker, datepicker, validation, iDevice buttons and wizard)</li>\r\n<li><strong>Professional Design</strong> and <strong>Branding</strong> (includes matching email templates [non-Bootstrap])</li>\r\n<li>Unique menu API that can be collapsed, or hidden (show on hover). Menu also adapts on mobile phones very swiftly.</li>\r\n<li>Unique <strong>Google Map Skins</strong> (7 in total)</li>\r\n<li>Google like Gallery with <strong>data-attribute descriptions</strong></li>\r\n<li><strong>Smart Alert</strong> and <strong>Smart Notification</strong> with sound</li>\r\n<li>Dynamic Data Table with <strong>export to PDF/Excel</strong></li>\r\n<li><strong>Smart Form elements</strong> (built on top of bootstrap library for robust form development)</li>\r\n<li><strong>AJAX pages</strong> (pages are pulled in and scripts are loaded on request per page)</li>\r\n<li>Also contains a Clean HTML Version, <a title="PHP Version" href="https://wrapbootstrap.com/out?u=http%3A%2F%2Fmyorange.ca%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fphpversion%2F" target="_blank">Advanced PHP Version</a>, and <a title="AngularJS" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fangularjs%2F" target="_blank">AngularJS Version</a> with Grunt Tasks</li>\r\n<li><a title="Documentation Demo" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fsmartadmin%2FBUGTRACK%2Ftrack_%2Fdocumentation%2Findex.html" target="_blank">Detailed Documentation</a></li>\r\n</ul>', 1, '2014-08-15 23:12:17', 0, 35, 16),
(22, 'images/portfolio/thumb/item4.jpg', 'The web Thangviet Security company ', 'images/portfolio/full/item4.jpg', 'The web Thangviet Security company ', 'The web Thangviet Security company ', 'Web to introduction company', '<h2>Features include:</h2>\r\n<ul>\r\n<li><strong>Carefully</strong> hand coded from head to toe</li>\r\n<li>Contains <strong>neatly organized</strong> and commended HTML, JS and LESS files (unminified CSS files available)</li>\r\n<li>Built with <strong>bootstrap 3.2</strong> (contains LESS files for the Custom BS Build)</li>\r\n<li><strong>Retina</strong> Graphs and Icons</li>\r\n<li>w3 valid cross browser compatible HTML5 markup</li>\r\n<li>Unique, never seen before, <strong>localStorage Widgets</strong> (<em>Jarvis Widget 2.0</em>) with custom controls for the users (now includes a robust API)</li>\r\n<li><strong>6 Level responsive navigation</strong></li>\r\n<li>Scales to almost <strong>any size</strong> (Fluid/Responsive/Boxed and Container)</li>\r\n<li>Two different navigation options (horizontal or vertical - no DOM changes required to switch between the two)</li>\r\n<li>CSS3 <strong>Animated</strong></li>\r\n<li><strong>Modern</strong> Form Elements (jQuery select2, colorpicker, datepicker, validation, iDevice buttons and wizard)</li>\r\n<li><strong>Professional Design</strong> and <strong>Branding</strong> (includes matching email templates [non-Bootstrap])</li>\r\n<li>Unique menu API that can be collapsed, or hidden (show on hover). Menu also adapts on mobile phones very swiftly.</li>\r\n<li>Unique <strong>Google Map Skins</strong> (7 in total)</li>\r\n<li>Google like Gallery with <strong>data-attribute descriptions</strong></li>\r\n<li><strong>Smart Alert</strong> and <strong>Smart Notification</strong> with sound</li>\r\n<li>Dynamic Data Table with <strong>export to PDF/Excel</strong></li>\r\n<li><strong>Smart Form elements</strong> (built on top of bootstrap library for robust form development)</li>\r\n<li><strong>AJAX pages</strong> (pages are pulled in and scripts are loaded on request per page)</li>\r\n<li>Also contains a Clean HTML Version, <a title="PHP Version" href="https://wrapbootstrap.com/out?u=http%3A%2F%2Fmyorange.ca%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fphpversion%2F" target="_blank">Advanced PHP Version</a>, and <a title="AngularJS" href="https://wrapbootstrap.com/out?u=http%3A%2F%2F192.241.236.31%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fangularjs%2F" target="_blank">AngularJS Version</a> with Grunt Tasks</li>\r\n</ul>', 1, '2014-08-15 23:12:33', 0, 59, 16),
(23, '', '', '', '', 'The web simsodeptphcm.com.vn ', 'Open Source Joomla', '<h2>Features include:</h2>\r\n<ul>\r\n<li><strong>Carefully</strong> hand coded from head to toe</li>\r\n<li>Contains <strong>neatly organized</strong> and commended HTML, JS and LESS files (unminified CSS files available)</li>\r\n<li>Built with <strong>bootstrap 3.2</strong> (contains LESS files for the Custom BS Build)</li>\r\n<li><strong>Retina</strong> Graphs and Icons</li>\r\n<li>w3 valid cross browser compatible HTML5 markup</li>\r\n<li>Unique, never seen before, <strong>localStorage Widgets</strong> (<em>Jarvis Widget 2.0</em>) with custom controls for the users (now includes a robust API)</li>\r\n<li><strong>6 Level responsive navigation</strong></li>\r\n<li>Scales to almost <strong>any size</strong> (Fluid/Responsive/Boxed and Container)</li>\r\n<li>Two different navigation options (horizontal or vertical - no DOM changes required to switch between the two)</li>\r\n<li>CSS3 <strong>Animated</strong></li>\r\n<li><strong>Modern</strong> Form Elements (jQuery select2, colorpicker, datepicker, validation, iDevice buttons and wizard)</li>\r\n<li><strong>Professional Design</strong> and <strong>Branding</strong> (includes matching email templates [non-Bootstrap])</li>\r\n<li>Unique menu API that can be collapsed, or hidden (show on hover). Menu also adapts on mobile phones very swiftly.</li>\r\n<li>Unique <strong>Google Map Skins</strong> (7 in total)</li>\r\n<li>Google like Gallery with <strong>data-attribute descriptions</strong></li>\r\n<li><strong>Smart Alert</strong> and <strong>Smart Notification</strong> with sound</li>\r\n<li>Dynamic Data Table with <strong>export to PDF/Excel</strong></li>\r\n<li><strong>Smart Form elements</strong> (built on top of bootstrap library for robust form development)</li>\r\n<li><strong>AJAX pages</strong> (pages are pulled in and scripts are loaded on request per page)</li>\r\n<li>Also contains a Clean HTML Version, <a title="PHP Version" href="../out?u=http%3A%2F%2Fmyorange.ca%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fphpversion%2F" target="_blank">Advanced PHP Version</a>, and <a title="AngularJS" href="../out?u=http%3A%2F%2F192.241.236.31%2Fthemes%2Fpreview%2Fsmartadmin%2F1.4%2Fangularjs%2F" target="_blank">AngularJS Version</a> with Grunt Tasks</li>\r\n</ul>', 1, '2014-08-15 23:10:59', 0, 35, 16);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `d6k20_jv_product_categories`
--

INSERT INTO `d6k20_jv_product_categories` (`id`, `name`, `published`, `created_date`) VALUES
(11, 'Admin & Dashboards', 1, '2014-08-15 22:19:40'),
(12, 'Business & Corporate', 1, '2014-08-15 22:20:43'),
(13, 'Landing Pages', 1, '2014-08-15 22:21:06'),
(14, 'Components ', 1, '2014-08-15 22:22:21'),
(15, 'E-Commerce ', 1, '2014-08-15 22:23:01'),
(16, 'Joomla templates', 1, '2014-08-15 22:23:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
