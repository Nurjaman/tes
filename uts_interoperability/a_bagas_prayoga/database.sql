-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Des 2017 pada 10.04
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_bagas_prayoga_list`
--

CREATE TABLE IF NOT EXISTS `a_bagas_prayoga_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `tempat_lahir` varchar(70) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `a_bagas_prayoga_list`
--

INSERT INTO `a_bagas_prayoga_list` (`id`, `nama`, `nama_panggilan`, `alamat`, `email`, `no_hp`, `hobi`, `tempat_lahir`, `status`, `pekerjaan`, `negara`, `provinsi`, `kabupaten`, `kota`, `kecamatan`) VALUES
(1, 'abdussalam', 'salam', 'jln.psantren', 'abdus@gmail.com', 818029898, 'test1', 'buton', 'belum kawin', 'kuliah', 'indonesia', 'jawa barat', 'bandung barat', 'cimahi', 'cipageran'),
(2, 'anashrulyusuf', 'acuy', 'pojok', 'acuy@gmail.com', 2147483647, 'main gitar', 'cimahi', 'jomblo', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'pojok'),
(3, 'adam gayuh', 'adam', 'cijerah', 'adam@gmail.com', 2147483647, 'usaha', 'bandung', 'jomblo', 'kuliah', 'indonesia', 'jawa barat', 'bandung ', 'bandung', 'cijerah'),
(4, 'bagas prayoga', 'yoga', 'padalarang', 'bgsprg@gmail.com', 2147483647, 'main gitar', 'bogor', 'udeh ada', 'kuliah', 'indonesia', 'jawa barat', 'bandung barat', 'padalarang ', 'ngamprah'),
(5, 'bagas kara', 'kara', 'padalarang', 'kara@gmail.com', 2147483647, 'desain', 'ngamprah', 'jomblo dong', 'kuliah', 'indonesia ', 'jawa barat', 'bandung barat', 'padalarang', 'ngamprah'),
(6, 'bayu saputro', 'bayu', 'cimahi', 'bayu@gmail.com', 2147483647, 'ngoding', 'cimahi', 'entahlah', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'cimahi utara'),
(7, 'didit saputra', 'didit', 'cimahi', 'didit@gmail.com', 2147483647, 'ngoding', 'cimahi', 'katanya sih ada', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'cimahi'),
(8, 'diki fahrizal', 'diki', 'pojok', 'diki@gmail.com', 2147483647, 'main', 'cimahi', 'udeh ada', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'cimahi'),
(9, 'febi febiansyah', 'ebi', 'jl.psantren', 'ebi@gmail.com', 2147483647, 'main gitar', 'garut', 'udeh ada', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'cimahi'),
(10, 'febian dixie', 'dixie', 'bandung', 'dixie@gmail.com', 2147483647, 'makan', 'bandung', 'udeh ada', 'kuliah', 'indonesia', 'jawa barat', 'bandung', 'cimahi', 'cimahi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
