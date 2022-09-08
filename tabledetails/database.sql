-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 05:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `outgoing_id` int(225) NOT NULL,
  `incoming_id` int(225) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `outgoing_id`, `incoming_id`, `message`) VALUES
(1, 96098687, 2867781, ''),
(2, 96098687, 2867781, ''),
(3, 96098687, 781156529, ''),
(4, 96098687, 781156529, ''),
(5, 2867781, 96098687, 'Transaction successful'),
(6, 1570718807, 2867781, 'hello dear'),
(7, 1570718807, 96098687, 'COT ACTIVATION NEEDED'),
(8, 96098687, 1570718807, 'how do i get the cot code'),
(9, 1570718807, 96098687, 'We need your vat for the transaction to process'),
(10, 96098687, 96098687, 'Hello Pius let us meet at that conner'),
(11, 1570718807, 96098687, 'imf code needed'),
(12, 1570718807, 96098687, 'gdgdgwdjh'),
(13, 96098687, 1570718807, 'i dont understand'),
(14, 96098687, 1570718807, 'what are you talking about'),
(15, 96098687, 1570718807, 'bdshjskdhhdsjsd'),
(16, 96098687, 1570718807, 'sdnbbsnbnsbsnd'),
(17, 96098687, 1570718807, 'vasjhsgdhjds'),
(18, 96098687, 1570718807, 'dsvsdsdvds'),
(19, 96098687, 1570718807, 'vsdbvdsvvds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `firstname`, `lastname`, `email`, `password`, `image`, `status`) VALUES
(1, 96098687, 'Pius', 'Ejike', 'piusjrn99@gmail.com', '12345', '1661449977me.jpeg', 'Offline Now'),
(2, 1570718807, 'Anthony', 'Ebube', 'ejykeweb@gmail.com', '12345', '166147795320220722_172256.jpg', 'Active Now'),
(4, 2867781, 'kind', 'ness', 'ejikepius12@gmail.com', '12345', '1662222896Screenshot (2).png', 'Offline Now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
