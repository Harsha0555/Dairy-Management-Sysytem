-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 07:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `butter`
--

CREATE TABLE `butter` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Butter_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `butter`
--

INSERT INTO `butter` (`id`, `Customer_name`, `Butter_quantity`, `price`) VALUES
(1, 'egg', 2, 56),
(2, 'bob', 2, 56),
(2, 'bob', 2, 56),
(7, 'harsha', 2, 56),
(7, 'harsha', 1, 350);

-- --------------------------------------------------------

--
-- Table structure for table `cheese`
--

CREATE TABLE `cheese` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Cheese_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cheese`
--

INSERT INTO `cheese` (`id`, `Customer_name`, `Cheese_quantity`, `price`) VALUES
(1, 'egg', 3, 84),
(2, 'bob', 3, 84),
(7, 'harsha', 3, 84),
(7, 'harsha', 1, 450);

-- --------------------------------------------------------

--
-- Table structure for table `curd`
--

CREATE TABLE `curd` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Curd_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curd`
--

INSERT INTO `curd` (`id`, `Customer_name`, `Curd_quantity`, `price`) VALUES
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `cust_details`
--

CREATE TABLE `cust_details` (
  `id` int(5) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `totalamount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_details`
--

INSERT INTO `cust_details` (`id`, `fname`, `lname`, `phonenumber`, `address`, `totalamount`) VALUES
(1, 'harsha', 'r', 1234, 'bangalore', 1708),
(2, 'bob', 'b', 54321, 'delhi', 1148),
(7, 'harsha', 'o', 54321, 'assam', 4068);

-- --------------------------------------------------------

--
-- Table structure for table `egg`
--

CREATE TABLE `egg` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Egg_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `egg`
--

INSERT INTO `egg` (`id`, `Customer_name`, `Egg_quantity`, `price`) VALUES
(7, 'harsha', 15, 420),
(7, 'harsha', 15, 420),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `ghee`
--

CREATE TABLE `ghee` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Ghee_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ghee`
--

INSERT INTO `ghee` (`id`, `Customer_name`, `Ghee_quantity`, `price`) VALUES
(7, 'harsha', 3, 84),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `Date`) VALUES
('Harsh', '202cb962ac59075b964b07152d234b70', '2023-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `id` int(2) NOT NULL,
  `Customer_name` varchar(15) NOT NULL,
  `Milk_quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`id`, `Customer_name`, `Milk_quantity`, `price`) VALUES
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28),
(7, 'harsha', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `Date`) VALUES
('Harsh', 'ha@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-01-22'),
('admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2023-01-22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
