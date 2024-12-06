-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_db`
--

CREATE TABLE `feedback_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'yashwant', 'fghjk'),
(3, 'ram', 'dfghjk'),
(4, 'xyz', 'abc123'),
(5, 'yashwant', '88337383');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`id`, `first_name`, `last_name`, `contact_no`, `email`, `password`) VALUES
(7, 'yash', 'i am', '9384752759', 'rushi13@gmail.com', '63452'),
(8, 'Avenger', 'secret war', '9307570411', 'bhongom43@gmail.com', '83465'),
(9, 'avenger', 'sjdhkjdnfj', '1234567892', 'dffc@edfef', '67383748');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_db`
--
ALTER TABLE `feedback_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_tb`
--
ALTER TABLE `registration_tb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`contact_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration_tb`
--
ALTER TABLE `registration_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
