-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 02:34 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(2, 'Divyesh', 'admin@admin.com', '$2y$10$2/6KxfhXlc9glT7kTlfdTO0L9aiwZ6JmgahB0LNF0J82yss2kHfwS');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `message`, `userid`) VALUES
(1, 'cc  fdbfdb dfbf', 2),
(2, 'have thi pani regular avse', 41),
(3, 'it\'s okay', 41),
(4, 'thay jse bhai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `quality`, `userid`) VALUES
(5, 'orange special', '25', 'b', 41),
(6, 'banana', '123', 'b', 41),
(8, 'apple', '122', 'c', 42);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `name`, `contact`, `flat_no`, `title`, `description`, `userid`) VALUES
(1, 'Divyesh Patel', '1234567', '02', 'space', 'water', 42),
(5, 'janvi patel', '142365', '12', 'water problem', 'regular pani nathi avtu', 41),
(6, 'janvi patel', '136254', '12', 'water problem', 'daroj savare pani nathi avtu', 41);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(34, 'Divyesh', 'adnmin@at.com', '$2y$10$ke3sE8MmakpBtoSh5koeG.ZIzGtjYn4JART3PjFuK5ENd0pH2S9US'),
(35, 'Tanvi', 'tanvi@at.com', '$2y$10$Jvef9SEiQtlqEmZTgW.Xh.r3hZXWXB0QfV4fM3Rq0lJLQTkZaBJzq'),
(36, 'kamaran', 'kamaran@gmsil.com', '$2y$10$bCmbtbDuzmeme2F5XHIh0.C6QmaJk05pl5.n8Y9m8jzkWBdTiY3RS'),
(37, 'jaimin', 'jaimin@gmail.com', '$2y$10$QkhuRT8LHj8c0w.gtMXbDe2r7Eguwgqxdr0WmBgnuH3vH.EXUbKdm'),
(38, 'dk', 'dk@gmail.com', '$2y$10$7U.ZyngKw7NoNG8XmtuKe.R9WYVMR6cRYf4MOS/KdYQbBnqTaoktS'),
(39, 'krina', 'krina@ast.com', '$2y$10$vVklIcfsunMKvTz4j8.iPOiWioM0f1b.xacPjJ93.CFPCgxj89oFG'),
(40, 'manan', 'mana@gmail.com', '$2y$10$jJGKzYZPh4cTEs.rFAkJRuCp9j8zRKSDiSFQfrP7RFBmLobk9yvhi'),
(41, 'janvi Patel', 'janvi@ast.com', '$2y$10$MJVb.jbCIuK/Oa5UI0vpv.2MSAaJnR1l/3bM5xldJS.HWEH74dsT.'),
(42, 'shreya', 'shreya@ast.com', '$2y$10$DR75uyd0KaoE/hpewHDtu.9JRO5DKX881nf2bTtABGs2kP/g8cZ4i'),
(43, 'nimit', 'nimit@yahoo.com', '$2y$10$BfNQ2Q0BvKdMgnG9Y37MG.gPtj71uzZiriaP0BJr.7IgUcPWI20ry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
