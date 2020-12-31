-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 03:14 PM
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
-- Database: `db_crud_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `alamat`, `golongan`) VALUES
('E411910', 'Budiman Sudjatmiko', 'Jl Kemayoran Baru', 'A'),
('E411911', 'Tono Budiman', 'Jl Sekarputih', 'A'),
('E411912', 'Muhammad Syukur ', 'Jl Ahmad Yani', 'A'),
('E411913', 'Rendy Simanjuntak', 'Jl Mawar ', 'A'),
('E411914', 'Supriadi', 'Jl Pegangsaan', 'B'),
('E411915', 'Maman Adi', 'Jl Soedirman', 'B'),
('E411916', 'Sherlyn', 'Jl Durian Runtuh', 'C'),
('E411917', 'Ahmad Ferdy', 'Jl Cempaka', 'C'),
('E411918', 'Ricko Dewantoro', 'Jl Petamburan', 'D'),
('E411919', 'Celine', 'Jl Kemayoran Lama', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
