-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 06:26 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `aadhaar` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `guest` int DEFAULT NULL,
  `arrived` int DEFAULT NULL,
  `room_no` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `cus_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `name`, `check_in`, `check_out`, `aadhaar`, `address`, `guest`, `arrived`, `room_no`, `amount`, `cus_id`) VALUES
(3, 'Mohit Sharma (Bowler)', '2022-11-20', '2022-11-22', '123456789876', 'Chhatarpur, Delhi', 2, 0, 1, 1600, 1),
(4, 'Rohit Sharma', '2022-11-20', '2022-11-23', '123456789023', 'Mumbai, Mharastra', 1, 0, 11, 4800, 7),
(5, 'Virat Kohli', '2022-11-22', '2022-11-23', '120024567823', 'Guwahati, Assam', 3, 0, 12, 1600, 6),
(6, 'M.S. Dhoni', '2022-11-18', '2022-11-22', '123456789012', 'Rachi, Jharkhand', 3, 0, 2, 3200, 6),
(7, 'Suresh Raina', '2022-12-11', '2022-12-13', '123456789876', 'Karnal, Haryana', 1, 0, 3, 1600, 6);

-- --------------------------------------------------------

--
-- Table structure for table `booking_req`
--

CREATE TABLE `booking_req` (
  `req_id` int NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `aadhar_img` varchar(300) DEFAULT NULL,
  `cus_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cleaning_staff`
--

CREATE TABLE `cleaning_staff` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_add` varchar(100) NOT NULL,
  `staff_contact` varchar(30) NOT NULL,
  `shift` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cleaning_staff`
--

INSERT INTO `cleaning_staff` (`staff_id`, `staff_name`, `staff_add`, `staff_contact`, `shift`) VALUES
(1, 'Mahesh Babu', 'Balia, Bihar', '8734567890', 0),
(3, 'Himmat Valia', 'Shimla, Himachal Pradesh', '8912345670', 1),
(4, 'Lav Kushwa', 'Pune, Maharashtra', '9865321457', 1),
(5, 'Raj Kumar', 'Jaipur, Rajisthan', '7812345690', 0),
(6, 'Ashish Vijay', 'Aligarh, Uttar Pradesh', '9786543210', 0),
(7, 'Vijay Pihal', 'Manesar,', '7644435720', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cleans`
--

CREATE TABLE `cleans` (
  `sr_no` int NOT NULL,
  `staff_id` int NOT NULL,
  `room_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sr_no` int NOT NULL,
  `addres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `map` varchar(300) NOT NULL,
  `phn1` varchar(30) NOT NULL,
  `phn2` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sr_no`, `addres`, `map`, `phn1`, `phn2`, `email`) VALUES
