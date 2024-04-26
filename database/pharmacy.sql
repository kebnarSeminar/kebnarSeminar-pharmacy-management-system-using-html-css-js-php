-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 08:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33



--
--Create database 'pharmacy'`
--
CREATE Database pharmacy;

----------------------------
CREATE TABLE `admin` (
  `user_name` varchar(50) COLLATE utf16_bin NOT NULL,
  `password` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

-- 
   CREATE TABLE `login` (
  `username` varchar(50) COLLATE utf16_bin NOT NULL,
  `password` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `contact_number` varchar(10) COLLATE utf16_bin NOT NULL,
  `address` varchar(100) COLLATE utf16_bin NOT NULL,
  `doctor_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `doctor_address` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` ( `customer_name`, `contact_number`, `address`, `doctor_name`, `doctor_address`) VALUES
( 'Kiran Suthar', '0934567690', 'Andheri East', 'Anshari', 'Andheri East'),
( 'Aditya', '0965687269', 'Virar West', 'Xyz', 'Virar West'),
( 'Shivam Tiwari', '0962369896', 'Dadar West', 'Dr Kapoor', 'Dadar East'),
( 'Varsha Suthar', '0922369694', 'Rani Station', 'Dr Ramesh', 'Rani Station'),
( 'Prakash Bhattarai', '0902851472', 'Pokhara-16, Dhikidada', 'Hari Bahadur', 'Matepani-12');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_name`varchar(20) COLLATE utf16_bin NOT NULL,
  `packing` double varchar(20) COLLATE utf16_bin NOT NULL,
  `generic_name` varchar(20) COLLATE utf16_bin NOT NULL,
  `supplier_name` varchar(20) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-

-- --------------------------------------------------------


-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_name` varchar(100) COLLATE utf16_bin NOT NULL,
  `email` varchar(100) COLLATE utf16_bin NOT NULL,
  `phone` varchar(10) COLLATE utf16_bin NOT NULL,
  `address` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;


CREATE TABLE `pharmadetails` (
  `PHARMANAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(10) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(100) COLLATE utf16_bin NOT NULL,
  `USERNAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `PASSWORD` varchar(100) COLLATE utf16_bin NOT NULL,
  `CONFIRM_PASSWORD` varchar(10) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

