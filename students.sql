-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 11:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `email`, `birthday`) VALUES
(1, 'test', 'test', 'test@first.ts', '1970-01-01'),
(2, 'zak', '123', 'zak@email.com', '2001-12-08'),
(3, 'amine', '0000', 'bham@email.net', '1999-09-23'),
(4, 'bicho', 'bil111', 'billchantes@email.co', '1997-10-05'),
(5, 'med99', 'azerty', 'medox@hotmail.fr', '1999-06-22'),
(8, 'brave', 'giveup2020', 'motiv.brav@gmx.com', '1996-07-13'),
(12, 'ziko', 'zaraki', 'zakaziko@gmail.com', '2001-02-10'),
(13, 'admin', 'admin', 'admin@google.com', '1990-01-11'),
(18, 'yahya', '$2y$10$J0e3BWdAOY9XVEVkcwpF/.Hj0sq5mTe2I1/E73nNL.z', 'yhyh@live.fr', '2004-11-12'),
(20, 'killua', '$2y$10$F2UOPBGuB6zM.uy7MtiG5.DEjcKfxgJ9oymh847uv8W', 'zoldic@cable.net', '2004-12-30'),
(21, 'aa', '$2y$10$6xtP2hvGnyFDeG2haNUHauxe0MXsHbO0C6Cq1t3Cf/2', 'a@aaa.com', '2004-12-27'),
(24, 'hola', 'hola', 'holo@espada.es', '2004-12-30'),
(28, 'solicode', '123', 'sadizak9810@gmail.com', '2004-12-30'),
(29, 'mohamed', '123', 'mohamed@hotmail.com', '1999-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
