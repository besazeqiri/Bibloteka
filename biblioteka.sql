-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 03:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `autoriid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mbiemri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shteti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`autoriid`, `emri`, `mbiemri`, `shteti`) VALUES
(19, 'naim', 'frasheri', 'shqiperi'),
(20, 'pjeter', 'bogdani', 'kosove'),
(21, 'ismail', 'kadare', 'shqiperi'),
(22, 'ali ', 'podrimja', 'kosove'),
(23, 'dritero', 'agolli', 'shqiperi'),
(24, 'gjergj', 'fishta', 'shqiperi'),
(25, 'sami ', 'frasheri', 'shqiperi'),
(26, 'rifat', 'kukaj', 'kosove');

-- --------------------------------------------------------

--
-- Table structure for table `huazimet`
--

CREATE TABLE `huazimet` (
  `huajaid` int(11) NOT NULL,
  `libriid` int(11) NOT NULL,
  `stafiid` int(11) DEFAULT NULL,
  `klientiid` int(11) NOT NULL,
  `dataemarrjes` date DEFAULT NULL,
  `dataekthimit` date DEFAULT NULL,
  `komente` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `huazimet`
--

INSERT INTO `huazimet` (`huajaid`, `libriid`, `stafiid`, `klientiid`, `dataemarrjes`, `dataekthimit`, `komente`) VALUES
(20, 29, NULL, 15, '2019-12-01', '2019-12-14', ''),
(21, 30, NULL, 16, '2020-05-08', '2020-05-20', ''),
(22, 32, NULL, 17, '2020-11-11', '2020-11-30', ''),
(23, 34, NULL, 19, '2020-01-20', '2020-02-20', ''),
(24, 35, NULL, 20, '2020-11-24', '2020-12-29', ''),
(25, 34, NULL, 21, '2020-02-02', '2020-03-20', ''),
(26, 31, NULL, 15, '2020-06-20', '2020-07-18', ''),
(27, 30, NULL, 16, '2020-04-20', '2020-05-26', 'eshte vonuar');

-- --------------------------------------------------------

--
-- Table structure for table `klienti`
--

CREATE TABLE `klienti` (
  `klientiid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mbiemri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataelindjes` date DEFAULT NULL,
  `numripersonal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresa` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komuna` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emaili` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefoni` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klienti`
--

INSERT INTO `klienti` (`klientiid`, `emri`, `mbiemri`, `dataelindjes`, `numripersonal`, `adresa`, `komuna`, `emaili`, `telefoni`) VALUES
(15, 'yllka', 'fazliu', '1990-11-02', '123456789', 'peje', 'peje', 'yllka@gmail.com', '044123456'),
(16, 'edona', 'matoshi', '1999-12-12', '789456123', 'prishtine', 'prishtine', 'edona@gmail.com', '045123789'),
(17, 'fitim', 'haziri', '1990-11-11', '789456123', 'lipjan', 'lipjan', 'fitim1@gmail.com', '044789123'),
(18, 'jehona', 'islami', '1992-02-01', '1112345678', 'istog', 'istog', 'jehona@hotmail.com', '044111222'),
(19, 'blerona', 'halili', '1996-07-21', '1122334455', 'prishtine', 'prishtine', 'blerona96@gmail.com', '044556677'),
(20, 'arber', 'jakupi', '1999-05-05', '4455667788', 'ferizaj', 'ferizaj', 'arber@gmail.com', '045112233'),
(21, 'pranvera', 'shala', '1992-12-12', '98877445631', 'ferizaj', 'ferizaj', 'pranvera@gmail.com', '044114477');

-- --------------------------------------------------------

--
-- Table structure for table `libri`
--

CREATE TABLE `libri` (
  `libriid` int(11) NOT NULL,
  `titulli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoriid` int(11) NOT NULL,
  `isbn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataepublikimit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libri`
--

INSERT INTO `libri` (`libriid`, `titulli`, `autoriid`, `isbn`, `dataepublikimit`) VALUES
(29, 'bageti e bujqesi', 19, NULL, '1986-11-11'),
(30, 'lulet e veres', 19, NULL, '1985-02-02'),
(31, 'ceta e profeteve', 20, NULL, '1989-01-01'),
(32, 'darka e gabuar', 21, NULL, '1990-11-11'),
(33, 'ishulli albania', 22, NULL, '1990-11-11'),
(34, 'nene shqiperi', 23, NULL, '1974-01-01'),
(35, 'keshtjella', 21, NULL, '1990-01-11'),
(36, 'kronike ne gur', 21, NULL, '1990-11-02'),
(37, 'aksidenti', 21, NULL, '1998-11-11'),
(38, 'mesdite', 23, NULL, '1990-01-01'),
(39, 'kukulla', 21, NULL, '1992-05-11'),
(40, 'e penguar', 21, NULL, '1998-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `stafi`
--

CREATE TABLE `stafi` (
  `stafiid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mbiemri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataelindjes` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numripersonal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresa` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefoni` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stafi`
