-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2017 pada 18.18
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nurjaman_list_mahasiswa`
--

CREATE TABLE `nurjaman_list_mahasiswa` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `hari_normal` varchar(25) NOT NULL,
  `absen` varchar(25) NOT NULL,
  `hari_kerja` varchar(25) NOT NULL,
  `gaji_perhari` varchar(255) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `kasbon` varchar(255) NOT NULL,
  `gaji_bersih` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nurjaman_list_mahasiswa`
--

INSERT INTO `nurjaman_list_mahasiswa` (`id`, `nik`, `nama`, `jenis_kelamin`, `jabatan`, `hari_normal`, `absen`, `hari_kerja`, `gaji_perhari`, `bonus`, `kasbon`, `gaji_bersih`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `status`) VALUES
(1, 'NK001', 'Nurjaman', 'L', 'MG', '25', '1', '24', 'Rp. 500.000', 'Rp. 1.0000.000', 'Rp. 750.000', 'Rp. 9.500.000', 'Cimahi', '20 Desember 1996', 'Jl. Cihanjuang', 'Aktif'),
(2, 'NK002', 'Komar', 'L', 'OB', '25', '5', '20', 'Rp. 100.000', 'Rp. 50.000', 'Rp. 10.000', 'Rp. 1.400.000', 'Sumedang', '25 November 1999', 'Jl. in aja', 'Aktif'),
(3, 'NK003', 'Usep', 'L', 'KY', '25', '2', '23', 'Rp. 250.000', 'Rp. 300.000', 'Rp. 100.000', 'Rp. 3.200.000', 'Cianjur', '05 Januari 1998', 'Jl. Bangkuang', 'Aktif'),
(4, 'NK004', 'Nanda', 'P', 'KY', '25', '0', '25', 'Rp. 250.000', 'Rp. 400.000', 'Rp. 20.000', 'Rp. 3.600.000', 'Bandung', '09 Juni 1999', 'Jl. Parampa', 'Aktif'),
(5, 'NK005', 'Gilang', 'L', 'KY', '25', '5', '20', 'Rp. 250.000', 'Rp. 100.000', 'Rp. 500.000', 'Rp. 3.000.000', 'Ciamis', '24 Februari 2001', 'Jl. jalan', 'Aktif'),
(6, 'NK006', 'Bangbang', 'L', 'KY', '25', '0', '25', 'Rp. 250.000', 'Rp. 400.000', 'Rp. 20.000', 'Rp. 3.600.000', 'Bandung', '02 November 1998', 'Jl. Tangiang', 'Aktif'),
(7, 'NK007', 'Utari', 'P', 'KY', '25', '0', '25', 'Rp. 250.000', 'Rp. 400.000', 'Rp. 20.000', 'Rp. 3.600.000', 'Cimahi', '29 Juni 1999', 'Jl. Parongpong', 'Aktif'),
(8, 'NK008', 'Raisa', 'P', 'KY', '25', '0', '25', 'Rp. 300.000', 'Rp. 400.000', 'Rp. ', 'Rp. 3.800.000', 'Bandung', '01 Desember 1997', 'Jl. Cihanjuang', 'Aktif'),
(9, 'NK009', 'Ajay', 'L', 'OB', '25', '20', '5', 'Rp. 100.000', 'Rp. 50.000', 'Rp. 20.000', 'Rp. 1.500.000', 'Garut', '02 Maret 1998', 'Jl. Mangkubuono', 'Non-Aktif'),
(10, 'NK010', 'Lana', 'L', 'OB', '25', '0', '25', 'Rp. 100.000', 'Rp. 80.000', 'Rp. 10.000', 'Rp. 2.000.000', 'Lembang', '30 Maret 1997', 'Jl. Kolmas', 'Aktif'),
(11, 'NK011', 'Gina', 'P', 'MG', '25', '25', '0', 'Rp. 500.000', 'Rp. 300.000', 'Rp. 5.000.000', 'Rp. 6.000.000', 'Bandung', '09 Juni 1999', 'Jl. Padamala', 'Non-Aktif'),
(12, 'NK012', 'Jidan', 'L', 'KY', '25', '0', '25', 'Rp. 300.000', 'Rp. 200.000', 'Rp. 50.000', 'Rp. 3.600.000', 'Subang', '19 Januari 1998', 'Jl. kemana', 'Aktif'),
(13, 'NK013', 'Lina', 'P', 'MG', '25', '0', '25', 'Rp. 500.000', 'Rp. 300.000', 'Rp. 100.000', 'Rp. 9.200.000', 'Cimahi', '23 Januari 1998', 'Jl. jalan', 'Aktif'),
(14, 'NK014', 'Ubay', 'L', 'KY', '25', '0', '25', 'Rp. 300.000', 'Rp. 120.000', 'Rp. 20.000', 'Rp. 3.500.000', 'Lembang', '29 Mei 1999', 'Jl. buntu', 'Aktif'),
(15, 'NK015', 'Ferry', 'L', 'KY', '20', '2', '18', 'Rp. 350.000', 'Rp. 100.000', 'Rp. 50.000', 'Rp. 2.200.000', 'Sukabumi', '22 Agustus 1999', 'Jl. buntung', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nurjaman_list_mahasiswa`
--
ALTER TABLE `nurjaman_list_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nurjaman_list_mahasiswa`
--
ALTER TABLE `nurjaman_list_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
