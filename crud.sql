-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 05:32 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`email`, `password`, `id`) VALUES
('mp@gmail.com', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `sno` int(5) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `test` varchar(255) NOT NULL,
  `doctor_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`sno`, `patient_id`, `date`, `time`, `status`, `test`, `doctor_id`) VALUES
(3, 6, '2021-08-31', '01:30:00', 'completed', 'X-RAY', 2),
(5, 6, '2021-09-15', '16:40:00', 'completed', 'COVID VACCINATION', 1),
(7, 6, '2021-08-30', '15:00:00', 'completed', 'CT-SCAN', 2),
(8, 4, '2021-08-22', '08:30:00', 'completed', 'doctorA', 1),
(10, 10, '2021-09-20', '09:00:00', 'completed', 'COVID VACCINATION', 1),
(12, 4, '2021-08-25', '18:40:00', 'completed', 'doctorA', 3),
(13, 11, '2021-08-22', '15:15:00', 'pending', 'doctorA', 1),
(14, 11, '2021-08-25', '16:20:00', 'completed', 'COVID TEST', 4),
(16, 13, '2021-09-04', '17:30:00', 'pending', 'COVID TEST', 3),
(17, 13, '2021-10-10', '10:50:00', 'pending', 'COVID VACCINATION', 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `sex`, `age`, `mobile`, `email`, `password`) VALUES
(1, 'Abhishek Raj', 'male', 35, '9685203147', 'abhi@gmail.com', '1234'),
(2, 'purushottam', 'male', 25, '9632014587', 'pp@gmail.com', '1234'),
(3, 'Mukesh Patel', 'male', 30, '9685203147', 'mukesh@gmail.com', '1234'),
(4, 'Nayan Gupta', 'male', 35, '8529630147', 'ng@gmail.com', '1234'),
(6, 'soham', 'male', 55, '8529630147', 'soham@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `sex`, `mobile`, `email`, `password`, `address`) VALUES
(1, 'xyz', 22, 'male', '7563214809', 'xyz@gmail.com', '1234', 'lucknow'),
(2, 'Harsh', 22, 'male', '963520741', 'hk@gmail.com', '1234', 'surat, Gujrat'),
(4, 'harsh', 30, 'male', '9685203147', 'harshk@gmail.com', '1234', 'surendra nagar'),
(5, 'raushan', 25, 'male', '9856302147', 'raushan@gmail.com', '1234', 'bihar'),
(6, 'nayan gupta', 30, 'male', '9875036214', 'ny@gmail.com', '1234', 'indore'),
(7, 'abhishek', 55, 'male', '8529630147', 'abhishek@gmail.com', '1234', 'indore'),
(10, 'Vishal Gupta', 21, 'male', '8520963147', 'vg@gmail.com', '1234', 'bhilai'),
(11, 'kapil', 35, 'male', '4563201789', 'kapil@gmail.com', '1234', 'surathkal'),
(13, 'shivam', 5, 'male', '8520963741', 'shivam@gmail.com', '1234', 'Lucknow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueemail` (`email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
