-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2016 at 12:27 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secure_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`) VALUES
(26, 'Accesories'),
(29, 'Cam Recorder'),
(22, 'Camera'),
(25, 'Camera Bag'),
(28, 'Digital Camera'),
(27, 'DSLR'),
(30, 'Flash'),
(23, 'Lense'),
(24, 'Memory Card'),
(31, 'Tripod');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(1, '1385995353'),
(1, '1386011064'),
(2, '1462472233'),
(2, '1462545256'),
(2, '1462546246'),
(2, '1462549117'),
(2, '1462553234'),
(2, '1462554544'),
(2, '1462863874'),
(2, '1462863889'),
(2, '1462873398'),
(2, '1463241132'),
(2, '1463298582'),
(2, '1463321164'),
(2, '1463321173'),
(2, '1463412273');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'admin', 'sopnopriyo@gmail.com', '44e30430b04b12248f36276fbe9f7f3ed94caca5ec8eb3c22be40c74542c16f153a70c53bce756ea5d328193acc133afa3c72a3dade0105ef59bf427ca2659f8', '36b0fb1e1f0112d58f9fbc3821cf4d890991cfe66012e77c2cfba772e576df5573f7711ddcfb3c29a396cd7c4bd9fdcdf9a8a2032192dbc6f6ac7a816173fab8');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Shahin', 'sopnopriyo@gmail.com', '0122617120', 'Hello . I have a fucking problem.'),
(2, 'sopnopriyo', 'sopnopriyo@gmail.com', '0122617120', 'asasasasa'),
(3, 'Shahin', 'sopnopriyo@gmail.com', '0122617120', 'asasasa'),
(4, 'sopnopriyo', 'asa', 'asa', 'asasasaas');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `stock_status` varchar(50) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `color`, `quantity`, `stock_status`, `catagory_id`, `description`) VALUES
(11, 'CANON DX-56 VR II LENS', 550, 'product-img/camera1.jpg', 'Black', 30, 'In Stock', 27, 'Nice, 13 Mega Pixel , Beautiful'),
(12, 'Sony Cyber-shot DSC', 250, 'product-img/f1.jpeg', 'Purple', 25, 'In Stock', 28, 'This is nice'),
(13, 'SONY HDR-CX405', 1050, 'product-img/r7.jpeg', 'Black', 30, 'In Stock', 29, 'Anything'),
(14, 'Tamron 16-300mm', 450, 'product-img/slr2.jpg', 'Black', 20, 'In Stock', 23, ''),
(15, 'Nikon - SB-700 AF', 120, 'product-img/fls1.jpg', 'Black', 30, 'In Stock', 30, 'asaah'),
(16, 'Manfrotto Compact', 50, 'product-img/tri1.jpg', 'Black', 60, 'In Stock', 31, 'asa'),
(17, 'Sandisk 16 GB', 50, 'product-img/d1.jpeg', 'Red', 30, 'In Stock', 24, 'nice '),
(18, 'Sony Camera Bag', 250, 'product-img/b5.jpeg', 'Black', 20, 'In Stock', 25, 'asa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;