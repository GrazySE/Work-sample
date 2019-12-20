-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2019 at 03:32 PM
-- Server version: 10.1.43-MariaDB
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hannahbana_ifc`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients2`
--

CREATE TABLE IF NOT EXISTS `clients2` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Mail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Birthdate` date NOT NULL,
  `Height` double NOT NULL,
  `Weight` double NOT NULL,
  `plan1` text CHARACTER SET latin1 NOT NULL,
  `plan2` text CHARACTER SET latin1 NOT NULL,
  `plan3` text CHARACTER SET latin1 NOT NULL,
  `memo` text CHARACTER SET latin1 NOT NULL,
  `stats` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `image` longblob NOT NULL,
  `target_file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `uid` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `links` longtext COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25408555653791895 DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--

--

-- Indexes for dumped tables
--

--
-- Indexes for table `clients2`
--
ALTER TABLE `clients2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_4` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `Uid` (`uid`) USING HASH,
  ADD KEY `uid_2` (`uid`),
  ADD KEY `uid_3` (`uid`),
  ADD KEY `uid_4` (`uid`),
  ADD KEY `uid_5` (`uid`),
  ADD KEY `uid_6` (`uid`),
  ADD KEY `uid_7` (`uid`),
  ADD KEY `uid_8` (`uid`),
  ADD KEY `uid_9` (`uid`),
  ADD KEY `uid_10` (`uid`),
  ADD KEY `id_5` (`id`),
  ADD KEY `userid` (`id`,`Birthdate`),
  ADD KEY `id_6` (`id`),
  ADD FULLTEXT KEY `Mail` (`Mail`);

--

ALTER TABLE `clients2`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25408555653791895;
--
-- AUTO_INCREMENT for table `images`
--
s