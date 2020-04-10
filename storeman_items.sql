-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2020 at 06:21 AM
-- Server version: 5.7.26-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azalelna_storeman`
--

-- --------------------------------------------------------

--
-- Table structure for table `storeman_items`
--

CREATE TABLE `storeman_items` (
  `code` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `stock` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeman_items`
--

INSERT INTO `storeman_items` (`code`, `name`, `price`, `stock`) VALUES
('01166', 'Pop Mie', 3500, 10),
('011665', 'p', 0, 0),
('0116656', 'p', 0, 0),
('123', 'sfddgfdgsd', 12234, 3),
('222', 'Indomie Mie Aceh', 2000, 1000),
('223', 'Lah apa ini', 2000, 60),
('309', 'Test123', 100000, 4),
('3747', 'p', 0, 0),
('37477', 'p', 0, 0),
('374778', 'p', 0, 0),
('38585', 'P', 0, 1),
('3858585', 'P', 0, 1),
('385858566', 'P', 0, 1),
('38585858', 'P', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storeman_items`
--
ALTER TABLE `storeman_items`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
