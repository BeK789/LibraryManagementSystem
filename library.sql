-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 03:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(10) NOT NULL,
  `Book_Name` varchar(66) NOT NULL,
  `Author` varchar(66) NOT NULL,
  `Publication` varchar(90) NOT NULL,
  `Price` float NOT NULL,
  `stock` int(10) NOT NULL DEFAULT 10,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Librarian` varchar(67) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Book_Name`, `Author`, `Publication`, `Price`, `stock`, `purchase_date`, `Librarian`, `entry_date`) VALUES
(2, 'Physics', 'SU Ahmed', 'Broad pubs', 233, 10, '2020-05-05 18:00:00', 'man reus', '2020-05-17 09:38:09'),
(3, 'Chemistry', 'SU Ahmed', 'Broad pubs', 343, 19, '0000-00-00 00:00:00', 'Marco Reus', '2020-05-17 09:39:31'),
(4, 'Mathematics', 'Akondo Sir', 'Tidy pubs 2', 677, 10, '0000-00-00 00:00:00', 'Thorgan Hazard', '2020-05-17 09:41:15'),
(120, 'The Godfather 72', 'kane@gmail.com', 'vgg', 3223, 10, '0000-00-00 00:00:00', 'Vito', '2020-05-20 09:47:42'),
(121, 'Discrete Mathematics', 'Jesse Lingard', 'Man Utd', 997, 5, '0000-00-00 00:00:00', 'Marco Reus', '2020-05-23 15:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(10) NOT NULL,
  `Student_name` varchar(66) NOT NULL,
  `Student_id` int(6) NOT NULL,
  `Book_id` int(6) NOT NULL,
  `Issue_date` varchar(90) NOT NULL,
  `Return_date` varchar(90) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `Student_name`, `Student_id`, `Book_id`, `Issue_date`, `Return_date`, `status`) VALUES
