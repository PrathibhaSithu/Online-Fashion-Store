-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online fashion store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `email`, `password`, `name`, `role`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', '75d23af433e0cea4c0e45a56dba18b30', 'admin@gmail.com', 'admin'),
(2, 'AdminChamika@gmail.com', 'AdminChamika@gmail.com', 'c8e6dca8bec23ed85ffdbf7c9a99baf3', 'AdminChamika@gmail.com', 'admin'),
(3, 'chamika@gmail', 'chamika@gmail', 'd6e7768ce5d79b5e4c711f178b057676', 'chamika@gmail', 'admin'),
(4, '@chamika', 'chamikar22@gmail.com', 'd328639e54ee6badb690609515beaa34', 'Ravinud Chamika', 'admin'),
(5, '4344324343@gmail.com', '4344324343@gmail.com', 'ad62d6d5ff5b3d1ffdb691b033633d8d', '4344324343@gmail.com', 'admin'),
(6, 'admin2@gmail.com', 'admin2@gmail.com', '46e86f8906c3f937493d8d8399d39ffe', 'admin2@gmail.com', 'admin'),
(7, 'admin3@gmail.com', 'admin3@gmail.com', 'addac99d9d7651ee4504cc9f20a51756', 'admin3@gmail.com', 'admin'),
(8, 'admin5@gmail.com', 'admin5@gmail.com', '34bdea47ad53cfccca1f963e568f9d6d', 'admin5@gmail.com', 'admin'),
(9, 'admin6@gmail.com', 'admin6@gmail.com', 'a77698e3b1eeb3b98cf386dbb2532942', 'admin6@gmail.com', 'admin'),
(10, 'newadmin@gmail.com', 'newadmin@gmail.com', 'ed700f5496af3b26b9dd5d83cbb995a2', 'newadmin@gmail.com', 'admin'),
(11, 'adffdfddd@gmail.com', 'adffdfddd@gmail.com', '70f740a578216a62c186fc5de6ba25d9', 'adffdfddd@gmail.com', 'admin'),
(12, 'adffdfddfsdfdd@gmail.com', 'adffdfddfsdfdd@gmail.com', '482bc34c22df2581d9d42f4bbe35c0d5', 'adffdfddfsdfdd@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `itemID`, `category`, `image`, `color`, `size`, `price`, `discount`, `c_id`) VALUES
(1, 1, 'Mens', 'mens_casual_1-blue.jpg', 'blue', 'Small', 1800, 200, NULL),
(2, 2, 'Mens', 'mens_casual_2-blue.jpg', 'blue', 'Small', 2500, 400, NULL),
(3, 3, 'Mens', 'mens_casual_2-blue.jpg', 'blue', 'Small', 3500, 400, NULL),
(4, 1, 'Mens', 'mens_casual_1-blue.jpg', 'blue', 'Small', 1800, 200, 28),
(5, 1, 'Mens', 'mens_casual_1-blue.jpg', 'blue', 'Small', 1800, 200, 40),
(6, 2, 'Mens', 'mens_casual_2-blue.jpg', 'blue', 'Small', 2500, 400, 39),
(7, 1, 'Mens', 'mens_casual_1-blue.jpg', 'blue', 'Small', 1800, 200, 39),
(8, 2, 'Mens', 'mens_casual_2-green.jpg', 'green', 'Small', 2500, 400, 41);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT 'Enter Phone Number',
  `address` varchar(255) DEFAULT 'Enter Address',
  `zip_code` varchar(255) DEFAULT 'Enter ZIP Code',
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `username`, `email`, `password`, `phone`, `address`, `zip_code`, `name`, `role`) VALUES
(25, 'RavinduChamikaPreamarathna@gmail.com', 'RavinduChamikaPreamarathna@gmail.com', '7b7e5b0ce43517c0239b000238c22948', '0714740710', 'Kegalle', '71000', 'RavinduChamikaPreamarathna@gmail.com', 'user'),
(28, 'abcd@gmail.com', 'abcd@gmail.com', '46040c38d1cbe8ffcd3df6c8ba787951', '034324234', 'kegalle', '71000', 'abcd@gmail.com', 'user'),
(39, '@chamika', 'sdadtghjasdsadsa@gmail.com', '441af1865dadfee77701c225fd3ebcdf', 'Enter Phone Number', 'Enter Address', 'Enter ZIP Code', 'sdadtghjasdsadsa@gmail.com', 'user'),
(40, 'chamika21321@gmail.com', 'chamika21321@gmail.com', '8749e41ce7a3a078d22b4869c79808f6', 'Enter Phone Number', 'Enter Address', 'Enter ZIP Code', 'chamika21321@gmail.com', 'user'),
(41, '4534543f43g5f34@gmal.cm', '4534543f43g5f34@gmal.cm', '6b308a860ce2e546c1e480f29a85b3cf', '0714740710', 'Kandy', '8970', '4534543f43g5f34@gmal.cm', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `itemDesc` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `availableColors` varchar(200) NOT NULL,
  `availableSize` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `itemName`, `category`, `itemDesc`, `image`, `availableColors`, `availableSize`, `price`, `discount`) VALUES
