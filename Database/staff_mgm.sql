-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 12:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_mgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'haris', '1400'),
(2, 'deepadharshini', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `sts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`id`, `name`, `email`, `date`, `sts`) VALUES
(1, 'Haris S', 'hariss.19cse@kongu.edu', '2021-08-27', 'present'),
(3, 'Haris S', 'hariss.19cse@kongu.edu', '2021-08-27', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `staff_det`
--

CREATE TABLE `staff_det` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mob` bigint(10) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_det`
--

INSERT INTO `staff_det` (`id`, `name`, `email`, `password`, `dob`, `mob`, `department`) VALUES
(2, 'Haris S', 'hariss.19cse@kongu.edu', '12345', '2002-08-06', 8825763513, 'CSE'),
(3, 'Deepadharshini S', 'deepadharsinis.19cse@kongu.edu', '12345', '1211-02-11', 123456789, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `sts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `roll_number`, `date`, `sts`) VALUES
(1, '19CSR054', '2021-08-27', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `student_det`
--

CREATE TABLE `student_det` (
  `roll_number` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_det`
--

INSERT INTO `student_det` (`roll_number`, `name`, `password`, `mob`, `dob`, `email`, `department`) VALUES
('19CSR054', 'haris', '12345', 8825763513, '2002-08-06', 'hariss.19cse@kongu.edu', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `m1` varchar(10) NOT NULL,
  `m2` varchar(10) NOT NULL,
  `m3` varchar(10) NOT NULL,
  `m4` varchar(10) NOT NULL,
  `m5` varchar(10) NOT NULL,
  `tu1` varchar(10) NOT NULL,
  `tu2` varchar(10) NOT NULL,
  `tu3` varchar(10) NOT NULL,
  `tu4` varchar(10) NOT NULL,
  `tu5` varchar(10) NOT NULL,
  `w1` varchar(10) NOT NULL,
  `w2` varchar(10) NOT NULL,
  `w3` varchar(10) NOT NULL,
  `w4` varchar(10) NOT NULL,
  `w5` varchar(10) NOT NULL,
  `th1` varchar(10) NOT NULL,
  `th2` varchar(10) NOT NULL,
  `th3` varchar(10) NOT NULL,
  `th4` varchar(10) NOT NULL,
  `th5` varchar(10) NOT NULL,
  `fr1` varchar(10) NOT NULL,
  `fr2` varchar(10) NOT NULL,
  `fr3` varchar(10) NOT NULL,
  `fr4` varchar(10) NOT NULL,
  `fr5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `name`, `email`, `m1`, `m2`, `m3`, `m4`, `m5`, `tu1`, `tu2`, `tu3`, `tu4`, `tu5`, `w1`, `w2`, `w3`, `w4`, `w5`, `th1`, `th2`, `th3`, `th4`, `th5`, `fr1`, `fr2`, `fr3`, `fr4`, `fr5`) VALUES
(2, 'Haris S', 'hariss.19cse@kongu.edu', 'CSE A', 'NILL', 'CSE B', 'IT A', 'NILL', 'NILL', 'CSE D', 'ECE A', 'NILL', 'IT B', 'CSE D', 'IT A', 'MECH A', 'NILL', 'NILL', 'CIVIL C', 'CSE A', 'IT A', 'NILL', 'IT B', 'NILL', 'IT A', 'CSE A', 'NILL', 'NILL'),
(3, 'Deepadharshini S', 'deepadharsinis.19cse@kongu.edu', 'CSE A', 'NILL', 'CSE B', 'IT A', 'NILL', 'NILL', 'CSE D', 'ECE A', 'NILL', 'IT B', 'CSE D', 'IT A', 'MECH A', 'NILL', 'NILL', 'CIVIL C', 'CSE A', 'IT A', 'NILL', 'IT B', 'NILL', 'IT A', 'CSE A', 'NILL', 'NILL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_det`
--
ALTER TABLE `staff_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_det`
--
ALTER TABLE `student_det`
  ADD PRIMARY KEY (`roll_number`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_det`
--
ALTER TABLE `staff_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
