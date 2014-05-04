-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2014 at 07:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teamdp_pitara1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE IF NOT EXISTS `category_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `desc` varchar(1500) NOT NULL,
  `og_title` varchar(1000) NOT NULL,
  `og_desc` varchar(1500) NOT NULL,
  `short_desc` varchar(1500) NOT NULL,
  `long_desc` mediumtext NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `index_flag` int(11) NOT NULL,
  `url_slug` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category_mapping`
--

CREATE TABLE IF NOT EXISTS `category_mapping` (
  `deal_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_deals`
--

CREATE TABLE IF NOT EXISTS `product_deals` (
  `deal_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `seo_title` varchar(1000) NOT NULL,
  `seo_desc` varchar(1000) NOT NULL,
  `og_title` varchar(1000) NOT NULL,
  `og_desc` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `store_name` varchar(200) NOT NULL,
  `discount` int(11) NOT NULL,
  `coupon_code` varchar(200) NOT NULL,
  `expiry` date NOT NULL,
  `shipping_charges` varchar(1000) NOT NULL,
  `content` mediumtext NOT NULL,
  `offer_text` varchar(500) NOT NULL,
  `affiliate_url` varchar(500) NOT NULL,
  `original_price` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `url_slug` varchar(1000) NOT NULL,
  `author` varchar(200) NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `store_details`
--

CREATE TABLE IF NOT EXISTS `store_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `desc` varchar(1500) NOT NULL,
  `og_title` varchar(1000) NOT NULL,
  `og_desc` varchar(1500) NOT NULL,
  `short_desc` varchar(1500) NOT NULL,
  `long_desc` mediumtext NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `index_flag` int(11) NOT NULL,
  `url_slug` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE IF NOT EXISTS `users_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `user_level` int(11) NOT NULL,
  `last_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`user_id`, `user_name`, `email_address`, `user_pass`, `user_level`, `last_loggedin`) VALUES
(1, 'admin', 'yogi_prasad90@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2004-05-14 12:22:43'),
(2, 'yogi', 'yo@gmail.com', '938e14c074c45c62eb15cc05a6f36d79', 2, '2004-05-14 12:23:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
