-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 05:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(2525) NOT NULL,
  `book_desc` text NOT NULL,
  `book_cat` int(11) NOT NULL,
  `book_writer` varchar(255) NOT NULL,
  `book_pub` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `book_rel` date NOT NULL,
  `book_meta` text NOT NULL,
  `book_img` text NOT NULL,
  `trash` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_desc`, `book_cat`, `book_writer`, `book_pub`, `stock`, `book_rel`, `book_meta`, `book_img`, `trash`) VALUES
(1, 'Bangla 1st', '<p>Bangla 1st&quot; &gt;</p>\r\n', 30, 'MSA Rahat', 'Rahat Publication', 0, '2020-11-09', 'hello', '10206_FB_IMG_16005069901605551.jpg', 0),
(2, 'eng1st', '<p>Bangla 2st&quot; &gt;</p>\r\n', 30, 'MSA Rahat', 'Rahat Publication', 10, '2020-11-09', 'hello', '53173_FB_IMG_16005069901605551.jpg', 0),
(4, 'math 1st', '<p>Bangla 3st&quot; &gt;</p>\r\n', 30, 'MSA Rahat', 'Rahat Publication', 10, '2020-11-09', 'hello', '58094_FB_IMG_16005069901605551.jpg', 0),
(5, 'AMA', '<p>dfgsdfgbs</p>\r\n\r\n<p>&quot; &gt;</p>\r\n', 30, 'dfsgs', 'sdfgas', 5, '2020-11-09', 'cxzv', '54780_FB_IMG_16005069901605551.jpg', 0),
(6, 'প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা', '<p>&quot; &gt;</p>\r\n', 29, ' এফ. এম. রহমান (প্রাশিঅ)', 'সেঞ্চুরি প্রকাশনী', 3, '2020-11-12', 'প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা', '59510_pngtree-hand-drawn-cartoon-a-pile-of-books-and-a-pencil-element-png-image_636359.jpg', 0),
(7, 'প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা', '<h1>প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা</h1>\r\n\r\n<p>&quot; &gt;</p>\r\n', 31, 'অজয় সরকার', 'জয়কলি পাবলিকেশন্স লিঃ', 1, '2020-11-12', 'প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা', '11867_pngtree-hand-drawn-cartoon-a-pile-of-books-and-a-pencil-element-png-image_636359.jpg', 0),
(8, 'প্রাক-প্রাথমিক/ প্রাথমিক সহকারী শিক্ষক নিয়োগ সহায়িকা', '', 30, 'গোল্ডেন প্লাস প্রকাশনী', 'গোল্ডেন প্লাস প্রকাশনী', 1, '2020-11-12', 'গোল্ডেন প্লাস প্রকাশনী', '53276_pngtree-hand-drawn-cartoon-a-pile-of-books-and-a-pencil-element-png-image_636359.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_parrant` varchar(11) NOT NULL DEFAULT '0',
  `cat_status` int(1) NOT NULL COMMENT '1=active 2=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_parrant`, `cat_status`) VALUES
(29, 'SSC', '', 1),
(30, 'HSC', '', 1),
(31, 'PSC', '', 1),
(32, 'JSC', '', 1),
(33, 'Master', '', 1),
(36, 'Higher Label', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `return_date` date NOT NULL,
  `is_returned` int(1) NOT NULL COMMENT '0=back 1=have'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`id`, `book_id`, `author_id`, `order_date`, `return_date`, `is_returned`) VALUES
(8, 5, 2, '2020-11-11', '0000-00-00', 1),
(11, 1, 4, '2020-11-11', '0000-00-00', 0),
(14, 1, 2, '2020-11-12', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_desc` text NOT NULL,
  `post_cat` int(11) NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_meta` text NOT NULL,
  `post_img` text NOT NULL,
  `post_status` int(1) NOT NULL COMMENT '1=active 2=inactive 3=pending 4=disabled',
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `currency` varchar(255) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `address`, `email`, `phone`, `logo`, `favicon`, `currency`, `terms`) VALUES
(1, 'MSA Industry', 'Subhanighat', 'just@gmail.com', '01756689907', '', '', 'USD', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_image` text NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `user_role` int(1) NOT NULL COMMENT '1=super 2=editor',
  `user_status` int(1) NOT NULL COMMENT '1=active 2=inactive 3=pending 4=disabled',
  `user_gender` int(1) NOT NULL COMMENT '1=male 2=female 3=other',
  `user_join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_image`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`, `user_role`, `user_status`, `user_gender`, `user_join_date`) VALUES
(1, '12148_FB_IMG_16005069901605551.jpg', 'MSA', 'just@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '+8801756689907', 'sylhet', 1, 1, 1, '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_phone` varchar(255) NOT NULL,
  `users_addrfess` text NOT NULL,
  `users_status` int(1) NOT NULL,
  `users_gender` int(1) NOT NULL,
  `users_image` text NOT NULL,
  `users_joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_password`, `users_phone`, `users_addrfess`, `users_status`, `users_gender`, `users_image`, `users_joindate`) VALUES
(2, 'MSA', '1@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '017566899078', 'sylhet', 1, 1, '35073_FB_IMG_16005069901605551.jpg', '2020-11-03'),
(4, 'MSA Rahat', 'just@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '8801756689907', 'subhanighat', 1, 1, '35073_FB_IMG_16005069901605551.jpg', '2020-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
