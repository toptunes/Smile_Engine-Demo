-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 08:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abyekiha_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_color`
--

CREATE TABLE `all_color` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `color_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `color_code` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `color_fam` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `color_picked` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `how_many_wanted` int(11) NOT NULL,
  `seen` int(11) NOT NULL,
  `when_selected_price` float NOT NULL,
  `paid` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `product_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `product_model` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `product_real_price` int(11) NOT NULL,
  `product_off_price` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category_all`
--

CREATE TABLE `category_all` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `category_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `category_child` int(11) NOT NULL,
  `category_level` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_all`
--

CREATE TABLE `city_all` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `city_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `color_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `color_code` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `common_stores`
--

CREATE TABLE `common_stores` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `store_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `category_child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `product_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `brand_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `product_model` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `product_real_price` int(11) NOT NULL,
  `product_off_price` int(11) NOT NULL,
  `next_mission` int(11) NOT NULL,
  `done` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `img_0` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_1` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_2` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_3` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_4` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_5` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_6` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_7` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_8` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `img_9` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `p_w` int(11) NOT NULL,
  `p_h` int(11) NOT NULL,
  `p_l` int(11) NOT NULL,
  `Breakable` int(11) NOT NULL,
  `product_detail` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `available` int(11) NOT NULL,
  `carry` int(11) NOT NULL,
  `product_takhfif` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_id_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `spec_key` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `spec_value_string` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `spec_value_string_2` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specifications_kinds`
--

CREATE TABLE `specifications_kinds` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `specification_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `specifications_value` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `specifications_info` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password_again` text NOT NULL,
  `f_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `l_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `mob_number` text NOT NULL,
  `irid` text NOT NULL,
  `active` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone_active_code` int(11) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_type`
--

CREATE TABLE `store_type` (
  `id` int(11) NOT NULL,
  `store_t_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date` date NOT NULL,
  `username` text NOT NULL,
  `img_0` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password` text NOT NULL,
  `password_hash` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `level` int(11) NOT NULL,
  `l_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `mob_number` text NOT NULL,
  `phone_active_code` int(11) NOT NULL,
  `auto_u_p` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `category_stores` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `irid` varchar(44) NOT NULL,
  `email` text NOT NULL,
  `owner` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `store_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `store_t_name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `category_stores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `date`, `username`, `img_0`, `password`, `password_hash`, `level`, `l_name`, `mob_number`, `phone_active_code`, `auto_u_p`, `active`, `category_stores`, `irid`, `email`, `owner`, `users_id`, `address`, `store_name`, `store_t_name`, `category_stores_id`) VALUES
(47, '诉讼', '2021-11-25', '13581636685193', '51388download.jpg', '32196820691467', 'e50f8f957b7580e20efe469946b0ee7d34429b4071df11357c105545be8e600303ff7fc2629d2af7a9d39dea5d2075d3822fed3265ce5732e86b0f48f8f356bd', 3, 'Sùsòng', '09354894522', 2979, 1, 1, 'خانه و آشپزخانه', '1234567890', '', '1679091c5a880faf6fb5e6087eb1b2dc', 47, '436 [[o', 'پشتیبان فنی', 'پلاسکو', 438);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_color`
--
ALTER TABLE `all_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_all`
--
ALTER TABLE `category_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_all`
--
ALTER TABLE `city_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_stores`
--
ALTER TABLE `common_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications_kinds`
--
ALTER TABLE `specifications_kinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_type`
--
ALTER TABLE `store_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `all_color`
--
ALTER TABLE `all_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_orders`
--
ALTER TABLE `all_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_all`
--
ALTER TABLE `category_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_all`
--
ALTER TABLE `city_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `common_stores`
--
ALTER TABLE `common_stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specifications_kinds`
--
ALTER TABLE `specifications_kinds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_type`
--
ALTER TABLE `store_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
