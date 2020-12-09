-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2020 pada 03.58
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
-- Database: `multadzam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `nama_penerima` varchar(25) NOT NULL,
  `no_telepon` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `catatan_pesanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', 'awdqw', ' qwdw'),
(11, 'PUTRA PRASSIESA ABIMANYU', 'ppabimanyu@gmail.com', 'awdqw', ' sbre');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `kd_roti` varchar(11) NOT NULL,
  `nama_roti` varchar(25) NOT NULL,
  `foto_roti` varchar(25) NOT NULL,
  `harga_roti` int(11) NOT NULL,
  `detail_roti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `kd_roti` int(11) NOT NULL,
  `nama_roti` varchar(25) NOT NULL,
  `foto_roti` varchar(11) NOT NULL,
  `harga_roti` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_partner`
--

CREATE TABLE `mitra_partner` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `add_information` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra_partner`
--

INSERT INTO `mitra_partner` (`id`, `first_name`, `last_name`, `address`, `email`, `phone`, `add_information`) VALUES
(2, 'putra prassiesa abimanyu', '', '', 'ppabimanyu@gmail.com', '08123456789', 'sadfghj'),
(24, 'assfewf', 'wefewrgre', 'abimstrees@gmail.com', '089699728900', 'acfweg', 'asdfrtg'),
(25, 'assfewf', 'afewfwe', 'xaace@gmail.com', '089699728900', 'acs', 'sdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_roti` int(11) NOT NULL,
  `nama_roti` varchar(25) NOT NULL,
  `foto_roti` varchar(25) NOT NULL,
  `harga_roti` int(11) NOT NULL,
  `detail_roti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`kd_roti`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD UNIQUE KEY `kd_roti` (`kd_roti`);

--
-- Indeks untuk tabel `mitra_partner`
--
ALTER TABLE `mitra_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD UNIQUE KEY `kd_roti` (`kd_roti`),
  ADD KEY `kd_roti_2` (`kd_roti`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mitra_partner`
--
ALTER TABLE `mitra_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
