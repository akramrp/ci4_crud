-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 12:12 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `auther` varchar(100) DEFAULT NULL,
  `isbn` varchar(10) DEFAULT NULL,
  `added_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `name`, `auther`, `isbn`, `added_date`) VALUES
(2, 'book 12', 'auther 12', '00012', '2021-02-03 13:54:55'),
(3, 'book 13', 'auther 13', '00013', '2021-02-03 13:56:25'),
(4, 'book 14', 'auther 14', '00014', '2021-02-03 14:01:45'),
(5, 'mohd akram', 'aaaa22', '22222', '2021-02-03 14:05:54'),
(6, 'mohd akram', 'aaaa22', '22222', '2021-02-03 14:06:59'),
(7, 'mohd akram', 'aaaa22', '22222', '2021-02-03 14:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `created_at` varchar(20) NOT NULL COMMENT 'Created date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `created_at`) VALUES
(1, 'Team', 'info@test.com', '9000000001', '2019-01-01'),
(2, 'Admin', 'admin@test.com', '9000000002', '2019-01-02'),
(3, 'User', 'user@test.com', '9000000003', '2019-01-03'),
(4, 'Editor', 'editor@test.com', '9000000004', '2019-01-04'),
(5, 'Writer', 'writer@test.com', '9000000005', '2019-01-05'),
(6, 'Contact', 'contact@test.com', '9000000006', '2019-01-06'),
(7, 'Manager', 'manager@test.com', '9000000007', '2019-01-07'),
(8, 'John', 'john@test.com', '9000000055', '2019-01-08'),
(9, 'Merry', 'merry@test.com', '9000000088', '2019-01-09'),
(10, 'Keliv', 'kelvin@test.com', '9000550088', '2019-01-10'),
(11, 'Herry', 'herry@test.com', '9050550088', '2019-01-11'),
(12, 'Mark', 'mark@test.com', '9050550998', '2019-01-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
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
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
