-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'HTML-5'),
(2, 'CSS-3'),
(4, 'Laravel'),
(5, 'jQuery'),
(7, 'NTRC-Global');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `content`, `image`) VALUES
(3, 'Reconstruction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'content/UploadContentPic/p2.jpg'),
(4, 'Smart Houses', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'content/UploadContentPic/p3.jpg'),
(5, 'Construction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'content/UploadContentPic/p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `features_categories`
--

CREATE TABLE `features_categories` (
  `features_id` int(11) NOT NULL,
  `features_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features_categories`
--

INSERT INTO `features_categories` (`features_id`, `features_name`) VALUES
(1, 'ABOUT ALL'),
(4, 'ISOLATION'),
(5, 'BULDINGS'),
(6, 'IINTERIOR'),
(7, 'PLUMBING');

-- --------------------------------------------------------

--
-- Table structure for table `features_content`
--

CREATE TABLE `features_content` (
  `categories_id` int(11) NOT NULL,
  `features_id` varchar(30) NOT NULL,
  `categories_title` varchar(100) NOT NULL,
  `categories_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features_content`
--

INSERT INTO `features_content` (`categories_id`, `features_id`, `categories_title`, `categories_image`) VALUES
(1, '1', 'HOUSE LA VANCI PLUMN', 'features/upload/j1.jpg'),
(2, '4', 'HOUSE LA VANCI PLUMN', 'features/upload/j2.jpg'),
(3, '5', 'HOUSE LA VANCI PLUMN', 'features/upload/j3.jpg'),
(4, '6', 'HOUSE LA VANCI PLUMN', 'features/upload/j4.jpg'),
(5, '7', 'HOUSE LA VANCI PLUMN', 'features/upload/j5.jpg'),
(6, '4', 'HOUSE LA VANCI PLUMN', 'features/upload/p1.jpg'),
(7, '5', 'HOUSE LA VANCI PLUMN', 'features/upload/p2.jpg'),
(8, '7', 'HOUSE LA VANCI PLUMN', 'features/upload/p3.jpg'),
(9, '7', 'HOUSE LA VANCI PLUMN', 'features/upload/p3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`) VALUES
(5, 'SERVICES'),
(7, 'FEATURE'),
(8, 'ABOUT US'),
(9, 'OUR WORK'),
(10, 'NEWS'),
(13, 'CONTACT US');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `date`) VALUES
(1, 'HTML-5', 'This is so good', 'none', '2018-12-04'),
(2, 'CSS-3', 'This is very good', 'none', '2018-12-24'),
(3, 'PHP', 'dsfsd', 'upload/IMG_8240.JPG', '2018-12-15'),
(4, 'Framework', 'this is not so good', 'upload/IMG_8222.JPG', '2018-12-29'),
(5, 'PHP', 'fdgrdg', 'upload/1.jpg', '2018-12-30'),
(6, 'PHP', 'gyregerg', 'upload/author.jpg', '2018-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_title` varchar(300) NOT NULL,
  `services_description` varchar(1000) NOT NULL,
  `services_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_title`, `services_description`, `services_image`) VALUES
(1, 'WE PROVIDING PERSONALIZED AND HIGH QUALITY SERVICES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'services/upload/work.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(800) DEFAULT NULL,
  `image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `content`, `image`) VALUES
(1, 'VIRTUALL BULID YOUR HOUSE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been             the industry\'s standard dummy.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `name`, `designation`, `image`) VALUES
(1, 'JOHN SING', 'CIVIL ENGINEER', 'content/UploadContentPic/team1'),
(2, 'ALEX KEVIN', 'CONSTRUCTION ASSISTA', 'content/UploadContentPic/team2'),
(3, 'PETERSON RONG', 'CONSTRUCTION MANAGER', 'content/UploadContentPic/team3'),
(4, 'ROHAN HOKOS', 'CELECTRICIANS', 'content/UploadContentPic/team4');

-- --------------------------------------------------------

--
-- Table structure for table `team_social`
--

CREATE TABLE `team_social` (
  `id` int(11) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `google` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) NOT NULL,
  `description` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_social`
--

INSERT INTO `team_social` (`id`, `mobile`, `facebook`, `twitter`, `google`, `instagram`, `description`) VALUES
(1, '786830974302', 'johnsing/facebook.com', 'johnsing/twitter.com', 'johnsing/twitter.com', 'johnsing/instagram.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text Lorem Ipsum text of the printing .');

-- --------------------------------------------------------

--
-- Table structure for table `top_header`
--

CREATE TABLE `top_header` (
  `id` int(11) NOT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `twitter` varchar(30) DEFAULT NULL,
  `google` varchar(30) DEFAULT NULL,
  `wifi` varchar(30) DEFAULT NULL,
  `linkedin` varchar(30) DEFAULT NULL,
  `youtube` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `store_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_header`
--

INSERT INTO `top_header` (`id`, `facebook`, `twitter`, `google`, `wifi`, `linkedin`, `youtube`, `mobile`, `email`, `store_date`) VALUES
(1, 'constraction/facebook.com', 'constraction/twitter.com', 'constraction/google.com', 'constraction/wifi.com', 'constraction/linkedin.com', 'constraction/youtube.com', '+ (1800) 456 7890', 'info@construction.com', '2018-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `total_work`
--

CREATE TABLE `total_work` (
  `id` int(11) NOT NULL,
  `project` varchar(20) DEFAULT NULL,
  `cliant` int(11) NOT NULL,
  `member` varchar(30) NOT NULL,
  `award` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_work`
--

INSERT INTO `total_work` (`id`, `project`, `cliant`, `member`, `award`) VALUES
(1, '356', 105, '400', '097');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(7, 'admin', 'admin@gmail.com', '1234', '1234'),
(8, 'rakib', 'rakib@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_categories`
--
ALTER TABLE `features_categories`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `features_content`
--
ALTER TABLE `features_content`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_social`
--
ALTER TABLE `team_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_header`
--
ALTER TABLE `top_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_work`
--
ALTER TABLE `total_work`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `features_categories`
--
ALTER TABLE `features_categories`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `features_content`
--
ALTER TABLE `features_content`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `team_social`
--
ALTER TABLE `team_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `top_header`
--
ALTER TABLE `top_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `total_work`
--
ALTER TABLE `total_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
