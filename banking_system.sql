-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 11:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Vivek', 'Vimlesh', 100),
('Atharva', 'Dhruv', 50),
('Craig', 'Mohit', 200),
('Sonu', 'Raunak', 100),
('Vaibhav', 'Atif', 110),
('Atif', 'Mohit', 110);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Vivek', 'vivek@gmail.com', 1012),
('Vimlesh', 'vimlesh123@gmail.com', 999),
('Atharva', 'atharva272000@gmail.com', 1020),
('Mohit', '99mohitjain@gmail.com', 1000),
('Craig', 'cc@gmail.com', 1000),
('Dhruv', 'dhruvvs@gmail.com', 2000),
('Sonu', 'sonugupta@gmail.com', 3000),
('Raunak', 'raunakmatharu19@gmail.com', 1250),
('Atif', 'atifkhan@gmail.com', 900),
('Vaibhav', 'vaibhav@gmail.com', 3200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
