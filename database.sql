-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2020 at 11:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_future`
--
CREATE DATABASE IF NOT EXISTS `db_future` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_future`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`, `date`, `time`) VALUES
(1, 'Артемий', 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :(', '05.09.2020', '22:34'),
(2, 'Евдоким', 'Если включить мозги, то все элементарно Ватсон!', '05.09.2020', '22:35'),
(3, 'Савва', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное', '05.09.2020', '22:36'),
(4, 'Хакер', '&lt;script&gt;alert(‘test’)&lt;/script&gt;', '05.09.2020', '23:10'),
(5, 'Артемий', 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его :(', '05.09.2020', '23:43'),
(6, 'Евдоким', 'Если включить мозги, то все элементарно Ватсон!', '05.09.2020', '23:44'),
(7, 'Савва', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное', '05.09.2020', '23:44');

-- --------------------------------------------------------

--
-- Table structure for table `future_group`
--

CREATE TABLE `future_group` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `future_group`
--

INSERT INTO `future_group` (`id`, `logo`, `phone`, `email`, `address`, `copyright`) VALUES
(1, '/images/logo.png', '(499) 340-94-71', 'info@future-group.ru', '115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1', '© 2010 - 2014 Future. Все права защищены');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `future_group`
--
ALTER TABLE `future_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `future_group`
--
ALTER TABLE `future_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
