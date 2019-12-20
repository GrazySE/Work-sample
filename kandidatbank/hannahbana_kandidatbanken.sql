-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2019 at 03:33 PM
-- Server version: 10.1.43-MariaDB
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hannahbana_kandidatbanken`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidater`
--

CREATE TABLE IF NOT EXISTS `kandidater` (
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `username` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` char(128) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `presentation` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `edstart` date NOT NULL,
  `edend` date NOT NULL,
  `expstart` date NOT NULL,
  `expend` date NOT NULL,
  `hobby` text NOT NULL,
  `photo` longblob NOT NULL,
  `target_file` varchar(200) CHARACTER SET utf16 COLLATE utf16_swedish_ci NOT NULL,
  `id` bigint(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidater`
--

INSERT INTO `kandidater` (`firstname`, `lastname`, `username`, `email`, `password`, `occupation`, `presentation`, `experience`, `education`, `edstart`, `edend`, `expstart`, `expend`, `hobby`, `photo`, `target_file`, `id`, `uid`) VALUES
('', '', 'GraSun', 'grazy.facebook@yahoo.se', '$2y$10$9ltmk854nNlRBX4EbMaN.eqgJCYsbLDDUnsduJaAnHECtyLjYqQde', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 1, 0),
('', '', 'grazyse', 'graziella.sundblad@gmail.com', '$2y$10$uDRmeSyhhooeVlNpH3I3ne1b6XSEhZx9oW7.mT7eEKUXJELQ31Qe2', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 2, 0),
('Test', 'Testing', 'Testy', 'test@test.com', '$2y$10$CyXIHVPr5AyDQHE0o82R9Osck6gIxY8vzBu2O7XVFTOtVyzMElPo2', ' ', ' ', ' ', ' ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' ', '', '', 5, 0),
('grazy', 'grazy', 'testing', 'testing@test.com', '$2y$10$72HjyZbnYzuVGBg8EigzsOhQVdDRm9fJCBhiKJEkdpJhblHDSwY8S', 'KundtjÃ¤nst, service & handel', '               test                                  ', 'test                                 ', 'dohdoh                      ', '0000-00-00', '0000-00-00', '2019-12-17', '0000-00-00', 'hey                         ', '', 'grazycv.png', 9, 0),
('Gra', 'Fra', 'tra', 'blabla@bla.com', '$2y$10$EvM2M8jacfb12oUtjvfcxuRd1WwueBYeYzbZIhrv/ToupzkWZKv2a', '   ', '      ', '   ', '   ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '   ', '', 'bg.png', 10, 0),
('Nina', 'Khamking', 'Nina', 'nina.khamking@gmail.com', '$2y$10$Cio3d4IgHNxX9nW3cWuXQujDgsUs50ztx8/BpcBGuMjBT5AwIa4Tq', 'Administration/kontor', '                            Test                        ', '                          ', '                          ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '                          ', '', '464792F9-B376-4C07-97AB-73687BB22918.jpeg', 11, 0),
('Hejhej', 'Hej', 'Hejhej', 'hello@hannahbanana.se', '$2y$10$9oiAAZk04Yw2wfTgF463eO.w2/TjgOBWzckUJPT3cOIoC3HIM56ES', ' ', '  Test', ' ', ' ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' ', '', '', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1573125319'),
(5, '1573911679'),
(9, '1573900467'),
(11, '1574397582');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidater`
--
ALTER TABLE `kandidater`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidater`
--
ALTER TABLE `kandidater`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
