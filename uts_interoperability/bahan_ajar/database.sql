-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2017 pada 16.45
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_maulana_ramadhan`
--

CREATE TABLE `b_maulana_ramadhan` (
  `id` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(25) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_maulana_ramadhan`
--

INSERT INTO `b_maulana_ramadhan` (`id`, `nama`, `nama_panggilan`, `alamat`, `email`, `no_hp`, `hobi`, `tempat_lahir`, `status`, `pekerjaan`, `negara`, `provinsi`, `kabupaten`, `kota`, `kecamatan`) VALUES
(101, 'Maulana', 'Rama', 'Jl. CIpageran', 'maulrama12@gmail.com', 813210711, 'Mancing', 'Bandung', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', '', 'CImahi', 'Cimahi Utara'),
(102, 'Naufal', 'Opal', 'Jl cikalong wetan', 'naufal12@gmail.com', 62112313, 'Basket', 'Purwakarta', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', 'CIkalong Wetan', 'Cikalong', 'Cikalong'),
(103, 'Ray', 'Ray', 'Jl. CIbabat', 'Rayzin@gmail.com', 78743847, 'Desain', 'Aceh', 'Single', 'Mahasiswa', 'Indonesia', 'Aceh', 'Aceh', 'Langsa', 'Langsa'),
(104, 'Ummi', 'Umay', 'jl.cibabat cimahi', 'ummay12@gmail.com', 86348374, 'Desain', 'Purworejo', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', '', 'Cimahi', 'Cimahi Tengah'),
(105, 'Putri', 'OM putri', 'jl kerkop leuwigajah', 'Putriom12@gmail.com', 3743847, 'Gambar', 'Cimahi', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', '', 'Cimahi', 'Cimahi selatan'),
(106, 'Taufik', 'Opik', 'jl. Pakusarakan', 'opikmas12@gmail,com', 84758465, 'Games', 'Banten', 'Single', 'Mahasiswa', 'Indonesia', 'Banten', '', '', ''),
(107, 'Rizki', 'Bagja', 'jl Cisarua', 'Bagjar12@gmail.com', 234623, 'Touring', 'Lembang', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', 'Bandung barat', 'Lembang', 'Lembang'),
(108, 'Novita', 'Nov', 'jl. Mantap', 'novita12@gmail.com', 42836432, 'Games', 'Bandung', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', '', 'Cimahi', 'Cimahi tengah'),
(109, 'Razzak', 'Ojak', 'jl padalarang', 'razzak15@gmail.com', 847432, 'Touring', 'Madura', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', 'Bandung barat', '', 'bandung barat utara'),
(110, 'yogi', 'togi', 'jl top lokal', 'togiyogi@gmail.com', 834753495, 'Games', 'Bandung', 'Single', 'Mahasiswa', 'Indonesia', 'Jawa Barat', '', 'Cimahi', 'Cimahi Tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_maulana_ramadhan`
--
ALTER TABLE `b_maulana_ramadhan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
