-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 01:01 PM
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
(1, 'Bangla 1st', 'Bangla 1st', 28, 'MSA Rahat', 'Rahat Publication', 0, '2020-11-09', 'hello', 'hello.png', 0),
(2, 'eng1st', 'Bangla 2st', 28, 'MSA Rahat', 'Rahat Publication', 10, '2020-11-09', 'hello', 'hello.png', 0),
(4, 'math 1st', 'Bangla 3st', 28, 'MSA Rahat', 'Rahat Publication', 10, '2020-11-09', 'hello', 'hello.png', 0),
(5, 'AMA', '<p>dfgsdfgbs</p>\r\n', 23, 'dfsgs', 'sdfgas', 5, '2020-11-09', 'cxzv', '54780_FB_IMG_16005069901605551.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_parrant` varchar(11) NOT NULL,
  `cat_status` int(1) NOT NULL COMMENT '1=active 2=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_parrant`, `cat_status`) VALUES
(23, 'raha', '24', 2),
(24, 'ra', '', 1),
(28, 'SSC', '', 1);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
