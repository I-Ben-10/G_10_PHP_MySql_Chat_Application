-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 07:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1200797830, 750649561, 'Hello James!'),
(2, 750649561, 704611397, 'Hii nice!'),
(3, 750649561, 704611397, 'Are you good?!'),
(4, 704611397, 750649561, 'Yeah im good!'),
(5, 704611397, 607971464, 'Hello ben'),
(6, 852500258, 607971464, 'Hello group'),
(7, 852500258, 704611397, 'Hello here!!'),
(9, 852500258, 750649561, 'Hi guys'),
(10, 750649561, 607971464, 'Hi ineza!'),
(11, 607971464, 750649561, 'Hi kamana'),
(12, 607971464, 750649561, 'Looking handsome today!'),
(21, 607971464, 704611397, 'Hi mn'),
(22, 607971464, 704611397, 'hi'),
(23, 1200797830, 704611397, 'Hello james');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `is_group_status` varchar(100) DEFAULT NULL,
  `group_creator` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `is_group_status`, `group_creator`) VALUES
(1, 704611397, 'IRAKOZE', 'Benjamin', 'irakozeben23@gmail.com', '130e63d5f280445cc12ce34968cf8772', '1629359726211-2112170_lion-hd-wallpaper-download.jpg', 'Active now', NULL, NULL),
(2, 750649561, 'Ineza', 'Nice', 'ineza@gmail.com', '862d77f6dba70406aaa4641af85141eb', '1629359773598671775ddbf5a973e24d6e9bc9522e.jpg', 'Active now', NULL, NULL),
(3, 1200797830, 'James', 'Kim', 'james@gmail.com', 'fa972e30dbc5d7cd1795f458d229f021', '16293598591-12729_lion-in-blue-wallpapers19201080-blue-lion-images-hd.jpg', 'Active now', NULL, NULL),
(5, 852500258, 'Group 1', '-', '-', '-', '1629364165a49913b5-024a-4ecd-9c86-4940a94f53d8-46107328-99c3-41f7-a542-74ce42eca32c_compressed_40.jpg', 'Active now', 'YES', '704611397'),
(6, 607971464, 'Kamana', 'Jean', 'kamana@gmail.com', '74d784f26cc727aa630eb6b92bcd50fe', '1629365197depositphotos_43381243-stock-illustration-male-avatar-profile-picture.jpg', 'Active now', NULL, NULL),
(7, 781249838, 'Guys', ' ', '-', '-', '1629892692wp7810895.jpg', 'Active now', 'YES', '704611397');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
