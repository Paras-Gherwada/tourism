-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 05:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--
CREATE DATABASE IF NOT EXISTS `tourism` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tourism`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `contact_number`) VALUES
('Paras Gherwada', 'parasgherwada@gmail.com', '$2y$10$NEai.y5a/hl9HwIxITm9D.ZwU4ZpCIXCZJmZUU4qRClSg.e4vIT2G', 7718029301);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` varchar(50) NOT NULL,
  `tour_id` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_journey` date NOT NULL,
  `number_of_people` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `tour_id`, `fullname`, `address`, `phonenumber`, `email`, `date_of_journey`, `number_of_people`) VALUES
('11352021-08-25', '312842021-08-25', 'Aryan Singh', 'Amravati-444601', 8812398760, 'aaryansingh@gmail.com', '2021-09-07', 2),
('186662021-08-25', '233642021-08-24', 'Rahul Vakharia', 'Mumbai-400067', 7718066932, 'rahulvakharia@gmail.com', '2021-09-07', 7),
('4472021-08-25', '233642021-08-24', 'Shruti Singh', 'Mumbai-400067', 9876234150, 'shrutisingh@gmail.com', '2021-08-31', 5),
('5502021-08-26', '202322021-08-26', 'Harsh Bharyuti', 'Mumbai-400067', 8933109872, 'harshbahryuti@gmail.com', '2021-09-10', 5),
('703782021-08-25', '436502021-08-24', 'Alika Riaz', 'Mumbai-400067', 9994532600, 'alikariaz@gmail.com', '2021-08-30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE `site_settings` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`name`, `email`, `phonenumber`) VALUES
(' Tourism Website', 'parasgherwada@gmail.com', 7718029301);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `Id` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Cost` smallint(5) NOT NULL,
  `Duration` int(2) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Cover` mediumblob NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`Id`, `Name`, `Cost`, `Duration`, `Location`, `Cover`, `Description`) VALUES
('202322021-08-26', 'Darjeeling', 750, 7, 'India', 0x6461726a65656c696e672e6a7067, 'Darjeeling is a city and a municipality in the Indian state of West Bengal. It is located in the Lesser Himalayas at an elevation of 2,000 metres (6,560 ft). '),
('233642021-08-24', 'Bali', 1750, 14, 'Indonesia', 0x62616c692e6a7067, 'Bali is a province of Indonesia and the westernmost of the Lesser Sunda Islands. East of Java and west of Lombok, the province includes the island of Bali and a few smaller neighbouring islands, notably Nusa Penida, Nusa Lembongan, and Nusa Ceningan.'),
('312842021-08-25', 'New York', 2150, 20, 'United States of America', 0x6e65775f796f726b2e6a7067, 'New York, often called New York City to distinguish it from New York State, or NYC for short is the most populous city in the United States. With a 2020 population of 8,804,190 distributed over 302.6 square miles (784 km2), New York City is also the most densely populated major city in the United States.'),
('436502021-08-24', 'Phuket', 1500, 15, 'Thailand', 0x7068756b65742e6a7067, 'Phuket is the largest island in Thailand. It is located in the Andaman Sea in southern Thailand. The island is mostly mountainous with a mountain range in the west of the island from the north to the south.'),
('535082021-08-24', 'Beijing', 1500, 12, 'China', 0x6368696e612e6a7067, 'Beijing is a global city and one of the worlds leading centres for culture, diplomacy and politics, business and economics, education, language, and science and technology.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;