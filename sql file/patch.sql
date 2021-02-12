-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 08:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patch`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg2`
--

CREATE TABLE `reg2` (
  `budget` varchar(30) NOT NULL,
  `CPU` varchar(30) NOT NULL,
  `Motherboard` varchar(30) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `GPU` varchar(30) NOT NULL,
  `Harddisk` varchar(30) NOT NULL,
  `SSD` varchar(30) NOT NULL,
  `Powersupply` varchar(30) NOT NULL,
  `Cabinet` varchar(30) NOT NULL,
  `prefer` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `elsee` varchar(300) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phn` varchar(30) NOT NULL,
  `adr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg2`
--

INSERT INTO `reg2` (`budget`, `CPU`, `Motherboard`, `RAM`, `GPU`, `Harddisk`, `SSD`, `Powersupply`, `Cabinet`, `prefer`, `type`, `elsee`, `name`, `email`, `phn`, `adr`) VALUES
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkhg', 'njj', 'kk', 'BEST BUDGET', 'GAMING', '', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', '', '', '', ''),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'Joy Mondal', 'mondaljoy1999@gmail.com', '23333333232', 'dndjvndjvndjvnv'),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'sumit saha', '9874405468', '23333333232', 'dndjvndjvndjvnv'),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'sumit saha', 'dipa@gmail.com', '23333333232', 'dndjvndjvndjvnv'),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'sumit saha', 'dipa@gmail.com', '23333333232', 'dndjvndjvndjvnv'),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'SAM', 'dipa@gmail.com', '23333333232', 'dndjvndjvndjvnv'),
('35000', 'sds', 'jkklk', 'kll', 'lkll', 'knjk', 'jkk', 'njj', 'kk', 'BEST BUDGET', 'GAMING', 'jkk', 'SAM', 'dipa@gmail.com', '23333333232', 'dndjvndjvndjvnv');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `mob` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `device` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `imei` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `problem` varchar(2000) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `cpw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `location`, `mob`, `email`, `device`, `brand`, `imei`, `model`, `problem`, `photo`, `pw`, `cpw`) VALUES
('subirsubir', 'mondal', 'kolkata', '9876543212', 'dipa121121@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666', '', 'png', 'joy12345678', 'joy12345678'),
('subir', 'janaa', 'kolkata', '9876543212', 'dipa1212@gmail.com', 'SMART PHONE', 'honorasis', 'hbjjhkh879', '56465666', '', '', 'joy123456789', 'joy123456789'),
('Joy', 'mondal', 'kolkata', '9876543212', 'dipa121@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666', '', '', 'joy12345678', 'joy12345678'),
('jana', 'janaa', 'kolkata', '9876543212', 'dipa221@gmail.com', 'TABLET/IPAD', 'honor22', 'hbjjhkh879', '56465666', '', '', 'joy12345678', 'joy12345678'),
('subirRR', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'LAPTOP', 'honor22', 'hbjjhkh879', '55166846', '', '', 'JOY12345678', 'JOY12345678'),
('jojoojojo', 'janaa', 'kolkata', '9876543212', 'dipaaa@gmail.com', 'SMART PHONE', 'honorasis', 'hbjjhkh879', '56465666', '', '', 'joy12345678', 'joy12345678'),
('subirdipa', 'mondal', 'kolkata', '9876543212', 'dipasubir@gmail.com', 'SMART PHONE', 'infinix', 'hbjjhkh879', '56465666', '', '', 'joy123456789', 'joy123456789'),
('jana', 'mondal', 'kolkata', '9876543212', 'jana12@gmail.com', 'SMART PHONE', 'asus234', 'hbjjhkh879', '56465666', '', '', 'JOY12345678', 'JOY12345678'),
('jana', 'mondal', 'kolkata', '9876543212', 'joy1888@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666', '', '', 'joy123456789', 'joy123456789'),
('Joy', 'mondal', 'kolkata', '9874405468', 'mondaljoy1997@gmail.com', 'SMART PHONE', 'realme2', 'hbjjhkh879', '56465666', '', '8790-download.png', 'joy123456789', 'joy123456789'),
('Joy', 'mondal', 'kolkata', '9874405468', 'mondaljoy1998@gmail.com', 'SMART PHONE', 'realme', 'hbjjhkh879', '56465666', '', '1602-download.png', 'joy12345678', 'joy12345678'),
('Joy', 'mondal', 'kolkata', '9876543212', 'mondaljoy1999@gmail.com', 'SMART PHONE', 'infinix', 'hbjjhkh879', '56465666', '', 'png', 'joy123456789', 'joy123456789'),
('MD', 'SHAMS', '2/B BANGALORE', '9876605468', 'sams@gmail.com', 'SMART PHONE', 'honor', '785f55665dff', 'fefee855', '', '1653-download.jpg', '123456789', '123456789'),
('SS', 'RAJAMOULI', 'HYDERABAD', '9876543210', 'ss@gmail.com', 'SMART PHONE', 'asus', 'sbjdjnd1', 'bdjdin1', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '6278-download.jpg', '123456789', '123456789'),
('dipa', 'mondal', 'kolkata', '9876543212', 'subir@gmail.com', 'LAPTOP', 'honor22', 'hbjjhkh879', '56465666k', '', '', 'joy12345678', 'joy12345678'),
('subir', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', 'bdjdin1', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '4281-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '5596-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '3216-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '1871-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '5305-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '8729-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '6866-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '8568-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '2637-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '1694-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '9088-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '9844-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '7747-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '7969-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '7764-download.jpg', '123456789', '123456789'),
('Joyyyyyyyy', 'mondal', 'kolkata', '9876543212', 'dipa@gmail.com', 'SMART PHONE', 'honor22', 'hbjjhkh879', '56465666k', 'vbfvbfvfbvfjbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv  vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv vvvvvvvvvvvvvvvvvvvvvvvvvvvvv             vvvvvvvvvvvvvvvvv', '5048-download.jpg', '123456789', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