(1, 'Mens casual printed shirt', 'Mens', 'Lorem ipsum dolor sit amet. Eos sint molestiae et explicabo quaerat rem error aspernatur et provident magni. Et quia dolorum id similique minus et rerum omnis qui laboriosam neque. Et odit deleniti id corporis blanditiis hic fugit quia sit autem voluptate ut odio perspiciatis rem consequuntur nulla aut earum voluptatem? Eos sint quasi et aperiam provident ab quia quibusdam sit molestiae ipsam et molestiae dolores.', 'mens_casual_1-default.jpg', 'blue,gray', 'Small,Medium', 1800, 200),
(2, 'Men\'s graphic print casual t-shirt', 'Mens', 'Lorem ipsum dolor sit amet. Eos sint molestiae et explicabo quaerat rem error aspernatur et provident magni.', 'mens_casual_2-default.jpg', 'blue,green', 'Small,Medium', 2500, 400),
(3, 'Men\'s graphic print casual t-shirt', 'Mens', 'Lorem ipsum dolor sit amet. Eos sint molestiae et explicabo quaerat rem error aspernatur et provident magni.', 'mens_casual_1-default.jpg', 'blue,red', 'Small,Medium', 3500, 400);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `P_ID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `Img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`P_ID`, `Title`, `Price`, `Img`) VALUES
(1100, 'T-Shirt', 120, 'p-7.png'),
(1101, 'Jersey', 150, 'p-3.png'),
(1102, 'Long Frock', 130, 'p-8.png'),
(1103, 'Short Frock', 40, 'p-2.png'),
(1104, 'Office Shirt', 120, 'product3.webp'),
(1105, 'Girl\'s-Short', 160, 'product5.jpeg'),
(1106, 'Sunglasses', 140, 'product6.jpg'),
(1107, 'Makeup Set', 135, 'product7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `order2`
--

CREATE TABLE `order2` (
  `Total` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order2`
--

INSERT INTO `order2` (`Total`, `Order_Id`, `c_id`) VALUES
(280, 2, NULL),
(400, 3, NULL),
(400, 4, NULL),
(130, 5, NULL),
(280, 7, NULL),
(0, 8, NULL),
(1000, 10, NULL),
(280, 14, NULL),
(280, 15, NULL),
(100000, 16, 26);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(20) NOT NULL,
  `Card_name` varchar(80) NOT NULL,
  `Card_num` int(25) NOT NULL,
  `Exp_month` varchar(15) NOT NULL,
  `Exp_year` int(4) NOT NULL,
  `cvv` int(6) NOT NULL,
  `c_id` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `Qty` int(20) NOT NULL,
  `Total` int(255) NOT NULL,
  `Payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `Card_name`, `Card_num`, `Exp_month`, `Exp_year`, `cvv`, `c_id`, `Item_ID`, `name`, `address`, `zip_code`, `Qty`, `Total`, `Payment_date`) VALUES
(1, '', 0, '', 0, 0, 26, 3, '', '', '0', 0, 3500, '2022-05-22 14:34:29'),
(9, '', 0, '', 0, 0, 28, 3, '', '', '0', 0, 3500, '2022-05-22 17:09:13'),
(30, '4534543f43g5f34@gmal.cm', 232323123, '01', 2022, 2234, 41, 1, '4534543f43g5f34@gmal.cm', '8970', '0', 0, 1600, '2022-05-24 18:43:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `order2`
--
ALTER TABLE `order2`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `payment_c_id_fk` (`c_id`),
  ADD KEY `payment_Item_ID_fk` (`Item_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order2`
--
ALTER TABLE `order2`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
