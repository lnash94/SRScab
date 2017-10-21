-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 05:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srscabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_Id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `card_No` int(11) NOT NULL,
  `expiry_Date` datetime DEFAULT NULL,
  `name_Oncard` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_Id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `listname` varchar(45) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Customer_credentials_cus_Id` int(11) NOT NULL,
  `Card_details_card_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer1`
--

CREATE TABLE `customer1` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(255) NOT NULL,
  `customer_lname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_nic` varchar(50) NOT NULL,
  `customer_contacte_number` int(15) NOT NULL,
  `customer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer1`
--

INSERT INTO `customer1` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_nic`, `customer_contacte_number`, `customer_password`) VALUES
(1, 'sumudu', 'nissanka', 'sumudu@gmail.com', '94875231V', 717896343, '123'),
(6, '', '', 'jayani@gmail.com', '', 0, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `customer_credintial`
--

CREATE TABLE `customer_credintial` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_credintial`
--

INSERT INTO `customer_credintial` (`customer_id`, `customer_email`, `customer_password`) VALUES
(6, 'jayani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'amal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_Id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `contact_No` varchar(10) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `Reservation_reservation_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_Id` int(11) NOT NULL,
  `total_Amount` varchar(45) DEFAULT NULL,
  `paid_Bycash` varchar(45) DEFAULT NULL,
  `Card_details_card_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_No` int(11) NOT NULL,
  `start_Date` datetime DEFAULT NULL,
  `end_Date` datetime DEFAULT NULL,
  `pickup_Location` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `Customer_customer_Id` int(11) NOT NULL,
  `Customer_Customer_credentials_cus_Id` int(11) NOT NULL,
  `Customer_Card_details_card_No` int(11) NOT NULL,
  `Vehicle_L_No` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `L_No` varchar(8) NOT NULL,
  `model` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `No_seats` int(2) NOT NULL,
  `details` varchar(45) DEFAULT NULL,
  `imageLink` varchar(100) NOT NULL,
  `with_driver` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`L_No`, `model`, `brand`, `type`, `No_seats`, `details`, `imageLink`, `with_driver`) VALUES
('21-7654', 'dff', 'Honda', '4wd', 0, 'fd', '21687062_1120722374726198_3519180945315135035_o.jpg', 'False'),
('256-3466', 'd21', 'Nissan', '4wd', 5, 'A/C,Power,CD', '20728150_1420643884638912_1060001645389039003_n.jpg', 'false'),
('32-1221', 'rer', 'Audi', 'Genaral', 0, 're', '22050038_1573786605975757_3602157311041492115_n.jpg', 'True'),
('dce-2134', 'ff', 'Audi', 'Genaral', 0, 'f', 'empty.png', 'True');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`card_No`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_Id`,`Customer_credentials_cus_Id`,`Card_details_card_No`);

--
-- Indexes for table `customer1`
--
ALTER TABLE `customer1`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_credintial`
--
ALTER TABLE `customer_credintial`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_Id`),
  ADD KEY `fk_Driver_Reservation1_idx` (`Reservation_reservation_No`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_Id`),
  ADD KEY `fk_Payment_Card_details1_idx` (`Card_details_card_No`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_No`),
  ADD KEY `fk_Reservation_Customer1_idx` (`Customer_customer_Id`,`Customer_Customer_credentials_cus_Id`,`Customer_Card_details_card_No`),
  ADD KEY `fk_Reservation_Vehicle1_idx` (`Vehicle_L_No`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`L_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer1`
--
ALTER TABLE `customer1`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer_credintial`
--
ALTER TABLE `customer_credintial`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `fk_Driver_Admin1` FOREIGN KEY (`driver_Id`) REFERENCES `admin` (`admin_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Driver_Reservation1` FOREIGN KEY (`Reservation_reservation_No`) REFERENCES `reservation` (`reservation_No`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_Payment_Card_details1` FOREIGN KEY (`Card_details_card_No`) REFERENCES `card_details` (`card_No`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_Reservation_Customer1` FOREIGN KEY (`Customer_customer_Id`,`Customer_Customer_credentials_cus_Id`,`Customer_Card_details_card_No`) REFERENCES `customer` (`customer_Id`, `Customer_credentials_cus_Id`, `Card_details_card_No`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
