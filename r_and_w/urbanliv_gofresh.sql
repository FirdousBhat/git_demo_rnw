-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2018 at 10:22 PM
-- Server version: 5.6.40
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanliv_gofresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `gf_categories`
--

CREATE TABLE `gf_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(80) NOT NULL,
  `web_images` varchar(250) NOT NULL,
  `mob_images` varchar(250) NOT NULL,
  `last_mod_date` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gf_categories`
--

INSERT INTO `gf_categories` (`id`, `cat_name`, `web_images`, `mob_images`, `last_mod_date`, `created_date`) VALUES
(1, 'chicken', 'test', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/categories%2Fandroid%2Fchi1.jpg?alt=media&token=2ad5f39d-3a17-4aa8-a958-67386246a125', '2018-07-29 10:21:20am', '2018-07-29 10:21:20am'),
(2, 'Best Deals', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/categories%2Fweb%2Fchi1.jpg?alt=media&token=9cd5f8cd-2aa8-4bb2-a951-9a2a1d9719e2', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/categories%2Fandroid%2Fchi1.jpg?alt=media&token=2ad5f39d-3a17-4aa8-a958-67386246a125', '2018-07-30 07:19:04pm', '2018-07-30 07:19:04pm'),
(3, 'Exotic Meats', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/categories%2Fweb%2Fchi1.jpg?alt=media&token=9cd5f8cd-2aa8-4bb2-a951-9a2a1d9719e2', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/categories%2Fandroid%2Fwhole_chicken_cat.jpg?alt=media&token=3a2c72f7-e4fa-481d-9922-d63de45e9d6e', '2018-07-30 07:22:25pm', '2018-07-30 07:22:25pm');

-- --------------------------------------------------------

--
-- Table structure for table `gf_products`
--

CREATE TABLE `gf_products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `rel_priority` int(10) NOT NULL,
  `pro_desc` varchar(1000) NOT NULL,
  `MRP` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `base_weight` varchar(100) NOT NULL,
  `units` varchar(100) NOT NULL,
  `web_image` varchar(1000) NOT NULL,
  `mob_image` varchar(1000) NOT NULL,
  `web_gallery_1` varchar(1000) NOT NULL,
  `web_gallery_2` varchar(1000) NOT NULL,
  `web_gallery_3` varchar(1000) NOT NULL,
  `web_gallery_4` varchar(1000) NOT NULL,
  `mob_gallery_1` varchar(1000) NOT NULL,
  `mob_gallery_2` varchar(1000) NOT NULL,
  `mob_gallery_3` varchar(1000) NOT NULL,
  `mob_gallery_4` varchar(1000) NOT NULL,
  `last_mod_date` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `featured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gf_products`
--

INSERT INTO `gf_products` (`id`, `cat_id`, `pro_name`, `rel_priority`, `pro_desc`, `MRP`, `sale_price`, `base_weight`, `units`, `web_image`, `mob_image`, `web_gallery_1`, `web_gallery_2`, `web_gallery_3`, `web_gallery_4`, `mob_gallery_1`, `mob_gallery_2`, `mob_gallery_3`, `mob_gallery_4`, `last_mod_date`, `created_date`, `featured`) VALUES
(9, 1, 'Chiken Breast', 0, 'Skinless, bone-in, juicy meat from the lower leg with a unique flavour.', 190, 150, '', 'kg', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/product%2FChiken%2Fchicken_breast.jpg?alt=media&token=f53d0308-fc79-408f-84ce-2666a3f101e8', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/product%2FChiken%2Fchicken_breast.jpg?alt=media&token=f53d0308-fc79-408f-84ce-2666a3f101e8', '', '', '', '', '', '', '', '', '2018-09-12 08:01:55pm', '2018-09-12 08:01:55pm', 1),
(10, 1, 'Chiken Curry cut Fresh', 0, 'Half a chicken cut to chunky pieces including one leg, a wing without the tip, one breast quarter with backbone. ', 200, 159, '500', 'gm', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_57234c427648b/prod_display_image/1507828995.9381--2017-10-1222:53:15--260', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_57234c427648b/prod_display_image/1507828995.9381--2017-10-1222:53:15--260', '', '', '', '', '', '', '', '', '2018-08-09 08:01:29pm', '2018-08-09 08:01:29pm', 1),
(11, 1, 'Chiken Drumstick', 1, 'Skinless, bone-in, juicy meat from the lower leg with a unique flavour enhanced by the bone.', 185, 170, '500', 'gm', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_id9jjmp0h34/prod_display_image/1531934191.4283--2018-07-1822:46:31--260', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_id9jjmp0h34/prod_display_image/1531934191.4283--2018-07-1822:46:31--260', '', '', '', '', '', '', '', '', '2018-08-06 07:11:34pm', '2018-08-06 07:11:34pm', NULL),
(12, 1, 'Chiken Nati', 0, 'Cage-free, pinkish fleshed, chunky cuts of pasture-fed, skin-on chicken with a gamey flavour', 350, 300, '500', 'gm', 'https://d2407na1z3fc0t.cloudfront.net/products/pr_57ac8c42ee432/pr_img_59b8bb6407da8', 'https://d2407na1z3fc0t.cloudfront.net/products/pr_57ac8c42ee432/pr_img_59b8bb6407da8', '', '', '', '', '', '', '', '', '2018-08-09 08:06:41pm', '2018-08-09 08:06:41pm', 1),
(13, 1, 'Chiken Lolipop', 6, 'Frenched chicken wings with a clean bone for a handle, offering tasty, soft meat in every bite', 110, 140, '10', 'gm', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_ejejbf09h51/prod_display_image/1518706682.3075--2018-02-1520:28:02--260', 'https://s3-ap-southeast-1.amazonaws.com/licious/prodDev/pr_ejejbf09h51/prod_display_image/1518706682.3075--2018-02-1520:28:02--260', '', '', '', '', '', '', '', '', '2018-08-06 07:30:53pm', '2018-08-06 07:30:53pm', NULL),
(14, 0, '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-08 07:03:03pm', '2018-08-08 07:03:03pm', NULL),
(15, 0, '', 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-08 07:03:05pm', '2018-08-08 07:03:05pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gf_sliderimages`
--

CREATE TABLE `gf_sliderimages` (
  `id` int(11) NOT NULL,
  `web_slide` varchar(200) NOT NULL,
  `mob_slide` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `last_mod_date` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gf_sliderimages`
--

INSERT INTO `gf_sliderimages` (`id`, `web_slide`, `mob_slide`, `link`, `last_mod_date`, `created_date`) VALUES
(4, 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Flicious_banner.jpg?alt=media&token=0b582a05-3112-485b-a625-f58bef7514c4', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Fslider_image.jpg?alt=media&token=0ab665de-0c38-497c-91f6-b6b53b2f5ee0', 'http://www.urbanlivings.in/gofresh', '2018-07-30 07:47:54pm', '2018-07-30 07:47:54pm'),
(5, 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2F17965662-raw-lamb-chops.jpg?alt=media&token=352b133e-746d-4cf9-a94c-957ed292fb09', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Fslider_image.jpg?alt=media&token=0ab665de-0c38-497c-91f6-b6b53b2f5ee0', 'http://www.urbanlivings.in/gofresh', '2018-07-30 07:50:11pm', '2018-07-30 07:50:11pm'),
(6, 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2F10.jpg?alt=media&token=d09c66c1-619f-480c-9db0-8cea78f77c06', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Fslider_image.jpg?alt=media&token=0ab665de-0c38-497c-91f6-b6b53b2f5ee0', 'http://www.urbanlivings.in/gofresh/', '2018-07-30 07:53:01pm', '2018-07-30 07:53:01pm'),
(7, 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Fslider_image.jpg?alt=media&token=0ab665de-0c38-497c-91f6-b6b53b2f5ee0', 'https://firebasestorage.googleapis.com/v0/b/gofresh-916c2.appspot.com/o/slider%2Fandroid%2Fslider_image.jpg?alt=media&token=0ab665de-0c38-497c-91f6-b6b53b2f5ee0', 'http://www.urbanlivings.in/gofresh/', '2018-08-01 08:26:12pm', '2018-08-01 08:26:12pm');

-- --------------------------------------------------------

--
-- Table structure for table `gf_user_image_details`
--

CREATE TABLE `gf_user_image_details` (
  `user_id` int(19) NOT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `image_path` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gf_wish_list`
--

CREATE TABLE `gf_wish_list` (
  `id` int(19) NOT NULL,
  `user_id` int(19) NOT NULL,
  `product_id` int(19) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gf_wish_list`
--

INSERT INTO `gf_wish_list` (`id`, `user_id`, `product_id`) VALUES
(19, 9, 9),
(18, 9, 9),
(10, 1, 1),
(8, 2, 1),
(35, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `otp_validation`
--

CREATE TABLE `otp_validation` (
  `id` int(11) NOT NULL,
  `phno` varchar(14) NOT NULL,
  `OTP` varchar(4) NOT NULL,
  `on_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RaW_customers`
--

CREATE TABLE `RaW_customers` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_mobile` varchar(14) CHARACTER SET latin1 NOT NULL,
  `user_email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `user_photo` varchar(150) CHARACTER SET latin1 NOT NULL,
  `register_otp` int(6) NOT NULL,
  `forgot_otp` int(6) NOT NULL,
  `password` varchar(500) CHARACTER SET latin1 NOT NULL,
  `updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `RaW_customers`
--

INSERT INTO `RaW_customers` (`user_id`, `user_name`, `user_mobile`, `user_email`, `user_photo`, `register_otp`, `forgot_otp`, `password`, `updated_on`, `created_on`) VALUES
(3, 'Asif', '8147530370', 'test@gmail.com', '', 0, 0, '$2y$10$0dxvD5Qed4F.pLjAdXWO5uahaXj/owJGS5msyYL/4lFCa/VbhwYHi', '0000-00-00 00:00:00', '2018-09-22 03:00:15'),
(6, 'firdous', '8105180269', 'frdsbhat9@gmail.com', '', 0, 0, '$2y$10$B7vCIY9KoLc5TS7A0LQdselZHl0exasQMp/bPaE7x7WfJCfJOYdu6', '2018-09-22 21:04:00', '2018-09-22 21:04:00'),
(15, 'Asifbasha', '814753037019', 'adil@gmail.com', '', 0, 0, '$2y$10$RTgX9G/hnKQZg64rzS4bnu4wHDxLqH2vkopckP1iR2Uc4DmuYv6qW', '0000-00-00 00:00:00', '2018-09-22 04:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_details`
--

CREATE TABLE `vendor_details` (
  `vendor_id` int(19) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `shop_address` varchar(225) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `working_days` varchar(100) NOT NULL,
  `working_time` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `shop_status` varchar(100) NOT NULL,
  `user_device` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `register_otp` varchar(100) NOT NULL,
  `forgot_otp` varchar(100) NOT NULL,
  `verified_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_details`
--

INSERT INTO `vendor_details` (`vendor_id`, `shop_name`, `owner_name`, `mobile`, `shop_address`, `latitude`, `longitude`, `percentage`, `device`, `status`, `working_days`, `working_time`, `created_date`, `updated_date`, `shop_status`, `user_device`, `password`, `register_otp`, `forgot_otp`, `verified_status`) VALUES
(1, 'BTM Fresh Meat', 'Rizwan', '8147530370', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '¢LwYQ]Ž', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_image_details`
--

CREATE TABLE `vendor_image_details` (
  `vendorid` int(19) NOT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gf_categories`
--
ALTER TABLE `gf_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gf_products`
--
ALTER TABLE `gf_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gf_sliderimages`
--
ALTER TABLE `gf_sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gf_user_image_details`
--
ALTER TABLE `gf_user_image_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `gf_wish_list`
--
ALTER TABLE `gf_wish_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_validation`
--
ALTER TABLE `otp_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `RaW_customers`
--
ALTER TABLE `RaW_customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor_details`
--
ALTER TABLE `vendor_details`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gf_categories`
--
ALTER TABLE `gf_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gf_products`
--
ALTER TABLE `gf_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gf_sliderimages`
--
ALTER TABLE `gf_sliderimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gf_wish_list`
--
ALTER TABLE `gf_wish_list`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `otp_validation`
--
ALTER TABLE `otp_validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `RaW_customers`
--
ALTER TABLE `RaW_customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendor_details`
--
ALTER TABLE `vendor_details`
  MODIFY `vendor_id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