(3, 'KANE', 18, 4, '19/05/2020', '', 1),
(4, 'Kane Harry', 16, 2, '19/05/2020', 'May 09, 2022', 1),
(5, 'Son Heung-min', 19, 3, '19/05/2020', 'Mar 04, 2022', 1),
(6, 'Kane Harry', 16, 3, '19/05/2020', 'May 09, 2022', 1),
(7, 'Kane Harry', 16, 4, '19/05/2020', '', 0),
(8, 'KANE', 18, 2, '19/05/2020', '', 0),
(9, 'KANE', 17, 3, '19/05/2020', '', 1),
(10, 'Son Heung-min', 19, 2, '19/05/2020', '', 0),
(11, 'Son Heung-min', 19, 4, '21/05/2020', '', 0),
(12, 'Son Heung-min', 19, 120, '21/05/2020', 'May 21, 2020', 1),
(13, 'Karim', 0, 2, '15/11/2021', '', 0),
(14, 'Jason', 0, 3, '04/03/2022', '', 1),
(15, 'Jason', 16, 2, '04/03/2022', 'May 09, 2022', 0),
(16, 'Son Heung-min', 19, 2, '04/03/2022', '', 0),
(17, 'Kane Harry', 16, 2, '09/05/2022', 'May 09, 2022', 1),
(21, 'Kane Harrys', 16, 167, '10/05/2022', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `librarians`
--

CREATE TABLE `librarians` (
  `Name` varchar(66) NOT NULL,
  `ID` int(6) NOT NULL,
  `Email` varchar(66) NOT NULL,
  `Password` varchar(90) NOT NULL,
  `Username` varchar(66) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Photo` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarians`
--

INSERT INTO `librarians` (`Name`, `ID`, `Email`, `Password`, `Username`, `Time`, `Photo`) VALUES
('KANES son', 101, 'sohaankane@gmail.com', 'kane1222', '', '2020-05-16 09:18:37', '241364893_4574131639317310_4155592984109329127_n.jpg'),
('Kane Unmasked 2006', 120, 'kane@gmail.com', 'vgg', 'Kanewwe', '2020-05-16 09:18:37', 'kane.jpg'),
('John Cena', 121, 'cena@gmail.com', 'cena', 'cenawwe', '2020-05-16 09:18:37', '09022012484.jpg'),
('Malan Corleone', 122, 'malan@gmail.com', 'malan', 'malan', '2020-05-16 09:18:37', '20150503_124150.jpg'),
('Michael Corleone', 123, 'Michael@gmail.com', 'Michael', 'Michael', '2020-05-16 09:18:37', 'p6319_p_v7_ae.jpg'),
('Vito Corleone', 124, 'Vito@gmail.com', 'Vito', 'Vito', '2020-05-16 09:18:37', 'vito.png'),
('Vito Corleone', 127, 'Vitso@gmail.com', 'Vito', 'Vitos\r\n', '2020-05-16 09:18:37', 'vito.png'),
('Vito Corleone', 129, 'Vitso@gmail.coms', 'Vitoss', 'Vitos\r\ns', '2020-05-16 09:18:37', 'vito.png');

-- --------------------------------------------------------

--
-- Table structure for table `print_students`
--

CREATE TABLE `print_students` (
  `Name` varchar(66) NOT NULL,
  `ID` int(6) NOT NULL,
  `Department` varchar(66) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `print_students`
--

INSERT INTO `print_students` (`Name`, `ID`, `Department`, `GPA`) VALUES
('Jason Bourne', 1, 'CSE', 3.77),
('Jason Bourne', 2, 'CSE', 3.77),
('Jason Bourne', 3, 'CSE', 3.77),
('Jason Bourne', 4, 'CSE', 3.77),
('Jason Bourne', 5, 'CSE', 3.77),
('Jason Bourne', 6, 'CSE', 3.77),
('Jason Bourne', 7, 'CSE', 3.77),
('Jason Bourne', 8, 'CSE', 3.77),
('Jason Bourne', 9, 'CSE', 3.77),
('Jason Bourne', 10, 'CSE', 3.77),
('Jason Bourne', 11, 'CSE', 3.77),
('Jason Bourne', 12, 'CSE', 3.77),
('Jason Bourne', 13, 'CSE', 3.77),
('Jason Bourne', 14, 'CSE', 3.77),
('Jason Bourne', 15, 'CSE', 3.77),
('Jason Bourne', 16, 'CSE', 3.77),
('Jason Bourne', 17, 'CSE', 3.77),
('Jason Bourne', 18, 'CSE', 3.77),
('Jason Bourne', 19, 'CSE', 3.77),
('Jason Bourne', 20, 'CSE', 3.77),
('Jason Bourne', 21, 'CSE', 3.77),
('Jason Bourne', 22, 'CSE', 3.77),
('Jason Bourne', 23, 'CSE', 3.77),
('Jason Bourne', 24, 'CSE', 3.77),
('Jason Bourne', 25, 'CSE', 3.77),
('Jason Bourne', 26, 'CSE', 3.77),
('Jason Bourne', 27, 'CSE', 3.77),
('Jason Bourne', 28, 'CSE', 3.77),
('Jason Bourne', 29, 'CSE', 3.77),
('Jason Bourne', 30, 'CSE', 3.77),
('Jason Bourne', 31, 'CSE', 3.77),
('Jason Bourne', 32, 'CSE', 3.77),
('Jason Bourne', 33, 'CSE', 3.77),
('Jason Bourne', 34, 'CSE', 3.77),
('Jason Bourne', 35, 'CSE', 3.77),
('Jason Bourne', 36, 'CSE', 3.77),
('Jason Bourne', 37, 'CSE', 3.77),
('Jason Bourne', 38, 'CSE', 3.77),
('Jason Bourne', 39, 'CSE', 3.77),
('Jason Bourne', 40, 'CSE', 3.77),
('Jason Bourne', 41, 'CSE', 3.77),
('Jason Bourne', 42, 'CSE', 3.77),
('Jason Bourne', 43, 'CSE', 3.77),
('Jason Bourne', 44, 'CSE', 3.77),
('Jason Bourne', 45, 'CSE', 3.77),
('Jason Bourne', 46, 'CSE', 3.77),
('Jason Bourne', 47, 'CSE', 3.77),
('Jason Bourne', 48, 'CSE', 3.77),
('Jason Bourne', 49, 'CSE', 3.77),
('Jason Bourne', 50, 'CSE', 3.77),
('Jason Bourne', 51, 'CSE', 3.77),
('Jason Bourne', 52, 'CSE', 3.77),
('Jason Bourne', 53, 'CSE', 3.77),
('Jason Bourne', 54, 'CSE', 3.77),
('Jason Bourne', 55, 'CSE', 3.77),
('Jason Bourne', 56, 'CSE', 3.77),
('Jason Bourne', 57, 'CSE', 3.77),
('Jason Bourne', 58, 'CSE', 3.77),
('Jason Bourne', 59, 'CSE', 3.77),
('Jason Bourne', 60, 'CSE', 3.77),
('Jason Bourne', 61, 'CSE', 3.77),
('Jason Bourne', 62, 'CSE', 3.77),
('Jason Bourne', 63, 'CSE', 3.77),
('Jason Bourne', 64, 'CSE', 3.77),
('Jason Bourne', 65, 'CSE', 3.77),
('Jason Bourne', 66, 'CSE', 3.77),
('Jason Bourne', 67, 'CSE', 3.77),
('Jason Bourne', 68, 'CSE', 3.77),
('Jason Bourne', 69, 'CSE', 3.77),
('Jason Bourne', 70, 'CSE', 3.77),
('Jason Bourne', 71, 'CSE', 3.77),
('Jason Bourne', 72, 'CSE', 3.77),
('Jason Bourne', 73, 'CSE', 3.77);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(66) NOT NULL,
  `ID` int(6) NOT NULL,
  `Username` varchar(66) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Photo` varchar(66) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `marks` float NOT NULL DEFAULT 0,
  `library_details` varchar(1000) NOT NULL DEFAULT 'Books Issued',
  `health_details` varchar(1000) NOT NULL DEFAULT 'Well',
  `attendance` varchar(1000) NOT NULL DEFAULT '90%',
  `scholar` varchar(1000) NOT NULL DEFAULT '1',
  `physics` float(10,2) NOT NULL DEFAULT 50.00,
  `chemistry` float(10,2) NOT NULL DEFAULT 50.00,
  `maths` float(10,2) NOT NULL DEFAULT 50.00,
  `english` float(10,2) NOT NULL DEFAULT 50.00,
  `gender` varchar(1000) NOT NULL DEFAULT 'Male',
  `dob` varchar(1000) DEFAULT NULL,
  `class` int(10) NOT NULL DEFAULT 11
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `ID`, `Username`, `Email`, `Password`, `Phone`, `Photo`, `Time`, `marks`, `library_details`, `health_details`, `attendance`, `scholar`, `physics`, `chemistry`, `maths`, `english`, `gender`, `dob`, `class`) VALUES
('Kane Harry Kane', 16, 'harry', 'harry@gmail.com', 'harry', 868686, 'inception_french.jpg', '2020-05-16 08:02:58', 0, '2 books issued', '', '', '1', 50.00, 50.00, 50.00, 50.00, 'Male', '1996-06-14', 11),
('Kane Malan', 17, 'k@mail', 'big@gmail.com', '$2y$10$gMD', 93843, '20150503_124150.jpg', '2020-05-16 08:13:46', 0, '3 books issued', '', '', 'Scholar', 50.00, 50.00, 50.00, 50.00, 'Male', '1996-06-14', 11),
('Son Heung-min', 19, 'son', 'json@mail', 'son', 9, '940777848.jpg', '2020-05-19 11:18:58', 0, '4 books issued', '', '', '3', 50.00, 50.00, 50.00, 50.00, 'Male', '1996-06-14', 11),
('Jason', 21, 'admin2@gmail.com', 'sohaankane@gmail.com', '$2y$10$lgn', 6556565, '100572672_1710047265814016_5340255889376935936_n.jpg', '2022-05-09 14:52:01', 0, '5 books issued', 'good', '87%', '4', 50.00, 50.00, 50.00, 50.00, 'Male', '1996-06-14', 11),
('Dentalsttththyt', 22, 'admin@gmail.com', 'sohaankaness@gmail.com', '$2y$10$liu', 4444444, '2010 inception wide.jpg', '2022-05-09 14:55:09', 0, '7 books issued', 'good', '87%', '5', 50.78, 45.00, 26.00, 76.00, 'Male', '1996-06-14', 11),
('Jasons', 24, 'harrys@gmail.com', 'sohaankanesss@gmail.com', '$2y$10$zIt', 655656, '101015496_1710047039147372_6043370983811710976_n.jpg', '2022-05-10 11:58:47', 0, 'Books Issued', 'Well', '90%', 'Scholar', 50.00, 50.00, 50.00, 50.00, 'Male', '1996-06-14', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Book_Name`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `print_students`
--
ALTER TABLE `print_students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `librarians`
--
ALTER TABLE `librarians`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `print_students`
--
ALTER TABLE `print_students`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
