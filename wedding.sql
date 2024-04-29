-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 08:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) DEFAULT NULL,
  `admin_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `ct_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ct_id`),
  KEY `c_id` (`c_id`,`s_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ct_id`, `c_id`, `s_id`, `ct_name`) VALUES
(1, 1, 1, 'surat'),
(2, 1, 1, 'baroda'),
(3, 1, 2, 'bandra');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `name`, `email`, `des`) VALUES
(1, 'dharmesh', 'dharmesh12@gmail.com', 'hi hello');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c_id`, `c_name`) VALUES
(1, 'India'),
(2, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE IF NOT EXISTS `decoration` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) NOT NULL,
  `d_name` varchar(50) DEFAULT NULL,
  `d_desc` text,
  `d_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`d_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'decoration', 'shyam decoration', 'good', '../upload/car.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dj`
--

CREATE TABLE IF NOT EXISTS `dj` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) DEFAULT NULL,
  `d_name` varchar(30) DEFAULT NULL,
  `d_desc` text,
  `d_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dj`
--

INSERT INTO `dj` (`d_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'dj', 'star dj', 'good', '../upload/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `d_decoration`
--

CREATE TABLE IF NOT EXISTS `d_decoration` (
  `deco_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `deco_name` text,
  `deco_desc` text NOT NULL,
  `deco_price` varchar(50) DEFAULT NULL,
  `deco_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`deco_id`),
  KEY `d_id` (`d_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `d_decoration`
--

INSERT INTO `d_decoration` (`deco_id`, `d_id`, `s_id`, `ct_id`, `deco_name`, `deco_desc`, `deco_price`, `deco_img`) VALUES
(1, 1, 2, 3, 'shyam', 'kjhgcvhk', '6900', '../upload/ph_backgrounds28.png');

-- --------------------------------------------------------

--
-- Table structure for table `d_dj`
--

CREATE TABLE IF NOT EXISTS `d_dj` (
  `dj_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id` int(11) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `ct_id` int(11) DEFAULT NULL,
  `d_name` varchar(30) DEFAULT NULL,
  `d_price` int(11) DEFAULT NULL,
  `d_desc` text,
  `d_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dj_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `d_dj`
--

INSERT INTO `d_dj` (`dj_id`, `d_id`, `s_id`, `ct_id`, `d_name`, `d_price`, `d_desc`, `d_img`) VALUES
(1, 1, 2, 3, 'Rock', 32000, 'lkjhgvhmb', '../upload/ph_backgrounds28.png');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) NOT NULL,
  `d_name` varchar(50) DEFAULT NULL,
  `d_desc` varchar(50) DEFAULT NULL,
  `d_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`f_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'food', 'shokin food', 'good', '../upload/back_enabled.png'),
(2, 'food', 'farari namkeen', 'its a good pleaseure with us.', '../upload/page2-img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `f_food`
--

CREATE TABLE IF NOT EXISTS `f_food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `f_price` varchar(50) DEFAULT NULL,
  `f_desc` varchar(50) DEFAULT NULL,
  `f_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`food_id`),
  KEY `f_id` (`f_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `f_food`
--

INSERT INTO `f_food` (`food_id`, `f_id`, `s_id`, `ct_id`, `f_name`, `f_price`, `f_desc`, `f_img`) VALUES
(1, 1, 2, 3, 'dai', '32000', 'lkjmn', '../upload/ph_backgrounds28.png'),
(2, 2, 2, 3, 'all types', '45000', 'its all about life style indian, chines, punjabi e', '../upload/page4-img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gift_product`
--

CREATE TABLE IF NOT EXISTS `gift_product` (
  `gf_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `gf_name` varchar(50) NOT NULL,
  `gf_price` int(11) NOT NULL,
  `gf_desc` varchar(100) NOT NULL,
  `gf_img` varchar(50) NOT NULL,
  PRIMARY KEY (`gf_id`),
  KEY `g_id` (`g_id`),
  KEY `s_id` (`s_id`),
  KEY `c_id` (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gift_product`
--

INSERT INTO `gift_product` (`gf_id`, `g_id`, `s_id`, `ct_id`, `gf_name`, `gf_price`, `gf_desc`, `gf_img`) VALUES
(1, 1, 2, 3, 'hari', 6900, ',jb', '../upload/ph_backgrounds28.png');

-- --------------------------------------------------------

--
-- Table structure for table `gift_store`
--

CREATE TABLE IF NOT EXISTS `gift_store` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_desc` varchar(50) NOT NULL,
  `d_img` varchar(50) NOT NULL,
  PRIMARY KEY (`g_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gift_store`
--

INSERT INTO `gift_store` (`g_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'gift_store', 'radhey gift', 'good', '../upload/car.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) DEFAULT NULL,
  `d_name` varchar(30) DEFAULT NULL,
  `d_desc` text,
  `d_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`h_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`h_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'hall', 'hari om hall', 'good', '../upload/back_disabled.png');

-- --------------------------------------------------------

--
-- Table structure for table `h_hall`
--

CREATE TABLE IF NOT EXISTS `h_hall` (
  `hall_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` int(11) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `ct_id` int(11) DEFAULT NULL,
  `h_name` varchar(30) DEFAULT NULL,
  `h_price` int(11) NOT NULL,
  `h_desc` text,
  `h_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`hall_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `h_hall`
--

INSERT INTO `h_hall` (`hall_id`, `h_id`, `s_id`, `ct_id`, `h_name`, `h_price`, `h_desc`, `h_img`) VALUES
(1, 1, 2, 3, 'merrage hall', 10000, '.k,jhgvbn', '../upload/ph_backgrounds28.png'),
(2, 1, 2, 2, 'ganpati hall', 30000, 'all types of merrage allow.', '../upload/album1 (4).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `or_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `nam` varchar(50) NOT NULL,
  `dess` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ord_date` varchar(50) NOT NULL,
  `status` enum('order','confirm') NOT NULL DEFAULT 'order',
  PRIMARY KEY (`or_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`or_id`, `category`, `nam`, `dess`, `price`, `username`, `ord_date`, `status`) VALUES
(4, 'food', 'dai', 'lkjmn', '32000', 'chandresh', '2015-07-18', 'confirm'),
(6, 'decoration', 'shyam', 'kjhgcvhk', '6900', 'chandresh', '2015-07-18', 'confirm'),
(7, 'decoration', 'shyam', 'kjhgcvhk', '6900', 'chandresh', '2015-07-18', 'confirm'),
(9, 'food', 'dai', 'lkjmn', '32000', 'chandresh', '2015-07-18', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE IF NOT EXISTS `photography` (
  `ph_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_desc` varchar(50) NOT NULL,
  `d_img` varchar(50) NOT NULL,
  PRIMARY KEY (`ph_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`ph_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'photography', 'sam studio', 'good', '../upload/back_enabled_hover.png');

-- --------------------------------------------------------

--
-- Table structure for table `ph_img`
--

CREATE TABLE IF NOT EXISTS `ph_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `ph_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `ph_name` varchar(50) NOT NULL,
  `ph_desc` text NOT NULL,
  `ph_price` varchar(50) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `ph_id` (`ph_id`,`s_id`,`ct_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ph_img`
--

INSERT INTO `ph_img` (`img_id`, `ph_id`, `s_id`, `ct_id`, `ph_name`, `ph_desc`, `ph_price`, `img_name`) VALUES
(1, 1, 2, 3, 'dai', 'kjnbvvbnm', '6900', '../upload/ph_backgrounds28.png');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mob` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `ct_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `ct_id` (`ct_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`r_id`, `fname`, `email`, `mob`, `gender`, `username`, `pass`, `s_id`, `ct_id`) VALUES
(2, 'chandresh', 'ahirchandresh83@gmail.com', '9913064645', 'Male', 'chandresh', 'ahir', 2, 2),
(3, 'ruhi', 'ruhi@gmail.com', '1234567890', 'Female', 'ruhi', 'ruhi', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(30) NOT NULL DEFAULT '',
  `ser_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ser_name`),
  UNIQUE KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `ser_name`, `ser_img`) VALUES
(8, 'decoration', '../upload/cere.jpg'),
(10, 'dj', '../upload/hedj.jpg'),
(9, 'food', '../upload/food.jpg'),
(11, 'gift_store', '../upload/gift.jpg'),
(12, 'hall', '../upload/hall.jpg'),
(13, 'photography', '../upload/photo.jpg'),
(14, 'video', '../upload/vid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `c_id`, `s_name`) VALUES
(1, 1, 'gujarat'),
(2, 1, 'maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_id` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_desc` varchar(50) NOT NULL,
  `d_img` varchar(100) NOT NULL,
  PRIMARY KEY (`v_id`),
  KEY `ser_id` (`ser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `ser_id`, `d_name`, `d_desc`, `d_img`) VALUES
(1, 'video', 'deo studio', 'good', '../upload/american-express.png');

-- --------------------------------------------------------

--
-- Table structure for table `v_video`
--

CREATE TABLE IF NOT EXISTS `v_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_price` varchar(50) NOT NULL,
  `v_desc` text NOT NULL,
  `video_name` varchar(50) NOT NULL,
  PRIMARY KEY (`video_id`),
  KEY `v_id` (`v_id`,`s_id`,`ct_id`),
  KEY `s_id` (`s_id`),
  KEY `ct_id` (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `v_video`
--

INSERT INTO `v_video` (`video_id`, `v_id`, `s_id`, `ct_id`, `v_name`, `v_price`, `v_desc`, `video_name`) VALUES
(1, 1, 2, 3, 'dai', '6900', 'lkjhgcvbnm,', '../upload/ph_backgrounds28.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `city_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `decoration`
--
ALTER TABLE `decoration`
  ADD CONSTRAINT `decoration_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dj`
--
ALTER TABLE `dj`
  ADD CONSTRAINT `dj_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `d_decoration`
--
ALTER TABLE `d_decoration`
  ADD CONSTRAINT `d_decoration_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `decoration` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_decoration_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_decoration_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `d_dj`
--
ALTER TABLE `d_dj`
  ADD CONSTRAINT `d_dj_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_dj_ibfk_2` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_dj_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `dj` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `f_food`
--
ALTER TABLE `f_food`
  ADD CONSTRAINT `f_food_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `food` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_food_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_food_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gift_product`
--
ALTER TABLE `gift_product`
  ADD CONSTRAINT `gift_product_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `gift_store` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gift_product_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gift_product_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gift_store`
--
ALTER TABLE `gift_store`
  ADD CONSTRAINT `gift_store_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `h_hall`
--
ALTER TABLE `h_hall`
  ADD CONSTRAINT `h_hall_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `h_hall_ibfk_2` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `h_hall_ibfk_3` FOREIGN KEY (`h_id`) REFERENCES `hall` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photography`
--
ALTER TABLE `photography`
  ADD CONSTRAINT `photography_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ph_img`
--
ALTER TABLE `ph_img`
  ADD CONSTRAINT `ph_img_ibfk_1` FOREIGN KEY (`ph_id`) REFERENCES `photography` (`ph_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ph_img_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ph_img_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `country` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `v_video`
--
ALTER TABLE `v_video`
  ADD CONSTRAINT `v_video_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `video` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `v_video_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `state` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `v_video_ibfk_3` FOREIGN KEY (`ct_id`) REFERENCES `city` (`ct_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
