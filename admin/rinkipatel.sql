-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 04:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rinkipatel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email_id`, `contact_number`) VALUES
(1, 'admin', 'admin123', 'admin@admin.com', '9967313968');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_description`, `status`, `created_date`, `updated_data`) VALUES
(1, 'Petite Escorts', '<p>Whether you are in Bangalore for fun, traveling or work purposes, our girls can be your perfect companions. These girls will enable you to relax and have fun that you never thought you could have with petite women. We know that Bangalore has so much to offer and you don&rsquo;t want to enjoy your time here alone. Our petite escorts will make you extend your stay in Bangalore because they will give you an experience that you have never had with other women.Whether you are in Bangalore for fun, traveling or work purposes, our girls can be your perfect companions. These girls will enable you to relax and have fun that you never thought you could have with petite women. We know that Bangalore has so much to offer and you don&rsquo;t want to enjoy your time here alone. Our petite escorts will make you extend your stay in Bangalore because they will give you an experience that you have never had with other women.</p>\r\n\r\n<p>Whether you are in Bangalore for fun, traveling or work purposes, our girls can be your perfect companions. These girls will enable you to relax and have fun that you never thought you could have with petite women. We know that Bangalore has so much to offer and you don&rsquo;t want to enjoy your time here alone. <strong>Our petite escorts will make you extend your stay in Bangalore</strong> because they will give you an experience that you have never had with other women.Whether you are in Bangalore for fun, traveling or work purposes, our girls can be your perfect companions. These girls will enable you to relax and have fun that you never thought you could have with petite women. We know that Bangalore has so much to offer and you don&rsquo;t want to enjoy your time here alone. Our petite escorts will make you extend your stay in Bangalore because they will give you an experience that you have never had with other women.</p>\r\n', 1, '2018-08-21 16:05:09', '0000-00-00 00:00:00'),
(2, 'Milf Escorts', '<p>Almost all of our high class escorts are stunning and young, because the majority of our clientele simply appreciates their company. However, even though all our exclusive escorts are intelligent and eloquent, not everyone wants to have a dinner date with a very young lady. We know some gentlemen for example, who like to talk about The Beatles, life before the iPhone, The Jerry Lewis Show, just to name a few. In that case, it would be nice if the lady concerned is able to contribute to the conversation. Ladies who think of Jacky O as a style icon, instead of Kim Kardashian. Of course, we have a number of ladies in our portfolio who are at least in their thirties. We know of no better combination than a beautiful lady with a background and a career of her own, and who looks like the woman of your dreams. Society Service is, after all, a &lsquo;dream factory&rsquo;: we make your dreams come true, if only for a limited amount of time. But that&rsquo;s inherent to a dream.Almost all of our high class escorts are stunning and young, because the majority of our clientele simply appreciates their company. However, even though all our exclusive escorts are intelligent and eloquent, not everyone wants to have a dinner date with a very young lady. We know some gentlemen for example, who like to talk about The Beatles, life before the iPhone, The Jerry Lewis Show, just to name a few. In that case, it would be nice if the lady concerned is able to contribute to the conversation. Ladies who think of Jacky O as a style icon, instead of Kim Kardashian. Of course, we have a number of ladies in our portfolio who are at least in their thirties. We know of no better combination than a beautiful lady with a background and a career of her own, and who looks like the woman of your dreams. Society Service is, after all, a &lsquo;dream factory&rsquo;: we make your dreams come true, if only for a limited amount of time. But that&rsquo;s inherent to a dream.Almost all of our high class escorts are stunning and young, because the majority of our clientele simply appreciates their company. However, even though all our exclusive escorts are intelligent and eloquent, not everyone wants to have a dinner date with a very young lady. We know some gentlemen for example, who like to talk about The Beatles, life before the iPhone, The Jerry Lewis Show, just to name a few. In that case, it would be nice if the lady concerned is able to contribute to the conversation. Ladies who think of Jacky O as a style icon, instead of Kim Kardashian. Of course, we have a number of ladies in our portfolio who are at least in their thirties. We know of no better combination than a beautiful lady with a background and a career of her own, and who looks like the woman of your dreams. Society Service is, after all, a &lsquo;dream factory&rsquo;: we make your dreams come true, if only for a limited amount of time. But that&rsquo;s inherent to a dream.</p>\r\n', 1, '2018-08-21 16:33:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `status`) VALUES
(6, 'Mumbai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `measurements` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `hair_colour` varchar(255) NOT NULL,
  `eye_colour` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `price_one_hour` varchar(255) NOT NULL,
  `price_three_hour` varchar(255) NOT NULL,
  `price_over_night` varchar(255) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_area_id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `seeking_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_image`
--

CREATE TABLE `profile_image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `fk_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `services_description`, `status`, `created_date`, `updated_data`) VALUES
(2, 'BBW Escorts', '<p>You will find many BBW courtesans and Bangalore BBW providers are available for airport calls. Bangalore has several airports, including Bangalore, Bangalore City, and Bangalore airport. All these airports have large hotels nearby, the ideal place to spend some time with a Big Beautiful Woman before flying out. In conclusion look for a <strong>Bangalore BBW escort&nbsp;</strong>at an airport. In other words visitors to Bangalore are spoilt for choice when selecting a Bangalore BBW escort.</p>\r\n', 1, '2018-08-21 15:09:35', '0000-00-00 00:00:00'),
(3, 'Blonde Escorts', '<p>She can convoy you while you gamble at one of the high roller tables. With an exciting blonde woman by your side, your confidence level at the tables can soar to new heights. But there&#39;s more to Bangalore than casinos and nightclubs. How about letting her go with you to one of the big shows in town? Bangalore shows are known worldwide for being some of the best around. What better way to see one than with a beautiful woman by your side. Then end the night with her in your hotel room. Imagine her dressed in sexy lingerie as she dances for you while you sit back and relax.</p>\r\n', 1, '2018-08-21 15:10:16', '0000-00-00 00:00:00'),
(4, 'College Girls Escorts', '<p>These sexy companions are between 18 years and 20 years old. His commitment to higher education is a layer of this grand, well-rounded undergrad which is eager to meet and make you happy. Book your appointment with our These sexy companions are between 18 years and 20 years old. His commitment to higher education is a layer of this grand, well-rounded undergrad which is eager to meet and make you happy. Book your appointment with our These sexy companions are between 18 years and 20 years old. His commitment to higher education is a layer of this grand, well-rounded undergrad which is eager to meet and make you happy. Book your appointment with our These sexy companions are between 18 years and 20 years old. His commitment to higher education is a layer of this grand, well-rounded undergrad which is eager to meet and make you happy. Book your appointment with our</p>\r\n', 1, '2018-08-21 15:10:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_image`
--
ALTER TABLE `profile_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_image`
--
ALTER TABLE `profile_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
