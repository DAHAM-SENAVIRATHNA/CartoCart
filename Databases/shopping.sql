-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 03:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `price`) VALUES
(1, 'iPhone 9', 'https://i.dummyjson.com/data/products/1/thumbnail.jpg', 549),
(2, 'Samsung Universe ', 'https://i.dummyjson.com/data/products/3/thumbnail.jpg', 1249),
(3, 'Huawei P30', 'https://i.dummyjson.com/data/products/5/thumbnail.jpg', 499),
(4, 'Samsung Galaxy Book', 'https://i.dummyjson.com/data/products/7/thumbnail.jpg', 1499),
(5, 'MacBook Pro 2021 ', 'https://i.dummyjson.com/data/products/6/thumbnail.png', 1749),
(6, 'iPhone X', 'https://i.dummyjson.com/data/products/2/thumbnail.jpg', 899),
(7, 'Oil-Free Moisturizer 100ml', 'https://i.dummyjson.com/data/products/18/thumbnail.jpg', 40),
(8, 'Skin Beauty Serum', 'https://i.dummyjson.com/data/products/19/thumbnail.jpg', 46),
(9, 'Key Holder\r\n', 'https://i.dummyjson.com/data/products/30/thumbnail.jpg', 30),
(10, 'cereals muesli fruit nuts', 'https://i.dummyjson.com/data/products/24/thumbnail.jpg', 46),
(11, '3D Embellishment Art Lamp', 'https://i.dummyjson.com/data/products/28/thumbnail.jpg', 20),
(12, 'Flying Wooden Bird', 'https://i.dummyjson.com/data/products/27/thumbnail.webp', 51),
(13, 'Microsoft Surface Laptop 4', 'https://i.dummyjson.com/data/products/8/thumbnail.jpg', 1499),
(14, 'Infinix INBOOK', 'https://i.dummyjson.com/data/products/9/thumbnail.jpg', 1099),
(15, 'Brown Perfume', 'https://i.dummyjson.com/data/products/12/thumbnail.jpg', 40),
(16, 'Gulab Powder 50 Gram', 'https://i.dummyjson.com/data/products/25/thumbnail.jpg', 70),
(17, 'Eau De Perfume Spray', 'https://i.dummyjson.com/data/products/15/thumbnail.jpg', 30),
(18, 'Freckle Treatment Cream- 15gm', 'https://i.dummyjson.com/data/products/20/thumbnail.jpg', 15),
(19, 'Elbow Macaroni - 400 gm', 'https://i.dummyjson.com/data/products/22/thumbnail.jpg', 14),
(20, 'Orange Essence Food Flavou', 'https://i.dummyjson.com/data/products/23/thumbnail.jpg', 14),
(21, 'cereals muesli fruit nut', 'https://i.dummyjson.com/data/products/24/thumbnail.jpg', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
