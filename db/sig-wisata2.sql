-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 13.48
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig-wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-fasilitas`
--

CREATE TABLE `data-fasilitas` (
  `id_fasilitas` varchar(64) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longtitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-sekolah`
--

CREATE TABLE `data-sekolah` (
  `id_sekolah` varchar(64) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-sekolah`
--

INSERT INTO `data-sekolah` (`id_sekolah`, `nama_sekolah`, `gambar`, `alamat`, `deskripsi`, `latitude`, `longitude`) VALUES
('5d49e3c550889', 'SMK N 2 Bandar Lampung', '5d49e3c550889.jpg', 'Komplek Unila - Jl. Prof.Dr.Sumantri Brojonegoro. Bandar Lampung', 'SMK N 2 Bandar Lampung', '-5.364155', '105.245946'),
('5d49fdb15c1ad', 'SMK N 8 Bandar Lampung', '5d49fdb15c1ad.jpg', 'Jalan Imam Bonjol No.52 Kemiling Raya Kemiling, Kurungannyawa, Kec. Gedong Tataan, Kota Bandar Lampung, Lampung 35151', 'SMKN 8 Bandar Lampung', '-5.386797', '105.206569');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-toko`
--

CREATE TABLE `data-toko` (
  `id_toko` varchar(64) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longtitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data-wisata`
--

CREATE TABLE `data-wisata` (
  `id_wisata` varchar(64) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data-wisata`
--

INSERT INTO `data-wisata` (`id_wisata`, `nama_wisata`, `gambar`, `alamat`, `deskripsi`, `longitude`, `latitude`) VALUES
('5ff2d8a3f4086', 'Pantai Klara', '5ff2d8a3f4086.jpg', 'Gebang, Padang Cermin, Kabupaten Pesawaran, Lampung', '', '105.21330', '-5.57986');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
('1', 'admin', 'root'),
('5d4937342df88', 'root', 'toor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data-fasilitas`
--
ALTER TABLE `data-fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `data-sekolah`
--
ALTER TABLE `data-sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `data-toko`
--
ALTER TABLE `data-toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `data-wisata`
--
ALTER TABLE `data-wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