(1, ' Khatu Shyam Ji, Sikar, Rajasthan', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d442.9111731460813!2d75.4044201!3d27.3666764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396ced63be62c27f%3A0xaed47ced1019e240!2sKhatu%20syam%20baba%20mandir%20rajasthan!5e0!3m2!1sen!2sin!4v1668060431224!5m2!1sen!2sin', ' +918963838178', ' +919599854196', 'iitgmohitsharma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `cus_id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `verified` int NOT NULL,
  `Pass` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `custumer`
--

INSERT INTO `custumer` (`cus_id`, `name`, `email`, `phone`, `address`, `dob`, `verified`, `Pass`) VALUES
(1, 'Bhavya', 'pbhavya@gmail.com', '9876543210', 'Delhi', '2000-07-14', 1, 'abc123'),
(2, 'Monu', 'monu@iitg.ac.in', '7225893731', 'Indore,  M.P.', '1999-10-10', 1, 'abc1234'),
(3, 'Subrata', 'subrata@gmail.com', '9999825003', 'West Bengal', '2000-04-26', 1, 'abc12345'),
(4, 'Deepak', 'deep@gmail.com', '8586932147', 'Bihar', '1999-03-19', 1, 'abc123456'),
(6, 'Bhavya', 'abstract-programmer', '9876543210', 'South Delhi, Delhi', '2022-11-06', 1, 'Qwerty@123'),
(7, 'Mohit', 'mohit@gmail.com', '987643210', 'Jaipur, Rajasthan.', '2022-11-12', 1, 'abcd@123'),
(8, 'Mohit Sharma', 'mohitsharma@iitg.com', '9876543210', '123456', '2022-11-03', 1, 'Abc@1234');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `fr_id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`fr_id`, `name`, `description`) VALUES
(1, 'AC', ''),
(2, 'Wi-Fi', ''),
(3, 'Spa', ''),
(4, 'TV', ''),
(5, 'Mini-fridge', ''),
(24, 'Room Heater', ''),
(25, 'Restaurant', NULL),
(26, 'Dry Cleaning / Laundry Service', NULL),
(27, 'Wheelchair Access', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_owner`
--

CREATE TABLE `hotel_owner` (
  `owner_id` int NOT NULL,
  `o_username` varchar(30) NOT NULL,
  `o_pass` varchar(30) NOT NULL,
  `o_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel_owner`
--

INSERT INTO `hotel_owner` (`owner_id`, `o_username`, `o_pass`, `o_email`) VALUES
(1, 'abstract-programmer', 'Qwerty@123', 'abst.prog@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `image`, `title`) VALUES
(1, '20220905_164047.jpg', 'yo'),
(2, '20220905_164047.jpg', 'Hello'),
(3, '20220905_164047.jpg', 'Hello'),
(4, '20220905_164125.jpg', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `query_no` int NOT NULL,
  `q_datetime` datetime DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `cus_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`query_no`, `q_datetime`, `message`, `cus_id`) VALUES
(1, '2022-11-04 11:59:58', 'What is the price of AC room.', 1),
(2, '2022-11-04 15:14:20', 'well done', 2),
(3, '2022-11-04 15:14:48', 'Good job keep it up.', 3),
(4, '2022-11-04 15:15:23', 'pani pila do.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_add` varchar(100) NOT NULL,
  `staff_contact` varchar(30) NOT NULL,
  `shift` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`staff_id`, `staff_name`, `staff_add`, `staff_contact`, `shift`) VALUES
