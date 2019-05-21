-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 01:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'andrew', 'andy');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `email`, `message`) VALUES
(5, 'Joyce Wakesho', 'mwamodenyi@gmail.com', 'Thank you for your services');

-- --------------------------------------------------------

--
-- Table structure for table `grid`
--

CREATE TABLE `grid` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grid`
--

INSERT INTO `grid` (`id`, `username`, `location`, `issue`, `comment`) VALUES
(5, 'Mary', 'Karatina', 'My house almost burned due to the excessive currents that came back after a blackout.', ''),
(6, 'Garigo', 'Mombasa', 'I cant stand the frequent', '');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` int(11) NOT NULL,
  `myname` varchar(100) NOT NULL,
  `idea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `myname`, `idea`) VALUES
(3, 'Andrew', 'white poles'),
(4, 'Faith Njeri', 'Payable electricity bills'),
(5, 'Maingi James', 'Short poles'),
(6, 'Fred', 'Juja boys are bad.');

-- --------------------------------------------------------

--
-- Table structure for table `ideacom`
--

CREATE TABLE `ideacom` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `idno` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideacom`
--

INSERT INTO `ideacom` (`id`, `username`, `idno`, `comment`) VALUES
(1, 'KAmau', 4, 'Contemplate');

-- --------------------------------------------------------

--
-- Table structure for table `issuecom`
--

CREATE TABLE `issuecom` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `idno` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuecom`
--

INSERT INTO `issuecom` (`id`, `username`, `idno`, `comment`) VALUES
(1, 'Moses', 0, 'most unlikely to happen again'),
(2, 'Jane', 1, 'I am very sorry'),
(3, 'Dan', 4, 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `messcom`
--

CREATE TABLE `messcom` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `idno` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messcom`
--

INSERT INTO `messcom` (`id`, `username`, `idno`, `comment`) VALUES
(1, 'Adrian', 0, 'Oh my gosh'),
(2, 'Morris', 5, 'Good job supporting us');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`) VALUES
(1, 'andrew', 'andy@gmail.com', 'andrew'),
(2, 'user', 'user@gmail.com', 'user'),
(3, 'Dan', 'Dan@gmail.com', 'dan'),
(4, 'Dan', 'Dan@gmail.com', 'mwangi'),
(5, 'Kevo', 'kevo@gmail.com', 'kevin'),
(6, 'Kevo', 'kevo@gmail.com', 'kevin'),
(7, 'Kevo', 'kevo@gmail.com', 'kevin'),
(8, 'jojojo', 'joj@gmail.com', 'jojo'),
(9, 'Kiki', 'kama@gmail.com', 'kiki'),
(10, 'Kiki', 'kama@gmail.com', 'kiki'),
(11, 'Kiki', 'kama@gmail.com', 'kiki'),
(12, 'uhiub', 'gokaka@gmail.com', 'koko'),
(13, 'jojojo', 'joj@gmail.com', 'jojo'),
(14, 'koko', 'kama@gmail.com', 'koko'),
(15, 'gogo', 'gokaka@gmail.com', 'guigu'),
(16, 'jane', 'jane@gmail.com', 'jane'),
(17, 'lere', 'jkas@gmail.com', '1234'),
(18, 'Makau', 'makau@gmail.com', 'makau'),
(19, 'Makau', 'makau@gmail.com', 'makau'),
(20, 'Makau', 'makau@gmail.com', 'makau'),
(21, 'Makau', 'makau@gmail.com', 'makau'),
(22, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(23, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(24, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(25, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(26, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(27, 'Wakesho', 'wake@gmail.com', 'wakesho'),
(28, '', '', ''),
(29, 'Dan', 'mwangi@gmail.com', 'dan'),
(30, 'Dan', 'Dan@gmail.com', 'dan'),
(31, 'Dan', 'mwangi@gmail.com', 'dan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grid`
--
ALTER TABLE `grid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideacom`
--
ALTER TABLE `ideacom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuecom`
--
ALTER TABLE `issuecom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messcom`
--
ALTER TABLE `messcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grid`
--
ALTER TABLE `grid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ideacom`
--
ALTER TABLE `ideacom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issuecom`
--
ALTER TABLE `issuecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messcom`
--
ALTER TABLE `messcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
