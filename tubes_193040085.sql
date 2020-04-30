-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 13.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040085`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Nama Barang` varchar(100) NOT NULL,
  `apparel` varchar(100) NOT NULL,
  `Jml Barang` varchar(100) NOT NULL,
  `Total Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `Gambar`, `Nama Barang`, `apparel`, `Jml Barang`, `Total Harga`) VALUES
(1, '1.jfif', 'Celana panjang', 'eiger', '3', 'RP. 600.000,00'),
(2, '2.jfif', 'kaos', 'eiger', '5', 'Rp. 750.000,00'),
(3, '3.jfif', 'jaket', 'eiger', '1', 'Rp. 500.000,00'),
(4, '4.jfif', 'kaos', 'three second', '2', 'Rp. 350.000,00'),
(5, '5.jpg', 'kemeja', 'Levis', '1', 'Rp. 150.000,00'),
(6, '6.jfif', 'hodie', 'eiger', '2', 'Rp. 800.000,00'),
(7, '7.jfif', 'celana pendek', 'eiger', '3', 'RP. 300.000,00'),
(8, '8.jpg', 'celana panjang', 'cardinal', '2', 'Rp. 600.000,00'),
(9, '9.jfif', 'jaket', 'eiger', '1', 'Rp. 300.000,00'),
(10, '10.jfif', 'celana pendek', 'cardinal', '1', 'Rp. 150.000,00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alatmusik`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
