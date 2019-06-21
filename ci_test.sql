-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 08:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_management`
--

CREATE TABLE `ads_management` (
  `ads_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `feature_date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `seller_location` varchar(255) NOT NULL,
  `image_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_management`
--

INSERT INTO `ads_management` (`ads_id`, `user_id`, `category`, `title`, `price`, `feature_date`, `description`, `seller_location`, `image_gallery`) VALUES
(1, 1, 'Category One', 'Title One', 54, '2018-09-13', 'Description 1', 'Pakistan', '5'),
(2, 2, 'Category Two', 'Title Two', 56, '2018-09-13', 'Description 2', 'Karachi', '5'),
(3, 3, 'Category Three', 'Title Three', 12, '2018-09-13', 'Description 3', 'Lahore', '5'),
(4, 4, 'Category Four', 'Title Four', 23, '2018-09-13', 'Description 4', 'Peshawar', '5'),
(5, 5, 'Category Five', 'Title Five', 67, '2018-09-13', 'Description 5', 'Quetta', '5'),
(6, 6, 'Category Six', 'Title Six', 76, '2018-09-13', 'Description 6', 'Islamabad', '5'),
(7, 7, 'Category Seven', 'Title Seven', 43, '2018-09-13', 'Description 7', 'Rawal Pindi', '5');

-- --------------------------------------------------------

--
-- Table structure for table `categories_management`
--

CREATE TABLE `categories_management` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_management`
--

INSERT INTO `categories_management` (`category_id`, `category_name`, `user_id`, `image_path`) VALUES
(1, 'Category One', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(2, 'Category Two', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(3, 'Category Three', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(4, 'Category Four', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(5, 'Category Five', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(6, 'Category Six', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(7, 'Category Seven', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(8, 'Category Eight', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(9, 'Category Nine', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg'),
(15, 'Category Ten', 1, 'http://localhost/ci_admin_panel/uploads/ReLU.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jmmao_store`
--

CREATE TABLE `jmmao_store` (
  `jmmao_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `dis_percentage` int(11) NOT NULL,
  `from_avail` date NOT NULL,
  `to_avail` date NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jmmao_store`
--

INSERT INTO `jmmao_store` (`jmmao_id`, `name`, `logo`, `dis_percentage`, `from_avail`, `to_avail`, `website`) VALUES
(1, 'Name 1', 'http://localhost/ci_admin_panel/uploads/background.jpg', 23, '2018-10-01', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(2, 'Name 2', 'http://localhost/ci_admin_panel/uploads/background1.jpg', 32, '2018-10-10', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(3, 'Name 3', 'http://localhost/ci_admin_panel/uploads/background2.jpg', 54, '2018-10-01', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(4, 'Name 4', 'http://localhost/ci_admin_panel/uploads/background3.jpg', 12, '2018-10-01', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(5, 'Name 5', 'http://localhost/ci_admin_panel/uploads/background4.jpg', 87, '2018-10-01', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(6, 'Name 6', 'http://localhost/ci_admin_panel/uploads/background5.jpg', 43, '2018-10-03', '2018-11-12', 'https://i.imgur.com/FgWnQCx.jpg'),
(8, 'Name 7', 'http://localhost/ci_admin_panel/uploads/ReLU3.jpg', 43, '2018-11-07', '2018-11-07', 'https://en.wikipedia.org/wiki/Viola%E2%80%93'),
(9, 'Name 8', 'http://localhost/ci_admin_panel/uploads/chat.png', 54, '2018-11-08', '2018-11-06', 'www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `new_password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `admin_name`, `email`, `password`, `new_password`, `confirm_password`, `profile_img`) VALUES
(1, 'Ali Hassan', 'ali_hassan@outlook.com', 'pakistan12', 'pakistan12', 'pakistan12', 'http://localhost/ci_admin_panel/uploads/background5.jpg'),
(2, 'Yasir Umar', 'yasir_umar@outlook.com', 'karachi12', 'karachi12', 'karachi12', 'http://localhost/ci_admin_panel/uploads/background5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_management`
--
ALTER TABLE `ads_management`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `categories_management`
--
ALTER TABLE `categories_management`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `jmmao_store`
--
ALTER TABLE `jmmao_store`
  ADD PRIMARY KEY (`jmmao_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_management`
--
ALTER TABLE `ads_management`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories_management`
--
ALTER TABLE `categories_management`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jmmao_store`
--
ALTER TABLE `jmmao_store`
  MODIFY `jmmao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
