-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 01:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sweet chunk`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_details`
--

CREATE TABLE IF NOT EXISTS `address_details` (
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_details`
--

INSERT INTO `address_details` (`email`, `address`, `city`, `state`, `zip`) VALUES
('Sonam@gmail.com', '', '', '', 0),
('jilova31517@gmail.com', '', '', '', 0),
('anjali07@gmail.com', '', '', '', 0),
('nehal517@gmail.com', '', '', '', 0),
('matul31517@gmail.com', '', '', '', 0),
('sona31517@gmail.com', '', '', '', 0),
('manu31517@gmail.com', '', '', '', 0),
('kirarl31517@gmail.com', '', '', '', 0),
('nehal31517@gmail.com', '', '', '', 0),
('manugupta31517@gmail.com', '', '', '', 0),
('Anjali7@gmail.com', '', '', '', 0),
('sonam1517@gmail.com', '', '', '', 0),
('sonamjilova@gmail.com', '', '', '', 0),
('nehalkirar@gmail.com', '', '', '', 0),
('sonamjilova@gmail.com', '3rd block  Nitk karnatka', 'mangaluru', 'Karnataka', 575025),
('manugupta@gmail.com', 'devlali pur', 'bhopal', 'madhy pradesh', 221058);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'egg'),
(2, 'egg_less');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `CONTACT` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CONTACT`, `EMAIL`) VALUES
('9559207277', 'sonamjilova@gmail.com'),
('8369012202', 'manugupta@gmail.com'),
('9562323335', 'nehalkirarl.com'),
('9773807562', 'sonam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `time1` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`, `date1`, `time1`) VALUES
('sonam jilova', 'lk12015023@gmail.com', 'sdfasfd', '2030-05-20', '838:59:59'),
('ankurhs', 'kirar@gmail.con', 'sdfafdas', '2030-05-20', '02:21:31'),
('anjali gupta', 'lk12015023@gmail.com', 'fhj', '2020-05-30', '02:25:32'),
('nehal', 'matul31517@gmail.com', 'include some other category', '2020-06-03', '01:59:58'),
('anjali', 'lk12015023@gmail.com', 'it is nice one', '2020-06-09', '12:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(30) NOT NULL,
  `feedback` varchar(500) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `time1` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `feedback`, `date1`, `time1`) VALUES
('sonamjilova@gmail.com', '', '2027-05-20', '04:17:40'),
('sonamjilova@gmail.com', 'this is very good site', '2027-05-20', '04:19:06'),
('sonamjilova@gmail.com', 'It is good item;', '2027-05-20', '04:20:15'),
('sonamjilova@gmail.com', 'THIS SITE IS REALLY OSM', '2027-05-20', '04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `produc1`
--

CREATE TABLE IF NOT EXISTS `produc1` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `STATUS` tinyint(4) NOT NULL,
  `supplier_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produc1`
--

INSERT INTO `produc1` (`name`, `image`, `price`, `discount`, `cid`, `STATUS`, `supplier_id`) VALUES
('black-forest', 'black-forest.jpg', 300, 5, 2, 1, 'S01'),
('butterscotch-cake', 'butterscotch-cake.jpg', 300, 10, 2, 1, 'S02'),
('chocolate-cream-cake', 'chocolate-cream-cake.jpg', 500, 30, 2, 1, 'S03'),
('chocolate-truffle-cream-cake', 'chocolate-truffle-cream-cake.jpg', 800, 10, 2, 1, 'S04'),
('christmas-special-plum-cake', 'christmas-special-plum-cake.jpg', 500, 10, 2, 1, 'S05'),
('cream-drop-chocolate-cake', 'cream-drop-chocolate-cake.jpg', 500, 3, 2, 1, 'S03'),
('crunchy-butterscotch-cake', 'crunchy-butterscotch-cake.jpg', 700, 5, 2, 1, 'S04'),
('fudge-brownie-cake', 'fudge-brownie-cake.jpg', 890, 20, 2, 1, 'S05'),
('pineapple-cake_1', 'pineapple-cake_1.jpg', 700, 5, 2, 0, 'S02'),
('red-velvet-fresh-cream-cake', 'red-velvet-fresh-cream-cake.jpg', 600, 15, 2, 1, 'S01'),
('cream-drop-caramel-cake', 'cream-drop-caramel-cake.png', 1000, 5, 1, 1, 'S01'),
('crunchy-butterscotch-cream-cake', 'crunchy-butterscotch-cream-cake.png', 900, 5, 1, 1, 'S04'),
('delicious-butterscotch-cake', 'delicious-butterscotch-cake.png', 600, 10, 1, 1, 'S02'),
('designer-cake', 'designer-cake.png', 750, 8, 1, 1, 'S05'),
('desirable-rose-cake', 'desirable-rose-cake.png', 1500, 10, 1, 1, 'S03'),
('fresh-vanilla-cake', 'fresh-vanilla-cake.png', 500, 5, 1, 1, 'S01'),
('heart-shaped-white-forest-cake', 'heart-shaped-white-forest-cake.png', 2000, 5, 1, 1, 'S03'),
('hearty-red-velvet-gems-cake', 'hearty-red-velvet-gems-cake.png', 1600, 2, 1, 1, 'S02'),
('red-velvet-cream-heart-cake', 'red-velvet-cream-heart-cake.png', 1400, 8, 1, 1, 'S05'),
('vanilla-flavored-pista-rasmalai-cake', 'vanilla-flavored-pista-rasmalai-cake.png', 2500, 10, 1, 0, 'S04'),
('BIRTHDAY_BASH', 'BIRTHDAY_BASH.JPEG', 1000, 20, 1, 1, 'S01'),
('choclate_role', 'CHOCLATE_ROLE.JPEG', 920, 8, 1, 1, 'S01');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `UNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`FNAME`, `LNAME`, `EMAIL`, `UNAME`, `PASSWORD`, `status`) VALUES
('sonam', 'jilova', 'sonamjilova@gmail.com', ' sona123', '123654', 'admin'),
('Anjali ', 'Gupta', 'manugupta@gmail.com', ' manu123', '8523', 'user'),
('nehak', 'kirar', 'kirarnehal@gmail.com', ' nehal12', '1234', 'user'),
('sonam', 'J', 'jilova_s@gmail.com', ' man123', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` varchar(10) NOT NULL,
  `supplier_name` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `contact`, `email`) VALUES
('S01', 'sona jilova', '9333925010', 'sonam@GMAIL.COM'),
('S02', 'neha kirar', '8392405010', 'kirar@GMAIL.COM'),
('S03', 'anjal gupta', '9020340505', 'Anjal@GMAIL.COM'),


-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `email` varchar(30) NOT NULL,
  `date1` date DEFAULT NULL,
  `time1` time DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`email`, `date1`, `time1`, `price`) VALUES
('sonamjilova@gmail.com', '2020-05-30', '11:53:22', 270),
('anjaligupta@gmail.com', '2020-05-30', '12:12:03', 350),
('sonamjilova@gmail.com', '2020-06-01', '01:29:07', 620),
('nehalkirar@gmail.com', '2020-06-03', '01:12:13', 1665),
('sonamjilova@gmail.com', '2020-06-07', '10:51:12', 360);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_details`
--
ALTER TABLE `address_details`
 ADD KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD KEY `email` (`email`);

--
-- Indexes for table `produc1`
--
ALTER TABLE `produc1`
 ADD KEY `cid` (`cid`), ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`EMAIL`,`UNAME`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_details`
--
ALTER TABLE `address_details`
ADD CONSTRAINT `address_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registration` (`EMAIL`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`EMAIL`) REFERENCES `registration` (`EMAIL`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registration` (`EMAIL`);

--
-- Constraints for table `produc1`
--
ALTER TABLE `produc1`
ADD CONSTRAINT `produc1_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`),
ADD CONSTRAINT `produc1_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registration` (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
