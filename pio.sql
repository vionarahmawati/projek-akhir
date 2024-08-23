-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Agu 2024 pada 12.32
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diyah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `paket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `email`, `telepon`, `paket`) VALUES
(6, 'Sangdiah', 'sangdiahcirebon54@gmail.com', '08542524646', '2'),
(8, 'Ujang', 'ujangfc@gmail.com', '089564646232', '2'),
(9, 'Ibnu Sina Salman Syam Aja', 'syamsalman371@gmail.com', '0895646462', '2'),
(10, 'Ibnu Sina Salman Syam Aja', 'syamsalman371@gmail.com', '0895646462', '3'),
(11, 'Ujang', 'syamsalman371@gmail.com', '0895646462', '1'),
(12, 'Ibnu Sina Salman Syam Aja', 'syamsalman371@gmail.com', '0895646462', '2'),
(13, 'Ibnu Sina Salman Syam Aja', 'syamsalman371@gmail.com', '0895646462', '1'),
(14, 'Ujang', 'syamsalman371@gmail.com', '0895646462', '1'),
(15, 'Ibnu Sina Salman Syam Aja', 'syamsalman371@gmail.com', '0895646462', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
