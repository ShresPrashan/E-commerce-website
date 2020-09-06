-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 12:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(20) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `User_feedback` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_text`, `User_feedback`) VALUES
(1, 'MS-Teams', 'Microsoft recently unveiled a group chat software in Office 365 called Microsoft Teams. The service is a cloud-based app that integrates well with the familiar Office applications and is available to Office 365 commercial customers with one of the following plans: Enterprise E1, E3, and E5. <p>Microsoft Teams, also referred to as simply Teams, is a unified communication and collaboration platform that combines persistent workplace chat, video meetings, file storage, and application integration.', NULL),
(2, 'NextGen Antivirus', 'Our team NextGen has developed an antivirus that provides the best security at a affordabable price. It is the best.<p>There are too many dangers out there to risk going online without proper protection. Antivirus is still absolutely necessary to protect you from unwanted and malicious intruders such as viruses, trojans, botnets, ransomware, and other types of malware.<p>Protect what matters and go for software that goes beyond antivirus. Learn more about our easy-to-use security products & download our free antivirus software', NULL),
(3, 'Microsoft Project', 'Microsoft Project is a project management software product, developed and sold by Microsoft. It is designed to assist a project manager in developing a schedule, assigning resources to tasks, tracking progress, managing the budget, and analyzing workloads.', NULL),
(4, 'Kasperskey Antivirus', 'Kaspersky is one of the world\'s best-known antivirus companies, trusted by millions of people\r\n<p>\r\nDownload Now From the Official Store & Get Up To 60% Off. Hurry, Offer Ends Soon. We protect what matters most to +400 million users & +270k organisations. Download Now. Easy Installation. Moneyback Guarantee. No PC Slowdown. Award-Winning Antivirus.', NULL),
(5, 'NextGen Firewall', 'A firewall is a network security system that monitors and controls incoming and outgoing network traffic based on predetermined security rules. A firewall typically establishes a barrier between a trusted internal network and untrusted external network, such as the Internet. ', NULL),
(6, 'NXT Download tool', 'It is a tool to increase download speeds by up to 5 times, resume and schedule downloads. Comprehensive error recovery and resume capability will restart broken or interrupted downloads due to lost connections, network problems, computer shutdowns, or unexpected power outages. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `d_id` int(11) NOT NULL,
  `d_content` varchar(256) NOT NULL,
  `d_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`d_id`, `d_content`, `d_name`) VALUES
(1, 'Great service.', 'Prashan'),
(2, 'Great service.', 'Prasth'),
(3, 'Great service.', 'Prashan'),
(4, 'Love it', 'Prashan'),
(5, 'Thanks for the service', 'Bikesh'),
(6, 'Great service.', 'Prashan'),
(7, 'I like this website', 'Prashan'),
(8, 'This is a good service', 'Prashan'),
(9, 'Great service.', 'Prashan');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_price` int(8) DEFAULT 0,
  `product_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_price`, `product_img`) VALUES
(1, 'IPAD', 'Pendant Light - Cluster Pendant', 11, 'https://cdn.jpegmini.com/user/images/slider_puffin_before_mobile.jpg'),
(2, 'IPDO', 'Cluster Light', 100, 'https://assets.kogan.com/files/product/etail/Apple-/KHIPP1118256CSIL_1.jpg?auto=webp&canvas=340%2C226&fit=bounds&height=226&quality=75&width=340'),
(5, 'NextGen', 'Antivirus', 123, 'https://lh3.googleusercontent.com/Fyg6qTlRGSGmUSRF9uUJR5mgAUyWXntgmJ6NSJZNpHWonUts1lKPUo-O8LcdU_V2DA'),
(6, 'Mac', 'Apple', 1000, 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/imac-21-cto-hero-201903?wid=1254&hei=1044&fmt=jpeg&qlt=80&.v=1553120926388'),
(7, 'Huawei Mate 30 Pro', 'SmartPhones', 999, 'https://assets.kogan.com/images/mobileciti/MOB-HWM30PSLV/1-88ba78270b-huawei-mate-30-pro-silver-all-0.jpg?auto=webp&canvas=753%2C502&fit=bounds&height=502&quality=75&width=753'),
(8, 'I-Phone', 'SmartPhones', 1200, 'https://www.macpricesaustralia.com.au/wp-content/uploads/2017/09/Apple-iPhone-X-10-Australia.jpg'),
(9, 'Microsoft Word', 'Application', 150, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Microsoft_Office_Word_%282018%E2%80%93present%29.svg/1024px-Microsoft_Office_Word_%282018%E2%80%93present%29.svg.png'),
(10, 'Microsoft Exce;', 'Application', 150, 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Microsoft_Office_Excel_%282018%E2%80%93present%29.svg/1024px-Microsoft_Office_Excel_%282018%E2%80%93present%29.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `l_id` int(100) NOT NULL,
  `l_username` varchar(20) NOT NULL,
  `l_password` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `l_address` varchar(256) DEFAULT NULL,
  `User_Type` varchar(256) DEFAULT NULL,
  `User_Feedback` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`l_id`, `l_username`, `l_password`, `email`, `phone`, `l_address`, `User_Type`, `User_Feedback`) VALUES
(1, 'Prashan', 'prashan', 'yunche64@gmail.com', NULL, NULL, 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`l_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `l_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
