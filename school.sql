-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 01:28 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `name` varchar(50) NOT NULL,
  `std` int(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `english` int(3) NOT NULL,
  `language` int(3) NOT NULL,
  `maths` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `social` int(3) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`name`, `std`, `dept`, `english`, `language`, `maths`, `science`, `social`, `total`) VALUES
('vicky', 10, '16-uca-041', 90, 90, 90, 90, 90, 450),
('manoj', 11, '15-uca-040', 50, 50, 50, 50, 50, 250),
('vinoth', 12, '17-uca-017', 50, 50, 50, 50, 51, 251),
('Jones Arputharaj', 12, '17-UCA-040', 100, 100, 100, 100, 100, 500);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `std` int(11) NOT NULL,
  `dept_no` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY  (`std`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `std`, `dept_no`, `contact`, `gender`, `blood_group`, `address`) VALUES
('JONES ARPUTHARAJ S', 12, '17-uca-040', 99403434, 'MALE', 'ab', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `emp_code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(10) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`emp_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`emp_code`, `name`, `dob`, `contact`, `gender`, `address`, `password`) VALUES
('x101', 'JONES ARPUTHARAJ S', '1999-07-01', 2147483647, 'MALE', 'sangeve nagar', '123456');