(1, 'Kishore Kumar', 'Delhi', '7885964313', 1),
(2, 'Chirag Patel', 'Uttar Pradesh', '9815654136', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resolve`
--

CREATE TABLE `resolve` (
  `sr_no` int NOT NULL,
  `staff_id` int NOT NULL,
  `query_no` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resolve`
--

INSERT INTO `resolve` (`sr_no`, `staff_id`, `query_no`) VALUES
(1, 1, 1),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int NOT NULL,
  `availibility` int NOT NULL,
  `room_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `availibility`, `room_id`) VALUES
(1, 0, 1),
(2, 0, 1),
(3, 0, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 2),
(7, 1, 2),
(8, 1, 2),
(9, 1, 2),
(10, 1, 2),
(11, 0, 3),
(12, 0, 3),
(13, 1, 3),
(14, 1, 3),
(15, 1, 3),
(16, 1, 4),
(17, 1, 4),
(18, 1, 4),
(19, 1, 4),
(20, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room_image`
--

CREATE TABLE `room_image` (
  `img_id` int NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_id` int NOT NULL,
  `price` int NOT NULL,
  `capacity` int NOT NULL,
  `description` varchar(500) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img_loc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_id`, `price`, `capacity`, `description`, `name`, `img_loc`) VALUES
(1, 800, 3, 'Single bed, non-AC room with geyser, WiFi & 24/7 room service is available.', 'Deluxe Rooms', 'images/rooms/room1.jpg'),
(2, 1200, 6, 'Double bed, non-AC room with geyser, WiFi & 24/7 room service is available.\n', 'Double-Deluxe Rooms', 'images/rooms/room2.jpg'),
(3, 1600, 3, 'Single-bed AC room with geyser, Wi-Fi, and room service available 24/7.', 'Prime Rooms', 'images/rooms/room3.jpg'),
(4, 2100, 6, 'Double-bed AC room with geyser, Wi-Fi, and room service available 24/7.', 'Double-Prime Rooms', 'images/rooms/room4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rt_feature`
--

CREATE TABLE `rt_feature` (
  `sr_no` int NOT NULL,
  `fr_id` int NOT NULL,
  `room_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rt_feature`
--

INSERT INTO `rt_feature` (`sr_no`, `fr_id`, `room_id`) VALUES
(1, 4, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 3),
(5, 4, 3),
(6, 3, 3),
(7, 4, 2),
(8, 2, 2),
(9, 3, 2),
(10, 1, 4),
(11, 2, 4),
(12, 3, 4),
(13, 4, 4),
(14, 5, 4),
(24, 24, 2),
(25, 24, 3),
(26, 24, 4),
(27, 1, 1),
(28, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rt_image`
--

CREATE TABLE `rt_image` (
  `sr_no` int NOT NULL,
  `img_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'Happy Stay', 'This holiday season, make the most of every moment with us. Take pleasure in the perfect escape.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `booking_req`
--
ALTER TABLE `booking_req`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `cleaning_staff`
--
ALTER TABLE `cleaning_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `cleans`
--
ALTER TABLE `cleans`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `hotel_owner`
--
ALTER TABLE `hotel_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`query_no`,`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `resolve`
--
ALTER TABLE `resolve`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `query_no` (`query_no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_image`
--
ALTER TABLE `room_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `rt_feature`
--
ALTER TABLE `rt_feature`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `fr_id` (`fr_id`);

--
-- Indexes for table `rt_image`
--
ALTER TABLE `rt_image`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `img_id` (`img_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cleaning_staff`
--
ALTER TABLE `cleaning_staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cleans`
--
ALTER TABLE `cleans`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `cus_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `fr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hotel_owner`
--
ALTER TABLE `hotel_owner`
  MODIFY `owner_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `query_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resolve`
--
ALTER TABLE `resolve`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `room_image`
--
ALTER TABLE `room_image`
  MODIFY `img_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rt_feature`
--
ALTER TABLE `rt_feature`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rt_image`
--
ALTER TABLE `rt_image`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`room_no`) REFERENCES `room` (`room_no`);

--
-- Constraints for table `booking_req`
--
ALTER TABLE `booking_req`
  ADD CONSTRAINT `booking_req_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `custumer` (`cus_id`);

--
-- Constraints for table `cleans`
--
ALTER TABLE `cleans`
  ADD CONSTRAINT `cleans_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_type` (`room_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cleans_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `cleaning_staff` (`staff_id`);

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `custumer` (`cus_id`) ON DELETE CASCADE;

--
-- Constraints for table `resolve`
--
ALTER TABLE `resolve`
  ADD CONSTRAINT `resolve_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `receptionist` (`staff_id`),
  ADD CONSTRAINT `resolve_ibfk_2` FOREIGN KEY (`query_no`) REFERENCES `queries` (`query_no`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_type` (`room_id`) ON DELETE CASCADE;

--
-- Constraints for table `rt_feature`
--
ALTER TABLE `rt_feature`
  ADD CONSTRAINT `rt_feature_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_type` (`room_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rt_feature_ibfk_2` FOREIGN KEY (`fr_id`) REFERENCES `features` (`fr_id`) ON DELETE CASCADE;

--
-- Constraints for table `rt_image`
--
ALTER TABLE `rt_image`
  ADD CONSTRAINT `rt_image_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_type` (`room_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rt_image_ibfk_2` FOREIGN KEY (`img_id`) REFERENCES `room_image` (`img_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
