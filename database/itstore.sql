-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2024 at 08:50 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestsellpd`
--

CREATE TABLE IF NOT EXISTS `bestsellpd` (
  `bs_id` int(100) NOT NULL AUTO_INCREMENT,
  `bs_cate` text NOT NULL,
  `bs_brand` text NOT NULL,
  `bs_model` varchar(100) NOT NULL,
  `bs_img` text NOT NULL,
  PRIMARY KEY (`bs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bestsellpd`
--

INSERT INTO `bestsellpd` (`bs_id`, `bs_cate`, `bs_brand`, `bs_model`, `bs_img`) VALUES
(1, 'Tablets', 'Samsung', 'Galaxy tab s7', 'trending-11.jpg'),
(2, 'Mobile Phone', 'Apple', 'iPhone 14 Pro', 'trending-01.jpg'),
(3, 'Laptop', 'ASUS', 'TUF f15', 'trending-13.jpg'),
(4, 'Smarth Watch', 'Honor', 'Honor Watch4', 'trending-17.jpg'),
(6, 'Smarth Watch', 'ATH', 'Logitech Craft', 'trending-23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `b_id` int(100) NOT NULL AUTO_INCREMENT,
  `b_title` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`b_id`, `b_title`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Redmi'),
(4, 'Honor'),
(5, 'Huawei'),
(6, 'ASUS'),
(7, 'HP'),
(8, 'ACER'),
(9, 'Logitech'),
(10, 'Crucial'),
(11, 'ATH');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `cashback` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `Order_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`brand`, `model`, `price`, `cashback`, `phone`, `adress`, `Order_no`) VALUES
('Apple', 'iphone 14pro', '3200000KS', '', '09424162523', 'Ahlone', 'no62'),
('Samsung', 'Galaxy tab s7', '1390000Ks', '', '0987654321', 'Mandalay', 'no31'),
('Apple', 'iphone 14pro', '3200000Ks', '200000Ks', '0987654321', 'Dagon', 'no76'),
('Apple', 'iphone 14pro', '3200000Ks', '200000Ks', '09199', 'cj', 'no9'),
('Logitech', 'Logitech Craft', '120000Ks', '10000Ks', '09421101948', 'Ag test 1\r\n', 'no96');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `c_id` int(100) NOT NULL AUTO_INCREMENT,
  `c_title` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`c_id`, `c_title`) VALUES
(1, 'Mobile Phone'),
(2, 'Tablets'),
(3, 'Laptop'),
(4, 'Smarth Watch'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `phone`, `feedback`) VALUES
('zhang@gmail.com', '0973055232', 'Test'),
('zhang@gmail.com', '0973055232', 'Test'),
('kaung999@gmail.com', '09421101948', 'TEST2'),
('zhang@gmail.com', '0973055232', 'Test3'),
('kaung999@gmail.com', '0942416222', 'icon text'),
('kaung999@gmail.com', '0942416222', 'Test3'),
('kaung999@gmail.com', '0942416222', 'Test3'),
('mg@gmail.com', '0973055232', 'afdsfdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE IF NOT EXISTS `marketing` (
  `m_id` int(100) NOT NULL AUTO_INCREMENT,
  `m_image` text NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`m_id`, `m_image`) VALUES
(1, 'mk-2.jpg'),
(2, 'mk-6.jpg'),
(3, 'mk-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_brand` text NOT NULL,
  `p_model` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_cashback` varchar(100) NOT NULL,
  `p_cate` text NOT NULL,
  `p_image` text NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_brand`, `p_model`, `p_price`, `p_cashback`, `p_cate`, `p_image`, `p_desc`) VALUES
