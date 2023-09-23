-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 10:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `acc_no` int(11) NOT NULL DEFAULT '0',
  `branch_name` varchar(20) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`acc_no`),
  KEY `afk` (`branch_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `branch_name`, `balance`) VALUES
(1234, 'mainbranch', 2500),
(1345, 'mainbranch', 1500),
(2233, 'citybranch', 2500),
(2345, 'citybranch', 1500),
(4567, 'pesitmbranch', 4000),
(5555, 'gbbr', 1000),
(5678, 'pgbranch', 2000),
(6666, 'gbbr', 5000),
(6789, 'jcrbranch', 2500),
(9876, 'mainbranch', 5000);

--
-- Triggers `account`
--
DROP TRIGGER IF EXISTS `transactionlog`;
DELIMITER //
CREATE TRIGGER `transactionlog` AFTER UPDATE ON `account`
 FOR EACH ROW insert into logs values(null,OLD.acc_no,OLD.balance,NEW.balance,CURDATE(),CURTIME())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account1`
--

CREATE TABLE IF NOT EXISTS `account1` (
  `acn` int(11) DEFAULT NULL,
  `obalance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account1`
--

INSERT INTO `account1` (`acn`, `obalance`) VALUES
(1, 1000),
(2, 1000),
(7, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE IF NOT EXISTS `borrower` (
  `cust_name` varchar(15) NOT NULL DEFAULT '',
  `loan_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cust_name`,`loan_no`),
  KEY `bwfk2` (`loan_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`cust_name`, `loan_no`) VALUES
('nagaraj', 1111),
('raghu', 2222),
('kumar', 3333),
('venu', 4444),
('suma', 5555),
('Rahul', 8888),
('Mohan', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_name` varchar(20) NOT NULL DEFAULT '',
  `branch_city` varchar(20) NOT NULL,
  `assets` int(11) DEFAULT NULL,
  PRIMARY KEY (`branch_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_name`, `branch_city`, `assets`) VALUES
('citybranch', 'chitradurga', 80000),
('gbbr', 'bellary', 150000),
('jcrbranch', 'chitradurga', 75000),
('Lena', 'Dena City', 500000),
('mainbranch', 'Bangalore', 160000),
('pesitmbranch', 'shimoga', 60000),
('pgbranch', 'davanagere', 100000),
('StateBranch', 'Shivamogaa', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_name` varchar(15) NOT NULL DEFAULT '',
  `cust_street` varchar(15) DEFAULT NULL,
  `cust_city` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cust_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_name`, `cust_street`, `cust_city`) VALUES
('', '', ''),
('kumar', 'pg extension', 'davangere'),
('Madhavan', 'Yerawada', 'Chennai'),
('Mohan', 'Dalal Street', 'Patna'),
('nagaraj', 'jcr extension', 'chitradurga'),
('raghu', 'kb extension', 'chitradurga'),
('Rahul', 'BB Street', 'Shivamogga'),
('Raj', 'Bandra', 'Mumbai'),
('sharma', 'mg road', 'bangalore'),
('suma', 'kelagote', 'chitradurga'),
('venu', 'gandhi bazar', 'bellary');

-- --------------------------------------------------------

--
-- Table structure for table `depositor`
--

CREATE TABLE IF NOT EXISTS `depositor` (
  `cust_name` varchar(15) NOT NULL DEFAULT '',
  `acc_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cust_name`,`acc_no`),
  KEY `dfk2` (`acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

INSERT INTO `depositor` (`cust_name`, `acc_no`) VALUES
('nagaraj', 1345),
('Rahul', 2233),
('raghu', 2345),
('raghu', 4567),
('Mohan', 5555),
('kumar', 5678),
('Raj', 6666),
('raghu', 6789),
('kumar', 9876);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_no` int(11) NOT NULL DEFAULT '0',
  `branch_name` varchar(15) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_no`, `branch_name`, `amount`) VALUES
(1111, 'mainbranch', 5000),
(2222, 'citybranch', 15000),
(3333, 'pgbranch', 10000),
(4444, 'gbbr', 20000),
(5555, 'pesitmbranch', 5500),
(8888, 'gbbr', 50000),
(9999, 'jcrbranch', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accno` int(11) NOT NULL,
  `oldbalance` int(11) NOT NULL,
  `newbalance` int(11) NOT NULL,
  `trdate` date NOT NULL,
  `trtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `accno`, `oldbalance`, `newbalance`, `trdate`, `trtime`) VALUES
(3, 1234, 2000, 3000, '2021-01-01', '12:47:38'),
(4, 1234, 3000, 2500, '2021-01-01', '12:48:00'),
(5, 2233, 500, 5500, '2021-01-02', '13:20:39'),
(6, 2233, 5500, 3000, '2021-01-02', '13:21:45'),
(7, 2233, 3000, 3000, '2021-01-02', '13:21:45'),
(8, 2233, 3000, -2000, '2021-01-02', '13:22:26'),
(9, 2233, -2000, 3000, '2021-01-02', '13:23:10'),
(10, 2233, 3000, 2500, '2021-01-02', '13:23:19'),
(11, 2233, 2500, 2500, '2021-01-02', '13:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `trandetails`
--

CREATE TABLE IF NOT EXISTS `trandetails` (
  `tno` int(11) DEFAULT NULL,
  `accnumber` int(11) DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `mot` varchar(10) DEFAULT NULL,
  `ttype` varchar(10) DEFAULT NULL,
  `tramount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trandetails`
--

INSERT INTO `trandetails` (`tno`, `accnumber`, `dot`, `mot`, `ttype`, `tramount`) VALUES
(11, 1, '2013-01-01', 'cheque', 'deposit', 2000),
(12, 1, '2013-01-01', 'cash', 'wdl', 1000),
(13, 2, '2013-01-01', 'cash', 'deposit', 2000),
(14, 2, '2013-01-01', 'cash', 'deposit', 3000),
(15, 7, '2013-01-01', 'cash', 'deposit', 7000),
(15, 7, '2013-01-01', 'cash', 'deposit', 9000),
(17, 1, '2013-01-01', 'cash', 'deposit', 4000),
(18, 1, '2013-01-01', 'cheque', 'deposit', 3000),
(19, 1, '2013-01-01', 'cash', 'wdl', 9000),
(20, 7, '2013-02-01', 'cash', 'wdl', 2000),
(21, 2, '2013-02-01', 'cash', 'wdl', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE IF NOT EXISTS `users_info` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`username`, `password`, `email`) VALUES
('admin', 'admin123', 'admin@admin.com'),
('rahul', 'rahul123', 'rahul@gmail.com'),
('test', 'test123', 'test@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `afk` FOREIGN KEY (`branch_name`) REFERENCES `branch` (`branch_name`);

--
-- Constraints for table `borrower`
--
ALTER TABLE `borrower`
  ADD CONSTRAINT `bwfk1` FOREIGN KEY (`cust_name`) REFERENCES `customer` (`cust_name`),
  ADD CONSTRAINT `bwfk2` FOREIGN KEY (`loan_no`) REFERENCES `loan` (`loan_no`);

--
-- Constraints for table `depositor`
--
ALTER TABLE `depositor`
  ADD CONSTRAINT `dfk1` FOREIGN KEY (`cust_name`) REFERENCES `customer` (`cust_name`),
  ADD CONSTRAINT `dfk2` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
