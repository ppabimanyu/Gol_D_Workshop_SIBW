-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2020 pada 20.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

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
-- Struktur dari tabel `cart`
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
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id_pesan` int(11) NOT NULL,
  `name_pesan` varchar(300) NOT NULL,
  `email_pesan` varchar(300) NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id_pesan`, `name_pesan`, `email_pesan`, `subject`, `pesan`) VALUES
(1, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', 'awdqw', ' avfrgrbgv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `featured_menu`
--

CREATE TABLE `featured_menu` (
  `id_fm` int(11) NOT NULL,
  `nama_fm` varchar(300) NOT NULL,
  `harga_fm` int(11) NOT NULL,
  `deskripsi_fm` text NOT NULL,
  `gambar_fm` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `featured_menu`
--

INSERT INTO `featured_menu` (`id_fm`, `nama_fm`, `harga_fm`, `deskripsi_fm`, `gambar_fm`) VALUES
(12, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (1).jpeg'),
(13, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (2).jpeg'),
(14, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.07.01 PM.jpeg'),
(15, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.05 PM.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
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
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `name_mitra`, `email_mitra`, `phone_mitra`, `address_mitra`, `add_information_mitra`) VALUES
(1, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', '089699728900', 'acfweg', 'dx bfdb'),
(2, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', '089699728900', 'acfweg', 'sgrev');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `gambar_produk`) VALUES
(16, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (1).jpeg'),
(17, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.03 PM.jpeg'),
(18, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM.jpeg'),
(19, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.05 PM.jpeg'),
(20, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.07.01 PM.jpeg'),
(21, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (2).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `featured_menu`
--
ALTER TABLE `featured_menu`
  ADD PRIMARY KEY (`id_fm`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `featured_menu`
--
ALTER TABLE `featured_menu`
  MODIFY `id_fm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
