-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 01:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `contact`) VALUES
(1, 'steak36@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_until` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `gambar`, `deskripsi`, `date_from`, `date_until`) VALUES
(2, 'Christmas Dinner', 'Christmas.jpg', '<p>Christmas is the season to be jolly! It is the most awaited holiday of the year when the entire family gathers to share intimate moments of love, laugh and fun. For some people, nothing beats the smell of your mom&rsquo;s home cooking during holiday, but it wouldn&rsquo;t hurt to go out on Christmas to gobble up delicious feasts only available once a year. Get ready to make this Christmas the most delicious one yet!</p>\r\n', '2021-12-27', '2022-01-03'),
(3, 'Valentine', 'Valentine.jpg', '<p>It&rsquo;s almost February, which means that Valentine&rsquo;s Day is fast approaching and you&rsquo;re probably still looking for the perfect way to impress your loved one. Come celebrate Valentine&#39;s Day at Steak 36!</p>\r\n', '2021-02-12', '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `isi_feedback` text NOT NULL,
  `point` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `isi_feedback`, `point`, `id_user`, `timestamp`) VALUES
(1, 'great', 4, 1, '2021-07-23 13:53:26'),
(2, 'great', 4, 1, '2021-07-23 13:56:29'),
(3, 'great', 4, 1, '2021-07-23 14:00:24'),
(4, 'great', 4, 1, '2021-07-23 14:00:42'),
(5, 'great', 4, 1, '2021-07-23 14:01:18'),
(6, 'great', 4, 1, '2021-07-23 14:01:27'),
(7, 'great', 4, 1, '2021-07-23 14:02:13'),
(9, 'great', 5, 2, '2021-07-23 14:13:33'),
(10, 'Nicely Grill', 4, 1, '2021-07-24 15:39:54'),
(11, 'Great View and Food', 5, 1, '2021-07-25 05:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` enum('Main Course','Dessert','Drink','Appetizer') NOT NULL,
  `gambar` varchar(300) DEFAULT NULL,
  `addition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar`, `addition`) VALUES
(1, 'Worcestershire Butter Roast Beef', '<p>Roasted Beef with the famous worcestershire butter</p>\r\n', 250000, 'Main Course', 'Worcestershirebeef.jpg', ''),
(2, 'Lamb Loin Recipe With Parmesan Risotto', '<p>Lamb loin with creamy parmesan risotto</p>\r\n', 300000, 'Main Course', 'Lamb.jpg', 'Recommendation'),
(4, 'Garlic & Herb Beef Tenderloin', '<p>Beef tenderloin cooked with herbs and garlic</p>\r\n', 285000, 'Main Course', 'Mint.jpg', ''),
(5, 'Rosemary and Garlic Roast Beef', '<p>Roasted high quality of beef with garlic and rosemary</p>\r\n', 250000, 'Main Course', 'Roast.jpg', 'Recommendation'),
(6, 'Stuffed Flank Steak', '<p>Beef flank stuffed with vegetable and herbs make it a perfect complete&nbsp;dish</p>\r\n', 275000, 'Main Course', NULL, ''),
(7, 'Cajun Butter Steak', '<p>Steak from a high quality beef roasted with butter and korean cajun sauce perfect for those who like Korean food</p>\r\n', 255000, 'Main Course', NULL, ''),
(8, 'Sicilian Meatloaf', '<p>Meatloaf with melting mozarella cheeze</p>\r\n', 210000, 'Main Course', 'Sicilian Meatloaf.jpg', ''),
(9, 'Whiskey Sour', '<p>One of the classic cocktails traditionally made beverage with the right proportions mixture of whiskey, lemon juice, sugar and egg white which create a rich and smooth texture.</p>\r\n', 150000, 'Drink', 'Whiskey.jpg', 'Recommendation'),
(10, 'Dark \'n Stormy', '<p>Combination of refreshing dark rum, ginger beer and lime make it a perfect solution for vodka drinkers who want to try something new.</p>', 200000, 'Drink', 'Dark.jpg', 'Recommendation'),
(11, 'Cosmopolitan', '<p>A pink-hued, Martini-style drink from citrus flavored vodka and a splash of cranberry juice create a fresh sensation&nbsp;for your night.</p>\r\n', 200000, 'Drink', 'Cosmopolitan Cocktail.jpg', ''),
(12, 'Negroni', '<p>Refreshing bitter cocktail made of one part gin, vermouth rosso and Campari, garnished with an orange peel.</p>\r\n', 210000, 'Drink', 'Negroni.png', ''),
(13, 'Orange Martini', '<p>Refreshing and delicious citrusy flavor of orange juice and a kick of vodka create a delightful taste in every sip.</p>\r\n', 180000, 'Drink', 'Orange Vodka Martini.jpg', ''),
(14, 'Mint Julep', '<p>Combination of bourbon, fresh mint, sugar, water and crushed ice will definitely freshen up everyone&#39;s taste buds</p>\r\n', 175000, 'Drink', 'Mint.jpg', ''),
(15, 'Virgin Mojito', '<p>A perfectly satisfying non-alcoholic beverage&nbsp;for a hot day prepared from lemon juice, soda, mint leaves, salt, water and a bunch of ice cubes for the ultimate blissful drink after a long day !</p>\r\n', 200000, 'Drink', 'Virgin Mojito.png', 'Recommendation'),
(16, 'French 75', '<p>A classic beverage consists of gin, fresh lemon juice, sugar and champagne providing ultimate refreshment during a brunch.</p>\r\n', 165000, 'Drink', 'French 75.png', ''),
(17, 'Wagyu Beef Carpaccio with Truffle', '<p>Using the freshest high-quality wagyu beef fillet dressed with a black truffle tapenade and a drizzle of shallot vinaigrette, surely makes a pleasant gourmet appetizer.</p>\r\n', 225000, 'Main Course', 'wagyu.jpg', 'Recommendation'),
(18, 'Strawberry-Basil Moscow Mule', '<p>A fruity twist mixed from the sweetness of strawberry, herbal tug of basil, vodka and ginger beer make it a perfect cocktail for a hot summer afternoon.</p>\r\n', 195000, 'Drink', 'Strawberry-Basil Moscow Mule.jpg', 'Recommendation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldDateTime` datetime NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldGuest` int(11) NOT NULL,
  `fldPhone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`id`, `fldName`, `fldDateTime`, `fldEmail`, `fldGuest`, `fldPhone`) VALUES
(1, 'AntonN', '2021-10-12 17:45:00', 'antonanton@gmail.com', 2, '081267123432'),
(2, 'Harry', '2021-09-01 15:30:00', 'harrypotter@hotmail.com', 3, '081356128712'),
(3, 'Scott McCall', '2021-07-16 11:00:00', 'scottmccall@gmail.com', 4, '085173183932'),
(4, 'Clarke Griffin', '2021-07-22 18:45:00', 'clarkegriff@gmail.com', 2, '08115123871');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_reservation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
