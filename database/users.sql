-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2019 at 12:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pincode` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`fname`, `email`, `address`, `city`, `state`, `pincode`) VALUES
('Abhisar Gupta', 'abhisar1906@gmail.com', '11/774,Vasundhara,GZB', 'Vasundhara', 'UP', 201012);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `cardnme` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `cardname` varchar(200) NOT NULL,
  `cardnumber` varchar(30) NOT NULL,
  `expmonth` varchar(100) NOT NULL,
  `expyear` varchar(100) NOT NULL,
  `cvv` int(5) NOT NULL,
  `payment` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`cardnme`, `bank`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `payment`) VALUES
('Debit', 'Union', 'Madhur Bansal', '1234-5678-1234-5678', 'July', '2024', 980, 548600);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `cimage` varchar(200) NOT NULL,
  `cprice` varchar(50) NOT NULL,
  `cqua` int(20) NOT NULL DEFAULT '1',
  `cdesc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cname`, `cimage`, `cprice`, `cqua`, `cdesc`) VALUES
(1, 'Amazon Tablet Black', 'upload/amazon-fire-7-tablet-alexa-2017-8-gb-black.jpg', '50000', 1, 'Black, 64 GB, 4 GB ram '),
(2, 'Apple Ipad', 'upload/apple-9-7-ipad-32-gb-space-grey.jpg', '60000', 8, 'Black, 32 GB, 2 GB ram'),
(3, 'Blackberry Evolve', 'upload/blackberry-evolve.jpeg', '18600', 1, 'Black, 64 GB, 4 GB RAM');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`uid`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Abhisar Gupta', 'abhisar123', 'abhisar1906@gmail.com', '8860357012'),
(2, 'Madhur Bansal', 'madhur123', 'madhur@gmail.com', '8447944887'),
(3, 'admin', 'admin123', 'admin@gmail.com', '8130400427');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('Abhisar', 'abhisar1906@gmail.com', 'Recieved Damage Product', 'I want to exchange my lenovo laptop as it is not working properly and its some parts are missing.'),
('Madhur', 'madhur@gmail.com', 'Recieved Damage Product', 'I want to exchange my old product.'),
('', '', '', ''),
('Juhi', 'juhi@gmail.com', 'Recieved Damage Product', 'My product was damaged when i recieved it.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pprice` varchar(200) NOT NULL,
  `pqty` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pcategory` varchar(200) NOT NULL,
  `pdesc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pprice`, `pqty`, `image`, `pcategory`, `pdesc`) VALUES
(1, 'Amazon Tablet Black', '50000', '10', 'upload/amazon-fire-7-tablet-alexa-2017-8-gb-black.jpg', 'Electronics', 'Black, 64 GB, 4 GB ram '),
(2, 'Apple Ipad', '60000', '10', 'upload/apple-9-7-ipad-32-gb-space-grey.jpg', 'Electronics', 'Black, 32 GB, 2 GB ram'),
(3, 'Redmi Y2 ', '9000', '10', 'upload/mi-redmi-y2.jpeg', 'Electronics', 'Blue, 32 GB, 3 GB RAM'),
(6, 'Lenovo K8 Note', '8999', '10', 'upload/lenovo-k8-note-xt.jpeg', 'Electronics', 'Venom Black, 64 GB, 4 GB RAM'),
(4, 'Blackberry Evolve', '18600', '10', 'upload/blackberry-evolve.jpeg', 'Electronics', 'Black, 64 GB, 4 GB RAM'),
(5, 'Mi A2', '11979', '10', 'upload/mi-redmi-5-na.jpeg', 'Electronics', 'Blue/Lake Blue, 64 GB, 4 GB RAM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
