-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 04:40 PM
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

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `fk_city_id`, `area_name`, `status`) VALUES
(1, 6, 'Andheri', 1),
(2, 6, 'Kurla', 1),
(3, 6, 'Bendra', 1),
(4, 6, 'Borivali', 1),
(5, 6, 'Nalasopara', 1);

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
(3, 'Brunette', 'Test', 1, '2018-08-24 13:29:56', '0000-00-00 00:00:00'),
(4, 'BBW', 'Test', 1, '2018-08-24 13:30:13', '0000-00-00 00:00:00'),
(5, 'Blonde', 'Test', 1, '2018-08-24 13:30:32', '0000-00-00 00:00:00'),
(6, 'Curvy', 'Test', 1, '2018-08-24 13:31:14', '0000-00-00 00:00:00'),
(7, 'Enhanced Bust', 'Test', 1, '2018-08-24 13:31:31', '0000-00-00 00:00:00'),
(8, 'English Fluent', 'Test', 1, '2018-08-24 13:31:48', '0000-00-00 00:00:00'),
(9, 'MILF', 'Test', 1, '2018-08-24 13:32:06', '0000-00-00 00:00:00'),
(10, 'Mature', 'Test', 1, '2018-08-24 13:33:04', '0000-00-00 00:00:00'),
(11, 'Natural Bust', 'Test', 1, '2018-08-24 13:33:19', '0000-00-00 00:00:00'),
(12, 'Non Smoker', 'Test', 1, '2018-08-24 13:33:44', '0000-00-00 00:00:00'),
(13, 'Redhead', 'Test', 1, '2018-08-24 13:34:03', '0000-00-00 00:00:00'),
(14, 'Super Busty', 'Test', 1, '2018-08-24 13:34:44', '0000-00-00 00:00:00'),
(15, 'Fingering Anal Receiving', 'Test', 1, '2018-08-24 13:35:10', '0000-00-00 00:00:00'),
(16, 'Fisting Giving', 'Test', 1, '2018-08-24 13:35:51', '0000-00-00 00:00:00'),
(17, 'Intercourse - Anal', 'Test', 1, '2018-08-24 14:42:01', '0000-00-00 00:00:00');

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
(6, 'Mumbai', 1),
(7, 'Delhi', 1),
(8, 'Kolkatta', 1),
(9, 'Benglore', 1),
(10, 'Chennai', 1),
(11, 'Hydrabad', 1);

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
  `seeking_for` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fk_city_id` int(11) NOT NULL,
  `fk_area_id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `age`, `nationality`, `measurements`, `height`, `hair_colour`, `eye_colour`, `languages`, `price_one_hour`, `price_three_hour`, `price_over_night`, `seeking_for`, `contact_number`, `email_id`, `fk_city_id`, `fk_area_id`, `services`, `created_date`, `updated_date`, `status`) VALUES
