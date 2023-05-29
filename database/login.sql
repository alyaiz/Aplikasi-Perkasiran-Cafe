-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2022 pada 06.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int(50) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Jumlah_Barang` int(50) NOT NULL,
  `Harga_Barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Jumlah_Barang`, `Harga_Barang`) VALUES
(1001, 'Mie Ayam', 20, 500000),
(1002, 'Daging Bebek', 50, 2500000),
(1003, 'Daging Ayam', 50, 5000000),
(1004, 'Kopi Robusta', 300, 650000),
(1005, 'Kopi Arabica', 300, 650000),
(1006, 'Bayam', 100, 3000000),
(1007, 'Frozen Food', 50, 550000),
(1008, 'Ikan Laut', 50, 5500000),
(1009, 'Teh Hijau', 60, 740000),
(10016, 'Daging Ayam', 25, 30000),
(10020, 'Daging Ikan', 20, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id`, `username`, `password`, `nama`) VALUES
(1, 'kasir', 'kasir1', 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `ID_Supplier` int(100) NOT NULL,
  `Nama_Supplier` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `Keterangan_Supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`ID_Supplier`, `Nama_Supplier`, `Alamat`, `Keterangan_Supplier`) VALUES
(109874, 'Alya', 'Jl. Rongga 09', 'Supplier Buah'),
(254698, 'Izzah', 'Jl. Jeruk 90', 'Supplier Daging Sapi'),
(278563, 'Zalfa', 'Jl. Medan 12', 'Supplier Ikan Laut'),
(289714, 'Muhammad', 'Jl. Sulawesi 34', 'Supplier Kopi Arabica'),
(378201, 'Lucky', 'Jl. Mawar 01', 'Supplier Kopi Robusta'),
(567812, 'Kenandra', 'Jl. Gajah 54', 'Supplier Teh Hijau'),
(768450, 'Najwa', 'Jl. Selang Timur 32', 'Supplier Sayur'),
(789614, 'Lala', 'Jl. Buaya 43', 'Supplier Ice Cube'),
(876532, 'Alex ', 'Jl. Serigala 34', 'Supplier Daging Ayam\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(50) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `Nama_Barang`, `Harga`) VALUES
(2001547, 'Es Teh', 60000),
(2002398, 'Teh Anget', 10000),
(2003971, 'Chicken Rice Bowl, Bolognese Fries, Fresh Fruit, Asparagus soup, Ice Tea, Kopi Arabica', 467000),
(2004981, 'Braised Beef, Hot Tea', 89000),
(2005612, 'French Fries', 63000),
(2006210, 'Smoke Chicken, French Fries, Ice Tea, Apple Juice', 187000),
(2006521, 'Mix Soup, Mineral Water', 79000),
(2007610, 'Beef Teriyaki, Smoked Chicken, Guava Juice, Ice Tea', 231000),
(2009680, 'Chicken Steak, Kopi Robusta', 750000),
(2009681, 'mie angel', 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin1', 'zalfa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID_Supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_Barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `ID_Supplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908054;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009684;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
