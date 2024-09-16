-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veggies_today`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart_data`
--

CREATE TABLE `add_cart_data` (
  `cart_id` int(11) NOT NULL,
  `pro_id` varchar(1000) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `pro_qty` int(5) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_cart_data`
--

INSERT INTO `add_cart_data` (`cart_id`, `pro_id`, `pro_name`, `pro_qty`, `pro_price`, `user_id`, `user_name`) VALUES
(18, '9', 'Hp 15', 2, 49000, '3', 'Roy');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `date`) VALUES
(1, 'sahqlin', 'shaqlin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-03-21 10:25:56.306962'),
(2, 'shaqlin', 's@gmail.com', '$2y$10$vFDuuPPbuFXwy61Js/xJg.B1iDUUvWxyKi.CfesrHEerl6ks00SoG', '2024-03-21 10:26:48.000000'),
(3, 'veggies', 'shaqlinmondal8905@gmail.com', '$2y$10$Jm8UkjMdIbcrwUi93SuXTuEm1rHkC876i3O07NiQVKvhsu9dPJqD.', '2024-09-16 06:29:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `parent_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `parent_cat_id`) VALUES
(1, 'Electronics', 0),
(2, 'laptops', 1),
(3, 'Mobiles', 1),
(4, 'Camera', 1),
(5, 'Ear Buds', 1),
(6, 'Head phones', 1),
(7, 'Speaker', 1),
(8, 'Charger', 1),
(9, 'Bluetooths', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(1, 'shaqlin', 'bjxbjh@gmail.com', '589245236', '1234'),
(2, 'Jack', 'jack@gmail.com', '25635635', '1234'),
(3, 'Roy', 'jb@gmail.com', '563265464', '1234'),
(5, 'Raj Roy', 'roy@gmail.com', '12345678', '1234'),
(6, 'jack jhon', 'jack@gmail.com', '158952331', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `master_order`
--

CREATE TABLE `master_order` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(500) NOT NULL,
  `bill_email` varchar(500) NOT NULL,
  `bill_phone` varchar(255) NOT NULL,
  `bill_address` text NOT NULL,
  `ship_name` varchar(300) NOT NULL,
  `ship_email` varchar(500) NOT NULL,
  `ship_phone` varchar(255) NOT NULL,
  `ship_address` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(500) NOT NULL,
  `order_date` varchar(500) NOT NULL,
  `payment_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_order`
--

INSERT INTO `master_order` (`id`, `bill_name`, `bill_email`, `bill_phone`, `bill_address`, `ship_name`, `ship_email`, `ship_phone`, `ship_address`, `customer_id`, `customer_name`, `order_date`, `payment_status`) VALUES
(13, 'kol', 'kolkata', '663313', 'west', 'kol', 'kolkata', '663313', 'west', 1, 'shaqlin', '21-03-2024 18:27:31', ''),
(21, 'jack jhon', 'shaqlinmondal8905@gmail.com', '08597148785', 'Memari, Burdwan', 'hbmjs', 'shaqlinmondal8905@gmail.com', '08597148785hmn', 'Memari, Burdwan', 1, 'shaqlin', '21-03-2024 18:48:20', ''),
(22, 'hbmjs', 'shaqlinmondal8905@gmail.com', '08597148785', 'Memari, Burdwan', 'hbmjs', 'shaqlinmondal8905@gmail.com', '08597148785', 'Memari, Burdwan', 1, 'shaqlin', '22-03-2024 20:20:14', 'pending'),
(23, 'sm', 'shaqlinmondal8905@gmail.com', '08597148785', 'Memari, Burdwan', 'sm', 'shaqlinmondal8905@gmail.com', '08597148785', 'Memari, Burdwan', 1, 'shaqlin', '22-03-2024 20:37:48', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` int(11) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`order_id`, `date_time`, `user_id`, `user_name`, `cart_id`, `pro_id`, `pro_name`, `pro_price`, `pro_qty`) VALUES
(29, '25-02-2024 16:10:48', 1, 'shaqlin', 42, 11, 'dell inspiron 11', 59999, 2),
(31, '27-02-2024 03:02:48', 1, 'shaqlin', 44, 12, 'Dell XPS', 10990, 2),
(32, '27-02-2024 03:15:25', 4, 'Sumon Coudhury', 46, 11, 'dell inspiron 11', 59999, 2),
(33, '01-03-2024 12:18:34', 5, 'Raj Roy', 47, 11, 'dell inspiron 11', 59999, 1),
(34, '01-03-2024 13:01:02', 5, 'Raj Roy', 48, 11, 'dell inspiron 11', 59999, 1),
(35, '03-03-2024 21:47:13', 1, 'shaqlin', 45, 10, 'Realme 12', 19999, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(500) NOT NULL,
  `picc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `category`, `picc`) VALUES
(9, 'Hp 15', 49000, 'Fresh', '2', '1711033826krunal-mistry-DookqPMZUHc-unsplash.jpg'),
(10, 'Realme 12', 19999, 'Fresh', '3', '1706629090N-WLD_BAU-CL-Page-revamp_Budget.jpg'),
(11, 'dell inspiron 11', 59999, 'Fresh', '2', '1706640799sebin-lalu-NmjPuOuED28-unsplash.jpg'),
(12, 'Dell XPS', 10990, 'Fresh', '2', '1707589105Dell XPS.jpg'),
(13, 'Lenevo legion', 89990, 'Fresh', '2', '1707589136lenevo legion.jpg'),
(14, 'Dell Latitude', 89099, 'Fresh', '2', '1707589165Dell_latutude.jpg'),
(15, 'Asus thin', 40900, 'Fresh', '2', '1707589193Asus.jpg'),
(16, 'realme 50', 48990, 'Fresh', '3', '1707589266D71695290_4_2.jpg'),
(17, 'IQOO z6', 59999, '', '3', '1707589293D71695290_Bud_mid_pre_10.jpg'),
(18, 'Samsung Flip 3', 159000, 'Fresh', '3', '1707589326Bud_mid_pre_10.jpg'),
(19, 'DSLR', 99999, 'Fresh', '3', '1708795020garvit-3IyjBegTXLA-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pro_cat`
--

CREATE TABLE `pro_cat` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `imgg` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_cat`
--

INSERT INTO `pro_cat` (`product_id`, `product_name`, `price`, `imgg`, `category_id`, `category_name`) VALUES
(9, 'Hp 15', 49000.00, '1706629029ashim-d-silva-ZmgJiztRHXE-unsplash.jpg', 2, 'laptops'),
(10, 'Realme 12', 19999.00, '1706629090N-WLD_BAU-CL-Page-revamp_Budget.jpg', 3, 'Mobiles'),
(11, 'dell inspiron 11', 59999.00, '1706640799sebin-lalu-NmjPuOuED28-unsplash.jpg', 2, 'laptops'),
(12, 'Dell XPS', 10990.00, '1707589105Dell XPS.jpg', 2, 'laptops'),
(13, 'Lenevo legion', 89990.00, '1707589136lenevo legion.jpg', 2, 'laptops'),
(14, 'Dell Latitude', 89099.00, '1707589165Dell_latutude.jpg', 2, 'laptops'),
(15, 'Asus thin', 40900.00, '1707589193Asus.jpg', 2, 'laptops'),
(16, 'realme 50', 48990.00, '1707589266D71695290_4_2.jpg', 3, 'Mobiles'),
(17, 'IQOO z6', 59999.00, '1707589293D71695290_Bud_mid_pre_10.jpg', 3, 'Mobiles'),
(18, 'Samsung Flip 3', 159000.00, '1707589326Bud_mid_pre_10.jpg', 3, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_phone` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `sel_img` varchar(255) NOT NULL,
  `s_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `s_name`, `s_phone`, `s_email`, `sel_img`, `s_pass`) VALUES
(1, 'Sha', 25125523, 'shaqlinmondal8905@gmail.com', '1708781011', '1234'),
(5, 'kuntol', 52145893, 'kuntol@gmail.com', '1708784307cli2.png', '1234'),
(6, 'jack c', 125635863, 'jackc@gmail.com', '1710855299cat.png', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `seller_comments`
--

CREATE TABLE `seller_comments` (
  `comment_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_comments`
--

INSERT INTO `seller_comments` (`comment_id`, `seller_id`, `seller_name`, `comments`, `date_time`) VALUES
(1, 1, 'Sha', 'Hello seller', '26-02-2024 03:29:50'),
(2, 6, 'jack c', 'hello', '19-03-2024 19:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_order`
--

CREATE TABLE `sub_order` (
  `s_order_id` int(11) NOT NULL,
  `mo_id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `pro_id` varchar(100) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `pro_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_order`
--

INSERT INTO `sub_order` (`s_order_id`, `mo_id`, `user_id`, `cart_id`, `pro_id`, `pro_qty`, `pro_price`) VALUES
(1, 21, '1', 53, '12', 1, '10990'),
(2, 22, '1', 54, '10', 3, '19999'),
(3, 23, '1', 55, '9', 2, '49000');

-- --------------------------------------------------------

--
-- Table structure for table `veg_offer`
--

CREATE TABLE `veg_offer` (
  `offer_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL,
  `offer_name` varchar(1000) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `date_time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veg_offer`
--

INSERT INTO `veg_offer` (`offer_id`, `category_name`, `percentage`, `offer_name`, `seller_name`, `admin_name`, `massage`, `date_time`) VALUES
(4, '3', 15, 'X-Mas', '', '', 'Free delivery, 1 year warranty ', ''),
(5, '3', 20, 'X-Mas 2024', 'Sha', '', 'kkcbckj', ''),
(6, '2', 20, 'diwali 2024', 'Sha', '', 'free deliver with any products\r\n', '26-02-2024 02:00:57'),
(7, '3', 10, '20% diwali 2024-laptops -2', 'Sha', '', 'Free delivery, 1 year warranty', '26-02-2024 02:06:38'),
(9, '4', 15, 'new', 'NA', 'ADMIN', 'NA', '04-03-2024 02:21:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart_data`
--
ALTER TABLE `add_cart_data`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_order`
--
ALTER TABLE `master_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_cat`
--
ALTER TABLE `pro_cat`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `seller_comments`
--
ALTER TABLE `seller_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `sub_order`
--
ALTER TABLE `sub_order`
  ADD PRIMARY KEY (`s_order_id`);

--
-- Indexes for table `veg_offer`
--
ALTER TABLE `veg_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart_data`
--
ALTER TABLE `add_cart_data`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_order`
--
ALTER TABLE `master_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_comments`
--
ALTER TABLE `seller_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_order`
--
ALTER TABLE `sub_order`
  MODIFY `s_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veg_offer`
--
ALTER TABLE `veg_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
