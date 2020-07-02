-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 05:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ig`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `i_id` int(11) NOT NULL,
  `igname` varchar(255) NOT NULL,
  `igcontact` varchar(20) NOT NULL,
  `igemail` varchar(255) NOT NULL,
  `igpassword` varchar(255) NOT NULL,
  `igrpassword` varchar(255) NOT NULL,
  `igaddress` varchar(255) NOT NULL,
  `igradio` varchar(255) NOT NULL,
  `igvalid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `igname`, `igcontact`, `igemail`, `igpassword`, `igrpassword`, `igaddress`, `igradio`, `igvalid`) VALUES
(13, 'rachi raut', '6543789909', 'rachi@gmail.com', 'Rachi123@', '', 'wqefda cdf ggh', 'option1', 'GAk3$1z'),
(14, 'rachi raut', '6543789909', 'rachi@gmail.com', '', '', 'wqefda cdf ggh', 'option1', 'GAk3$1z'),
(15, 'rasika', '5432156778', 'rasika1@gmail.com', 'Rasika12@', '', 'rachi up', 'option1', 'GAk3$1z'),
(16, 'rasika', '5432156778', 'rasika1@gmail.com', '', '', 'rachi up', 'option1', 'GAk3$1z'),
(17, 'prajakta', '9096289039', '13psathwane@gmail.com', 'Prajakta1234@', '', '16 jaitala road', 'option1', 'GAk3$1z'),
(18, 'watch', '8987667888', 'watch@gmail.com', 'Watch123@', '', 'watch janhit', 'option1', 'GAk3$1z'),
(20, 'kalyani kherde', '912345678', 'kalyani@gmail.com', 'Kalyani123@', 'Kalyani123@', 'nagpur,jaitala', 'option1', ''),
(21, 'kalyani majumdar', '098765432', 'kalyanim@gmail.com', 'Km12345@', 'Km12345@', 'Mumbai', 'option1', ''),
(22, 'rachi', '12345', 'rachi1@gmail.com', 'Rachi123@', 'Rachi123@', 'Mumbai', 'option1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
