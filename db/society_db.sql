-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2019 at 09:52 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

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
-- Table structure for table `boutique_post`
--

CREATE TABLE `boutique_post` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_city` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `prd_name` varchar(100) NOT NULL,
  `prd_image` varchar(100) NOT NULL,
  `prd_qty` int(11) NOT NULL,
  `prd_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prd_desc` text,
  `prd_quality` varchar(50) DEFAULT NULL,
  `vendor_contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique_post`
--

INSERT INTO `boutique_post` (`id`, `vendor_id`, `vendor_name`, `vendor_city`, `category_id`, `category_name`, `prd_name`, `prd_image`, `prd_qty`, `prd_price`, `date`, `prd_desc`, `prd_quality`, `vendor_contact`) VALUES
(6, 1259, 'Musawer ALi', 'Bahawalpur', 7, '', 'Leather Shoes (Orignal)', '031-Shoes-to-wear-with-jeans.jpeg', 100, 2999, '2019-05-17 12:25:39', 'Upper Leather,\r\nRubber Sole,\r\nSIze:41 to 45', 'Upper Leather', '+923336513516'),
(7, 1259, 'Musawer ALi', 'Bahawalpur', 5, '', 'Blue Jeans', '13a5e9eee22ce15319cd14c9f28e582d.jpg', 200, 999, '2019-05-17 12:30:46', '4 seasons\r\ntwo colors\r\n32 to 45 waste', 'Fiber Cotton', '+923336513516'),
(13, 1259, 'Musawer ALi', 'Bahawalpur', 3, '', 'Ladies Stritching Cloth', 'maria-salman-collection.jpg', 200, 3999, '2019-05-17 13:08:38', '4 Season,Good Quality,\r\nAge 21 to 28', 'Maria Sulman Washing ware', '+92333651351'),
(14, 1259, 'Musawer ALi', 'Bahawalpur', 3, '', 'Ladies Stritching Cloth', 'classic-vol1-collection.jpg', 20, 2999, '2019-05-17 13:10:44', '4 Season', 'Washingware (Summer)', '+92333651351'),
(15, 1259, 'Musawer ALi', 'Bahawalpur', 5, '', 'Men Jeans', 'menscomingsoonpage-edit.jpg', 80, 1999, '2019-05-17 13:13:10', 'Orignal Dennim Branded', 'Dennim', '923336513516'),
(16, 1260, 'Ch Musawer', 'Bahawalpur', 8, '', 'Pary suites', 'clothing.jpg', 50, 9999, '2019-05-17 14:57:49', 'Party Suites Branded', 'Tom Tailor', '923336513516'),
(17, 1260, 'Ch Musawer', 'Bahawalpur', 9, '', 't-shirts', 'FI015-1920x1080-t-shirts-en.jpg', 1000, 399, '2019-05-17 14:59:18', 'Available All Colors\r\nGood Quality', 'Denim', '923336513516'),
(18, 1259, 'Musawer ALi', 'Bahawalpur', 10, '', 'Wedding dresses', 'indian-wedding-suits-for-men-1.jpg', 100, 7999, '2019-05-18 14:01:06', 'All types of available', 'Branded', '923336513516'),
(19, 1259, 'Musawer ALi', 'Bahawalpur', 11, '', '7 piece suite', 'Suit.png', 70, 5999, '2019-05-18 14:03:14', 'Suites for Men', 'L.Tailor', '923336513516');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `user_cnic` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `vendor_city` varchar(50) NOT NULL,
  `prd_price` int(11) NOT NULL,
  `prd_quality` varchar(50) NOT NULL,
  `prd_qty` int(11) NOT NULL,
  `prd_desc` text NOT NULL,
  `vendor_contact` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL,
  `prd_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `vendor_id`, `customer_name`, `address`, `user_cnic`, `user_contact`, `prd_name`, `vendor_city`, `prd_price`, `prd_quality`, `prd_qty`, `prd_desc`, `vendor_contact`, `date`, `total`, `prd_image`) VALUES
