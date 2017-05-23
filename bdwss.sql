-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2013 at 11:14 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdwss`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `Bill_Number` int(11) NOT NULL AUTO_INCREMENT,
  `Reading_Date` date NOT NULL,
  `Employee_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Previous_Read` float NOT NULL,
  `Current_Read` float NOT NULL,
  `Consumtion` float NOT NULL,
  `Tax` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`Bill_Number`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_Number`, `Reading_Date`, `Employee_ID`, `Customer_ID`, `First_Name`, `Last_Name`, `Previous_Read`, `Current_Read`, `Consumtion`, `Tax`, `Total`) VALUES
(12, '2013-06-23', '777', '212', 'Alebel', 'Demssie', 5, 23, 18, 87.3, 174.6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bill_value`
--
CREATE TABLE IF NOT EXISTS `bill_value` (
`Customer_ID` varchar(30)
,`Reading_Date` date
,`Previous_Read` float
,`Current_Read` float
,`Usage_Charge` float
,`Tax` float
,`Total` float
);
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Kebele` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `House_Number` int(11) NOT NULL,
  `Photo` blob NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `First_Name`, `Last_Name`, `Gender`, `Age`, `Kebele`, `Phone_Number`, `House_Number`, `Photo`) VALUES
('121', 'Moges', 'Akele', 'M', 36, 10, 582203412, 8311, 0x323031322d31312d32392031302e31322e34382e6a7067),
('1231', 'Birhanu', 'Shimelis', 'M', 35, 8, 582201321, 3212, 0x64652e6a7067),
('212', 'Alebel', 'Demssie', 'M', 30, 8, 582265731, 2341, 0x323031322d31312d32392031302e31372e31302e6a7067),
('234', 'Efrata', 'Gashaw', 'F', 20, 11, 913265487, 321, 0x642e6a7067),
('434', 'Danna', 'Liben', 'F', 45, 11, 582265743, 342, ''),
('R/123', 'Abubeker', 'Yimam', 'M', 33, 1, 582208453, 123, 0x64642e6a7067),
('R/222', 'Birhanu', 'Shimelis', 'M', 23, 1, 582268453, 321, 0x627265692e6a7067),
('R/223', 'Yetnayet', 'lul', 'F', 33, 8, 582266453, 3321, 0x6465652e6a7067),
('R/321', 'Girma', 'Fetene', 'M', 24, 2, 582228422, 322, 0x6464652e6a7067),
('R/333', 'Sintayehu', 'Mekonen', 'M', 25, 10, 582268433, 2122, 0x6473652e6a7067),
('R/44', 'yonas', 'Alachew', 'M', 26, 11, 582218453, 822, 0x61712e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `customer_meter_read`
--

CREATE TABLE IF NOT EXISTS `customer_meter_read` (
  `Reading_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` varchar(30) NOT NULL,
  `Current_Read` int(11) NOT NULL,
  `Meter_Size` float NOT NULL,
  `Meter_Number` int(11) NOT NULL,
  PRIMARY KEY (`Reading_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer_meter_read`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer_user`
--

CREATE TABLE IF NOT EXISTS `customer_user` (
  `Customer_ID` varchar(30) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Re_Type_Password` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Name`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `debitt`
--

CREATE TABLE IF NOT EXISTS `debitt` (
  `Employee_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `Reading_Date` date NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Previous_Read` float NOT NULL,
  `Curent_Read` float NOT NULL,
  `Consumtion` float NOT NULL,
  `Tax` float NOT NULL,
  `Total` float NOT NULL,
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Employee_ID` (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debitt`
--

INSERT INTO `debitt` (`Employee_ID`, `Customer_ID`, `Reading_Date`, `FirstName`, `Last_name`, `Previous_Read`, `Curent_Read`, `Consumtion`, `Tax`, `Total`) VALUES
('777', '1231 ', '2013-06-23', 'Birhanu ', 'Shimelis ', 9, 18, 9, 32.9, 65.8),
('777', '1231 ', '2013-06-23', 'Birhanu ', 'Shimelis ', 9, 18, 9, 32.9, 65.8),
('777', '1231 ', '2013-06-23', 'Birhanu ', 'Shimelis ', 9, 18, 9, 32.9, 65.8),
('777', 'R/223 ', '2013-06-23', 'Yetnayet ', 'lul ', 12, 23, 11, 44.6, 89.2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_ID` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Office_Number` int(11) NOT NULL,
  `Tel_Number` int(11) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `First_Name`, `Last_Name`, `Gender`, `Age`, `Position`, `Office_Number`, `Tel_Number`) VALUES
('111', 'Mekonen', 'Belachew', 'M', 34, 'Accountant2', 12, 923432312),
('333', 'Selam', 'Alachew', 'F', 35, 'Bill Officer', 14, 911432321),
('422', 'Dejen', 'Agaziu', 'M', 23, 'Technican', 23, 582203453),
('444', 'Mamo', 'Bedilu', 'M', 45, 'Meter Reader', 11, 912433312),
('555', 'Eshete', 'Aligaz', 'M', 44, 'Technician Mainten', 22, 922432333),
('777', 'Fozia', 'Muhammed', 'F', 29, 'Accountant1', 23, 921432312);

-- --------------------------------------------------------

--
-- Table structure for table `employee_maintenance_report`
--

CREATE TABLE IF NOT EXISTS `employee_maintenance_report` (
  `Report_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `Report_Date` date NOT NULL,
  `Maintanance_Type` varchar(300) NOT NULL,
  PRIMARY KEY (`Report_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_maintenance_report`
--

INSERT INTO `employee_maintenance_report` (`Report_ID`, `Employee_ID`, `Customer_ID`, `Report_Date`, `Maintanance_Type`) VALUES
(1, '555', '434', '2013-06-24', 'Valve and pipe repllacement'),
(2, '555', '234', '2013-06-21', 'pipe rejection'),
(4, '555 ', '434  ', '2013-06-24', 'uiuo '),
(5, '555 ', '434  ', '2013-06-24', 'hfd '),
(6, '555 ', '434  ', '2013-06-24', 'pipe broken and valve ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_meter_reading_data`
--

CREATE TABLE IF NOT EXISTS `employee_meter_reading_data` (
  `Employee_Reading_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `Reading_Date` date NOT NULL,
  `Previous_Read` float NOT NULL,
  `Current_Read` float NOT NULL,
  `Meter_Size` float NOT NULL,
  `Meter_Number` int(11) NOT NULL,
  `Consumtion` float NOT NULL,
  `Fixed_Charge` float NOT NULL,
  `Usage_Charge` float NOT NULL,
  `Tax` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`Employee_Reading_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `employee_meter_reading_data`
--

INSERT INTO `employee_meter_reading_data` (`Employee_Reading_ID`, `Employee_ID`, `Customer_ID`, `Reading_Date`, `Previous_Read`, `Current_Read`, `Meter_Size`, `Meter_Number`, `Consumtion`, `Fixed_Charge`, `Usage_Charge`, `Tax`, `Total`) VALUES
(18, '555', '121', '2013-06-23', 55, 24, 0.5, 7, -31, 2, -89.9, -87.9, -175.8),
(23, '444', '1231', '2013-06-23', 9, 18, 0.75, 81, 9, 2, 30.9, 32.9, 65.8),
(25, '444', '212', '2013-06-23', 5, 23, 1, 344, 18, 2, 85.3, 87.3, 174.6),
(26, '444', '234', '2013-06-23', 12, 34, 0.75, 1233, 22, 2, 109.7, 111.7, 223.4),
(27, '444', '434', '2013-06-23', 17, 45, 3, 345, 28, 2, 152.6, 154.6, 309.2),
(29, '444', 'R/123', '2013-06-23', 23, 33, 0.75, 675, 10, 2, 35, 37, 74),
(30, '444', 'R/222', '2013-06-23', 15, 22, 0.75, 5698, 7, 2, 22.7, 24.7, 49.4),
(31, '444', 'R/223', '2013-06-23', 12, 23, 0.75, 4578, 11, 2, 42.6, 44.6, 89.2),
(32, '444', 'R/321', '2013-06-24', 6, 15, 0.5, 36587, 9, 2, 30.9, 32.9, 65.8),
(33, '444', 'R/333', '2013-06-24', 23, 34, 0.5, 675678, 11, 2, 42.6, 44.6, 89.2),
(34, '444', 'R/44', '2013-06-24', 6, 9, 0.5, 78453, 3, 2, 8.7, 10.7, 21.4);

-- --------------------------------------------------------

--
-- Table structure for table `employee_user`
--

CREATE TABLE IF NOT EXISTS `employee_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` varchar(30) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Re_Type_Password` varchar(30) NOT NULL,
  `previllage` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `Employee_ID` (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `employee_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `Maintanance_Number` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` varchar(30) NOT NULL,
  `Maintenance_Date` date NOT NULL,
  `Maintenance_Type` varchar(50) NOT NULL,
  `Approved` varchar(50) NOT NULL,
  PRIMARY KEY (`Maintanance_Number`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`Maintanance_Number`, `Customer_ID`, `Maintenance_Date`, `Maintenance_Type`, `Approved`) VALUES
(1, '434', '2013-06-15', 'pipe broken and valve', ''),
(2, '434', '2013-06-18', 'hfd', ''),
(3, '434', '2013-06-24', 'uiud', 'Yes'),
(8, '234', '2013-06-24', 'Water bulb replacment', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
-- in use(#1356 - View 'bdwss.payment' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `payment`
--
-- in use (#1356 - View 'bdwss.payment' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `report`
--
-- in use(#1356 - View 'bdwss.report' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `report`
--
-- in use (#1356 - View 'bdwss.report' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `technician_assign`
--

CREATE TABLE IF NOT EXISTS `technician_assign` (
  `Assign_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `Assign_Date` date NOT NULL,
  `Maintanance_Type` varchar(250) NOT NULL,
  `Maintenance_Payment` int(11) NOT NULL,
  PRIMARY KEY (`Assign_ID`),
  KEY `Customer_ID` (`Customer_ID`),
  KEY `Employee_ID` (`Employee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `technician_assign`
--

INSERT INTO `technician_assign` (`Assign_ID`, `Employee_ID`, `Customer_ID`, `Assign_Date`, `Maintanance_Type`, `Maintenance_Payment`) VALUES
(2, '111', '434', '2013-06-23', 'hye their is', 20),
(3, '111', '434 ', '2013-06-24', 'pipe broken and valve', 34),
(4, '555', '434 ', '2013-06-24', 'uiuo', 45),
(5, '555', '434 ', '2013-06-24', 'hfd', 56),
(6, '555', '434 ', '2013-06-24', 'pipe broken and valve', 56),
(7, '111', '234 ', '2013-06-24', 'Water bulb replacment', 78);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_ID` varchar(30) DEFAULT NULL,
  `Customer_ID` varchar(30) DEFAULT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Previllage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Employee_ID`, `Customer_ID`, `User_Name`, `Password`, `Previllage`) VALUES
(1, '', '434', 'dana', '1234', ''),
(2, '', '279', 'wubalem', '12345', ''),
(3, '', '234', 'Efrata', '1231', ''),
(6, '422', '', 'dj', '222', 'Technician'),
(7, '333', '', 'selam', '333', 'Bill Officer'),
(8, '111', '', 'mek', '111', 'Accountant2'),
(9, '777', '', 'fozi', '777', 'Accountant1'),
(10, '444', '', 'mamo', '444', 'Meter Reader'),
(11, '555', '', 'eshete', '555', 'Technician Mainten');

-- --------------------------------------------------------

--
-- Structure for view `bill_value`
--
DROP TABLE IF EXISTS `bill_value`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bill_value` AS select `employee_meter_reading_data`.`Customer_ID` AS `Customer_ID`,`employee_meter_reading_data`.`Reading_Date` AS `Reading_Date`,`employee_meter_reading_data`.`Previous_Read` AS `Previous_Read`,`employee_meter_reading_data`.`Current_Read` AS `Current_Read`,`employee_meter_reading_data`.`Usage_Charge` AS `Usage_Charge`,`employee_meter_reading_data`.`Tax` AS `Tax`,`employee_meter_reading_data`.`Total` AS `Total` from `employee_meter_reading_data` WITH CASCADED CHECK OPTION;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_meter_read`
--
ALTER TABLE `customer_meter_read`
  ADD CONSTRAINT `customer_meter_read_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_user`
--
ALTER TABLE `customer_user`
  ADD CONSTRAINT `customer_user_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debitt`
--
ALTER TABLE `debitt`
  ADD CONSTRAINT `debitt_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `debitt_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_maintenance_report`
--
ALTER TABLE `employee_maintenance_report`
  ADD CONSTRAINT `employee_maintenance_report_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_maintenance_report_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_meter_reading_data`
--
ALTER TABLE `employee_meter_reading_data`
  ADD CONSTRAINT `employee_meter_reading_data_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_meter_reading_data_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_user`
--
ALTER TABLE `employee_user`
  ADD CONSTRAINT `employee_user_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technician_assign`
--
ALTER TABLE `technician_assign`
  ADD CONSTRAINT `technician_assign_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `technician_assign_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
