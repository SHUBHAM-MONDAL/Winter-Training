-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 07:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tododb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskid` int(7) NOT NULL,
  `name` varchar(500) NOT NULL DEFAULT 'Untitled task',
  `description` text,
  `starttime` date NOT NULL,
  `stoptime` date NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES
(2, 'task 3', 'abc def', '2019-01-09', '2019-01-17', 'abc abc', 0),
(3, 'task 4', 'abc def', '2019-01-09', '2019-01-17', 'abc abc', 0),
(4, 'task 1', 'asd', '2019-01-02', '2019-01-15', 'asd', 0),
(5, 'sdf', 'sdf', '0000-00-00', '0000-00-00', 'zxc', 0),
(6, 'sdf', 'sdf', '0000-00-00', '0000-00-00', 'zxc', 0),
(7, 'sdf', 'sdf', '0000-00-00', '0000-00-00', 'zxc', 0),
(9, 'shubham', 'I m Engineering student', '2019-01-18', '2019-01-26', 'Naini', 0),
(10, '', '', '0000-00-00', '0000-00-00', '', 0),
(11, '', '', '0000-00-00', '0000-00-00', '', 0),
(12, '', '', '0000-00-00', '0000-00-00', '', 0),
(13, '', '', '0000-00-00', '0000-00-00', '', 0),
(14, 'shubham', 'I m Engineering student', '2019-01-18', '2019-01-26', 'Naini', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
