-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinzo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE `grievances` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `register_number` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `program_type` varchar(255) DEFAULT NULL,
  `main_course` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `grievance_type` varchar(255) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `grievances_details` text DEFAULT NULL,
  `Fees_Payment_Details` varchar(255) DEFAULT NULL,
  `Hall_Ticket` varchar(255) DEFAULT NULL,
  `Exam_Application_Form` varchar(255) DEFAULT NULL,
  `Available_Mark_Statement` varchar(255) DEFAULT NULL,
  `Consolidated_Mark_Statement` varchar(255) DEFAULT NULL,
  `Course_Completion_Certificate` varchar(255) DEFAULT NULL,
  `Application_Fees` varchar(255) DEFAULT NULL,
  `Genuine_Certificate_Fees` varchar(255) DEFAULT NULL,
  `PSTM` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`id`, `name`, `register_number`, `course_name`, `date_of_birth`, `program_type`, `main_course`, `mobile`, `email`, `address`, `idcard`, `grievance_type`, `batch`, `status`, `grievances_details`, `Fees_Payment_Details`, `Hall_Ticket`, `Exam_Application_Form`, `Available_Mark_Statement`, `Consolidated_Mark_Statement`, `Course_Completion_Certificate`, `Application_Fees`, `Genuine_Certificate_Fees`, `PSTM`, `created_at`) VALUES
(1, 'Murugan', '23332332', 'B.A. History', '0008-03-31', 'nonSemester', 'UG Courses(2)', '9876543213', 'admin@de', 'D.No 362 west street uthupatti', 'Screenshot (10).png', 'Genuine Certificate', '2003-2003', 'in progress', 'hi', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 12:43:04'),
(2, 'Murugan', '23332332', 'B.A. History', '0008-03-31', 'nonSemester', 'UG Courses(2)', '9876543213', 'admin@de', 'D.No 362 west street uthupatti', 'Screenshot (10).png', 'Genuine Certificate', '2003-2003', 'in progress', 'hi', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 12:44:41'),
(3, 'Murugan', '23222322', 'B.A. History [Tamil]', '0003-03-31', 'semester', 'UG Courses(2)', '9876543213', 'admin@de', 'D.No 362 west street uthupatti', 'my image.jpg', 'Current Mark Statement', '2003-2332', 'in progress', 'hi', NULL, NULL, NULL, 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, '2024-06-17 16:25:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grievances`
--
ALTER TABLE `grievances`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grievances`
--
ALTER TABLE `grievances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