(1, 'Apple', 'iphone 14pro', '3200000Ks', '200000Ks', 'Mobile Phone', 'trending-01.jpg', 'Elevate your mobile experience with our latest offering 128GB storage, 6.1" Super Retina XDR Display, 48MP triple rear camera, and A16 Bionic Chip. Unleash innovation in the palm of your hands!'),
(2, 'Samsung', 'Galaxy Tab s7', '1390000Ks', '50000Ks', 'Tablets', 'trending-11.jpg', 'Revolutionize your mobile experience with 128GB storage, a dazzling 6.1" Super Retina XDR Display, a powerful 48MP triple rear camera, and seamless performance powered by the Qualcomm Snapdragon 888. Elevate your tech game today!'),
(3, 'ASUS', 'TUF f15', '2100000Ks', '70000Ks', 'Laptop', 'trending-13.jpg', 'Unleash top-tier performance with our powerhouse laptop featuring a massive 512GB storage, a cutting-edge 12th Gen IntelÂ® Coreâ„¢ i7 processor, and a stunning display offering up to QHD 165Hz or FHD 300Hz with Adaptive-Sync. Immerse yourself in a visual masterpiece with an 80% screen-to-body ratio. Elevate your computing experience to the next level!'),
(4, 'Honor', 'Honor Watch 4', '350000Ks', '30000Ks', 'Smarth Watch', 'trending-17.jpg', 'Discover unparalleled sophistication in a compact design with dimensions of 45.3mm Ã— 39.1mm Ã— 11.2mm, featuring a sleek 6-series aluminum alloy middle-frame. Immerse yourself in the clarity of the AMOLED Display, boasting a 60Hz refresh rate, 450 x 390 pixels, 340 PPI, and a dazzling 600 nits brightness. With 5 ATM water resistance, this device seamlessly combines style and durability, making it your perfect companion in any environment.'),
(5, 'Crucial', 'Crucial X9pro', '140000Ks', '10000Ks', 'Other', 'trending-21.jpg', 'Unleash unparalleled storage and speed with the Crucial X9 Pro: a high-performance external SSD. Featuring lightning-fast NVMe technology, this portable powerhouse offers capacities up to [specify capacity], ensuring rapid data transfer. With sleek design and robust construction, the Crucial X9 Pro is your go-to solution for reliable and high-speed storage on the go.'),
(6, 'ATH', 'ATH-G1WL', '200000Ks', '30000Ks', 'Other', 'trending-20.jpg', 'Immerse yourself in superior gaming audio with the ATH-G1WL wireless gaming headset. Experience crystal-clear sound, powerful 45mm drivers, and a detachable boom microphone for clear communication. The lightweight design ensures comfort during extended gaming sessions, while the reliable wireless connection lets you game with freedom. Elevate your gaming experience with the ATH-G1WL.'),
(7, 'Logitech', 'Logitech Craft', '120000Ks', '10000Ks', 'Other', 'trending-23.jpg', 'Elevate your creative workflow with the Logitech Craft: a premium wireless keyboard designed for efficiency. Featuring a versatile input dial, backlit keys, and customizable shortcut keys, it enhances productivity for designers and creators. The sleek design and comfortable typing experience make the Logitech Craft a stylish and functional addition to your workspace.');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `township` text NOT NULL,
  `email_noti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`name`, `email`, `password`, `phone`, `gender`, `city`, `township`, `email_noti`) VALUES
('Kaung Sitt', 'kaung999@gmail.com', 'abc123def', '09421101948', 'female', 'Mandalay', 'Ahlone', 'no'),
('Zhang', 'zhang@gmail.com', '4211', '0973055232', 'female', 'Yangon', 'Dagon', 'yes'),
('Kyaw', 'kyaw777@gmail.com', '12345', '0987654321', 'male', 'Kalaw', 'kalaw', 'yes'),
('Wanna Heain', 'Wanna@gmail.com', '0976w4', '09424162523', 'male', 'Yangon', 'Ahlone', 'yes'),
('MG MG', 'mg@gmail.com', '12345', '0973055232', 'male', 'Yangon', 'Dagon', 'no'),
('Test1', 'Test1@gmail.com', '1234', '094654615151', 'female', 'Yangon', 'kalaw', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`) VALUES
('kaung', '1234'),
('zhang', '123456'),
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
