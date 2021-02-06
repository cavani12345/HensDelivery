-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 09:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hensproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `cathegory`
--

CREATE TABLE `cathegory` (
  `cathegoryid` int(40) NOT NULL,
  `cathegoryname` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(40) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `idnumber` varchar(16) NOT NULL,
  `country` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `passwordconf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `fname`, `lname`, `email`, `telephone`, `idnumber`, `country`, `password`, `passwordconf`) VALUES
(1, 'leontine', 'niyo', 'theophileniyonsaba@gmail.com', '0786601473', '448368701978882', 'RWANDA', '123', '123'),
(2, 'mugaragu', 'musengimana', 'theophileniyonsaba@gmail.com', '0786601473', '542578585845936', 'RWANDA', '123', '123'),
(3, 'eric', 'theos', 'amanisam1998@gmail.com', '0786601473', '1710895528954033', 'CONGO', '1234', '1234'),
(4, 'eric', 'theos', 'amanisam1998@gmail.com', '0786601473', '1710895528954033', 'CONGO', '1234', '1234'),
(5, ' Emmanuel', 'Niyongabo', 'emmanuelniyongabo44@gmail.com', '2345432', '1234567890', 'rwandsa', '123', '123'),
(6, ' Emmanuel', 'Niyongabo', 'emmanuelniyonagabo44@gmail.com', '2345432', '1234567890', 'rwandsa', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderid` int(100) NOT NULL,
  `productid` int(11) NOT NULL,
  `orderquantity` int(11) NOT NULL,
  `ordertime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `clientid` int(11) NOT NULL,
  `trans_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderid`, `productid`, `orderquantity`, `ordertime`, `clientid`, `trans_id`) VALUES
(1, 2, 1, '2019-05-23 09:37:28', 1, 'CInf-^oR'),
(2, 3, 1, '2019-05-23 09:37:28', 1, 'CInf-^oR'),
(3, 1, 1, '2019-05-23 09:37:28', 1, 'CInf-^oR'),
(4, 3, 2, '2019-05-23 09:47:14', 1, 'X:Lf6TQw'),
(5, 2, 1, '2019-05-23 09:47:14', 1, 'X:Lf6TQw');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(40) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `weight` int(11) NOT NULL,
  `proquantity` int(5) NOT NULL,
  `propic` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `proname`, `weight`, `proquantity`, `propic`, `description`, `price`) VALUES
(1, 'hen', 2, 100, 'products/cock12.jpg', 'descriptions for the product will be visible from this section', 150),
(2, 'Egg', 12, 100, 'products/egg11.jpg', 'descriptions for the product will be visible from this section', 50),
(3, 'cock', 20, 200, 'products/hen1q.jpg', 'descriptions for the product will be visible from this section', 100);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `cartid` int(40) NOT NULL,
  `cartquantity` int(35) NOT NULL,
  `clientid` int(11) DEFAULT NULL,
  `productid` int(11) NOT NULL,
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`cartid`, `cartquantity`, `clientid`, `productid`, `id`) VALUES
(1, 2, NULL, 2, '3&y!2pdS'),
(2, 2, NULL, 3, '3&y!2pdS'),
(3, 1, NULL, 1, '3&y!2pdS'),
(10, 1, NULL, 3, 's3b(&/AJ'),
(11, 1, NULL, 2, 's3b(&/AJ'),
(12, 1, NULL, 1, 's3b(&/AJ'),
(19, 1, NULL, 3, '*1AdN!vA'),
(20, 4, NULL, 1, '*1AdN!vA'),
(21, 1, NULL, 2, '*1AdN!vA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cathegory`
--
ALTER TABLE `cathegory`
  ADD PRIMARY KEY (`cathegoryid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`cartid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `cartid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
