-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 11:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('Tahmid', 'tahmid132'),
('Sattar', 'sattar132');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `package_id`, `package_name`, `user_name`, `amount`, `status`) VALUES
(1, 0, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(2, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(3, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(4, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(5, 2, 'For Couples(-_-)', 'Tahmid', 3000, 'Processing'),
(6, 2, 'For Couples(-_-)', 'Tahmid', 3000, 'Processing'),
(7, 2, 'For Couples(-_-)', 'Tahmid', 3000, 'Processing'),
(8, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(9, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(10, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(11, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(12, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(13, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(14, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(15, 1, 'Cox_Bazar Family Tour', 'Tahmid', 2000, 'Processing'),
(16, 2, 'For Couples(-_-)', 'Tahmid', 3000, 'Processing'),
(17, 2, 'For Couples(-_-)', 'Tahmid', 3000, 'Processing'),
(18, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Accepted'),
(19, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Visited'),
(20, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(21, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(22, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(23, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(24, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(25, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(26, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(27, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing'),
(28, 1, 'Cox_Bazar Family Tour', 'Saqline', 2000, 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `User_Id` int(11) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `reply` varchar(255) DEFAULT 'Processing',
  `User_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`User_Id`, `massage`, `reply`, `User_name`) VALUES
(1, '', 'Processing', '0'),
(2, '', 'Processing', ''),
(3, '', 'Processing', ''),
(4, '', 'Processing', ''),
(5, '', 'Processing', ''),
(6, '', 'Processing', ''),
(7, 'asdef', 'asdfasdfdfasfd', 'Tahmid Sattar'),
(8, 'asdefasdfsadf', 'Processing', 'Tahmid Sattar'),
(9, '', 'Processing', ''),
(10, '', 'Processing', ''),
(11, 'sdgfsdhg', 'Processing', '200104132'),
(12, 'sdgfsdhg', 'Processing', '200104132'),
(13, 'sdgfsdhg', 'Processing', '200104132'),
(14, 'sdgfsdhg', 'Processing', '200104132'),
(15, 'sdgfsdhg', 'Processing', '200104132'),
(16, 'sdgfsdhg', 'Processing', '200104132'),
(17, 'sdgfsdhg', 'Processing', '200104132'),
(18, 'sdgfsdhg', 'Processing', '200104132'),
(19, 'sdgfsdhg', 'Processing', '200104132'),
(20, 'sdgfsdhg', 'Processing', '200104132'),
(21, 'sdgfsdhg', 'Processing', '200104132'),
(22, 'sdgfsdhg', 'Processing', '200104132'),
(23, 'sdgfsdhg', 'Processing', '200104132'),
(24, 'sdgfsdhg', 'Processing', '200104132'),
(25, 'sdgfsdhg', 'Processing', '200104132'),
(26, 'sdgfsdhg', 'Processing', '200104132'),
(27, 'sdgfsdhg', 'Processing', '200104132'),
(28, 'sdgfsdhg', 'Processing', '200104132'),
(29, 'sdgfsdhg', 'Processing', '200104132'),
(30, 'sdgfsdhg', 'Processing', '200104132'),
(31, 'sdgfsdhg', 'Processing', '200104132'),
(32, 'sdgfsdhg', 'Processing', '200104132'),
(33, 'sdgfsdhg', 'Processing', '200104132'),
(34, 'sdgfsdhg', 'Processing', '200104132'),
(35, 'sdgfsdhg', 'Processing', '200104132'),
(36, 'sdgfsdhg', 'Processing', '200104132'),
(37, 'sdgfsdhg', 'Processing', '200104132'),
(38, 'sdgfsdhg', 'Processing', '200104132'),
(39, 'sdgfsdhg', 'Processing', '200104132'),
(40, 'sdgfsdhg', 'Processing', '200104132'),
(41, 'sdgfsdhg', 'Processing', '200104132'),
(42, 'sdgfsdhg', 'Processing', '200104132'),
(43, 'sdgfsdhg', 'Processing', '200104132'),
(44, '', 'Processing', ''),
(45, '', 'Processing', ''),
(46, '', 'Processing', ''),
(47, 'SDFGRA', 'Processing', 'Tahmid'),
(48, 'SDFGRA', 'Processing', 'Tahmid'),
(49, 'SDFGRA', 'Processing', 'Tahmid'),
(50, 'SDFGRA', 'Processing', 'Tahmid'),
(51, 'SDFGRA', 'Processing', 'Tahmid'),
(52, 'sdf', 'Processing', ''),
(53, 'sdf', 'Processing', 'Tahmid'),
(54, 'sdfasd', 'Processing', 'Tahmid'),
(55, 'qwerqewr', 'Processing', 'Tahmid'),
(56, 'qwerqewr', 'Processing', 'Tahmid'),
(57, 'qwerqewr', 'Processing', 'Tahmid'),
(58, 'qwerqewr', 'Processing', 'Tahmid'),
(59, 'qwerqewr', 'Processing', 'Tahmid'),
(60, 'raktim', 'Processing', 'Tahmid'),
(61, 'raufun', 'Processing', 'Tahmid'),
(62, 'raufun', 'Processing', 'Tahmid'),
(63, 'raufun', 'Processing', 'Tahmid'),
(64, 'fun', 'Processing', 'Tahmid'),
(65, 'sdf', 'Processing', 'Tahmid'),
(66, 'rafi', 'Processing', 'Tahmid'),
(67, 'do nothing', 'Processing', 'Tahmid'),
(68, 'hii ... ', 'Processing', 'Saqline'),
(69, 'ewrwqer', 'Processing', 'Saqline'),
(70, 'qwerqwer', 'Processing', 'Saqline'),
(71, 'qerytry', 'Processing', 'Saqline'),
(72, 'qerytry', 'Processing', 'Saqline'),
(73, 'ertewrtw', 'Processing', 'Saqline'),
(74, 'ertewrtw', 'Processing', 'Saqline'),
(75, 'xgrxw fewr ', 'Processing', 'Saqline'),
(76, 'dsgsdgfsdgf', 'Processing', 'Saqline'),
(77, 'hyu', 'Processing', 'Saqline'),
(78, 'ctrtgc', 'Processing', 'Saqline'),
(79, 'ctrtgc', 'Processing', 'Saqline'),
(80, 'ctrtgc', 'Processing', 'Saqline'),
(81, 'ctrtgc gbdf', 'Processing', 'Saqline'),
(82, 'ctrtgc gbdf', 'Processing', 'Saqline'),
(83, 'ctrtgc gbdf', 'Processing', 'Saqline'),
(84, 'ctrtgc gbdf', 'Processing', 'Saqline'),
(85, 'sdfasdf', 'Processing', 'Saqline'),
(86, 'fdhgdfhgdfg', 'Processing', 'Saqline'),
(87, 'sdfdgfuhgjhfgv ', 'Processing', 'Saqline'),
(88, 'sdfdgfuhgjhfgv ', 'Processing', 'Saqline'),
(89, 'sdfdgfuhgjhfgv ', 'Processing', 'Saqline'),
(90, 'sdfdgfuhgjhfgv ', 'Processing', 'Saqline');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

--CREATE TABLE `info` (
 -- `StudentID` int(11) NOT NULL,
  --`Attendance_marks` varchar(255) NOT NULL,
  --`Quiz_marks` varchar(255) NOT NULL,
  --`Final_marks` varchar(255) NOT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

--INSERT INTO `info` (`StudentID`, `Attendance_marks`, `Quiz_marks`, `Final_marks`) VALUES
--(2, '20', '40.25', '50.26'),
--(15, '20', '40.25', '50.26'),
--(19, '20', '40.25', '50.26'),
--(20, '20', '40.25', '50.26'),
--(25, '30', '40.25', '50.26'),
--(1255, '', '40.25', '50.26'),
--(15645154, '20', '40.25', '50.26');

-- --------------------------------------------------------

--
-- Table structure for table `insert_image`
--

CREATE TABLE `insert_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_for` varchar(225) NOT NULL,
  `Package_Name` varchar(255) DEFAULT NULL,
  `Package_Type` varchar(255) NOT NULL,
  `Package_Location` varchar(255) NOT NULL,
  `Package_Price` int(11) NOT NULL,
  `Package_Fetures` varchar(255) NOT NULL,
  `Package_Details` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_image`
--

INSERT INTO `insert_image` (`id`, `name`, `image_for`, `Package_Name`, `Package_Type`, `Package_Location`, `Package_Price`, `Package_Fetures`, `Package_Details`, `from_date`, `to_date`) VALUES
(1, '1st', 'https://thefinancialexpress.com.bd/public/uploads/1596726755.jpg', 'Cox_Bazar Family Tour', 'Family', 'Cox_Bazar', 2000, 'Free Breakfast,\r\nTriple Bedroom,\r\nAC, TV, Wifi ', 'Two nights, three days. If you extends your stay it will cost less than regular price.', '12/03/22', '15/03/22'),
(2, '2nd', 'https://thefinancialexpress.com.bd/uploads/1609510631.jpg', 'For Couples(-_-)', 'Couples', 'Saint Martin', 3000, 'Free Breakfast, \r\nKingsize bed,\r\nA beautiful candle light dinner,\r\nFree Swimming Pool for 1 hour,\r\nAC, TV, Wifi ', 'A room with a view of the sea', '12/04/22', '19/04/22'),
(18, 'add', 'https://thefinancialexpress.com.bd/uploads/1623685867.jpg', 'Sajek Tour Family ', '', 'Sajek , Rangamati', 3500, 'one night,twodays,free breakfast', 'Price includes for per person ... for add more just increment package number .', 'Current Month', '21/3/2023');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `StudentId` int(11) NOT NULL,
  `avg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`StudentId`, `avg`) VALUES
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `password`) VALUES
('Tahmid007', 'tahmidaothoi007@gmail.com', 'abc1234'),
('Saqline', 'saqline.cse.200104133@aust.edu', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `Package_Id` int(11) NOT NULL,
  `Place_image` varchar(255) NOT NULL,
  `Package_Name` varchar(255) NOT NULL,
  `Package_Type` varchar(255) NOT NULL,
  `Package_Location` varchar(255) NOT NULL,
  `Package_Price` int(11) NOT NULL,
  `Package_Fetures` varchar(255) NOT NULL,
  `Package_Details` varchar(255) NOT NULL,
  `Room_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`Package_Id`, `Place_image`, `Package_Name`, `Package_Type`, `Package_Location`, `Package_Price`, `Package_Fetures`, `Package_Details`, `Room_image`) VALUES
(1, 'https://youtu.be/uDeXz-f3TVI?si=xyFFNVzoGlRhZC--', 'Cox_Bazar Family Tour', 'Family', 'Cox_Bazar', 2000, 'Free Breakfast,\r\nTriple Bedroom,\r\nAC, TV, Wifi ', 'Two nights, three days. If you extends your stay it will cost less than regular price.', './hotel_room_image/001.jpg'),
(2, './Tour_Place/005.jpg', 'For Couples(-_-)', 'Couples', 'Cox_Bazar', 3000, 'Free Breakfast, \r\nKingsize bed,\r\nA beautiful candle light dinner,\r\nFree Swimming Pool for 1 hour,\r\nAC, TV, Wifi ', 'A room with a view of the sea', './hotel_room_image/002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `youtubeid` varchar(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `youtubeid`, `description`) VALUES
(1, 'Sajek Valley', 'hVU9Jh_4gT4', 'Sajek Tripuri Valley is one of the most popular tourist spots in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District.The valley is 2,000 feet (610 m) above sea level. Sajek Tripuri Valley is known as the Queen of Hills & Roof of Rangamati.'),
(2, 'Cox\'s bazar', 'JxCDg3qZBOE', 'Cox\'s Bazar is a city, fishing port, tourism centre, and district headquarters in southeastern Bangladesh. It is famous mostly for its long natural sandy beach. It is located 150 km (93 mi) south of the city of Chittagong. Cox\'s Bazar is also known by the name Panowa, which translates literally as \"yellow flower\". Another old name was \"Palongkee\". It has the longest sea beach in the world.'),
(3, 'Saint Martin\r\n', 'CIl0wNuooiM', 'St. Martin\'s Island is a small island (area only 3 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox\'s Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River.'),
(4, 'kaptai lake', '-BVHdP1V6mk', 'Kaptai Lake is the largest lake in Bangladesh.It is located in the Kaptai Upazila under Rangamati District of Chittagong Division. The lake was created as a result of building the Kaptai Dam on the Karnaphuli River, as part of the Karnaphuli Hydro-electric project. Kaptai Lake\'s average depth is 100 feet (30 m) and maximum depth is 490 feet (150 m).'),
(5, 'Nafakhum | Amiakhum | Velakhum', '1heeXKUAFyA', 'Nafa-khum (Bengali: নাফাখুম) is a waterfall in Bangladesh on the Remaikree River, a tributary of the Sangu River. It is among the largest waterfalls in the country by volume of water falling. The wild hilly Remaikree river suddenly falls down here about 25–30 feet or 7.62-9.144 meters.\r\n\r\nThe word Ngafa (ঙাফা) in native Marma language means Baghair fish/ Dwarf goonch and \"Khong\" means \"Ground\". A special type of flying fish, whose local name is nating, is found at the bottom in a small cave as they swim against the stream but cannot jump over the height of the fall.'),
(6, 'Bholaganj Sada Pathor: The heaven of white stones', 'IcC2T6GJW3Y', 'To go to Bholaganj Sada Pathor, the travel lovers have to make a journey of 280 km from Dhaka by bus. There are buses available, both air-conditioned (AC) buses and non-AC from Dhaka to Sylhet. There are also trains from Dhaka to Sylhet.\r\n\r\nYou can see the nearby mountains which is in India\'s Meghalaya when you get to this amazing spot. If you\'re trying to get away from the hustle and bustle of the city life, this is the perfect place for you to take a break, gather your thoughts and enjoy what the nature has to offer.'),
(7, 'Tanguar Haor | Sunamganj', 'Tbn8HNoW0OU', 'Tanguar haor located in the Dharmapasha and Tahirpur upazilas of Sunamganj District in Bangladesh, is a unique wetland ecosystem of national importance and has come into international focus. The area of Tanguar haor including 46 villages within the haor is about 100 square kilometres (39 sq mi) of which 2,802.36 ha2 is wetland. It is the source of livelihood for more than 40,000 people. Bangladesh declared it an Ecologically Critical Area in 1999 considering its critical condition as a result of overexploitation of its natural resources.'),
(12, 'Kuakata Sea Beach', '5RRaEq8z-EQ', 'Kuakata is a town in southern Bangladesh known for its panoramic sea beach.[1][2] Kuakata beach is a sandy expanse 18 kilometres (11 mi) long and 3 kilometres (1.9 mi) wide.[3] From the beach one can have an unobstructed view of both sunrise and sunset over the Bay of Bengal.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `insert_image`
--
ALTER TABLE `insert_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`Package_Id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `insert_image`
--
ALTER TABLE `insert_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `Package_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