(5, 1253, 1260, 'rabia is beautiful', '\"189/f\"', '31202-70111746-4', '03009687669', 't-shirts', 'Bahawalpur', 399, 'Denim', 6, 'Available All Colors\r\nGood Quality\"', '923336513516', '2019-05-18 17:23:25', 2394, 'FI015-1920x1080-t-shirts-en.jpg'),
(6, 1261, 1259, 'Ali Raza', '\"Trust Colony,Bahawalpur\"', '3120269441941', '+92300123456', 'Blue Jeans', 'Bahawalpur', 999, 'Fiber Cotton', 2, '4 seasons\r\ntwo colors\r\n32 to 45 waste\"', '+923336513516', '2019-05-18 18:52:28', 1998, '13a5e9eee22ce15319cd14c9f28e582d.jpg'),
(7, 1261, 1260, 'Ali Raza', '\"Trust Colony,Bahawalpur\"', '3120269441941', '+92300123456', 't-shirts', 'Bahawalpur', 399, 'Denim', 1, 'Available All Colors\r\nGood Quality\"', '923336513516', '2019-05-18 18:52:46', 399, 'FI015-1920x1080-t-shirts-en.jpg'),
(8, 1261, 1259, 'Ali Raza', '\"Trust Colony,Bahawalpur\"', '3120269441941', '+92300123456', 'Leather Shoes (Orignal)', 'Bahawalpur', 2999, 'Upper Leather', 4, 'Upper Leather,\r\nRubber Sole,\r\nSIze:41 to 45\"', '+923336513516', '2019-05-18 18:53:17', 11996, '031-Shoes-to-wear-with-jeans.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` enum('seller','admin') NOT NULL DEFAULT 'seller'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`, `user_id`, `user_type`) VALUES
(1, 'rabia ka bhalo', 'candidate_images/Hydrangeas-jpg.jpg', NULL, 'seller'),
(2, 'rsfdfgg', NULL, NULL, 'seller'),
(3, 'Lawn', NULL, 1259, 'seller'),
(4, 'Radimate', NULL, 1260, 'seller'),
(5, 'Jeans', NULL, 1259, 'seller'),
(6, 'Radimate', NULL, 1259, 'seller'),
(7, 'shoes', NULL, 1259, 'seller'),
(8, 'court', NULL, 1260, 'seller'),
(9, 'shirts', NULL, 1260, 'seller'),
(10, 'wedding dress', NULL, 1259, 'seller'),
(11, 'suite', NULL, 1259, 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(250) DEFAULT NULL,
  `cnic` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `image` varchar(345) DEFAULT NULL,
  `type` enum('user','seller','admin') NOT NULL DEFAULT 'user',
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `cnic`, `address`, `mobile_number`, `email`, `password`, `image`, `type`, `city`) VALUES
(1253, 'rabia is beautiful', '31202-70111746-4', '189/f', '03009687669', 'rabia100789@gmail.com', '03057799830', 'candidate_images/Chrysanthemum-jpg.jpg', 'user', NULL),
(1259, 'Musawer ALi', '3120269441941', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '923336513516', 'pakjalihouse@yahoo.com', 'admin123', '36252369.jpeg', 'seller', 'Bahawalpur'),
(1260, 'Ch Musawer', '3120269441941', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '923336513516', 'pakjalihouse@gmail.com', 'admin123', '79c2689a332e9946ade72debd15b45eb.jpg', 'seller', 'Bahawalpur'),
(1261, 'Ali Raza', '3120269441941', 'Trust Colony,Bahawalpur', '+92300123456', 'aliraza.k2@gmail.com', 'aliraza123', 'Sample-1---right.jpg', 'user', 'Islamabad'),
(1262, 'Admin', '3120269441941', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '923336513516', 'admin@admin.com', 'adminadmin', '79c2689a332e9946ade72debd15b45eb.jpg', 'admin', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` enum('','society_officer','member','admin') DEFAULT '',
  `status` enum('Active','blocked') DEFAULT 'blocked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `password`, `email`, `type`, `status`) VALUES
(1, 'Saima', '1234', 'saima@gmail.com', 'admin', 'Active'),
(13, 'Member', '1234', 'member@gmail.com', 'member', 'Active'),
(19, '', '', '', '', 'Active'),
(22, 'Musawer Ali', 'adminadmin', 'admin@admin.com', 'member', 'Active'),
(28, 'Ch Musawer', 'admin123', 'liaquat31202@gmail.com', 'member', 'Active'),
(29, 'Ghazanfar Ali', '1234', 'ghazanfar@gmail.com', 'member', 'Active'),
(30, 'Ghazanfar Ali', '123', 'musawer79@ovi.com', 'member', 'Active');

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
-- Table structure for table `property_detail`
--

CREATE TABLE `property_detail` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `property_title` varchar(100) NOT NULL,
  `property_unit` varchar(100) NOT NULL,
  `unit_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `property_desc` text NOT NULL,
  `plot_no` varchar(100) NOT NULL,
  `property_city` varchar(100) NOT NULL,
  `property_location` varchar(100) NOT NULL,
  `transfer_login_ids` varchar(200) DEFAULT NULL,
  `login_cnic` varchar(200) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_detail`
--

INSERT INTO `property_detail` (`id`, `login_id`, `purpose`, `property_type`, `property_title`, `property_unit`, `unit_qty`, `price`, `property_desc`, `plot_no`, `property_city`, `property_location`, `transfer_login_ids`, `login_cnic`, `image`) VALUES
(5, 21, 'rent', 'home', 'Commersial Plaza', 'acer', 54, 2323, '43sd', '32323', 'Bahawalpur', '1A,Avenue', NULL, NULL, 'partner-APW-AMG1076-hd.jpg'),
(6, 1, 'rent', 'plot', 'Corner Plot', 'kanal', 4, 4000000, 'Alama iqbal town', '43alm', 'Lahore', '1A,Avenue', NULL, NULL, 'imj.jpg'),
(7, 29, 'sale', 'home', 'Full furnished house', 'kanal', 5, 5000000, 'Fully fuenished with swimming pool and grossy', '54nml', 'Karachi', 'DHA phase 2', NULL, NULL, 'c23d57aa-4e3d-4c60-b522-b0460407170b.jpg'),
(8, 1, 'sale', 'home', 'Fully Woden and Furnished House', 'kanal', 6, 7000000, 'Inspired by the glorious chateaus of France, Chateau Ami is a sophisticated and luxurious retreat that reflects that magical merging of inspiration and architecture. Created by renowned architect Randall Stofft and Cudmore Builders, the estate is a masterpiece of design and craftsmanship featuring inlayed onyx, hand-planed hickory wood flooring, intricately hand-painted ceilings, hand-carved fireplace by Barbara Tattersfield, exquisite crystal chandeliers, plus an elevator to transport from floor to floor.', 'WdPn5409', 'Los Angles', '2nd Avenue, North', NULL, NULL, 'eso_housing_1.jpg'),
(9, 1, 'sale', 'home', 'Family House on Lake', 'kanal', 4, 9040000, 'We were looking to reach out to a different audience for one of our programmes for executives and experimented with a message sent out to Social Europeâ€™s database of subscribers. The results from this activity exceeded our expectation both in terms of volume and level of engagement. We are therefore planning to advertise through Social Europe again in the future and would heartily recommend them to other institutions.', 'Blnb432', 'Sydney', 'Blue Beach, near Hall station,', NULL, NULL, '45d0512d-a268-4fa2-ba65-b5c52e072658.jpg'),
(10, 1, 'sale', 'home', 'Single story house fully furnished', 'kanal', 2, 20000000, 'Every detail was carefully selected and quality crafted. Highlights include Lutron light and shade systems, heated bathroom floors, concrete first-level and hallway floors, teak wood bedroom flooring, troweled plaster walls and ceilings, artwork  display lighting, hidden mechanicals, a climate-control system, high-tech security system, and spacious corner rooms that overlook the city.', 'kmgf532', 'Kashmir', 'Near Sirinigar Airport', NULL, NULL, 'Goodyear-United-Dwelling-Garage-Exterior.jpg'),
(11, 22, 'sale', 'land', 'Fertile Land and House', 'acer', 400, 1000000000, 'agriculture Land', 'lnm9021', 'Kashmir', 'Pakistan Road', NULL, NULL, '1920x1080-3336118-homes-old-grass-country.jpg');

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
(8, 0, '', '', '', '', 'candidate_images/Chrysanthemum-jpg.jpg'),
(9, 0, 'fd', '', '', '', ''),
(10, 0, 'fd', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciver_id` int(11) NOT NULL,
  `plot_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`id`, `sender_id`, `reciver_id`, `plot_no`) VALUES
(1, 29, 1, '43alm'),
(2, 1, 22, ''),
(3, 1, 22, 'lnm9021');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `login_id` int(11) DEFAULT NULL,
  `cnic` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `image` varchar(345) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `login_id`, `cnic`, `address`, `mobile_number`, `image`) VALUES
(1, 11, '123456789', '195 f', '031388888', 'eee'),
(2, 1, '66565555465456', 'tet', '6666', 'hhh'),
(3, 13, '234245425', '234', '234324', '234'),
(4, NULL, 'cnic', 'address', 'contact', ''),
(5, 3, 'cnic', 'address', 'contact', ''),
(6, 17, '4324242', 'H/s no 229 khan colony multan road near shama canima bahawalpur', '4234234', ''),
(7, 19, '', '', '', ''),
(9, 21, '534534534', 'H/s no 229 khan colony multan road near shama canima bahawalpur', '53453453453', ''),
(10, 22, '432424234234', 'H/s no 229 khan colony multan road near shama canima bahawalpur', '4234234234', ''),
(11, 28, '323232', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '+923336513516', ''),
(12, 29, '3120002343214', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '+923336513516', ''),
(13, 30, '53211234', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '+923336513516', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boutique_order`
--
ALTER TABLE `boutique_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `boutique_post`
--
ALTER TABLE `boutique_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

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
-- Indexes for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptid`);

--
-- Indexes for table `transfer_history`
--
ALTER TABLE `transfer_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boutique_order`
--
ALTER TABLE `boutique_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `boutique_post`
--
ALTER TABLE `boutique_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1263;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
-- AUTO_INCREMENT for table `property_detail`
--
ALTER TABLE `property_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transfer_history`
--
ALTER TABLE `transfer_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;