(1, 'Neha', 25, 'indian', '36-24-36', '5.5', 'black', 'blue', 'hindi , english ', '15000', '25000', '45000', 'Man', '0000000000', 'test@gmail.com', 6, 1, '', '2018-08-23 16:55:23', '0000-00-00 00:00:00', 1),
(2, 'Neha', 25, 'indian', '36-24-36', '5.5', 'black', 'blue', 'hindi , english ', '15000', '25000', '45000', 'Man', '0000000000', 'test@gmail.com', 6, 3, '', '2018-08-23 17:03:57', '0000-00-00 00:00:00', 1),
(3, 'test', 25, 'indian', '36-24-36', '5.5', 'black', 'blue', 'hindi , english ', '15000', '25000', '45000', 'Man', '0000000000', 'test@gmail.com', 6, 3, '', '2018-08-23 17:13:17', '0000-00-00 00:00:00', 1),
(4, 'Neha', 25, 'indian', '36-24-36', '5.5', 'black', 'blue', 'hindi , english ', '15000', '25000', '45000', 'Man', '0000000000', 'test@gmail.com', 6, 2, '', '2018-08-23 17:37:45', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile_image`
--

CREATE TABLE `profile_image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `fk_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_image`
--

INSERT INTO `profile_image` (`id`, `image_name`, `fk_profile_id`) VALUES
(1, '742015f2e43b2223349e936bee99f671.jpg', 1),
(2, '27d60b7c2bd5ff908ae90c2efdcc8c3a.jpg', 1),
(3, '7887db85b5dbdcf0d340d30d099b3057.jpg', 1),
(4, '6d65735391fa7d383d909d4b7a44b55f.jpg', 1),
(5, 'c43bc074ae9a86b9128e8165671916d4.jpg', 1),
(6, '8a72593c79842d0ca93f25251b3a81eb.jpg', 1),
(7, '58b27f352efa3addb6b16a1b1340d3a8.jpg', 1),
(8, 'ab6e49b21570aac05297c22df5841d1d.jpg', 1),
(9, '7b94a350753863ba4ff178b3c091de64.jpg', 1),
(10, '41453f50b49a43350c6643cc815f55f2.jpg', 1),
(11, '291a2f99225c6e9edff43463113d7aee.jpg', 1),
(12, 'df400a92653716ad0b013d01168e7c5c.jpg', 1),
(13, 'ae7b49b306f5c6db0bb71b05737b9fb5.jpg', 1),
(14, 'd435eba57db248534dab0c847017c9f5.jpg', 1),
(15, '44fc8f0a078cf54841b874499f6af0b3.jpg', 3),
(16, '86f3c6388fe933a523bc27aa4e3d5de7.jpg', 3),
(17, 'a411aa0565524ef7a9b05f38c7798551.jpg', 3),
(18, '65c944a64047a3ddf177406aa5e29990.jpg', 3),
(19, 'fcb68ef8a463656f14a5c2e8e156f767.jpg', 3),
(20, '93f90c6c033ba1f0d755c8d88279359f.jpg', 3),
(21, '4feda52759b40de2aa3b8af7149066fe.jpg', 3),
(22, 'ac3ad78237048fc67b04f5c007beee61.jpg', 3),
(23, 'c3a2cb5c5f251fe6f3941fc14080a310.jpg', 4),
(24, 'dc2bb8e603c8b79cb4442e80393ae319.jpg', 4),
(25, '7500be73e8d94077453c91a077e9490f.jpg', 4),
(26, 'c29d3cef971c966884fbb2c79d37e0bf.jpg', 4);

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
(1, '30 Minutes Escorts', 'test', 1, '2018-08-24 12:43:38', '0000-00-00 00:00:00'),
(2, 'Asian Escorts', 'Test', 1, '2018-08-24 12:44:43', '0000-00-00 00:00:00'),
(3, 'Brazilian Escorts', 'Test', 1, '2018-08-24 12:45:00', '0000-00-00 00:00:00'),
(4, 'Busty Escorts', 'Test', 1, '2018-08-24 12:45:18', '0000-00-00 00:00:00'),
(5, 'Couples Service', 'Test', 1, '2018-08-24 12:45:41', '0000-00-00 00:00:00'),
(6, 'Dinner Dates', 'Test', 1, '2018-08-24 12:46:00', '0000-00-00 00:00:00'),
(7, 'Exclusive Gallery', 'Test', 1, '2018-08-24 12:46:52', '0000-00-00 00:00:00'),
(8, 'Mature Escorts', 'Test', 1, '2018-08-24 12:47:10', '0000-00-00 00:00:00'),
(9, 'Open Minded Escorts', 'Test', 1, '2018-08-24 12:47:31', '0000-00-00 00:00:00'),
(10, 'Petite Escorts', 'Test', 1, '2018-08-24 12:47:56', '0000-00-00 00:00:00'),
(11, 'Russian Escorts', 'Test', 1, '2018-08-24 12:48:18', '0000-00-00 00:00:00'),
(12, 'Water Sport Gallery', 'Test', 1, '2018-08-24 12:48:38', '0000-00-00 00:00:00'),
(13, 'Blonde Escorts', 'Test', 1, '2018-08-24 12:49:41', '0000-00-00 00:00:00'),
(14, 'Brunette Escorts', 'Test', 1, '2018-08-24 12:50:19', '0000-00-00 00:00:00'),
(15, 'CIM Escorts', 'Test', 1, '2018-08-24 12:50:38', '0000-00-00 00:00:00'),
(16, 'Curvy Escorts', 'Test', 1, '2018-08-24 12:50:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'site_contact_number', '000 000 0000'),
(2, 'site_emal_id', 'test@gmail.com'),
(3, 'site_name', 'Rinki Patel'),
(4, 'site_location', 'Bnaglore');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile_image`
--
ALTER TABLE `profile_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
