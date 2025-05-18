-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2024 at 05:03 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mid` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `bod` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Bith date',
  `sex` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `sa` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Street / Address',
  `sp` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `zip` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `month` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `day` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61837 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `mid`, `lastname`, `age`, `bod`, `sex`, `email`, `contact`, `sa`, `sp`, `city`, `zip`, `password`, `month`, `day`, `year`, `department`, `type`) VALUES
(61834, 'Juan', 'Pedro', 'Dela Cruz', '20', '2024-06-12', 'Male', 'test@gmail.com', '09077737633', 'aaaaa', 'aaa', 'aaaa', 'aaa', '1', 'June', '12', '2024', '', 'Customer'),
(61835, 'Mario', 'Galgo', 'Toledo', '27', '2024-06-12', 'Male', 'oiramtoledo@gmail.com', '09077737633', 'test street', 'test province', 'Surigao City', '8400', '1', 'June', '12', '2024', '', 'Customer'),
(61836, 'Aldereen', 'g', 'Christian', '20', '', 'Male', 'christian@crm.com', '0000', '', '', '', '', '1234', '', '', '', 'CRM', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

DROP TABLE IF EXISTS `cs`;
CREATE TABLE IF NOT EXISTS `cs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cid` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `customer` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `month` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `day` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Unread',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id`, `cid`, `customer`, `subject`, `content`, `month`, `day`, `year`, `time`, `status`) VALUES
(3, '61834', 'Juan Dela Cruz', 'Test Subject', '<b>Hello world</b>', 'June', '13', '2024', '12:06 AM', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `inquery`
--

DROP TABLE IF EXISTS `inquery`;
CREATE TABLE IF NOT EXISTS `inquery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cid` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Customer ID',
  `customer` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `purpose` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `dd` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Delivery Date',
  `type` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Type Of Truck',
  `truck` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Selected Truck',
  `preferences` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Design Preferences',
  `br` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Budget Range',
  `pm` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Payment Method',
  `proof` varchar(300) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Proof Of Funds',
  `month` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `day` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=181377 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquery`
--

INSERT INTO `inquery` (`id`, `cid`, `customer`, `purpose`, `dd`, `type`, `truck`, `preferences`, `br`, `pm`, `proof`, `month`, `day`, `year`, `time`, `status`) VALUES
(181374, '61835', 'Mario Toledo', 'Test Purpose', '2024-06-12', 'Company', 'Composite Truck', 'Color Matte Black', '10', 'Bank', 'localhost_metro_login.php(Nexus 6P).png', 'June', '12', '2024', '11:47 AM', 'Approved'),
(181376, '61834', 'Juan Dela Cruz', 'Test Purpose 2', '2024-06-12', 'Goverment', 'Prisoners Van', 'asdasd', '120', 'Bank', 'localhost_nmax_mobile-app_login.php(Nexus 6P).png', 'June', '12', '2024', '02:57 PM', 'Reviewed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
