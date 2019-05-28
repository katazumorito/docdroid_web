-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docdroid`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tbl`
--

CREATE TABLE `account_tbl` (
  `account_id` int(111) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_info_fk` int(11) NOT NULL,
  `account_status` varchar(243) NOT NULL DEFAULT 'Enabled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`account_id`, `username`, `password`, `user_info_fk`, `account_status`) VALUES
(1, 'aljohn', '$2y$10$vjK9NZOLt.qt9bvBdokyq.b1HGLjMzdFtCZAA6MxQn/GFbH5GVWtO', 1, 'Enabled'),
(2, 'john', '$2y$10$h7omMiuMKT.VpBMvqdsBROpURGb/80HvUMHtl1q.vJ/l6h6mI9s46', 2, 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_sched_tbl`
--

CREATE TABLE `clinic_sched_tbl` (
  `sched_id` int(11) NOT NULL,
  `sched_day` varchar(255) NOT NULL,
  `sched_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles_tbl`
--

CREATE TABLE `roles_tbl` (
  `role_id` int(11) NOT NULL,
  `role_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_tbl`
--

INSERT INTO `roles_tbl` (`role_id`, `role_desc`) VALUES
(1, 'Doctor'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_info_tbl`
--

CREATE TABLE `user_info_tbl` (
  `user_id` int(11) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `user_address` varchar(243) NOT NULL,
  `role_fk` int(243) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info_tbl`
--

INSERT INTO `user_info_tbl` (`user_id`, `l_name`, `f_name`, `m_name`, `user_address`, `role_fk`) VALUES
(1, 'Jacinto', 'Aljohn', 'Penaflor', 'Inamotan, Manaoag, Pangasinan', 1),
(2, 'Doe', 'John', 'Nuts', 'Camantiles, Urdaneta City, Pangasinan', 2),
(3, 'Jac', 'AJ', 'Pen', 'mc arthur highway', 2),
(4, 'Jac', 'AJ', 'Pen', 'mc arthur highway', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tbl`
--
ALTER TABLE `account_tbl`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `clinic_sched_tbl`
--
ALTER TABLE `clinic_sched_tbl`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_info_tbl`
--
ALTER TABLE `user_info_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tbl`
--
ALTER TABLE `account_tbl`
  MODIFY `account_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clinic_sched_tbl`
--
ALTER TABLE `clinic_sched_tbl`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_info_tbl`
--
ALTER TABLE `user_info_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
