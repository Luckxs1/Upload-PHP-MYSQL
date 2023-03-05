-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 01:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_upload`
--

CREATE TABLE `php_upload` (
  `up_id` int(11) NOT NULL,
  `up_name` varchar(50) NOT NULL,
  `up_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php_upload`
--

INSERT INTO `php_upload` (`up_id`, `up_name`, `up_image`) VALUES
(1, 'Rose', '6400b6a936b74.jpg'),
(2, 'Ann', '6400b6d66215f.jpg'),
(3, 'Lucky', '6400b728cc84d.png'),
(4, 'Lux', '6400b7fc99f1e.png'),
(6, 'IDK', '6400bbf23f937.jpg'),
(7, 'CAR', '6400bd0017245.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_upload`
--
ALTER TABLE `php_upload`
  ADD PRIMARY KEY (`up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_upload`
--
ALTER TABLE `php_upload`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
