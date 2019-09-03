-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 04:29 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dis`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `patient_id` int(10) NOT NULL,
  `patient_name` text NOT NULL,
  `contact_no` int(12) NOT NULL,
  `patient_address` text NOT NULL,
  `patient_age` int(10) NOT NULL,
  `patient_gender` text NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`patient_id`, `patient_name`, `contact_no`, `patient_address`, `patient_age`, `patient_gender`, `appointment_date`) VALUES
(4, 'sabbir', 23214, 'mirpur', 43, 'M', '2019-09-19'),
(5, 'sabbir', 23214, 'mirpur', 45, 'M', '2019-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `doc_signup`
--

CREATE TABLE `doc_signup` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `designation` text NOT NULL,
  `gender` text NOT NULL,
  `specialty` text NOT NULL,
  `bmdc_reg_no` varchar(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `professional_statement` text NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_signup`
--

INSERT INTO `doc_signup` (`id`, `first_name`, `last_name`, `designation`, `gender`, `specialty`, `bmdc_reg_no`, `hospital_name`, `password`, `email`, `mobile_no`, `professional_statement`, `profile_img`) VALUES
(12, 'sssssssSaikat', 'Royyyyyyy', 'sdfgdfsg', 'm', 'oncology', '3333334535', 'DMC', '81dc9bdb52d04dc20036dbd8313ed055', 'yaaaaaaaaaaaaaaaapskroy08@gmail.com', 1949215019, 'sdgfsavasfscasaaaassss', 'images/5d6df9c15aba17.01966197.jpg'),
(13, 'Saikat', 'Roy', 'sdfgdfsg', 'm', 'dermatology', 'bxhn', 'xfg', '81dc9bdb52d04dc20036dbd8313ed055', 'yapskroy08@gmail.com', 1949215019, 'cmg', 'images/5d6e0243684e68.10294176.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `user_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `password`, `gender`, `user_img`) VALUES
(49, 'Saikat', 'Roy', 1949215019, 'yapskrrhhuu4roy08@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'M', 'uploads/5d6db0bd3d01b8.11379073.jpg'),
(50, 'Saikat', 'Roy', 1949215019, 'yapseerrbgkroy08@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'M', 'images/5d6db0e9c21349.90116358.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `doc_signup`
--
ALTER TABLE `doc_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doc_signup`
--
ALTER TABLE `doc_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
