-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 07:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hifix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 8849026957, '123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(7, 'CG-Road', 1),
(8, 'race-court', 2),
(9, 'navrangpura', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahemdabad'),
(2, 'Rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `contact`, `address`, `pincode`, `city_id`, `area_id`, `password`) VALUES
(6, 'jay', 'jay@gmail.com', 9990003332, 'asdvfgbh adsfg ', 382151, 1, 7, '123'),
(7, 'Ajay', 'ajay@gmail.com', 9078993239, 'sadfghjs dfghj', 382151, 1, 7, '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `customer_id`, `date`, `message`) VALUES
(3, 6, '2022-02-21', 'TESTING');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_worker`
--

CREATE TABLE `feedback_worker` (
  `feedback_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_worker`
--

INSERT INTO `feedback_worker` (`feedback_id`, `worker_id`, `date`, `message`) VALUES
(2, 7, '2022-02-21', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `name`, `email`, `contact`, `subject`, `message`, `date`) VALUES
(2, 'jay', 'jay@gmail.com', 9990003332, 'testing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`cart_id`, `customer_id`, `event_id`, `order_date`, `price`, `status`) VALUES
(1, 6, 17, '2022-02-22', '5000.00', 'completed'),
(2, 7, 17, '2022-02-22', '5000.00', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `event_id` int(5) NOT NULL,
  `worker_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `small_description` text NOT NULL,
  `cat_id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `budget` varchar(10) NOT NULL,
  `veg` varchar(10) NOT NULL,
  `nveg` varchar(10) NOT NULL,
  `fdesc` text NOT NULL,
  `music` varchar(50) NOT NULL,
  `t1` varchar(100) NOT NULL,
  `t2` varchar(100) NOT NULL,
  `t3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_info`
--

INSERT INTO `post_info` (`event_id`, `worker_id`, `title`, `description`, `small_description`, `cat_id`, `image`, `post_date`, `budget`, `veg`, `nveg`, `fdesc`, `music`, `t1`, `t2`, `t3`) VALUES
(17, 7, 'Test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, '1515407278_Hotel_Facade.jpg', '2022-02-21', '5000', '300', '500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3000', 'food.jpg', 'IMG-20200220-WA0005.jpg', 'new.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`cat_id`, `cat_name`) VALUES
(1, 'Testings'),
(2, 'Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `experiance` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `name`, `email`, `contact`, `address`, `pincode`, `city_id`, `area_id`, `cat_id`, `experiance`, `date`, `password`) VALUES
(7, 'rahul', 'rahul@gmail.com', 9099789086, 'sadfgsdsf dsfghsdfg ', 382151, 1, 7, 2, '2 year', '2022-02-21', '123');

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
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `feedback_worker`
--
ALTER TABLE `feedback_worker`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_id` (`worker_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `cat_id` (`cat_id`);

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
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback_worker`
--
ALTER TABLE `feedback_worker`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback_worker`
--
ALTER TABLE `feedback_worker`
  ADD CONSTRAINT `feedback_worker_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `post_info` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_info`
--
ALTER TABLE `post_info`
  ADD CONSTRAINT `post_info_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_info_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `service` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `worker_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `worker_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `service` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
