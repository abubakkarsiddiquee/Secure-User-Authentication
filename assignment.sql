-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 09:17 PM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `gender`, `country_code`, `phone_number`, `email`, `username`, `password`) VALUES
(5, 'Abubakkar', 'Siddique', 24, 'Male', '+880', '1714354034', 'asiddique201329@bscse.uiu.ac.bd', 'abubakkar', '$2y$10$chCUN8YdirIgpFn2r2UKkek3Vhv6NPBZ5d3xb4Em7yiYdW4DkV2/y'),
(6, 'Omor', 'Faruk', 22, 'Male', '+880', '1728369889', 'omor@gmail.com', 'omor', '$2y$10$Xfk4Xx25o4wQxCgR/HEKfu0uZmqIkFNyDyWhcqYUzK0Kb0WkCS5DO'),
(7, 'Ousman', 'Goni', 20, 'Male', '+880', '1712345678', 'ousman@gmail.com', 'ousman', '$2y$10$HeXTYzt1O2GhwNj5p/en5.kJWxthw2z/xb7u2QaSpC.hvEo9XixYi'),
(12, 'Sadia', 'Islam', 25, 'Female', '+880', '1688744226', 'sadia@cse.uiu.ac.bd', 'SaIs', '$2y$10$iCBCBlw68tpEcxWCC0YBNuatmxbnURYez9i68Pcze7CiJzK1/tHIS'),
(13, 'Mehedi', 'Hasan', 10, 'Male', '+92', '95567845', 'mehedi@gmail.com', 'Mh', '$2y$10$k76/PK1gXk0hXvO5dmXDi.GMROMhjLlMPAIjz9PhrrmjyRM1dtyc2'),
(14, 'Imran', 'Ahmed', 23, 'Male', '+880', '1732422869', 'Imran@gmail.com', 'IA', '$2y$10$egoqI89YqkfhVNyRAYF56OSM4rnZ0CkgM.p2UHcxYu0hcWRucjO.i'),
(16, 'Junaid', 'Ahad', 23, 'Male', '+880', '1970701121', 'thejunaid@gmail.com', 'JA', '$2y$10$w.te1JiG7un.sNpd7.31Pum9IrkEXffm5hA8PZLfWPWcTrBAdGg1W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
