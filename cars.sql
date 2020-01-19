-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2018 at 04:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_manufacturers`
--

CREATE TABLE `car_manufacturers` (
  `manufacturer_Code` varchar(20) NOT NULL,
  `manufacturer_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_manufacturers`
--

INSERT INTO `car_manufacturers` (`manufacturer_Code`, `manufacturer_Name`) VALUES
('BMW', 'BMW'),
('F', 'Ford'),
('H', 'Honda'),
('T', 'Toyota'),
('VW', 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `model_Code` varchar(20) NOT NULL,
  `manufacturer_Code` varchar(20) NOT NULL,
  `model_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_models`
--

INSERT INTO `car_models` (`model_Code`, `manufacturer_Code`, `model_Name`) VALUES
('C2009', 'H', 'Civic'),
('E60', 'BMW', 'Series 5'),
('F150', 'F', 'F-150'),
('T2', 'VW', 'Type 2 Bus'),
('XV40', 'T', 'Camry');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_fName` text NOT NULL,
  `customer_lname` text NOT NULL,
  `sale_ID` int(11) NOT NULL,
  `customer_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_fName`, `customer_lname`, `sale_ID`, `customer_ID`) VALUES
('Billy', 'Bob', 3, 'C001'),
('William', 'Benezech', 5, 'C002'),
('Poly', 'Khammany', 7, 'C003'),
('James', 'Joe', 9, 'C004'),
('Jill', 'Jackson', 10, 'C005');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_fName` text NOT NULL,
  `emp_lName` text NOT NULL,
  `num_Sales` int(11) NOT NULL,
  `sales_Amount` int(11) NOT NULL,
  `emp_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_fName`, `emp_lName`, `num_Sales`, `sales_Amount`, `emp_ID`) VALUES
('John', 'Doe', 2, 12500, 'E001'),
('Jane', 'Doe', 2, 20000, 'E002'),
('Rick', 'Grimes', 1, 9500, 'E003');

-- --------------------------------------------------------

--
-- Table structure for table `for_sale`
--

CREATE TABLE `for_sale` (
  `sale_ID` int(11) NOT NULL,
  `model_Code` varchar(20) NOT NULL,
  `manufacturer_Code` varchar(20) NOT NULL,
  `car_Mileage` int(11) NOT NULL,
  `sale_Price` int(11) NOT NULL,
  `model_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `for_sale`
--

INSERT INTO `for_sale` (`sale_ID`, `model_Code`, `manufacturer_Code`, `car_Mileage`, `sale_Price`, `model_Year`) VALUES
(1, 'E60', 'BMW', 155000, 10000, 2007),
(2, 'F150', 'F', 120000, 15000, 2011),
(4, 'T2', 'VW', 160000, 14000, 1979),
(6, 'F150', 'F', 115000, 11000, 2009),
(8, 'C2009', 'H', 105000, 6200, 2008);

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `sale_ID` int(11) NOT NULL,
  `model_Code` varchar(20) NOT NULL,
  `manufacturer_Code` varchar(20) NOT NULL,
  `car_Mileage` int(11) NOT NULL,
  `sale_Price` int(11) NOT NULL,
  `model_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`sale_ID`, `model_Code`, `manufacturer_Code`, `car_Mileage`, `sale_Price`, `model_Year`) VALUES
(3, 'XV40', 'T', 110000, 6000, 2006),
(5, 'C2009', 'H', 85000, 6500, 2009),
(7, 'XV40', 'T', 80000, 9000, 2007),
(9, 'E60', 'BMW', 90000, 11000, 2006),
(10, 'C2009', 'H', 70000, 9500, 2009);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_manufacturers`
--
ALTER TABLE `car_manufacturers`
  ADD PRIMARY KEY (`manufacturer_Code`);

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`model_Code`),
  ADD KEY `manufacturer_Code` (`manufacturer_Code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_ID`),
  ADD KEY `customers_ibfk_1` (`sale_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `for_sale`
--
ALTER TABLE `for_sale`
  ADD PRIMARY KEY (`sale_ID`),
  ADD KEY `model_Code` (`model_Code`),
  ADD KEY `manufacturer_Code` (`manufacturer_Code`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`sale_ID`),
  ADD KEY `model_Code` (`model_Code`),
  ADD KEY `manufacturer_Code` (`manufacturer_Code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_models`
--
ALTER TABLE `car_models`
  ADD CONSTRAINT `car_models_ibfk_1` FOREIGN KEY (`manufacturer_Code`) REFERENCES `car_manufacturers` (`manufacturer_Code`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`sale_ID`) REFERENCES `sold` (`sale_ID`);

--
-- Constraints for table `for_sale`
--
ALTER TABLE `for_sale`
  ADD CONSTRAINT `for_sale_ibfk_1` FOREIGN KEY (`model_Code`) REFERENCES `car_models` (`model_Code`),
  ADD CONSTRAINT `for_sale_ibfk_2` FOREIGN KEY (`manufacturer_Code`) REFERENCES `car_manufacturers` (`manufacturer_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
