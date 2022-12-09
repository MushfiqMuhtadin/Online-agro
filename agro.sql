-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`, `status`, `time`) VALUES
(5, 'rice', 'On cultivation', '1 month'),
(7, 'carrot', 'On cultivation', '15 days'),
(8, 'tomato', 'ready', 'ready'),
(9, 'mango', 'On cultivation', '6 month'),
(10, 'fulkopi', 'On cultivation', '7 days'),
(11, 'wheat', 'ready', 'ready'),
(12, 'raddish', 'On cultivation', '15 days');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `opinion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `country`, `opinion`) VALUES
(1, 'gfew', 'mushfiq1519@gmail.com', 'bd', 'fast delivery'),
(2, 'afrida', 'mushfiq1519@gmail.com', 'Bangladesh', 'fresh products'),
(3, 'afrida', 'mushfiq1519@gmail.com', 'usa', 'awesome'),
(4, 'MushfiqBOSS', 'mushfiq1519@gmail.com', 'bd', 'onek valo'),
(5, 'deathnotemama', 'mushfiq1519@gmail.com', 'uk', 'satisfying'),
(7, 'deathnote', 'mushfiq1519@gmail.com', 'Bangladesh', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(9, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'bddd', 'Bangladesh', '9999', 'kola (1) , brocoli (1) , burgers (1) , mula (1) , chal (1) , botboti (1) , kachamorich (1) ', '634'),
(10, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'uttara', 'Bangladesh', '9999', 'begun (1) , kola (1) , brocoli (1) , mango (1) ', '698'),
(13, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'hjkjsdfsikjsbdvhjfdfksj', 'Bangladesh', '9999', 'begun (1) , kola (1) , brocoli (1) ', '258'),
(14, 'Muntakim', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'georgia', 'Bangladesh', '9999', 'begun (1) , kola (1) , brocoli (1) ', '258'),
(20, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'arkansas', 'Bangladesh', '9999', 'alu potol (1) , kola (1) , brocoli (1) ', '798'),
(23, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'bfndsma,', 'Bangladesh', '9999', 'alu potol (10) ', '30000'),
(24, 'Muhtadin Mushfiq', '01632103756', 'nouroj@gmail.com', 'cash on delivery', '47', '333', 'dhaka', 'arkansas', 'Bangladesh', '9999', 'alu potol (10) , alu (15) , kola (1) , brocoli (10) ', '31389');

-- --------------------------------------------------------

--
-- Table structure for table `pesticide`
--

CREATE TABLE `pesticide` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesticide`
--

INSERT INTO `pesticide` (`id`, `name`, `price`, `quantity`) VALUES
(9, 'nitras oxide', 988, 19),
(10, 'compost', 77, 5),
(12, 'Kit spray', 99, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(13, 'alu potol', '3000', 'kachamorich.jpg'),
(17, 'kola', '99', 'banana.jpg'),
(18, 'brocoli', '99', 'brocoli.jpg'),
(19, 'mango', '44', 'mango.jpg'),
(21, 'kachamorich', '70', 'kachamorich.jpg'),
(22, 'spinach', '69', 'spinach.jpg'),
(23, 'carrot', '99', 'carrot.jpg'),
(24, 'fulkopi', '99', 'fulkopi.jpg'),
(27, 'potol', '89', 'carrot.jpg'),
(28, 'mula', '22', 'spinach.jpg'),
(29, 'jackfruit', '30', 'brocoli.jpg'),
(30, 'avocado', '70', 'begun.jpg'),
(33, 'raddish', '989', 'carrot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `dob`, `address`, `usertype`, `userpassword`, `confirmpassword`) VALUES
(16, 'nouroj ', 'nouroj@gmail.com', '01632103751', '2022-12-09', 'badda', 'admin', '123456', '123456'),
(20, 'sergio ', 'muntakim@gmail.com', '01632103799', '2022-12-19', 'kalachadpur', 'farmer', '123456', '123456'),
(22, 'sundarmama', 'manager@gmail.com', '01632103788', '2022-12-44', 'kuratoli', 'manager', '123456', '123456'),
(23, 'deathnote', 'mushfiq1519@gmail.com', '01632103756', '2022-12-13', '47', 'customer', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesticide`
--
ALTER TABLE `pesticide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesticide`
--
ALTER TABLE `pesticide`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
