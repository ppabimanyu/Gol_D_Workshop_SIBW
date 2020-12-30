-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2020 pada 06.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdo`
--

CREATE TABLE `pdo` (
  `NIM` varchar(10) NOT NULL,
  `Nama` text NOT NULL,
  `Alamat` varchar(10) NOT NULL,
  `Kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pdo`
--

INSERT INTO `pdo` (`NIM`, `Nama`, `Alamat`, `Kelas`) VALUES
('E411911', 'Udin', 'Jl. Terawa', 'A'),
('E41112', 'Budi', 'Jl. Dukun', 'B'),
('E411913', 'Joni', 'Jl. Munyer', 'C'),
('E411111', 'indra', 'jl.anusapa', 'B'),
('E411916', 'Dika', 'Jl. Maruk', 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