--

INSERT INTO `stafi` (`stafiid`, `emri`, `mbiemri`, `dataelindjes`, `numripersonal`, `adresa`, `telefoni`, `username`, `password`, `roli`) VALUES
(20, 'besa', 'zeqiri', '1990-11-09', '999999999', 'prishtine', '044444444', 'besa', '123456', b'1'),
(21, 'filan', 'fistektu', '1990-11-11', '7777777777', 'ferizaj', '044-555-555', 'filan', '123456789', b'1'),
(22, 'arta', 'kryeziu', '1992-04-21', '123456789', 'prishtine', '044888777', 'arta', '999999999', b'0'),
(23, 'jeton', 'gashi', '1991-12-08', '789456123', 'prishtine', '049123456', 'jeton', '777777', b'0'),
(24, 'medina', 'bislimi', '1992-09-09', '987654321', 'peje', '044111111', 'medina', '123456789', b'0'),
(25, 'fitore', 'gashi', '1990-11-02', '134679852', 'ferizaj', '045123456', 'fitore', '987654321', b'0'),
(26, 'doruntina', 'hamza', '1988-11-11', '456123789', 'prishtine', '045789456', 'tina', '987654321', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`autoriid`);

--
-- Indexes for table `huazimet`
--
ALTER TABLE `huazimet`
  ADD PRIMARY KEY (`huajaid`),
  ADD KEY `libriid` (`libriid`),
  ADD KEY `stafiid` (`stafiid`),
  ADD KEY `klientiid` (`klientiid`);

--
-- Indexes for table `klienti`
--
ALTER TABLE `klienti`
  ADD PRIMARY KEY (`klientiid`);

--
-- Indexes for table `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`libriid`),
  ADD KEY `autoriid` (`autoriid`);

--
-- Indexes for table `stafi`
--
ALTER TABLE `stafi`
  ADD PRIMARY KEY (`stafiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `autoriid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `huazimet`
--
ALTER TABLE `huazimet`
  MODIFY `huajaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `klienti`
--
ALTER TABLE `klienti`
  MODIFY `klientiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `libri`
--
ALTER TABLE `libri`
  MODIFY `libriid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stafi`
--
ALTER TABLE `stafi`
  MODIFY `stafiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `huazimet`
--
ALTER TABLE `huazimet`
  ADD CONSTRAINT `huazimet_ibfk_1` FOREIGN KEY (`libriid`) REFERENCES `libri` (`libriid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `huazimet_ibfk_2` FOREIGN KEY (`stafiid`) REFERENCES `stafi` (`stafiid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `huazimet_ibfk_3` FOREIGN KEY (`klientiid`) REFERENCES `klienti` (`klientiid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libri`
--
ALTER TABLE `libri`
  ADD CONSTRAINT `libri_ibfk_1` FOREIGN KEY (`autoriid`) REFERENCES `autori` (`autoriid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
