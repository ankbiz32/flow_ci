-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 08:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `bid` int(20) NOT NULL,
  `heading` varchar(2048) NOT NULL,
  `short_descr` varchar(1000) DEFAULT NULL,
  `date` date NOT NULL,
  `img` varchar(1024) NOT NULL,
  `content` longtext NOT NULL,
  `tags_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `authors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`bid`, `heading`, `short_descr`, `date`, `img`, `content`, `tags_id`, `categories_id`, `authors_id`) VALUES
(1, 'How mobile apps are taking over the web apps.', '0', '2020-02-28', '1.jpg', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Whichever country we may live in, we always have a special place for our mother lands. The economic condition of the country plays a massive role in our lives. However, there are people who always criticize the country and its government for not doing enough. Through this blog, I intend to encourage the youth to act instead of criticizing. Act for what you don’t like, change it.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">But, the importance of the country’s economic condition needs to be understood for anyone to get encouraged. I have tried doing this by comparing personal growth to economic development. This will help you relate to the country and its economy in a better way. Because we need to stand in someone else’s shoes to understand their situation, right?</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">We all know what does personal growth and economic development means separately. But, have you ever thought that both of these concepts work on similar lines? As in, if you have some personal goals, the economy has it too. Let’s see more about this similarity below.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Let’s take Rostow’s economic growth model for the comparison. Walt Whitman Rostow was an economic historian and according to him, there are five stages in economic growth. The stages are:</p>', 0, 0, 0),
(25, 'Security rules to be made more strict by IT industries.', '0', '2020-02-28', '2.jpg', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Whichever country we may live in, we always have a special place for our mother lands. The economic condition of the country plays a massive role in our lives. However, there are people who always criticize the country and its government for not doing enough. Through this blog, I intend to encourage the youth to act instead of criticizing. Act for what you don’t like, change it.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">But, the importance of the country’s economic condition needs to be understood for anyone to get encouraged. I have tried doing this by comparing personal growth to economic development. This will help you relate to the country and its economy in a better way. Because we need to stand in someone else’s shoes to understand their situation, right?</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">We all know what does personal growth and economic development means separately. But, have you ever thought that both of these concepts work on similar lines? As in, if you have some personal goals, the economy has it too. Let’s see more about this similarity below.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Let’s take Rostow’s economic growth model for the comparison. Walt Whitman Rostow was an economic historian and according to him, there are five stages in economic growth. The stages are:</p>', 0, 0, 0),
(26, 'New age of drones is coming.', '0', '2020-02-28', 'blur-close-up-design-focus-257699.jpg', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Whichever country we may live in, we always have a special place for our mother lands. The economic condition of the country plays a massive role in our lives. However, there are people who always criticize the country and its government for not doing enough. Through this blog, I intend to encourage the youth to act instead of criticizing. Act for what you don’t like, change it.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">But, the importance of the country’s economic condition needs to be understood for anyone to get encouraged. I have tried doing this by comparing personal growth to economic development. This will help you relate to the country and its economy in a better way. Because we need to stand in someone else’s shoes to understand their situation, right?</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">We all know what does personal growth and economic development means separately. But, have you ever thought that both of these concepts work on similar lines? As in, if you have some personal goals, the economy has it too. Let’s see more about this similarity below.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Let’s take Rostow’s economic growth model for the comparison. Walt Whitman Rostow was an economic historian and according to him, there are five stages in economic growth. The stages are:</p>', 0, 0, 0),
(27, 'SpaceX to launch another rocket.', '0', '2020-02-28', 'burning-dangerous-dark-exploration-355938.jpg', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Whichever country we may live in, we always have a special place for our mother lands. The economic condition of the country plays a massive role in our lives. However, there are people who always criticize the country and its government for not doing enough. Through this blog, I intend to encourage the youth to act instead of criticizing. Act for what you don’t like, change it.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">But, the importance of the country’s economic condition needs to be understood for anyone to get encouraged. I have tried doing this by comparing personal growth to economic development. This will help you relate to the country and its economy in a better way. Because we need to stand in someone else’s shoes to understand their situation, right?</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">We all know what does personal growth and economic development means separately. But, have you ever thought that both of these concepts work on similar lines? As in, if you have some personal goals, the economy has it too. Let’s see more about this similarity below.</p><p style=\"padding: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 1.8;\">Let’s take Rostow’s economic growth model for the comparison. Walt Whitman Rostow was an economic historian and according to him, there are five stages in economic growth. The stages are:</p>', 0, 0, 0),
(29, 'Industrial blog', '0', '2020-03-05', 'internship3.jpg', '<p>Hi</p>', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

CREATE TABLE `blog_authors` (
  `id` int(11) NOT NULL,
  `author` varchar(1024) NOT NULL,
  `author_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_authors`
--

INSERT INTO `blog_authors` (`id`, `author`, `author_date`) VALUES
(107, 'Ankur', '2020-01-24 10:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(1024) NOT NULL,
  `category_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category`, `category_date`) VALUES
(18, 'Economy', '2020-01-24 10:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(1024) NOT NULL,
  `tag_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag`, `tag_date`) VALUES
(1, 'writing', '2020-01-19 11:52:03'),
(2, 'social media marketing', '2020-01-19 11:52:03'),
(3, 'web', '2020-01-19 11:52:24'),
(4, 'digital marketing', '2020-01-19 11:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `org_name` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `short_descr` varchar(500) NOT NULL,
  `full_descr` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `help_text` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1000) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `file_src` varchar(500) NOT NULL,
  `link_src` varchar(1024) NOT NULL,
  `file_or_link` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `content`, `date`, `file_src`, `link_src`, `file_or_link`) VALUES
(1, 'Some announcement heres', '2020-03-05', 'g1.jpg', '', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `role` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pwd`, `fname`, `lname`, `email`, `status`, `role`) VALUES
(1, 'admin_flow', '$2y$10$WGsZtZHatAOxnnkIXOI2LOgO4oEIUCrfNDdZVocwOV2mCicf3bTUi', 'Admin', ' ', 'info@flowmenow.in', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webprofile`
--

CREATE TABLE `webprofile` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `fblink` varchar(250) NOT NULL,
  `instalink` varchar(250) NOT NULL,
  `linkedinlink` varchar(250) NOT NULL,
  `latitude` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address`, `fblink`, `instalink`, `linkedinlink`, `latitude`, `longitude`) VALUES
(1, 'info@flowmenow.in', '0771-4902000', '+91-9766720007', '9766720007', '', 'www.facebook.com/', 'www.instagram.com/', 'www.linkedin.com/', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog_authors`
--
ALTER TABLE `blog_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `blog_authors`
--
ALTER TABLE `blog_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
