-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 09:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arpeggio-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `midi`
--

CREATE TABLE `midi` (
  `idMidi` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `tempo` int(10) NOT NULL,
  `audio_file` varchar(50) NOT NULL,
  `Midi_file` varchar(50) NOT NULL,
  `Nbr_Downloads` int(7) NOT NULL DEFAULT 0,
  `Visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reportmidi`
--

CREATE TABLE `reportmidi` (
  `IdRM` int(10) NOT NULL,
  `idMidi` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `IdUserR` int(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Solved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reportsimples`
--

CREATE TABLE `reportsimples` (
  `IdRS` int(10) NOT NULL,
  `idSimple` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `idUserR` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Solved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simples`
--

CREATE TABLE `simples` (
  `idsimple` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `MK` varchar(15) DEFAULT NULL,
  `tempo` int(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `Nbr_Downloads` int(7) NOT NULL DEFAULT 0,
  `Visible` tinyint(1) NOT NULL DEFAULT 1,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `profilepic` varchar(50) NOT NULL DEFAULT 'Profile-Pics/profile-pic-placeholder.png',
  `Active` tinyint(1) NOT NULL DEFAULT 1,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `midi`
--
ALTER TABLE `midi`
  ADD PRIMARY KEY (`idMidi`);

--
-- Indexes for table `reportmidi`
--
ALTER TABLE `reportmidi`
  ADD PRIMARY KEY (`IdRM`),
  ADD KEY `FK_6` (`idUser`),
  ADD KEY `FK_7` (`IdUserR`);

--
-- Indexes for table `reportsimples`
--
ALTER TABLE `reportsimples`
  ADD PRIMARY KEY (`IdRS`),
  ADD KEY `FK_3` (`idUser`),
  ADD KEY `FK_4` (`idUserR`),
  ADD KEY `FK_2` (`idSimple`);

--
-- Indexes for table `simples`
--
ALTER TABLE `simples`
  ADD PRIMARY KEY (`idsimple`),
  ADD KEY `FK_1` (`iduser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser_2` (`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `midi`
--
ALTER TABLE `midi`
  MODIFY `idMidi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportmidi`
--
ALTER TABLE `reportmidi`
  MODIFY `IdRM` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportsimples`
--
ALTER TABLE `reportsimples`
  MODIFY `IdRS` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simples`
--
ALTER TABLE `simples`
  MODIFY `idsimple` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reportmidi`
--
ALTER TABLE `reportmidi`
  ADD CONSTRAINT `FK_6` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`IdUserR`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `reportsimples`
--
ALTER TABLE `reportsimples`
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`idSimple`) REFERENCES `simples` (`idsimple`),
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`idUserR`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `simples`
--
ALTER TABLE `simples`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
