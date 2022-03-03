-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2021 at 05:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chanel_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `newemp`
--

DROP TABLE IF EXISTS `newemp`;
CREATE TABLE IF NOT EXISTS `newemp` (
  `empID` int(6) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `civStat` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qDepStat` varchar(50) NOT NULL,
  `empStat` varchar(50) NOT NULL,
  `paydate` date NOT NULL,
  `empNo` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `socmed` varchar(50) NOT NULL,
  `socmedID` varchar(50) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(50) NOT NULL,
  `cityMun` varchar(50) NOT NULL,
  `stateprov` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newemp`
--

INSERT INTO `newemp` (`empID`, `fname`, `mname`, `lname`, `suffix`, `birthday`, `gender`, `nationality`, `civStat`, `dept`, `designation`, `qDepStat`, `empStat`, `paydate`, `empNo`, `contact`, `email`, `socmed`, `socmedID`, `add1`, `add2`, `cityMun`, `stateprov`, `country`, `zipcode`) VALUES
(6, 'Seunghyun', 'Park', 'Choi', '', '1982-11-24', 'female', 'korean', 'married', 'kpop', 'cs', 'head', 'Regular', '2021-06-29', '1235', '0987654', 'choiseunghyun@yahoo.com', 'fb', 'seunghyun/0909090', 'blk4 lt5 ', 'santolan st', 'manila', 'citty', 'ph', '12002'),
(5, 'Ethyl ', 'al', 'cohol', '-', '2021-05-05', 'female', 'American', 'single', 'Antiseptic', 'cs', 'head', 'contractual', '2021-05-26', '1233', '0990999', 'ethylalcohol@gmail.com', 'fb', '1112222433', '1234 Sampaloc ', 'Street', 'Manila', '-', 'ph', '12345'),
(3, 'Taylor ', '-', 'Swift', '-', '1990-12-13', 'female', 'American', 'single', 'Music', 'cs', 'manager', 'Regular', '2021-05-31', '1232', '098767545', 'taylorswift@gmail.com', 'IG', '88997765', '1214 hollywood street', 'swifitie road', 'Bacoor', 'california', 'france', '12345'),
(8, 'Rose', 'Rose', 'Park', '', '2021-06-09', 'female', 'korean', 'single', 'kpop', 'it', 'assistant', 'Regular', '2021-06-28', '1237', '0990909', 'rosepark@yahoo.com', 'Twitter', 'rosepark/0908089', 'blk4 lt 5', 'perpetual village', 'bacoor', 'cavite', 'ph', '12002'),
(7, 'San', 'dara', 'park', '', '1991-11-12', 'female', 'korean', 'married', 'kpop', 'cs', 'assistant', 'Regular', '2021-06-28', '1236', '0908979889', 'sandarapark@gmail.com', 'Twitter', 'sandara/87654', 'blk10 lt9', 'meadowood st', 'bacoor', 'cavite', 'ph', '41012');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

DROP TABLE IF EXISTS `payroll`;
CREATE TABLE IF NOT EXISTS `payroll` (
  `payrol_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `civilstat` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `dependents_no` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `employeestat` varchar(50) NOT NULL,
  `b_rate_hr` double NOT NULL,
  `b_num_hrs` double NOT NULL,
  `b_income` double NOT NULL,
  `h_rate_hr` double NOT NULL,
  `h_num_hrs` double NOT NULL,
  `h_income` double NOT NULL,
  `o_rate_hr` double NOT NULL,
  `o_num_hrs` double NOT NULL,
  `o_income` double NOT NULL,
  `gross_income` double NOT NULL,
  `net_income` double NOT NULL,
  `sss_contrib` double NOT NULL,
  `ph_contrib` double NOT NULL,
  `pagibig_contrib` double NOT NULL,
  `sss_loan` double NOT NULL,
  `pagibig_loan` double NOT NULL,
  `fs_deposit` double NOT NULL,
  `fs_loan` double NOT NULL,
  `salary_loan` int(11) NOT NULL,
  `other_loan` int(11) NOT NULL,
  `total_deduct` int(11) NOT NULL,
  `payroll_date` date NOT NULL,
  PRIMARY KEY (`payrol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payrol_id`, `employee_no`, `fname`, `mname`, `sname`, `civilstat`, `designation`, `dependents_no`, `dept`, `employeestat`, `b_rate_hr`, `b_num_hrs`, `b_income`, `h_rate_hr`, `h_num_hrs`, `h_income`, `o_rate_hr`, `o_num_hrs`, `o_income`, `gross_income`, `net_income`, `sss_contrib`, `ph_contrib`, `pagibig_contrib`, `sss_loan`, `pagibig_loan`, `fs_deposit`, `fs_loan`, `salary_loan`, `other_loan`, `total_deduct`, `payroll_date`) VALUES
(1, '1233', 'Ethyl', 'al', 'cohol', 'single', 'cs', 'S3 or ME3', 'Antiseptic', 'contractual', 300, 2, 600, 300, 5, 1500, 400, 3, 1200, 3300, 3131, 530, 115.5, 100, 10, 23, 21, 45, 3, 67, 169, '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `pos1`
--

DROP TABLE IF EXISTS `pos1`;
CREATE TABLE IF NOT EXISTS `pos1` (
  `pos1_id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount_amt` double NOT NULL,
  `discounted_amt` double NOT NULL,
  `cash_given` double DEFAULT NULL,
  `customer_change` double DEFAULT NULL,
  PRIMARY KEY (`pos1_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pos1`
--

INSERT INTO `pos1` (`pos1_id`, `Item_Name`, `price`, `quantity`, `discount_amt`, `discounted_amt`, `cash_given`, `customer_change`) VALUES
(14, 'Chanel Quilted Gabrielle Backpack', 5145, 2, 567, 4578, 22000, 202),
(13, 'Chanel Classic Double Flap Bag', 6210, 2, 345, 5865, NULL, NULL),
(12, 'Chanel ClutchStrass Plexiglass', 4020, 3, 999, 3021, 12000, 939),
(7, 'Chanel Wallet on Chain Chevron Caviar', 3030, 12, 1000, 2030, 40000, 1620),
(8, 'Chanel Wallet on Chain Chevron Caviar', 3030, 12, 1000, 2030, 40000, 4640),
(9, 'Chanel Wallet on Chain Chevron Caviar', 3030, 12, 1000, 2030, 40000, 4640),
(10, 'Chanel Wallet on Chain Chevron Caviar', 3030, 12, 1000, 2030, 40000, 4640),
(11, 'Chanel Evening Bag No.5 Perfume Bottle', 10800, 2, 1000, 9800, 23000, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `pos2`
--

DROP TABLE IF EXISTS `pos2`;
CREATE TABLE IF NOT EXISTS `pos2` (
  `pos2_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount_amt` double NOT NULL,
  `discounted_amt` double NOT NULL,
  `total_qty` int(11) DEFAULT NULL,
  `total_disc` double DEFAULT NULL,
  `total_discd` double DEFAULT NULL,
  `cash_given` double DEFAULT NULL,
  `cus_change` double DEFAULT NULL,
  PRIMARY KEY (`pos2_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pos2`
--

INSERT INTO `pos2` (`pos2_id`, `item_name`, `price`, `qty`, `discount_amt`, `discounted_amt`, `total_qty`, `total_disc`, `total_discd`, `cash_given`, `cus_change`) VALUES
(10, 'Chanel ClutchStrass Plexiglass', 4020, 2, 1608, 6432, 2, 1608, 6432, NULL, NULL),
(9, 'Chanel Wallet on Chain Chevron Caviar', 3030, 12, 7272, 29088, 12, 7272, 29088, NULL, NULL),
(8, 'Chanel Evening Bag No.5 Perfume Bottle', 10800, 2, 2160, 19440, 2, 2160, 19440, 20000, 560),
(7, 'Chanel Camera Case Bag Quilted Lambskin', 3235, 12, 3882, 34938, 12, 3882, 34938, 35000, 62),
(11, 'ClassicDouble FlapBag QuiltedLambskin', 4350, 2, 870, 7830, 2, 870, 7830, NULL, NULL),
(12, 'Chanel Reissue 2.55 FlapBag', 6815, 12, 16356, 65424, 12, 16356, 65424, 80000, 314);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `employeeNum` int(11) NOT NULL,
  `employeeName` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmPass` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `user_stat` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`userID`, `employeeNum`, `employeeName`, `designation`, `dept`, `username`, `password`, `confirmPass`, `usertype`, `user_stat`) VALUES
(1, 1233, 'Ethyl al cohol', 'cs', 'Antiseptic', 'admin', 'admin', 'admin', 'admin', 'active'),
(3, 1232, 'Taylor Swift', 'it', 'employeedept', 'cashier1', 'cashier1', 'cashier1', 'cashier1', 'active'),
(5, 1235, 'Choi Seunghyun', 'cs', 'kpop', 'accountant', 'accountant', 'accountant', 'accountant', 'active'),
(6, 1236, 'San Dara Park', 'cs', 'kpop', 'cashier2', 'cashier2', 'cashier2', 'cashier2', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
