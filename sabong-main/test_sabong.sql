-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 11:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_sabong`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_area` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `meron_position` varchar(50) NOT NULL,
  `wala_position` varchar(50) NOT NULL,
  `liamado_plasada` decimal(10,0) UNSIGNED NOT NULL,
  `dehado_plasada` decimal(10,0) UNSIGNED NOT NULL,
  `total_event_fights` int(50) UNSIGNED NOT NULL,
  `expected_event_fights` int(50) UNSIGNED NOT NULL,
  `event_status` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_area`, `event_date`, `meron_position`, `wala_position`, `liamado_plasada`, `dehado_plasada`, `total_event_fights`, `expected_event_fights`, `event_status`) VALUES
(51, '2-hits', 'bulacan', '2023-08-13', 'Kanan', 'Kaliwa', '5', '5', 0, 20, 'Close'),
(52, '2-hits', 'bulacan', '2023-08-14', 'Kanan', 'Kaliwa', '6', '4', 0, 3, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `fights`
--

CREATE TABLE `fights` (
  `id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `fight_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `meron_total_bet` int(11) DEFAULT NULL,
  `wala_total_bet` int(11) DEFAULT NULL,
  `plasada_total` int(11) DEFAULT NULL,
  `winner` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fights`
--

INSERT INTO `fights` (`id`, `event_id`, `fight_no`, `date`, `meron_total_bet`, `wala_total_bet`, `plasada_total`, `winner`, `status`) VALUES
(119, 51, 1, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(120, 51, 2, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(121, 51, 3, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(122, 51, 4, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(123, 51, 5, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(124, 51, 6, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(125, 51, 7, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(126, 51, 8, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(127, 51, 9, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(128, 51, 10, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(129, 51, 11, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(130, 51, 12, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(131, 51, 13, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(132, 51, 14, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(133, 51, 15, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(134, 51, 16, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(135, 51, 17, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(136, 51, 18, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(137, 51, 19, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(138, 51, 20, '2023-08-13', NULL, NULL, NULL, NULL, 'pending'),
(139, 52, 1, '2023-08-14', NULL, NULL, NULL, NULL, 'pending'),
(140, 52, 2, '2023-08-14', NULL, NULL, NULL, NULL, 'pending'),
(141, 52, 3, '2023-08-14', NULL, NULL, NULL, NULL, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fights`
--
ALTER TABLE `fights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `fights`
--
ALTER TABLE `fights`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
