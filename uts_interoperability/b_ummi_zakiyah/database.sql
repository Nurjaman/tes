-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 07:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_ummi_zakiyah_ibrati_data`
--

CREATE TABLE IF NOT EXISTS `b_ummi_zakiyah_ibrati_data` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nama_panggilan` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status` varchar(25) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_ummi_zakiyah_ibrati_data`
--

INSERT INTO `b_ummi_zakiyah_ibrati_data` (`nim`, `nama`, `nama_panggilan`, `jenis_kelamin`, `alamat`, `kota`, `kecamatan`, `provinsi`, `tempat_lahir`, `tanggal_lahir`, `email`, `no_hp`, `status`, `hobi`, `pekerjaan`) VALUES
('D11151035', 'Muhamad Chairul Kamil', 'Kamil', 'Laki-Laki', 'Jl. Pesantren', 'Cimahi', 'Cimahi Utara', 'Jawa Barat', 'Bandung', '1997-09-10', 'kamil@gmail.com', '087826327292', 'Mahasiswa', 'Main Gitar', 'Pelajar'),
('D11151045', 'Nita Apriyanti Rachayu', 'Nita', 'Perempuan', 'Jl. Cipageran', 'Cimahi', 'Cimahi Utara', 'Jawa Barat', 'Bandung', '1997-04-25', 'nita@gmail.com', '082216743837', 'Mahasiswa', 'Bisnis', 'Pelajar'),
('D11151046', 'Novita Kusuma Astuti', 'Novita', 'Perempuan', 'Cigugur Tengah', 'Cimahi', 'Cimahi Selatan', 'Jawa Barat', 'Cimahi', '1997-11-01', 'novita@gmail.com', '089658529345', 'Mahasiswa', 'Menggambar', 'Pelajar'),
('D11151047', 'Putri Aditya Syapitri', 'Putri', 'Perempuan', 'Leuwigajah', 'Cimahi', 'Leuwigajah', 'Jawa Barat', 'Bandung', '1997-04-19', 'putri@gmail.com', '089658331983', 'Mahasiswa', 'Makan', 'Pelajar'),
('D11151049', 'Razzak Ibnain Oktarianto', 'Razzak', 'Laki-Laki', 'Palarang', 'Bandung Barat', 'Padalarang', 'Jawa Barat', 'Bandung', '1997-10-01', 'razzak@gmail.com', '082217891797', 'Mahasiswa', 'Mancing', 'Pelajar'),
('D11151050', 'Rizki Bagja Nugraha', 'Bagja', 'Laki-Laki', 'Lembang', 'Bandung Barat', 'Lembang', 'Jawa Barat', 'Lembang', '1997-08-19', 'bagja@gmail.com', '087876543456', 'Mahasiswa', 'Main Gitar', 'Pelajar'),
('D11151067', 'Maulana Ramdhan', 'Maul', 'Laki-Laki', 'Jl. Cipageran', 'Bandung Barat', 'Bandung Barat', 'Jawa Barat', 'Cimahi', '1997-02-07', 'maulana@gmail.com', '082217501774', 'Mahasiswa', 'Mancing', 'Pelajar'),
('D11151068', 'Ummi Zakiyah Ibrati', 'Ummi', 'Perempuan', 'Jl. Margaluyu', 'Cimahi', 'Cimahi Tengah', 'Jawa Barat', 'Purworejo', '1997-09-12', 'ibratiu@gmail.com', '082217501774', 'Mahasiswa', 'Dengerin Musik', 'Pelajar'),
('D11152048', 'Ray Andika Winata', 'Ray', 'Laki-Laki', 'Aceh', 'Langsa', 'Langsa', 'Nanggroe Aceh Darussalam', 'Aceh', '1996-10-04', 'ray@gmail.com', '082272950679', 'Mahasiswa', 'Menggambar', 'Pelajar'),
('E11161004', 'Dysti Nuhretha Sani', 'Dysti', 'Perempuan', 'Jl. Margaluyu', 'Cimahi', 'Cimahi Tengah', 'Jawa Barat', 'Bandung', '1997-03-21', 'dysti@gmail.com', '081323232323', 'Mahasiswa', 'Membaca', 'Pelajar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
