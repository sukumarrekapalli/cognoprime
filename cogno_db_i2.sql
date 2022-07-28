-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 09:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogno_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `question_id` int(100) NOT NULL,
  `question_type` varchar(100) DEFAULT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`question_id`, `question_type`, `question`) VALUES
(1, 'openspace', 'Who are you?'),
(2, 'openspace', 'What is your name?'),
(3, 'openspace', 'third question'),
(4, 'MCQ', 'fourth question');

-- --------------------------------------------------------

--
-- Table structure for table `survey_codes_table`
--

CREATE TABLE `survey_codes_table` (
  `survey_code_id` int(100) NOT NULL,
  `survey_code` varchar(10) NOT NULL,
  `survey_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_codes_table`
--

INSERT INTO `survey_codes_table` (`survey_code_id`, `survey_code`, `survey_id`) VALUES
(1, 'abcdef', 1),
(2, 'abcifd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey_table`
--

CREATE TABLE `survey_table` (
  `survey_id` int(100) NOT NULL,
  `survey_questions` varchar(100) NOT NULL,
  `survey_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_table`
--

INSERT INTO `survey_table` (`survey_id`, `survey_questions`, `survey_status`) VALUES
(1, '1,2', 'active'),
(2, '2,3,4', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `survey_codes_table`
--
ALTER TABLE `survey_codes_table`
  ADD PRIMARY KEY (`survey_code_id`);

--
-- Indexes for table `survey_table`
--
ALTER TABLE `survey_table`
  ADD PRIMARY KEY (`survey_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `question_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `survey_codes_table`
--
ALTER TABLE `survey_codes_table`
  MODIFY `survey_code_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey_table`
--
ALTER TABLE `survey_table`
  MODIFY `survey_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
