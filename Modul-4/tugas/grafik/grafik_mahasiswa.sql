-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2021 pada 19.42
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
-- Database: `grafik_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `fakultas`) VALUES
(1, 'Johny Pambudi', '1234567890', 'L', 'Teknik'),
(2, 'Maya Rahmaniah', '1234456667', 'P', 'Ekonomi'),
(3, 'Diki ALfarabi Hadi', '123345678887', 'L', 'Teknik'),
(4, 'Suamtono', '123456789', 'L', 'Fisip'),
(5, 'Jamludin Syah', '12345663536', 'L', 'Teknik'),
(6, 'Rahmaniah', '212111231133', 'P', 'Ekonomi'),
(7, 'Qiano Arfabian Putra', '1123555365', 'L', 'Teknik'),
(8, 'Gibran', '1122432434', 'L', 'Ekonomi'),
(9, 'Johny', '12363377332', 'L', 'Pertanian'),
(10, 'Muhammad Riski', '12837373839', 'L', 'Fisip'),
(11, 'Rahmat Syah Alub', '122652626252', 'L', 'Fisip'),
(12, 'Mahmud Amir', '123455467464', 'L', 'Pertanian'),
(13, 'Aminah', '123112342', 'P', 'Teknik'),
(14, 'Putri Aladin', '213114324234', 'P', 'Ekonomi'),
(15, 'Lubis', '11231334234', 'P', 'Pertanian'),
(16, 'Iqlima', '12312423423', 'P', 'Pertanian'),
(17, 'Rahman Muhammad', '121312438', 'L', 'Pertanian'),
(22, 'Axel', '121', 'L', 'Teknik'),
(23, 'AXEL BERKATI', '193010503007', 'L', 'teknik'),
(24, 'ERLAN SEBASTIAN USIN', '193030503074', 'L', 'teknik'),
(25, 'adit', '193010503009', 'p', 'teknik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
