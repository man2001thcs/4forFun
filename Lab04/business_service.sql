-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2022 at 04:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `Businesses`
--

CREATE TABLE `Businesses` (
  `BusinessID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Businesses`
--

INSERT INTO `Businesses` (`BusinessID`, `Name`, `Address`, `City`, `Telephone`, `URL`) VALUES
(24, 'Hanoi University of Science and Technologies', 'So 1 Dai Co Viet, Hai Ba Trung', 'Ha Noi', '0938123923', 'https://hust.edu.vn'),
(25, 'Sai Gon Joint Stock Commercial Bank', '15 Nguyen Khanh Toan, Cau Giay', 'Ha Noi', '0938239842', 'https://scb.com.vn'),
(26, 'Thaco Group', 'So 4 Lac Long Quan, Ba Dinh', 'Ha Noi', '0393283843', 'https://thacogroup.vn'),
(27, 'Routine', '329 Cau Giay, Cau Giay', 'Ha Noi', '0382832934', 'https://www.routine.vn'),
(28, 'Louis Restaurant', '32 Le Duc Tho, Nam Tu Liem', 'Ha Noi', '0383283953', 'https://louisrestaurant.vn'),
(29, 'Win Mart', '32 Ton That Thuyet, Cau Giay', 'Ha Noi', '0932837428', 'https://winmart.vn'),
(30, 'Hera Spa', '45 De La Thanh, Dong Da', 'Ha Noi', '0387583254', 'https://heraspa.vn'),
(31, 'Louis Gym', '98 Ngo Quyen, Ba Dinh', 'Ha Noi', '0383275954', 'https://louisgym.vn'),
(32, 'Hanoi University Of Physical Education and Sports', '23 Phung Chau, Chuong My', 'Ha Noi', '(024) 33866 058', 'https://hupes.edu.vn'),
(33, 'Zara Co.', '32 Xuan Thuy, Cau Giay', 'Ha Noi', '(024) 32938 321', 'https://zara.com.vn'),
(34, 'H&amp;M', '32 Lang Thuong, Dong Da', 'Ha Noi', '(024) 83285 130', 'https://hm.com.vn'),
(35, 'Foreign Trade University', '23 Chua Lang, Dong Da', 'Ha Noi', '(024) 87328 932', 'https://ftu.edu.vn'),
(36, 'Thuong Mai University', '32 Ho Tung Mau, Nam Tu Liem', 'Ha Noi', '(024) 83285 192', 'https://tmu.edu.vn'),
(37, 'The Electrical Steve', '32 Tran Duy Hung, Dong Da', 'Ha Noi', '(024) 83289 019', 'https://electricalsteve.vn'),
(40, 'Thai Massage', '32 Nguyen Hong, Dong Da', 'Ha Noi', '(024) 83278 023', 'https://thaimassage.vn'),
(41, 'dasd', 'dasdasd', 'dasda', 'dasda', 'dasdad'),
(42, 'dsad', 'asdasda', 'sdasdas', 'dasda', 'dasdasd'),
(43, 'dasd', 'sdad', 'dasdasd', 'dasda', 'dasda');

-- --------------------------------------------------------

--
-- Table structure for table `Businesses_Categories`
--

CREATE TABLE `Businesses_Categories` (
  `BusinessID` int(11) NOT NULL,
  `CategoryID` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Businesses_Categories`
--

INSERT INTO `Businesses_Categories` (`BusinessID`, `CategoryID`) VALUES
(24, 'SCHOOL'),
(25, 'BANK'),
(26, 'AUTO'),
(27, 'FASHION'),
(28, 'FISH'),
(29, 'GROCERY'),
(30, 'HEALTH'),
(31, 'SPORTS'),
(32, 'SCHOOL'),
(32, 'SPORTS'),
(33, 'FASHION'),
(33, 'HEALTH'),
(34, 'FASHION'),
(35, 'SCHOOL'),
(36, 'SCHOOL'),
(40, 'BANK'),
(41, 'BANK'),
(42, 'BANK'),
(43, 'AUTO');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `CategoryID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`CategoryID`, `Title`, `Description`) VALUES
('AUTO', 'Automotive Parts and Supplies', 'Accessories for your car'),
('BANK', 'Legal and Safe Financial Service', 'Provide Financial Services'),
('ELECTRIC', 'Electrical Services and Equipments', 'Sell Everything has Electric '),
('FASHION', 'Men and Women\'s Wears', 'The World of Fashion'),
('FISH', 'Seafood Stores and Restaurants', 'Place to get your fish'),
('GAME', 'Gaming World', 'Games and Gears'),
('GROCERY', 'Life Belongings', 'Sell Life\'s Goods'),
('HEALTH', 'Health and Beauty', 'Everything for the body'),
('KARAOKE', 'Sing and Share', 'Sing to the end of the World'),
('MASSAGE', 'Tradition Massage', 'Relax and Chill'),
('MEAT', 'Meat Stores and Restaurants', 'Meat World is waiting for you'),
('PHONES', 'Smartphones and equipments', 'Everything for your smartphone'),
('SCHOOL', 'Schools and Colleges', 'Public and Private Learning'),
('SPORTS', 'Community Sports and Recreation', 'Guide to Parks and Leagues'),
('WATER', 'Fresh Water', 'Fresh Water for Everyone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Businesses`
--
ALTER TABLE `Businesses`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Businesses`
--
ALTER TABLE `Businesses`
  MODIFY `BusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
