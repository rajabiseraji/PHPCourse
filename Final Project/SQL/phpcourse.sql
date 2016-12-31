-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 11:32 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `five`
--

CREATE TABLE `five` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `writer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `writer`) VALUES
(1, 'Hello World', 'Hello and Welcome to our first test in parsing the content', 'Saeed Rahimi Manesh'),
(3, 'Grumman F-14 Tomcat', 'Beginning in the late 1950s, the U.S. Navy sought a long-range, high-endurance interceptor to defend its carrier battle groups against long-range anti-ship missiles launched from the jet bombers and submarines of the Soviet Union. The U.S. Navy needed a Fleet Air Defense (FAD) aircraft with a more powerful radar, and longer range missiles than the F-4 Phantom II to intercept both enemy bombers and missiles.[5] The Navy was directed to participate in the Tactical Fighter Experimental (TFX) program with the U.S. Air Force by Secretary of Defense Robert McNamara. McNamara wanted "joint" solutions to service aircraft needs to reduce development costs, and had already directed the Air Force to buy the F-4 Phantom II, which was developed for the Navy and Marine Corps.[6] The Navy strenuously opposed the TFX as it feared compromises necessary for the Air Force\'s need for a low-level attack aircraft would adversely impaact the aircraft\'s performance as a fighter.', 'Saeed Rahimi Manesh'),
(10, 'test', 'this is test', 'man'),
(12, 'irancel', ' this is a operator', 'khodam');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` bigint(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `product_name`, `product_price`, `product_desc`, `product_img`) VALUES
(1, 'Apple iPhone 5S 64GB', 900, 'The Apple iPhone 5s is powered by 1.3GHz dual-core Apple A7 (64-bit ARMv8) processor and it comes with 1GB of RAM. The phone packs 16GB of internal storage cannot be expanded. As far as the cameras are concerned, the Apple iPhone 5s packs a 8-megapixel primary camera on the rear and a 1.2-megapixel front shooter for selfies.', 'images/featured-img-2.png'),
(2, 'Samsung Galaxy S7', 700, 'The long-awaited Galaxy S7 and Galaxy S7 edge have finally arrived — and they’re everything we hoped they would be. Announced at MWC 2016 in Barcelona, Samsung has again released two variants of the S7 — both similar at the core, but with a few subtle differences. Last year’s Samsung offering was a big one with the Galaxy S6 and S6 edge, and this time around Samsung has made its 2016 phones even better than ever before.', 'images/featured-img-3.png'),
(3, 'Apple iMacbook Pro', 3000, 'it is a laptop :-)', 'images/cart-img-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_registeration_date` timestamp NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `name`, `user_registeration_date`, `password`) VALUES
(8, 'saeedrm6', 'rahimimanesh.saeeid@gmail.com', 'Saeed Rahimi Manesh', '2016-12-13 18:45:15', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `five`
--
ALTER TABLE `five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `five`
--
ALTER TABLE `five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
