-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2016 at 06:25 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shahin_camera_shop`
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
(22, 'camera'),
(25, 'Camera Bag'),
(28, 'Digital Camera'),
(27, 'DSLR'),
(30, 'Flash'),
(23, 'Lense'),
(24, 'Memory Card'),
(31, 'Tripod');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `address`, `image`) VALUES
(1, 'Shahin', 'sopnopriyo@gmail.com', 's742446n', '+60122617120', 'UM International House, Jalan 17/2 , Petaling Jaya, Selangor, Malaysia', ''),
(2, 'Mahmud Hasan Khan', 'mhkbgd@gmail.com', 'mahmudum', '0122617112', '173, Jalan 17/5, Section 17, Petaling jaya, Sealngor 46400 ', ''),
(3, 'nasuha', 'chuuyaa31@gmail.com', 'nasuha95', '01112855030', '10,taman cherry tree', ''),
(4, 'try', 'try@test.com', 'Ad123456789', '123456789', 'UM', ''),
(5, 'Atikah', 'atikahnaza95@gmail.com', 'Nashrish95', '0123669635', 'Kolej ke lapan', ''),
(6, 'tahi', 'r@gmail.com', '12345', '999', 'UM', ''),
(7, 'HI', 'r@gmail.com', 'k', '123', 'UM', ''),
(8, '', '', '', '', '', '');

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
(2, '1463412273'),
(2, '1463502750'),
(2, '1463504251'),
(2, '1463898552');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'admin', 'sopnopriyo@gmail.com', '44e30430b04b12248f36276fbe9f7f3ed94caca5ec8eb3c22be40c74542c16f153a70c53bce756ea5d328193acc133afa3c72a3dade0105ef59bf427ca2659f8', '36b0fb1e1f0112d58f9fbc3821cf4d890991cfe66012e77c2cfba772e576df5573f7711ddcfb3c29a396cd7c4bd9fdcdf9a8a2032192dbc6f6ac7a816173fab8'),
(3, 'Tikah', 'atikahnaza95@gmail.com', 'b55d59e25a8b2053506f8074d1057fc92287a17990b9acdd3d8ab2525fc38b0bc303d13c9c5348618479a6689fee2da87a2dfcf6a18063bee82f5ff583354a16', 'f07b5710cb48094423d6fc00f6d7fdcec62ed873ff45e05ef0fc457f40303574d2b8520ca152837895fc1616d1e43bf33dd18d83264c6280e5481f4dbee57117'),
(4, 'try', 'try@test.com', '2d4f2ed0ffdf55475ed69c4867e0f155daa69f09e569f7f71791ce5198182140a4e390393f43440a285f6649d7e277e344df11f4319f731aeb4c6405ce842729', '336804393a74b2f358382e70a61db6ff2aa6eb0ca4ba34ec8ccac616bfe5b15eff6c3614b3969541f73ffdec6703a636208c0abace256b48670edc0b07b04c80');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `message`) VALUES
(5, 'Shahin', 'sopnopriyo@gmail.com', '+60122617120', 'Hello Admin. I like this shop so much. '),
(6, 'Atahar', 'miishrak9@gmail.com', '01136562646', 'I am satisfied with the camera but I wish I could get the lens with cheaper price.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `color`, `quantity`, `stock_status`, `catagory_id`, `description`) VALUES
(11, 'CANON DX-56 VR II LENS', 550, 'product-img/camera1.jpg', 'Black', 0, 'In Stock', 27, 'Nice, 13 Mega Pixel , Æ’/3.5-5.6G VR II AF-S DX, retractable DSLR lens  '),
(12, 'Sony Cyber-shot DSC', 250, 'product-img/f1.jpeg', 'Purple', 0, 'In Stock', 28, 'Carl Zeiss Vario-Tessar 4x, Wide-Angle Optical Zoom Lens, Capture breathtaking images in Sweep Panorama Mode'),
(13, 'SONY HDR-CX405', 1050, 'product-img/r7.jpeg', 'Black', 0, 'In Stock', 29, 'Full HD Video/ 9.2MP Stills, Exmor R CMOS sensor,Bionz X Processor,Zeiss 30x Optical Zoom Lens'),
(14, 'Tamron 16-300mm', 200, 'product-img/slr2.jpg', 'Black', 0, 'In Stock', 23, ' Class-leading 16-300mm focal length range (approx 24-450mm equivalent) ,Swift and quiet PZD ultrasonic-drive autofocus ,Effective VC (Vibration Compensation) in-lens image stabilization ,Close focusing to 0.39m, maximum magnification 0.34x ,Weather-resistant build ,APS-C format only, in fittings for Canon, Nikon and Sony DSLRs  '),
(15, 'Nikon - SB-700 AF', 120, 'product-img/fls1.jpg', 'Black', 0, 'In Stock', 30, 'Versatility meets portability ,Nikonâ€™s precision i-TTL flash control ,Wireless commander mode ,Intuitive versatile lighting options  '),
(16, 'Manfrotto Compact', 50, 'product-img/tri1.jpg', 'Black', 0, 'In Stock', 31, 'Ultra lightweight , portable and effortless to use ,At just 800gr and 39cm when folded, this is our most portable solution ever ,Lightweight and portable enough to take into any situation or circumstance.'),
(17, 'Sandisk 16 GB', 50, 'product-img/d1.jpeg', 'Red', 0, 'In Stock', 24, 'Five-Year limited warranty ,Capacity : 16 GB ,SUPC: 1040079'),
(18, 'Sony Camera Bag', 250, 'product-img/b5.jpeg', 'Black', 0, 'In Stock', 25, 'Protective Jacket Case ,adjustable internal partition'),
(21, 'EOS T-51', 750, 'product-img/eos t51.jpg', 'Black', 0, 'In Stock', 27, 'Portable , High Specs , Comes with 2 lenses ,18-55mm IS STM lens ,18.0-megapixel CMOS sensor ,3" touch screen  '),
(22, 'EOS 70-D', 579.4, 'product-img/eos-70d.jpg', 'Black', 0, 'In Stock', 27, 'Recorder , Anti shake , comes with a boomer ,Digital AF/AE single-lens reflex camera with built-in  flash SD card SDHC card, SDXC memory card\r\n* Compatible with Ultra High Speed (UHS-I) memory cards and Eye-Fi cards (Built-in wireless LAN cannot be used simultaneously with Eye-Fi cards) ,Approx. 22.5mm x 15.0mm (APS-C) ,Canon EF lenses (including EF-S lenses)'),
(23, 'EOS 80-D', 499.99, 'product-img/EOS-80D.jpg', 'Black', 0, 'In Stock', 27, 'Flat lense , Light , High specs ,CMOS Sensor ,Approx. 24.2 megapixels ,3:2 (Horizontal: Vertical) ,Self Cleaning Sensor Unit\r\nRemoves dust adhering to the low-pass filter.\r\nSelf-cleaning can be done automatically when the power is turned on or off. Manual cleaning also possible.'),
(24, 'NIKON D5500 DSLR', 549.95, 'product-img/c3.jpg', 'Black', 0, 'In Stock', 27, 'Light , Professional Choice , High Specs , Micro Fibre lense '),
(26, 'CANON EOS 5D MARK III', 3009.9, 'product-img/c5.jpg', 'Dark Blue', 0, 'In Stock', 27, 'Professional Recommendation , High specs , Anti-shake ,22.3 megapixel full-frame sensor ,\r\n61-point AF\r\n6 fps continuous shooting ,\r\nISO 100â€“25,600 sensitivity, expandable to ISO 102 ,400\r\nFull-HD video with manual control ,\r\nUncompressed HDMI output at Full HD 8bit 4.2.2\r\n14-bit DIGIC 5+ processor ,\r\nWeather sealing\r\n8.11cm (3.2-inch) 1,040 ,000-dot screen\r\nHDR mode'),
(27, 'CANON EOS 5D MARK II', 2249, 'product-img/c6.jpg', 'Dark Grey', 0, 'In Stock', 27, 'High solutions , High specs , Professional recommendation , Anti-shake , flat lense ,21.1MP full frame CMOS sensor ,\r\nDIGIC 4 processor ,\r\nISO range expandable to 25600 ,\r\nFull HD (1080, 30fps) movie recording ,\r\nHigh-res 3.0â€ VGA LCD with Live View\r\nUp to 3.9fps JPEG shooting up to card capacity ,\r\n9-point AF + 6 Assist AF points ,\r\nMagnesium alloy body '),
(28, 'SONY CYBER-SHOT DSC', 230, 'product-img/f2.jpeg', 'Black', 0, 'In Stock', 28, 'Fast shoot, High specs , 32 GB space  '),
(29, 'CANON DIGITAL IXUS', 350, 'product-img/f3.jpeg', 'Silver', 0, 'In Stock', 28, 'Shake Absorb , 20 GB, Fast shoot '),
(30, 'CANON DIGITAL IXUS', 350, 'product-img/f4.jpeg', 'Black', 0, 'In Stock', 28, 'Shock absorb , 20 GB , Fast Shoot '),
(31, 'SONY CYBER-SHOT DSC', 330, 'product-img/f5.jpeg', 'Silver', 0, 'In Stock', 28, 'High solutions , High specs , Professional recommendation , Anti-shake , flat lense '),
(32, 'CANON DIGITAL IXUS 160', 270, 'product-img/f6.jpeg', 'Red', 0, 'In Stock', 28, '23 GB space, Retina lense , High specs ,Put style and simplicity in your pocket with ultra-slim IXUS ,\r\nCapture all your best moments - near or far ,\r\nCapture stunning detail with 20 MP ,\r\nBeautiful shots with point and shoot ease using Smart Auto ,\r\nHave fun and experiment with Creative Filters '),
(33, 'CANON DIGITAL IXUS 275', 400, 'product-img/f7.jpeg', 'Black', 0, 'In Stock', 28, '50 GB , Newbie Recommendation, Retina lense ,DIGIC 4+ ,pprox. 20.2 megapixels (aspect ratio: 4:3)'),
(34, 'NIKON COOLPIX S7000', 470, 'product-img/f8.jpeg', 'Gold', 0, 'In Stock', 28, 'Limited edition, 64 GB , Retina lense , High specs ,Effective Pixels (Megapixels),\r\n\r\n16.0 million,\r\n \r\nSensor Size\r\n\r\n1 / 2.3 in,\r\n \r\nMonitor Size\r\n\r\n3.0 in. diagonal,\r\n \r\nMonitor Type\r\n\r\nTFT-LCD with Anti-reflection coating \r\n5-level brightness adjustment,\r\n '),
(38, 'PANASONIC STANDARD HC', 850, 'product-img/r5.jpeg', 'Dark Silver', 0, 'In Stock', 29, 'Shake Absorber , 200 GB, 23 hours battery lasting ,77x / 38x\r\nIntelligent Zoom / Optical Zoom ,\r\nImage Stabilizer\r\nFor clear images and less blurring ,\r\n32.3mm\r\nWide-angle Shooting'),
(39, 'TAMRON 16-300MM', 0, '', 'blac', 0, 'In Stock', 22, 'Class-leading 16-300mm focal length range (approx 24-450mm equivalent) ,\r\nSwift and quiet PZD ultrasonic-drive autofocus ,\r\nEffective VC (Vibration Compensation) in-lens image stabilization ,\r\nClose focusing to 0.39m, maximum magnification 0.34x ,\r\nWeather-resistant build ,\r\nCompact size (for focal length range) ,\r\nAPS-C format only in fittings for Canon Nikon and Sony DSLRs'),
(40, 'TAMRON 16-300MM', 450, 'product-img/L1.jpg', 'Black', 0, 'In Stock', 23, 'Long range, wide angle , image stabilisation ,Class-leading 16-300mm focal length range (approx 24-450mm equivalent)\r\nSwift and quiet PZD ultrasonic-drive autofocus\r\nEffective VC (Vibration Compensation) in-lens image stabilization\r\nClose focusing to 0.39m, maximum magnification 0.34x ,\r\nWeather-resistant build ,\r\nCompact size (for focal length range) ,\r\nAPS-C format only in fittings for Canon Nikon and Sony DSLRs '),
(41, 'TAMRON SP 150-600MM', 800, 'product-img/L2.jpg', 'Black', 0, 'In Stock', 23, 'range from f/3.5-6.3 to f/22-40 across the zoom range , superzoom spans an astonishing range of focal lengths  '),
(42, 'TAMRON 18-270MM', 992, 'product-img/L6.jpg', 'black and gold', 0, 'In Stock', 23, '270 MM length, Wide range ,27-405mm equivalent focal length range, F3.5-6.3 maximum aperture\r\nVibration ,Compensation (VC) optical image stabilisation (up to 4 stops) ,\r\nAvailable for Canon EF mount and Nikon F mount (APS-C/DX format DSLRs only) '),
(43, 'CANON EF 600MM', 1099, 'product-img/L7.jpg', 'white', 0, 'In Stock', 23, '600 MM, power zoom, wide range '),
(44, 'CANON EF 800MM', 1199, 'product-img/L10.jpg', 'white', 2, 'In Stock', 23, '800 MM length, wide range, sharp focus'),
(45, 'CANON - SPEEDLITE 430EX III', 310, '', 'Black', 0, 'In Stock', 30, 'speed light  ,2.4 GHz Wireless Radio Transmission ,\r\nCompatible with Canon E-TTL / E-TTL II ,\r\nGuide Number: 141 at ISO 100 and 105mm ,\r\nZoom Range: 24-105mm (14mm with Panel)  '),
(47, 'INSIGNIAÃ¢Â€ï¿½Â¢ - TTL', 370, 'product-img/F3.jpg', 'Black', 0, 'Out of Stock', 30, 'speed light, light absorber '),
(48, 'CANON - SPEEDLITE 270EX II', 290, 'product-img/F4.jpg', 'Black', 0, 'In Stock', 30, 'speed light ,number of 27 (m ISO100) ,Two AA/LR6 batteries power the Speedlite 270EX II enabling it to recharge silently from a full-power discharge in 3.9sec.\r\n\r\n '),
(49, 'CANON - SPEEDLITE 600EX-RT', 340, 'product-img/F5.jpg', 'Black', 0, 'Out of Stock', 30, '2.4 GHz Wireless Radio Transmission ,\r\nCompatible with Canon E-TTL / E-TTL II ,\r\nGuide Number: 197 at ISO 100 and 200mm ,\r\nZoom Range: 20-200mm (14mm with Panel)'),
(50, 'INSIGNIAÃ¢Â€ï¿½Â¢ - TTL', 405, 'product-img/F6.jpg', 'Black', 0, 'In Stock', 30, 'speed light ,2.4 GHz Wireless Radio Transmission ,\r\nCompatible with Canon E-TTL / E-TTL II ,\r\nGuide Number: 197 at ISO 100 and 200mm ,\r\nZoom Range: 20-200mm (14mm with Panel) '),
(51, 'INSIGNIAÃ¢Â€ï¿½Â¢ - MINI FLASH DIFFUSER', 440, 'product-img/F7.jpg', 'Black', 0, 'In Stock', 30, 'absorbs light '),
(52, 'SUNPAK - DIGIFLASH 3000', 270, 'product-img/F8.jpg', 'Black', 0, 'In Stock', 30, 'long distance light , Great light absorber , Multiple connectors'),
(53, 'INSIGNIAÃ¢Â€ï¿½Â¢ - FLASH DIFFUSER 12 X 8', 490, 'product-img/F9.jpg', 'Black', 0, 'In Stock', 30, 'refelcts and absorbs light , portable ,Have multiple connectors'),
(54, 'MANFROTTO COMPACT', 350, 'product-img/T1.jpg', 'Black', 0, 'In Stock', 31, 'anti rust, flexible ,Joystick head with ergonomic handle ,\r\nIntuitive rounded quick release for simple set-up ,\r\nPhoto-Movie selector to quickly change between modes ,\r\nPadded carrying bag included for great portability ,\r\nAvailable in 3 different colour combinations'),
(55, 'TECNO SELFIE STICK', 100, 'product-img/T2.jpg', 'Black and Silver', 0, 'In Stock', 31, 'great for selfies, strong joints , anti rust ,Ideal for iPhones and smartphones ,Telescopic poleWrist strap included '),
(56, 'VELBON EF-44 TRIPOD', 209, 'product-img/T3.jpg', 'Black', 0, 'In Stock', 31, 'steel legging, anti rust, strong joints ,Max Load: 2.2kg , way quick release head ,Section Legs with Clip LocksClosed , length = 47cm ,Weight = 953g'),
(57, 'MANFROTTO 190GO!', 304, 'product-img/T4.jpg', 'Black', 0, 'In Stock', 31, 'flexible joints, anti-rust, adjustable length ,Load Capacity: 15.4 lb ,\r\nMax Height: 57.5 ,\r\nMin Height: 2.75 ,\r\nFolded Length: 17.7  '),
(58, 'MANFROTTO 391RC2', 205, 'product-img/T5.jpg', 'Black', 0, 'Out of Stock', 31, 'fits any tripod, anti rust, flexible joints ,Indepent control on all 3 axes to reach great framing precision .\r\nPerfect choice also to shoot videos thanks to the pan bar ,\r\nErgonomically designed ,\r\nMaximum reliability thanks to its aluminium body ,\r\nQuick release for easy and completely safe set up'),
(59, 'MANFROTTO BEFREE CO.', 570, 'product-img/T6.jpg', 'Black', 0, 'In Stock', 31, 'steel, anti rust, light weight, flexible expand ,The lightweight aluminum construction makes the tripod portable ,\r\nBefree comes with a dedicated padded shoulder bag ,\r\nIts aluminium body and ball head guarantee stability ,\r\nOustanding Premium Italian design ,\r\nThe folding system allows legs to perfectly fold around the head '),
(60, 'MANFROTTO PIXI MINI', 369, 'product-img/T7.jpg', 'Black', 0, 'In Stock', 31, 'portable, light, can be put on high places ,Mini tripod for Compact System Cameras ,\r\nComfortable handgrip to capture great videos ,\r\nPush button locking mechanism for easy set-up ,\r\nLightweight, intuitive to use and easy to carry '),
(61, 'MANFROTTO COMPACT LI.', 409, 'product-img/T8.jpg', 'Black', 0, 'Out of Stock', 31, 'anti rust, flexible ,Expandale'),
(62, 'MANFROTTO 055XPRO3 3', 390, 'product-img/T9.jpg', 'Dark Silver', 0, 'In Stock', 31, 'flexible joints, anti-rust, adjustable length ,Max. load: 9kgAluminium ,Max. height: 170cm Horizontal column '),
(63, 'STEADICAM CURVE', 376, 'product-img/T10.jpg', 'Silver', 0, 'In Stock', 31, 'portable, light, can be put on high places ,Fits HERO, HERO2, and HERO3 ,\r\nFits HERO3+ and HERO4\r\nHandheld Mechanical Stabilization ,\r\nProvides Isolation from Shake/Vibration'),
(64, 'SAMSUNG 16 GB', 30, 'product-img/d2.jpeg', 'Black', 0, 'In Stock', 24, '16 GB , Samsung '),
(65, 'SANDISK 8 GB SDHC', 23, 'product-img/d3.jpeg', 'blue', 0, 'In Stock', 24, '8GB , Sandisk '),
(66, 'SANDISK ULTRA 32 GB', 40, 'product-img/d4.jpeg', 'Black', 0, 'In Stock', 24, '32 GB, Sandisk '),
(67, 'SONY 32 GB SDHC', 40, 'product-img/d5.jpeg', 'black and gold', 0, 'In Stock', 24, '32 GB, Sony '),
(68, 'SONY 4 GB SDHC', 15, 'product-img/d6.jpeg', 'Black and Silver', 0, 'In Stock', 24, '4 GB, Sony '),
(69, 'TRANSCEND 32 GB SDHC', 40, 'product-img/d7.jpeg', 'Black', 0, 'In Stock', 24, '32 Gb, SDHC '),
(70, 'KINGSTON UHS-I 32 GB SDHC', 40, 'product-img/d8.jpeg', 'Silver', 0, 'In Stock', 24, '32GB, Kingston '),
(71, 'NIKON COOLPIX SOFT-3', 70, 'product-img/b1.jpeg', 'grey', 0, 'In Stock', 25, 'Multiple compartments, wide space '),
(72, 'NIKON DSLR CAMERA BAG', 57, 'product-img/b2.jpeg', 'Black', 0, 'In Stock', 25, 'Comfortable handle, many compartments '),
(73, 'NIKON CAMERA BAG', 63, 'product-img/b3.jpeg', 'Black', 0, 'In Stock', 25, 'Multiple compartments, wide space '),
(74, 'E-VOGUE CBRT1 DSLR', 83, 'product-img/b4.jpeg', 'black and blue', 0, 'In Stock', 25, 'easy to use, light, multiple compartment, wide spaces '),
(75, 'CANON EOS CAMERA BAG', 59, 'product-img/b6.jpeg', 'Black', 0, 'In Stock', 25, 'simple design, light, handy '),
(76, 'EASYCOVER CAMERA CASE', 39, 'product-img/b7.jpeg', 'yellow', 16, 'In Stock', 25, 'made with silicon, flexible, stretchable'),
(78, 'LOWEPRO CAMERA BAG', 209, 'product-img/b9.jpeg', 'Black', 6, 'In Stock', 25, 'specific compartments, compact, equivalent space'),
(79, 'LOWEPRO TAHOE BP 150', 270, 'product-img/b10.jpeg', 'Black', 6, 'In Stock', 25, 'Easy to carry, comfortable, wide spaces'),
(80, 'EASYCOVER CAMERA CASE', 39, 'product-img/b11.jpeg', 'Black', 27, 'In Stock', 25, 'made with silicon, flexible, stretchable'),
(81, 'LOWEPRO REZO TLZ 10', 109, 'product-img/b12.jpeg', 'blue', 17, 'In Stock', 25, 'Comfortable handle, many compartments'),
(82, 'LOWEPRO TOPLOADER ZOOM', 109, 'product-img/b13.jpeg', 'Black', 9, 'In Stock', 25, 'specific compartments, compact, equivalent space'),
(83, 'LOWEPRO TOPLOADER ZOOM', 109, 'product-img/b13.jpeg', 'Black', 9, 'In Stock', 25, 'specific compartments, compact, equivalent space');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
