-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2019 pada 03.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ciri_khusus` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ciri-ciri` varchar(255) NOT NULL,
  `petunjuk` varchar(255) NOT NULL,
  `status_barang` tinyint(1) NOT NULL,
  `jenis` int(11) NOT NULL,
  `penemuBarang` varchar(100) DEFAULT NULL,
  `pemilikBarang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `username`, `foto`, `nama_barang`, `tanggal`, `lokasi`, `ciri_khusus`, `deskripsi`, `kategori`, `ciri-ciri`, `petunjuk`, `status_barang`, `jenis`, `penemuBarang`, `pemilikBarang`) VALUES
(16, 'ayam', '2a8eb4442ad923083b6ea40d96e9e358.jpg', 'orang ganteng', '2019-11-13', 'sukbir', 'ganteng', 'orang ganteng ini punya aku', 'kartuID', 'ganteng', 'yaganteng', 1, 0, 'ayam', ''),
(55, 'ayam', '0a47adb548d6e3e813a61d5af1b6d9ee1.jpg', 'teteh cantik', '2019-11-20', 'telyu', 'sdjwkd', 'kwkdhdhw', 'buku', 'kdwjdhd', 'msnskjd', 1, 0, 'ciara', NULL),
(63, 'ayam', '1fd1cbedf144ac9848e376ba5720dcaf.jpg', 'pacar', '2019-11-15', 'warnet', 'gannteng', 'pacar aku hilang:( digondol sapi', 'kartuID', 'gantengpol', 'cowo', 1, 1, 'bian', NULL),
(64, 'ayam', '03a38fcedf3e31238a040d9fa5eabfe9.jpg', 'handphone', '2019-11-20', 'dihatimu', 'bts', 'ini hp qq', 'buku', 'putih', 'stiker', 1, 0, 'shahnaz', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `no_handphone` varchar(12) NOT NULL,
  `email` varchar(62) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `no_handphone`, `email`, `alamat`, `status`) VALUES
(1, 'shahnaz', 'shahnaz', '81dc9bdb52d04dc20036dbd8313ed055', '081224851404', 'shasha@gmail.com', 'bandung', 'user'),
(2, 'nanaz', 'Shahnaz Nur Asyifa', 'e10adc3949ba59abbe56e057f20f883e', '081123456789', 'nanaz@gmail.com', 'bandung, indonesia', 'user'),
(3, 'ciara', 'ciara nurdenara', '81dc9bdb52d04dc20036dbd8313ed055', '081123456787', 'ciara@gmail.com', 'bbekasi', 'user'),
(4, 'ayam', 'maya maya', '81dc9bdb52d04dc20036dbd8313ed055', '081224851302', 'maya@gmail.com', 'karawang', 'user'),
(5, 'bian', 'febiana', '81dc9bdb52d04dc20036dbd8313ed055', '081121236787', 'bian@gmail.com', 'jakarta', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
