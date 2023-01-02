-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 05:07 PM
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
-- Database: `wat2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(8) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) VALUES
(1, 'Jenny', 'Brown', 'j.brown@leedsbeckett.ac.uk', 'a136fb1978436c439cfdfc8605fcc419', 'F', 23),
(2, 'Ray', 'Green', 'r.green@leedsbeckett.ac.uk', 'd7131ddc1c17a14f85f34c2dd7a7ae30', 'M', 19),
(3, 'Arjun', 'Patel', 'a.patel@leedsbeckett.ac.uk', '9c4c162000df477b5b4c8bfff9efb383', 'M', 20),
(4, 'Steve', 'Rich', 's.rich@leedsbeckett.ac.uk', '1dca08509da8896c1b89c4cd5224a2fa', 'M', 27),
(5, 'Amy', 'Park', 'a.park@leedsbeckett.ac.uk', 'adb080fe93289aecbba9f0372864d18e', 'F', 20),
(6, 'Rehana', 'Hashmi', 'r.hashmi@leedsbeckett.ac.uk', '6181578232d0e40e9073ecb7e5808606', 'F', 22),
(7, 'Bhawana', 'Basnet', 'b.basnet@leedsbeckett.ac.uk', '702d9ba51c49c9bd6d5297c05e3bb530', 'F', 20);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(8) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `Name`, `Price`, `Category`, `Image`) VALUES
(5, 'T-Shirt', 300, 'Fashion', 'tshirt.webp'),
(6, 'Cap', 250, 'Fashion', 'cap.jpg'),
(7, 'Half Jacket', 2000, 'Fashion', 'half_jacket.jpg'),
(8, 'Shoe', 3500, 'Fashion', 'shoes.webp'),
(9, 'Jacket', 3000, 'Fashion', 'jacket.jpg'),
(10, 'Hoodie', 2000, 'Fashion', 'hoodie.jpg'),
(11, 'Party Shoes', 2500, 'Fashion', 'partyshoes.webp'),
(12, 'Nike Shoe', 3500, 'Fashion', 'shoes2.jpg'),
(13, 'Basket Ball', 1800, 'Sport', 'basketball.jpg'),
(14, 'Books', 1000, 'Education', 'books.jpg'),
(15, 'Burger', 250, 'Food', 'burger.jpg'),
(16, 'Cake', 600, 'Food', 'cake.jpg'),
(17, 'Circket Ball', 400, 'Sport', 'cricketball.jpg'),
(18, 'Cricket Bat', 1800, 'Sport', 'cricketbat.jpg'),
(19, 'Dairy Milk', 150, 'Food', 'dairymilk.jpg'),
(20, 'Dell Laptop', 100000, 'Electronic', 'dell.jpg'),
(21, 'Football', 1500, 'Sport', 'football.jpg'),
(22, 'Geometry Box', 120, 'Education', 'geometryBox.jpg'),
(23, 'Ray Ban', 800, 'Fashion', 'googles.jpg'),
(24, 'Round Goggles', 950, 'Fashion', 'googles.webp'),
(25, 'Apple Ipad', 120000, 'Electronic', 'ipad.jpg'),
(26, 'Iphone', 150000, 'Electronic', 'iphone.jpg'),
(27, 'KitKat', 50, 'Food', 'kitkat.jpg'),
(28, 'Apple Laptop', 200000, 'Electronic', 'macbook.jpg'),
(29, 'NoteBook', 300, 'Education', 'notebook.jpg'),
(30, 'One Plus', 60000, 'Electronic', 'oneplus.jpg'),
(31, 'Oppo', 30000, 'Electronic', 'oppo.png'),
(32, 'Pen', 90, 'Education', 'pen.jpg'),
(33, 'Pizza', 350, 'Food', 'pizza.jpg'),
(34, 'Samsung Mobile', 45000, 'Electronic', 'samsung.webp'),
(35, 'Sport Outfit', 2200, 'Sport', 'sportoutfit.jpg'),
(36, 'Study Table', 15000, 'Education', 'studytable.jpg'),
(37, 'Samsung TV', 150000, 'Electronic', 'television.jpg'),
(40, 'Chicken', 1200, 'Food', 'chicken.jpg'),
(41, 'Ice cream', 200, 'Food', 'icecream.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(8) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductImageName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImageName`) VALUES
(1, 'Mugs', 3.99, 'mug.jpg'),
(2, 'T-Shirt', 11.99, 'tshirt.jpg'),
(3, 'Books', 6.99, 'books.jpg'),
(4, 'Calendar', 11.99, 'calender.jpg'),
(5, 'Caps', 6.99, 'cap.jpg'),
(6, 'Jacket', 200, 'jacket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(6) DEFAULT 'user',
  `age` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `isValidity` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `age`, `status`, `isValidity`, `created_at`, `update_at`) VALUES
(1, 'admin', 'admin@gmail.com', '3e2959dcb5ae9022f356b64db796bd76', 'admin', '21', 1, 1, '2022-12-24 15:32:30', '2022-12-24 15:32:30'),
(2, 'karishma', 'karishma@gmail.com', '4491a13fa3f76a5f01805aa6702e1ec2', 'user', '16 - 30', 1, 1, '2022-12-24 19:19:18', '2022-12-24 19:19:18'),
(3, 'bibek', 'bibek@gmail.com', '340200f974f6f0402159303c5dbbbf84', 'user', '16 - 30', 1, 1, '2022-12-25 08:58:06', '2022-12-25 08:58:06'),
(4, 'Ram', 'ram@gmail.com', '390369bd0edd07f194148b29d17e55ae', 'user', '16 - 30', 1, 1, '2022-12-25 09:01:28', '2022-12-25 09:01:28'),
(5, 'ramesh', 'ramesh@gmail.com', '7af6bb13a6b9192d5a0db802d88c04b9', 'user', '16 - 30', 1, 1, '2022-12-25 09:04:48', '2022-12-25 09:04:48'),
(6, 'karan', 'karan@gmail.com', '6e39ae84087b6235718a16a0601aa206', 'user', '16 - 30', 1, 1, '2022-12-25 09:48:15', '2022-12-25 09:48:15'),
(11, 'simran', 'simran@gmail.com', 'e853eaa7b5454d630b5af1f90cd6c958', 'user', '16 - 30', 1, 1, '2022-12-26 10:18:23', '2022-12-26 10:18:23'),
(12, 'Sumit', 'sumit@gmail.com', '11662bd1aa6699575defe2e259df2f68', 'user', '16 - 25', 1, 1, '2022-12-30 21:57:24', '2022-12-30 21:57:24'),
(14, 'amit', 'amit@gmail.com', 'f039eb446cc0bd7c5ad12b7a0e2a1dae', 'user', '16 - 25', 1, 1, '2022-12-30 22:25:32', '2022-12-30 22:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'Karan', 'karan01'),
(2, 'Mukesh', 'mukesh01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
