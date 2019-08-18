-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 08:32 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bottiqueowner`
--

CREATE TABLE `bottiqueowner` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `cnic` varchar(13) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phoneno` int(12) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottiqueowner`
--

INSERT INTO `bottiqueowner` (`id`, `name`, `cnic`, `address`, `phoneno`, `image`) VALUES
(2, 'botique 1', '44', '544', 64, 'candidate_images/Jellyfish-jpg.jpg'),
(3, 'botique 2', '4', '5', 6, 'candidate_images/Tulips-jpg.jpg'),
(4, 'rabia', '345345', 'fgfdgdfg', 0, 'candidate_images/Penguins-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boutique_order`
--

CREATE TABLE `boutique_order` (
  `orderid` int(11) NOT NULL,
  `bo_id` int(11) DEFAULT NULL,
  `customerid` int(12) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `date` varchar(345) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique_order`
--

INSERT INTO `boutique_order` (`orderid`, `bo_id`, `customerid`, `amount`, `date`, `status`) VALUES
(1, 101, 123, '20', '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catrgoryname` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catrgoryname`, `image`) VALUES
(1, 'rabia ka bhalo', 'candidate_images/Hydrangeas-jpg.jpg'),
(2, 'rsfdfgg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'blocked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `password`, `email`, `type`, `status`) VALUES
(1, 'Nauman', '1234', 'nauman@gmail.com', 'society_officer', 'blocked'),
(12, 'Saima', '1234', 'saima@gmail.com', 'admin', 'Active'),
(13, 'Member', '1234', 'member@gmail.com', 'member', 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `logintype`
--

CREATE TABLE `logintype` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `orderid`, `productid`, `quantity`, `totalprice`, `image`) VALUES
(2, 21111, 34, 35, 36, 'candidate_images/Tulips-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `bo_id` int(11) DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `Color` varchar(250) NOT NULL,
  `uniteprice` varchar(12) DEFAULT NULL,
  `catagoryid` varchar(150) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `bo_id`, `description`, `Color`, `uniteprice`, `catagoryid`, `image`) VALUES
(129, 'product 1', 3, 'JFAL', 'pink', '90', 'hif', 'candidate_images/Lighthouse-jpg.jpg'),
(130, 'twyqr', 2, 'nfnkngk', 'pink', '6584', '122', 'candidate_images/Desert-jpg.jpg'),
(131, 'gughiWH', 123, 'NKNVxlbk', 'MNKVN', '781', '658', 'candidate_images/Tulips-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receiptid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `orderid` varchar(250) DEFAULT NULL,
  `due-date` varchar(250) DEFAULT NULL,
  `issudate` varchar(12) DEFAULT NULL,
  `totalamount` varchar(50) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receiptid`, `customerid`, `orderid`, `due-date`, `issudate`, `totalamount`, `image`) VALUES
(8, 0, '', '', '', '', 'candidate_images/Chrysanthemum-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `cnic` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `image` varchar(345) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `login_id`, `cnic`, `address`, `mobile_number`, `image`) VALUES
(1, 1, '123456789', '195 f', '031388888', 'eee'),
(2, 12, '66565555465456', 'tet', '6666', 'hhh'),
(3, 13, '234245425', '234', '234324', '234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottiqueowner`
--
ALTER TABLE `bottiqueowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boutique_order`
--
ALTER TABLE `boutique_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `logintype`
--
ALTER TABLE `logintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptid`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bottiqueowner`
--
ALTER TABLE `bottiqueowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `boutique_order`
--
ALTER TABLE `boutique_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `logintype`
--
ALTER TABLE `logintype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
