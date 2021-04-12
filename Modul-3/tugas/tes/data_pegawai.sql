-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 04.08
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
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pegawai`
--

CREATE TABLE `daftar_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `golongan` int(11) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_pegawai`
--

INSERT INTO `daftar_pegawai` (`id_pegawai`, `golongan`, `nama_pegawai`, `alamat`) VALUES
(1, 1, 'Novita', 'Jl. Hayam Wuruk 10'),
(2, 1, 'Bayu ', 'Jl. Trontoar'),
(3, 2, 'Jacobson', 'Jl. Mentari'),
(4, 4, 'Nur Nari', 'Jl. Olahwarna'),
(5, 3, 'Yulia', 'Jl. Pahlawan'),
(6, 3, 'Anggina', 'Jl. Handdoek'),
(7, 4, 'Brian', 'Jl. hiu Putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji_pegawai`
--

CREATE TABLE `gaji_pegawai` (
  `idgolongan` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan_transport` int(11) NOT NULL,
  `tunjangan_makan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gaji_pegawai`
--

INSERT INTO `gaji_pegawai` (`idgolongan`, `gaji_pokok`, `tunjangan_transport`, `tunjangan_makan`) VALUES
(1, 1200000, 100000, 75000),
(2, 1700000, 100000, 75000),
(3, 2200000, 150000, 90000),
(4, 2700000, 150000, 90000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `golongan` (`golongan`);

--
-- Indeks untuk tabel `gaji_pegawai`
--
ALTER TABLE `gaji_pegawai`
  ADD PRIMARY KEY (`idgolongan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `gaji_pegawai`
--
ALTER TABLE `gaji_pegawai`
  MODIFY `idgolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  ADD CONSTRAINT `daftar_pegawai_ibfk_1` FOREIGN KEY (`golongan`) REFERENCES `gaji_pegawai` (`idgolongan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
