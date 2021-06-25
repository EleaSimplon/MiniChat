-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 22, 2021 at 12:01 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `ipAddress` text NOT NULL,
  `dateHour` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `idUser`, `ipAddress`, `dateHour`, `content`) VALUES
(46, 7, '172.16.238.1', '2021-03-10 13:35:44', 'Hello'),
(48, 8, '172.16.238.1', '2021-03-10 13:36:09', 'Yooo'),
(49, 8, '172.16.238.1', '2021-03-10 13:36:11', 'Comment ça va ?'),
(51, 8, '172.16.238.1', '2021-03-10 13:36:17', 'Quoi de prévu ce WE ?'),
(56, 7, '172.16.238.1', '2021-03-10 14:45:35', 'Des projets à finir'),
(57, 9, '172.16.238.1', '2021-03-10 14:47:09', 'Hey guys\n'),
(69, 9, '172.16.238.1', '2021-03-11 13:56:17', 'hello jean'),
(80, 12, '172.16.238.1', '2021-03-12 11:34:50', '😏 '),
(81, 12, '172.16.238.1', '2021-03-12 12:34:15', '😍 I LOVE JQUERY'),
(82, 13, '172.16.238.1', '2021-04-01 16:15:10', '😍 hello\n'),
(83, 9, '172.16.238.1', '2021-05-11 13:01:04', 'Hello ppl😘 '),
(84, 9, '172.16.238.1', '2021-05-11 14:03:27', 'What\'s up ?🤙 '),
(85, 15, '172.16.238.1', '2021-05-11 14:08:03', 'Nice to meet you'),
(90, 9, '172.16.238.1', '2021-06-21 11:40:20', 'Hello !😁 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `mail`, `password`, `avatar`) VALUES
(7, 'Antho', 'Antho@gmail.com', 'anthodu42', '#caf7a5'),
(8, 'Hamza', 'hamza@gmail.com', 'hamzak', '#f7a69b'),
(9, 'Elea', 'lelou@gmail.com', 'hellolelou', '#f0f466'),
(10, 'Jean42', 'jeandu42@gmail.com', 'vivelesverts', '#0C4B33'),
(11, 'Paul', 'Jacouille-grosseCouille@gmail.fr', 'Cosmos22', '#f4a673'),
(12, 'Maxime', 'maxime.t@hotmail.fr', 'maxoumaxou', '#dd23b5'),
(13, 'Charley', 'chazzy@gmail.com', 'naganaga', '#b3b3f9'),
(15, 'jdoe', 'jd@gmail.com', 'jdoe', '#c90eaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idUser` (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_idUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
