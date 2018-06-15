# FreeLCRM
Open Source CRM designed for freelancers
####sql structure: 
```
-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:33
-- Generation Time: Jun 15, 2018 at 12:46 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelcrm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionClient` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `idP` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `descriptionProjet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `price` int(10) NOT NULL,
  `priceHour` int(10) NOT NULL,
  `nbHours` int(4) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `state` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDUSER` (`idUser`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `id_Client` (`idClient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `panel`
--
ALTER TABLE `panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```