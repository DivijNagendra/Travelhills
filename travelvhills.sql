-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 24, 2018 at 03:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelhills`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `selection`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selection` ()  SELECT * FROM booking ORDER BY dotravel$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adminid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`) VALUES
(1, 'chaitanyaanand83@gmail.com', '48884888'),
(2, 'divij@gmail.com', 'divij123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `package` varchar(25) NOT NULL,
  `adultno` int(11) NOT NULL,
  `childno` int(11) NOT NULL,
  `dotravel` date NOT NULL,
  `mode` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package` (`package`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `package`, `adultno`, `childno`, `dotravel`, `mode`) VALUES
(7, 'divya@gmail.com', 'MINI NORTH INDIA', 5, 8, '2018-11-18', 'TRAIN'),
(18, 'cha@gmail.com', 'Golden Triangle', 3, 1, '2018-11-30', 'TRAIN');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `email`, `mobile`, `comments`) VALUES
('Divij N', 'silver97eagle@gmail.com', '+917411115143', 'very nyc page ^_^'),
('Divij N', 'silver97eagle@gmail.com', '+917411115143', 'asdasfasf');

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

DROP TABLE IF EXISTS `fares`;
CREATE TABLE IF NOT EXISTS `fares` (
  `package` varchar(50) NOT NULL,
  `cost` float NOT NULL,
  KEY `package` (`package`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`package`, `cost`) VALUES
('GOLDEN TRIANGLE', 16500),
('MINI NORTH INDIA', 26500),
('FUN TRIP TO SHIMLA MANALI', 20900),
('KASHMIR SPECIAL', 29500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phcode` varchar(2) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(8) NOT NULL,
  `pass` varchar(16) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `lname`, `phcode`, `mobile`, `dob`, `email`, `type`, `pass`) VALUES
('abc', 'def', '91', '47965', '2018-11-24', 'abcd@gmail.com', 'male', 'Abc123'),
('Adarsh', 'Mohana', '91', '8800888008', '1998-05-13', 'adarsh@gmail.com', 'male', 'Adarsh123'),
('xyg', 'mj', '91', '867596', '2018-10-31', 'asd@gmail.com', 'male', 'Asd123'),
('Ashwin', 'Ramesh', '91', '1081081081', '1998-09-26', 'ashwin@gmail.com', 'male', 'Ashwin123'),
('Bindu', 'M V', '91', '9874598745', '1998-02-27', 'bindu@gmail.com', 'female', 'Bindu123'),
('chaitanya ', 'anand', '91', '123456789', '2018-11-13', 'cha@gmail.com', 'male', 'Cha123'),
('Chaitanya', 'Anand', '91', '5512555125', '2018-11-02', 'chaitanya@gmail.com', 'male', 'Chaitanya123'),
('Divya', 'N', '91', '7411115143', '2018-11-07', 'divya@gmail.com', 'female', 'Divya123'),
('Harish', 'Babu', '91', '6360847086', '1998-12-12', 'harishhoit@gmail.com', 'male', 'Harish123'),
('Kautilya', 'K Bhat', '91', '1234512345', '1997-12-08', 'kautilya.gtr@gmail.com', 'male', 'Kautilya123'),
('Keerthana', 'G', '91', '8686886868', '1998-04-04', 'keegowda@gmail.com', 'female', 'Sunku123'),
('Sai Mangala', 'M V', '91', 'secret', '1999-04-09', 'saimangal@gmail.com', 'female', 'Sai123'),
('Divij', 'N', '91', '7411115143', '1997-11-10', 'silver97eagle@gmail.com', 'male', 'Divij123');

--
-- Triggers `login`
--
DROP TRIGGER IF EXISTS `deletetrigger`;
DELIMITER $$
CREATE TRIGGER `deletetrigger` AFTER DELETE ON `login` FOR EACH ROW insert into loginlog values(old.email,old.fname,"DELETED :(",now())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `inserttrigger`;
DELIMITER $$
CREATE TRIGGER `inserttrigger` AFTER INSERT ON `login` FOR EACH ROW insert into loginlog values(new.email,new.fname,"REGISTERED :)",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

DROP TABLE IF EXISTS `loginlog`;
CREATE TABLE IF NOT EXISTS `loginlog` (
  `Email` varchar(34) NOT NULL,
  `fname` varchar(43) NOT NULL,
  `action` varchar(34) NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`Email`, `fname`, `action`, `time`) VALUES
('silver97eagle@gmail.com', 'Divij', 'DELETED :(', '2018-11-24 14:03:18'),
('silver97eagle@gmail.com', 'Divij', 'REGISTERED :)', '2018-11-24 14:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

DROP TABLE IF EXISTS `packagedetails`;
CREATE TABLE IF NOT EXISTS `packagedetails` (
  `package` varchar(25) NOT NULL,
  `places` varchar(350) NOT NULL,
  `days` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  KEY `package` (`package`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`package`, `places`, `days`, `distance`) VALUES
('GOLDEN TRIANGLE', 'Agra, Mathura, Brindavan, Fathepur, Sikri, Jaipur, Amer Fort, New Delhi, Akshardham .', 10, 5950),
('MINI NORTH INDIA', 'Agra, Mathura, Brindavan, Fathepur, Sikri, Jaipur, Kurukshetra, Haridwar(Holy bath in Ganga River), Rishikesh, Lakshman Jhula, Dehradun, Mussorie, New Delhi etc.,', 15, 7100),
('KASHMIR SPECIAL', 'Delhi, Akshardham, Srinagar, Gulmarg (Gondola cable car on optional), Sonamarg, Kheer Bhavani Temple, Katra, Vaishnodevi Temple, Amritsar, Wagha Border, Delhi(2D) etc.,', 16, 7400),
('FUN TRIP TO SHIMLA MANALI', 'Delhi, Akshardham, Chandigarh, Shimla, Kufri, Kullu, Manali, Vashishta, Hadimba (Rohtang Pass on optional), Delhi(2D) etc.,', 12, 7050);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`package`) REFERENCES `fares` (`package`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
