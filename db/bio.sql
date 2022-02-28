-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bio`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_Header` varchar(250) NOT NULL,
  `article_C_E_1` varchar(250) NOT NULL,
  `article_C_T_1` varchar(250) NOT NULL,
  `article_Image_1` varchar(250) NOT NULL,
  `article_C_E_2` varchar(250) NOT NULL,
  `article_C_T_2` varchar(250) NOT NULL,
  `article_Image_2` varchar(250) NOT NULL,
  `article_C_E_3` varchar(250) NOT NULL,
  `article_C_T_3` varchar(250) NOT NULL,
  `article_Image_3` varchar(250) NOT NULL,
  `article_Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_Header`, `article_C_E_1`, `article_C_T_1`, `article_Image_1`, `article_C_E_2`, `article_C_T_2`, `article_Image_2`, `article_C_E_3`, `article_C_T_3`, `article_Image_3`, `article_Timestamp`) VALUES
(17, 'POULTRY INDUSTRY', 'We have our poultry research center to create knowledge for improving skills.', 'ser', 'shop3.PNG', '“ We have created the model to succeed with broiler integrated farm.', 'eee', 'shop4.PNG', ' We have specialist major in poultry nutrition, farm management,\n                meat & eggs quality that can improve the value of business.', 'sess', 'shop5.PNG', '2022-02-28 16:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `knowledge_id` int(11) NOT NULL,
  `knowledge_Img` varchar(250) NOT NULL,
  `knowledge_Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`knowledge_id`, `knowledge_Img`, `knowledge_Timestamp`) VALUES
(5, 'pp2rrtt.PNG', '2022-02-28 17:07:13'),
(6, 'shop4.PNG', '2022-02-28 17:09:14'),
(7, 'shop3.PNG', '2022-02-28 17:10:33'),
(8, 'shop5.PNG', '2022-02-28 17:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`knowledge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `knowledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
