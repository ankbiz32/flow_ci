-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 07:56 AM
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
  `id` int(100) NOT NULL,
  `heading` varchar(2048) NOT NULL,
  `short_descr` varchar(1000) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(1024) NOT NULL,
  `content` longtext NOT NULL,
  `url_slug` varchar(500) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `authors_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `heading`, `short_descr`, `date`, `img`, `content`, `url_slug`, `tags`, `category_id`, `authors_id`, `created_at`, `updated_at`) VALUES
(1, 'Belly Breathing (For teachers) ', 'A Simple 5 Minutes Stress Buster Technique', '2021-02-03 18:30:00', 'Picture11.png', '<p class=\"MsoNormal\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">If you find yourself stressed often, here is a small tool to help you calm down.</span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">When was the last time you sat down and focused all your attention on nothing but just your breath?</span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Life may be full of stress, tension, worries and what not! You follow your daily routine, maintain expenses, keep up with the expectations of the people around you, which isn’t always an easy task. And, at the end of the day, you find yourself on your bed to finally get some rest. But, that doesn’t relieve you from your mental tension and stress, does it?</span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Regardless of all the tension and worries around you, did you know, there is something that you can do to relieve you from the stress and tension of the outer world? It is a simple exercise called </span><b><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;mso-ansi-font-weight:bold;\r\nfont-size:12.0000pt;\">‘Belly Breathing’. </span></b><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Nothing too complicated, you just have to follow some simple steps and focus your attention on your breathing!&nbsp;&nbsp;</span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Let’s try it!</span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">1)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Sit in a relaxed position.</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">2)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Now, close your eyes and bring your focus to your breath. </span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">3)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Notice the inflow and outflow of your breath. Observe your breath. You don’t have to control it, just observe it. What is it telling you about you?</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">4)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Now place one hand on your chest and the other on your belly. </span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">5)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Visualise the breath flowing in from your nose going all the way down to your belly. Hold it there for 3 seconds. With each inhale, invite joy, peace and happiness into your body.</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">6)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Slowly exhale the held breath in your belly, out from your feet and toes carrying with it all the stress, tension, anxiety or any discomfort stored in the body, slowly calming it down.</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">7)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Repeat it till you feel charged. Allow the freshness of life in your body with each inhale and release all that is heavy with each exhale.</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:36.0000pt;text-indent:-18.0000pt;mso-list:l0 level1 lfo1;\"><!--[if !supportLists]--><span style=\"font-family:Arial;font-size:12.0000pt;\">8)&nbsp;</span><!--[endif]--><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Do this for 5 minutes, then take 3 long breaths before you slowly open your eyes. </span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:0.0000pt;text-indent:0.0000pt;\"><br></p><p class=\"MsoNormal\" style=\"margin-left:0.0000pt;text-indent:0.0000pt;\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">Check with yourself and see how you feel after the belly breathing exercise.</span></p><p class=\"MsoNormal\" style=\"margin-left:0.0000pt;text-indent:0.0000pt;\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">With this small activity, you can take a break from your daily routine, relaxing and recharging yourself. Doing this activity will not sway away your life problems, but it will surely help you to tackle them with a peaceful mind.</span></p><p class=\"MsoNormal\" style=\"margin-left:0.0000pt;text-indent:0.0000pt;\"><span dir=\"LTR\" style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\">So, the next time you find yourself messed up in the doldrums of life, take out 5 minutes of your time and practice Belly Breathing!&nbsp;</span><span style=\"mso-spacerun:\'yes\';font-family:Arial;font-size:12.0000pt;\"><o:p></o:p></span></p>', 'belly-breathing-for-teachers', 'Breathing|Diaphragmatic breathing|Exercise|mental health|Mindfulness in plain English|Mindfulness for teachers|Mindfulness for stress', 9, NULL, '2021-02-17 05:10:06', '2021-02-17 05:10:06');

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
(1, 'Category1', '2020-01-24 10:08:04'),
(2, 'category2', '2021-02-13 18:03:16'),
(3, 'category3', '2021-02-13 18:03:16'),
(4, 'category4', '2021-02-13 18:03:16'),
(5, 'category5', '2021-02-13 18:03:16'),
(6, 'category6', '2021-02-13 18:03:16'),
(7, 'category7', '2021-02-13 18:03:16'),
(8, 'category8', '2021-02-13 18:03:16'),
(9, 'category9', '2021-02-13 18:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `img_src` varchar(500) DEFAULT NULL,
  `short_descr` varchar(500) DEFAULT NULL,
  `full_descr` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `heading`, `img_src`, `short_descr`, `full_descr`, `date`, `venue`, `created_at`, `updated_at`) VALUES
(1, 'Happiness and Well-being Workshop', 'event11.png', '', '<p class=\"MsoNormal\"><span dir=\"LTR\" style=\"\">Flow is all set to deliver a fun-packed session on happiness and well-being, which aims at re-energizing everyone’s waning spirits after having experienced a long period of isolation. This training program projects at giving new insights into the concept of happiness through various activities. Not only this, but every person attending the program is sure to get a space to explore, reflect and share their own personal ideas of happiness. Adding to the above there will be sharing of tools that the teachers can carry for lifetime to reorient and prioritize different aspects of their lives and well-being.</span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0000pt;line-height:106%;\"><span dir=\"LTR\" style=\"line-height: 106%;\">What to expect?</span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0pt; margin-left: 36pt; line-height: 106%;\"><!--[if !supportLists]-->-&nbsp;<!--[endif]--><span dir=\"LTR\" style=\"line-height: 106%;\">Experiential learning</span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0pt; margin-left: 36pt; line-height: 106%;\"><!--[if !supportLists]-->-&nbsp;<!--[endif]--><span dir=\"LTR\" style=\"line-height: 106%;\">Sharing of thoughts</span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0pt; margin-left: 36pt; line-height: 106%;\"><!--[if !supportLists]-->-&nbsp;<!--[endif]--><span dir=\"LTR\" style=\"line-height: 106%;\">Fun packed activities</span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0pt; margin-left: 36pt; line-height: 106%;\"><!--[if !supportLists]-->-&nbsp;<!--[endif]--><span dir=\"LTR\" style=\"line-height: 106%;\">Tips and tricks for overall well-being. </span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 8pt; margin-left: 36pt; line-height: 106%;\"><!--[if !supportLists]-->-&nbsp;<!--[endif]--><span dir=\"LTR\" style=\"line-height: 106%;\">Timeless tools to navigate life</span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span dir=\"LTR\"></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 8pt; margin-left: 0pt; line-height: 106%;\"><span dir=\"LTR\" style=\"line-height: 106%;\">Tap into the Flow for more fun and exciting events.</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 8pt; margin-left: 0pt; line-height: 106%;\"><span dir=\"LTR\" style=\"line-height: 106%;\"></span><span style=\"line-height: 106%;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"\">Facilitator’s name</span><span dir=\"LTR\" style=\"\">:&nbsp;<b>Mr. </b></span><span dir=\"LTR\" style=\"\"><b>Jenis Lunkad</b></span></p><p class=\"MsoNormal\"><span dir=\"LTR\" style=\"font-size: 13.6px;\"><span style=\"font-size: 13.6px;\">Co-facilitators</span>:&nbsp;<span style=\"font-weight: bolder;\">Mr.&nbsp;</span></span><span dir=\"LTR\" style=\"font-size: 13.6px;\"><span style=\"font-weight: bolder;\">Calvin Cubbins, Mrs. Raveena Bhui</span></span></p>', '31st January 2021', 'B.P Pujari English Medium School (Raipur)', '2021-02-17 04:58:22', '2021-02-17 04:58:22'),
(2, 'Free to Learn Our Way Program Launch', NULL, '', '<p class=\"p\" align=\"justify\" style=\"margin-top: 0pt; margin-bottom: 8pt;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b>FLOW</b> invites all the principals and coordinators of all the renowned schools of Jagdalpur to experience the program and get a glimpse of the journey that we are to embark on. <b>FLOW </b>began with a question,</span><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;</span><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">‘What was something that was not a part of my education, but I wish it was!’, and from then on, we are constantly striving to serve the future generations by adding every possible element of life that is of utmost importance.&nbsp;</span><o:p></o:p></p><p class=\"p\" align=\"justify\" style=\"margin-top: 0pt; margin-bottom: 8pt;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">FLOW does not only cater to one side of the coin, which is why we have also addressed the needs of the facilitators through the WOLF initiative program (Workshop on Learning and Facilitation) which is a mirror image of ‘FLOW’ as students are a mirror reflection of the teachers that tutor them for life.</span><o:p></o:p></p><p class=\"p\" align=\"justify\" style=\"margin-top: 0pt; margin-bottom: 8pt;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">The WOLF initiative program was created with an intent to provide the teachers an underpinning insight about purposeful teaching methods, soft skills development, lesson planning, phonetics, and work-life balance etc.&nbsp; We assure you these sessions cover just the tip of the iceberg.&nbsp;</span><o:p></o:p></p><p class=\"p\" align=\"justify\" style=\"margin-top: 0pt; margin-bottom: 8pt;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">The entire team at FLOW will be honored by your presence and we sincerely await your arrival. To get in touch with us and be a part of our program launch, kindly register at the link given below.</span></p>', '6th February 2021', 'TBA (Jagdalpur)', '2021-02-17 05:02:02', '2021-02-17 05:02:02');

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

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `help_text`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Gaurav Kiran', 'Teaching experience: 2.5+ years', 'I liked it very much, the whole program was well organized, the meditation and group activities part was amazing. This program can help students be more social and practical about their life.!', '2021-02-11 07:25:42', '2021-02-11 07:25:42'),
(2, 'Mrs.Anju Sood (Principal)', 'Teaching experience: 34+ years', 'An excellent program for teachers & students. It can aid schools in preparing the students to navigate the downsides and difficulties of life. It is a program that will definitely make a positive impact.', '2021-02-11 07:26:30', '2021-02-11 07:26:30'),
(5, 'Mrs. Laxmi Purana', 'Teaching experience: 15+ years', 'The training was engaging. It works on the social and emotional development of teachers and students alike. This program can help students be ready for what’s to come ahead.', '2021-02-17 04:49:58', '2021-02-17 04:49:58'),
(6, 'Garima singh', 'Teaching experience: 6+ years', 'The session was nice and refreshing. The program will have a great impact on the holistic development of all. I would recommend the program for the overall personality development of students and they can feel more confident about themselves.\r\nVery happy with the initiative and your dedication and passion towards the cause. Keep up the good work!', '2021-02-17 04:50:41', '2021-02-17 04:50:41'),
(7, 'Mrs.Shubhangi Maheshwari', '&nbsp;', 'I would recommend the program, especially the 9 modules for the students. It will help students in a holistic way adding to the academic studies inculcated in schools.', '2021-02-17 04:51:41', '2021-02-17 04:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_src` varchar(1000) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `img_or_vid` varchar(10) NOT NULL DEFAULT 'img',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_src`, `caption`, `img_or_vid`, `created_at`, `updated_at`) VALUES
(1, '16.jpeg', '', 'img', '2021-02-11 11:03:36', '2021-02-11 11:03:36'),
(2, '1.jpeg', '', 'img', '2021-02-11 11:03:36', '2021-02-11 11:03:36'),
(3, '8.jpeg', '', 'img', '2021-02-11 11:03:50', '2021-02-11 11:03:50'),
(4, '7.jpeg', '', 'img', '2021-02-11 11:03:50', '2021-02-11 11:03:50'),
(5, '6.jpeg', '', 'img', '2021-02-11 11:03:56', '2021-02-11 11:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `img_src` varchar(500) NOT NULL,
  `link` varchar(2000) NOT NULL DEFAULT '#',
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `date`, `img_src`, `link`, `status`) VALUES
(1, '2020-03-04 18:30:00', 'popup.jpeg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'info@flowmenow.in', '0771-4902000', '+91-8518920001', '9766720007', 'D-11, Quoram, VIP Square,\r\nGE Road, Raipur,\r\nChhattisgarh (492001)', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
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
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
