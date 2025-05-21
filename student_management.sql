-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `e-mail`, `Phone`, `Address`) VALUES
(1, 'Masud Mia', 'masud@gmail.com', '+880-115-550-6295', 'Narshingdi'),
(2, 'Ratna Akter', 'ra7709702@gmail.com', '+8801626828671', 'Munshiganj, Dhaka, Bangladesh'),
(3, 'Prince Mahmud', 'prince@gmail.com', '+880-115-555-0937', 'Mirjapur, Tangail'),
(4, 'Md Roni', 'roni@gmail.com', '+880-155-556-0702', 'Manikganj, Dhaka, Bangladesh'),
(5, 'Md Nazmul', 'nazmul@gmail.com', '+880-115-551-1725', 'Tangail, Dhaka, Bangladesh'),
(6, 'Hiramoni Jannat', 'jannat@gmail.com', '+880-115-555-8052', 'Noakhali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `e-mail` (`e-mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
