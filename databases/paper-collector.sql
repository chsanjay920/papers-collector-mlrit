-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 07:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paper-collector`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam-table`
--

CREATE TABLE `exam-table` (
  `id` int(11) NOT NULL,
  `exam_type` varchar(50) NOT NULL,
  `subject-name` text NOT NULL,
  `date_of_exam` varchar(50) NOT NULL,
  `file_of_exampaper` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam-table`
--

INSERT INTO `exam-table` (`id`, `exam_type`, `subject-name`, `date_of_exam`, `file_of_exampaper`) VALUES
(7, 'mid-2', 'web technologies', '2021-2022', 'chintala sanjay.pdf'),
(8, 'mid-1', 'karthik', '2020-2021', '1634174276.png'),
(9, 'mid-1', 'flat', '2021-2022', '1634186942.pdf'),
(10, 'mid-2', 'flat', '2021-2022', '1634187127.pdf'),
(11, 'mid-1', 'flat', '2021-2022', '1634187144.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notes_table`
--

CREATE TABLE `notes_table` (
  `id` int(11) NOT NULL,
  `name_of_subject` varchar(100) NOT NULL,
  `decription_of_notes` text NOT NULL,
  `notes_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes_table`
--

INSERT INTO `notes_table` (`id`, `name_of_subject`, `decription_of_notes`, `notes_file`) VALUES
(9, 'airtificial inteligence', '5', '1634173216.pdf'),
(10, 'web technologies', '1', '1634173247.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam-table`
--
ALTER TABLE `exam-table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes_table`
--
ALTER TABLE `notes_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam-table`
--
ALTER TABLE `exam-table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notes_table`
--
ALTER TABLE `notes_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
