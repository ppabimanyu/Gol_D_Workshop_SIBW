-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 10:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multadzambakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `nama_cart` varchar(300) NOT NULL,
  `gambar_cart` varchar(300) NOT NULL,
  `qty` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_pesan` int(11) NOT NULL,
  `name_pesan` varchar(300) NOT NULL,
  `email_pesan` varchar(300) NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_pesan`, `name_pesan`, `email_pesan`, `subject`, `pesan`) VALUES
(1, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', 'awdqw', ' avfrgrbgv'),
(2, 'ryan', 'msyarifjanuriansyah@gmail.com', 'Pengen renang', ' edawdasd');

-- --------------------------------------------------------

--
-- Table structure for table `featured_menu`
--

CREATE TABLE `featured_menu` (
  `id_fm` int(11) NOT NULL,
  `nama_fm` varchar(300) NOT NULL,
  `harga_fm` int(11) NOT NULL,
  `deskripsi_fm` text NOT NULL,
  `gambar_fm` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_menu`
--

INSERT INTO `featured_menu` (`id_fm`, `nama_fm`, `harga_fm`, `deskripsi_fm`, `gambar_fm`) VALUES
(6, 'Roti O', 3500, 'Roti O salah satu roti yang akan menemani hari hari anda', '1.jpeg'),
(11, 'Roti Sosis', 3500, 'Roti Sosis dengan saus dan mayonize menambah kenikmatan rasa roti ini', '2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `name_mitra` varchar(300) NOT NULL,
  `email_mitra` varchar(300) NOT NULL,
  `phone_mitra` varchar(15) NOT NULL,
  `address_mitra` text NOT NULL,
  `add_information_mitra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `name_mitra`, `email_mitra`, `phone_mitra`, `address_mitra`, `add_information_mitra`) VALUES
(1, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', '089699728900', 'acfweg', 'dx bfdb'),
(2, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', '089699728900', 'acfweg', 'sgrev');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `gambar_produk`) VALUES
(11, 'Roti O', 56767, 'Roti O memiliki rasa cokelat.', '1.jpeg'),
(12, 'Roti Sosis', 56767, 'Roti Sosis yang memiliki cita rasa yang tinggi.', '2.jpeg'),
(13, 'Roti Kepang', 8765, 'Roti Kepang berisi keju didalamnya.', '3.jpeg'),
(14, 'Pizza Mini', 8765, 'Roti Pizza Mini yang memiliki cita rasa yang tinggi.', '4.jpeg'),
(15, 'Roti Pisang Coklat', 2500, 'Roti Pisang Coklat berisi pisang dan coklat didalamnya.', '6.jpeg'),
(16, 'Roti Hotdog ', 3000, 'Roti Hotdog memiliki sosis diatas roti dan dicampur dengan berbagai saos dan bumbu diatasnya.', 'rotihotdogbiasa.jpeg'),
(17, 'Roti Hotdog Special', 3500, 'Roti Hotdog Spesial memiliki sosis diatas roti dan dicampur dengan berbagai saos dan bumbu serta memiliki beberapa selada dipinggin sosis.', 'hotdogspecial.jpeg'),
(18, 'Roti Brownies', 2500, 'Roti Brownies memiliki rasa coklat dengan topping chocochips.', 'rotibrownies1.jpeg'),
(19, 'Roti Coklat Wijen', 2500, 'Roti Coklat Wijen memiliki rasa coklat didalam roti serta taburan wijen diatasnya.', 'rotimanis.jpeg'),
(20, 'Roti Coklat', 2500, 'Roti Coklat memiliki rasa coklat didalam roti dan taburan misis diatasnya.', 'roticoklat.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `featured_menu`
--
ALTER TABLE `featured_menu`
  ADD PRIMARY KEY (`id_fm`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `featured_menu`
--
ALTER TABLE `featured_menu`
  MODIFY `id_fm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
