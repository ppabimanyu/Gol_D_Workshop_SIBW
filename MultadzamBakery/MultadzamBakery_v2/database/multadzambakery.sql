-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 06.28
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
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `wa-email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `catatan` text NOT NULL,
  `shipping` text NOT NULL,
  `total` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `nama`, `phone`, `wa-email`, `alamat`, `catatan`, `shipping`, `total`, `tgl`, `status`) VALUES
(27, 'Putra Prassiesa Abimanyu', '08123456789', 'ppabimanyu@gmail.com', 'jember', 'asdfghjk', 'Kirim Dengan Minimal Order; Staff Kami Akan Verifikasi Melalui Telepon.', 200000, '2021-01-09', 'Due'),
(30, 'Putra Prassiesa Abimanyu', '08123456789', 'abimstrees@gmail.com', 'fewcfEWGV', 'WBRVBRWG', 'Kirim Dengan Minimal Order; Staff Kami Akan Verifikasi Melalui Telepon.', 1500000, '2021-01-09', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id_pesan` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `name_pesan` varchar(300) NOT NULL,
  `email_pesan` varchar(300) NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id_pesan`, `tgl_pesan`, `name_pesan`, `email_pesan`, `subject`, `pesan`) VALUES
(4, '2020-12-30', 'Putra Prassiesa Abimanyu', 'abimstrees@gmail.com', 'Hello, World!', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magni at neque labore dolores dolorum nemo accusamus harum sunt nulla temporibus natus, asperiores fugit pariatur ex obcaecati quod, suscipit itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magni at neque labore dolores dolorum nemo accusamus harum sunt nulla temporibus natus, asperiores fugit pariatur ex obcaecati quod, suscipit itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magni at neque labore dolores dolorum nemo accusamus harum sunt nulla temporibus natus, asperiores fugit pariatur ex obcaecati quod, suscipit itaque.'),
(8, '2021-01-08', 'putra prassiesa abimanyu', 'ppabimanyu@gmail.com', 'Hello, World!', ' btrnumu,il');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_checkout`
--

CREATE TABLE `detail_checkout` (
  `id` int(11) NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_checkout`
--

INSERT INTO `detail_checkout` (`id`, `id_checkout`, `id_produk`, `nama_produk`, `harga`, `qty`, `sub_harga`) VALUES
(41, 27, 18, 'Roti Coklat', 30000, 2, 60000),
(42, 27, 20, 'Roti Coklat', 50000, 2, 100000),
(43, 27, 19, 'Roti Coklat', 40000, 1, 40000),
(44, 28, 17, 'Roti Coklat', 20000, 1, 20000),
(45, 28, 21, 'Roti Coklat', 60000, 1, 60000),
(46, 29, 16, 'Roti Coklat', 10000, 1, 10000),
(47, 30, 20, 'Roti Coklat', 50000, 30, 1500000),
(48, 31, 16, 'Roti Coklat', 10000, 1, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `featured_menu`
--

CREATE TABLE `featured_menu` (
  `id_fm` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_fm` varchar(300) NOT NULL,
  `harga_fm` int(11) NOT NULL,
  `deskripsi_fm` text NOT NULL,
  `gambar_fm` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `featured_menu`
--

INSERT INTO `featured_menu` (`id_fm`, `id_produk`, `nama_fm`, `harga_fm`, `deskripsi_fm`, `gambar_fm`) VALUES
(26, 16, 'Roti Coklat', 10000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (1).jpeg'),
(27, 18, 'Roti Coklat', 30000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM.jpeg'),
(28, 17, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.03 PM.jpeg'),
(29, 20, 'Roti Coklat', 50000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.07.01 PM.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `tgl_mitra` date NOT NULL,
  `name_mitra` varchar(300) NOT NULL,
  `email_mitra` varchar(300) NOT NULL,
  `phone_mitra` varchar(15) NOT NULL,
  `address_mitra` text NOT NULL,
  `add_information_mitra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `tgl_mitra`, `name_mitra`, `email_mitra`, `phone_mitra`, `address_mitra`, `add_information_mitra`) VALUES
(3, '2020-12-30', 'Abimanyu', 'ppabimanyu@gmail.com', '08123456789', 'Andongsari Krajan, Ambulu, Jember', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi at, inventore enim voluptatum totam expedita alias dolore. Vitae error corrupti iure temporibus illum suscipit? Eaque ab totam aperiam officia autem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi at, inventore enim voluptatum totam expedita alias dolore. Vitae error corrupti iure temporibus illum suscipit? Eaque ab totam aperiam officia autem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi at, inventore enim voluptatum totam expedita alias dolore. Vitae error corrupti iure temporibus illum suscipit? Eaque ab totam aperiam officia autem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi at, inventore enim voluptatum totam expedita alias dolore. Vitae error corrupti iure temporibus illum suscipit? Eaque ab totam aperiam officia autem!');

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
(16, 'Roti Coklat', 10000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (1).jpeg'),
(17, 'Roti Coklat', 20000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.03 PM.jpeg'),
(18, 'Roti Coklat', 30000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM.jpeg'),
(19, 'Roti Coklat', 40000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.05 PM.jpeg'),
(20, 'Roti Coklat', 50000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.07.01 PM.jpeg'),
(21, 'Roti Coklat', 60000, 'BoxBread seri DOME Chocolate Chips ini benar-benar diramu untuk penggemar coklat gelap sejati. Roti coklat yang penuh dengan kepingan coklat gelap. Double-Chocolate. Coklat banget deh pokoknya. Hanya coklat premium dengan full cocoa butter tulen yang kami pakai untuk roti ini. Only good real chocolate for chocolate lovers.', 'WhatsApp Image 2020-12-23 at 12.22.04 PM (2).jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_checkout` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `wa-email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `catatan` text NOT NULL,
  `shipping` text NOT NULL,
  `total` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_checkout`, `nama`, `phone`, `wa-email`, `alamat`, `catatan`, `shipping`, `total`, `tgl`, `status`) VALUES
(28, ' Putra Prassiesa Abimanyu', '0812345678', 'asd@gmail.com', 'jember', 'd vFBDdfB', 'Ambil di Outlet Multadzam', 80000, '2021-01-09', 'Canceled'),
(29, ' Putra Prassiesa Abimanyu', '0812345678', 'asd@gmail.com', 'jember', ' sfvb', 'Kirim Dengan Minimal Order; Staff Kami Akan Verifikasi Melalui Telepon.', 10000, '2021-01-09', 'Finish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `sandi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `sandi`) VALUES
(1, 'multadzam', '$2y$10$1h6XTlMvM5/.fgVYBdGI6OD9CLHN60dyWtzKQScIAYkSkn7mpzkpi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `detail_checkout`
--
ALTER TABLE `detail_checkout`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `detail_checkout`
--
ALTER TABLE `detail_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `featured_menu`
--
ALTER TABLE `featured_menu`
  MODIFY `id_fm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
