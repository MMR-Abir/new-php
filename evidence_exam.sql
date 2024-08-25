-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 25, 2024 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evidence_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('Insert','Update','Delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(2, 'Walton premio v90', 'Insert', '2024-08-24 06:47:58'),
(4, 'Walton premio v90', 'Update', '2024-08-24 07:00:52'),
(5, 'Walton premio v9', 'Delete', '2024-08-24 07:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Apple', 'Apple city,USA', '+9813235454'),
(2, 'Samsung', 'South korea', '+1712345457'),
(3, 'Xiaomi', 'Beijing,China', '+0545113154'),
(4, 'Sony', 'USA', '+4746545121'),
(5, 'Walton', 'Dhaka,Bangladesh', '+01974512313');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Apple', 'Apple city,USA', '+9813235454'),
(2, 'Samsung', 'South korea', '+1712345457'),
(3, 'Xiaomi', 'Beijing,China', '+0545113154'),
(4, 'Sony', 'USA', '+4746545121');

--
-- Triggers `manufacturer_bk`
--
DELIMITER $$
CREATE TRIGGER `Delete_manufacturer` AFTER DELETE ON `manufacturer_bk` FOR EACH ROW DELETE FROM product_bk
WHERE product_bk.manufacturer_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `manufacturer_product_combine`
-- (See below for the actual view)
--
CREATE TABLE `manufacturer_product_combine` (
`id` mediumint(9)
,`Product name` varchar(50)
,`price` int(5)
,`Company name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Apple 16 pro max', 90000, 1),
(2, 'Apple vision pro', 99000, 1),
(3, 'Galaxy s24 ultra', 88000, 2),
(4, 'Galaxy flip', 80000, 2),
(5, 'Mi 12 pro', 65000, 3),
(6, 'Xiaomi note 14', 5000, 3),
(7, 'Sony alpha camera', 95000, 4),
(8, 'Xperia 9 pro', 3500, 4),
(9, 'Walton xanon x90', 4000, 5),
(10, 'Walton supersaver ac', 85000, 5);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,old.name,"Delete",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,new.name,"Insert",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(
NULL,old.name,"Update",NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `products_above_5000_price` (
`id` mediumint(9)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Apple 16 pro max', 90000, 1),
(2, 'Apple vision pro', 99000, 1),
(3, 'Galaxy s24 ultra', 88000, 2),
(4, 'Galaxy flip', 80000, 2),
(5, 'Mi 12 pro', 65000, 3),
(6, 'Xiaomi note 14', 5000, 3),
(7, 'Sony alpha camera', 95000, 4),
(8, 'Xperia 9 pro', 3500, 4);

-- --------------------------------------------------------

--
-- Structure for view `manufacturer_product_combine`
--
DROP TABLE IF EXISTS `manufacturer_product_combine`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `manufacturer_product_combine`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `Product name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Company name` FROM (`product` join `manufacturer`) WHERE `product`.`manufacturer_id` = `manufacturer`.`id``id`  ;

-- --------------------------------------------------------

--
-- Structure for view `products_above_5000_price`
--
DROP TABLE IF EXISTS `products_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
