-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 02:54 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamkicks`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `order_name` varchar(200) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_img` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_img` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shoe_items`
--

CREATE TABLE `shoe_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe_items`
--

INSERT INTO `shoe_items` (`id`, `name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'ADIDAS\r\nultraboost 20 w shoes', '- adidas performance\r\n- Best for running\r\n- adidas three stripes sneakers', 8419, 100, './images/shoeproduct1.jpg'),
(3, 'Nike\r\nCourt Legacy Mules', '- Best for Lifestyle\r\n- Canvas upper\r\n- Plush Foam inner\r\n- Rubber sole\r\n- Round toe\r\n- Slip on', 2595, 50, './images/shoeproduct3.jpg'),
(4, 'World Balance Power Lunge', '- Debossed Texture Along Upper For Aesthetic Value\r\n- Spandex With Man Made Leather\r\n- For Easy On And Off\r\n- Tpu Overlay For Added Durability\r\n- Full Length Bubble Tech Outsole For Better', 2099, 50, './images/shoeproduct4.jpg'),
(5, 'ADIDAS\r\npro model 2g shoes', '- adidas performance\r\n- Best for basketball\r\n- Monochrome faux leather shell toe court', 2669, 20, './images/shoeproduct5.jpg'),
(6, 'World Balance Power Lunge', '- Debossed Texture Along Upper For Aesthetic Value\r\n- Spandex With Man Made Leather\r\n- For Easy On And Off\r\n- Tpu Overlay For Added Durability\r\n- Full Length Bubble Tech Outsole For Better', 2099, 50, './images/shoeproduct6.jpg'),
(7, 'Nike\r\nWomen\'s Air Max Verona', '- Best for Lifestyle\r\n- Leather, Synthetic, Textile upper\r\n- Textile insole', 4529, 50, './images/shoeproduct7.jpg'),
(8, 'Nike\r\nAir Vapormax 2020 Fk Shoes', '- Best for lifestyle\r\n- Logo knitted sneakers with marble print\r\n- Made with recycled materials', 9349, 50, './images/shoeproduct8.jpg'),
(10, 'ADIDAS ClimaWarm Bounce Shoes', '- adidas performance - Best for performance', 5400, 100, './images/shoeproduct9.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lastname`, `middlename`, `firstname`, `address`, `email`, `contact`, `password`, `secret`, `role`) VALUES
(2, 'Novero', 'B.', 'Jamer ', 'Brgy. Sum-ag , Bacolod City', 'jamer1811novero@gmail.com', '09279247871', '0f4743382f731ea05880feb654b53873', 'jamer1811', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe_items`
--
ALTER TABLE `shoe_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shoe_items`
--
ALTER TABLE `shoe_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
