-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2023 at 01:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345', '2023-03-21 16:12:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Test1', 'test1@gmail.com', 'new testing', 'kbvkjdfnvkn khhkshfs hkdsfhskhf shdlfkjslf lsldfjlskjf lsjfljslfj', '2023-03-21 16:01:38.063562'),
(2, 'Test12', 'test12@gmail.com', 'maths', 'lnfk flsjlf lsjfljsl fljslfjls lfjlsjflk', '2023-03-21 16:02:44.606919');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `id` int(10) NOT NULL,
  `gym_name` varchar(100) NOT NULL,
  `gym_contact` bigint(100) NOT NULL,
  `gym_whatsapp_contact` bigint(100) NOT NULL,
  `gym_address` longtext NOT NULL,
  `gym_photo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`id`, `gym_name`, `gym_contact`, `gym_whatsapp_contact`, `gym_address`, `gym_photo`, `status`, `created_at`) VALUES
(2, 'MK Fitness Hub', 7689044332, 8888888888, '3 upstairs Punjab and Sind Bank, Urban Estate phase II, Jalandhar, Punjab 144002', 'gallery1.png', 'Active', '2023-03-23 02:37:43.002369'),
(3, 'Rugged Gym', 9999999999, 8756378275, 'Garha Rd, opposite Taj Resturant, Choti Baradari Part 2, Chhoti Barandari II, Jalandhar, Punjab 144001', 'gallery1.png', 'Active', '2023-03-23 02:37:45.828068'),
(4, 'Gold Gym', 5566676447, 76785764839, '5th Floor, Rampaa Centre Point, above KFC Restaurant, Model Town, Jalandhar, Punjab 144003', 'gallery2.png', 'Active', '2023-03-23 02:37:49.591858'),
(5, 'Chris Gethin', 5937598739, 7890987656, 'Geeta Mandir, 4th floor, 593 Infinity Mall, Opp, Model Town, Jalandhar, Punjab 144003', 'gallery3.png', 'Active', '2023-03-23 02:37:53.645689'),
(6, 'Magic Gym', 6789876566, 6789012345, '17 A, Kalia Colony, Jalandhar, Punjab 144008', 'gallery2.png', 'Active', '2023-03-23 02:37:57.805532');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) NOT NULL,
  `gym_id` int(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_amount` bigint(100) NOT NULL,
  `package_photo` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `gym_id`, `package_name`, `package_amount`, `package_photo`, `description`, `status`, `created_at`) VALUES
(2, 2, 'premium', 6543, 'team1.png', 'dfgh', 'Active', '2023-03-24 12:03:19.296340'),
(3, 5, 'Gold Membership', 6660, 'team2.png', 'abc', 'Active', '2023-03-24 12:03:27.459420'),
(4, 6, 'silver package', 600, 'gallery3.png', 'abc', 'Active', '2023-03-24 12:13:31.481817');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `id` int(10) NOT NULL,
  `gym_id` int(10) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`id`, `gym_id`, `start_time`, `end_time`, `status`, `created_at`) VALUES
(1, 2, '11:00AM', '12:00AM', 'Active', '2023-03-22 14:02:12.112090'),
(2, 4, '6:00AM', '9:00PM', 'Active', '2023-03-23 02:28:17.542058'),
(3, 5, '6:00AM', '9:00PM', 'Active', '2023-03-23 02:28:27.840810');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `address`, `status`, `created_at`) VALUES
(1, 'daman', 'daman@gmail.com', '12345', 7689044332, 'nksn', 'Active', '2023-03-22 09:39:03.628060');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
