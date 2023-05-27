-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 07.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_kafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_detail` int(100) NOT NULL,
  `id_Order` int(100) NOT NULL,
  `id_menu` int(100) NOT NULL,
  `pembelian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_detail`, `id_Order`, `id_menu`, `pembelian`) VALUES
(14, 11214, 1, 1),
(15, 11215, 2, 2),
(16, 11215, 3, 3),
(17, 11215, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `harga`, `stok`, `gambar`) VALUES
(1, 'Rumkiss Latte', 17000, 150, 'rumkiss.jpeg'),
(2, 'Salted Caramel Latte', 20000, 150, 'caramlat.jpg'),
(3, 'Mocha Latte', 17000, 150, 'mochaLatte.jpg'),
(4, 'iced brown sugar coffee', 18000, 150, 'aren.jpg'),
(5, 'Americano', 16000, 150, 'americ.jpg'),
(6, 'Vanilla Latte', 18000, 150, 'valiate.jpg'),
(7, 'Hazelnut Latte', 18000, 150, 'zelate.jpg'),
(8, 'Pandan Latte', 18000, 150, 'caramlat.jpg'),
(9, 'Tiramisu Latte', 18000, 150, 'tirlate.jpg'),
(10, 'Oreo Latte', 18000, 150, 'relate.jpg'),
(11, 'cappucino', 17000, 150, 'capcin.jpg'),
(12, 'Iced Tea', 18000, 200, 'esteh.jpg'),
(13, 'Matcha Tea', 18000, 150, 'machtea.jpg'),
(14, 'Chocolatte', 20000, 200, 'cokis.jpeg'),
(15, 'Melted Chocolate Cream', 21000, 200, 'cokrim.jpeg'),
(16, 'Belgian Chocolate Banana', 21000, 150, 'cokban.jpeg'),
(17, 'Classis Chocolate Greentea', 21000, 150, 'grte.jpg'),
(18, 'Cadburry Choco Crunchy', 22000, 150, 'cdbrychoc.jpeg'),
(19, 'Molten Creme Cake', 22000, 150, 'anu.jpeg'),
(20, 'Pizza Gaenak', 25000, 200, 'pizza.jpg\r\n'),
(21, 'Pizza Enak', 25000, 100, 'pizza.jpg'),
(22, 'Pizza Lumayan Enak', 25000, 150, 'pizza.jpg'),
(23, 'Pizza Lumayan Gaenak', 25000, 150, 'pizza.jpg'),
(24, 'Cap Cay', 22000, 200, 'capjay.jpg'),
(25, 'Spaghetti Bolognese\r\n', 25000, 200, 'spagbol.jpg'),
(26, 'Fried Chicken Rice', 22000, 200, 'nasiayam.jpeg'),
(27, 'Seafood Fried Rice', 22000, 200, 'nasgorsea.jpg'),
(28, 'Teriyaki Chicken Rice', 27000, 150, 'ayamteri.jpg'),
(29, 'Chicken Salted Egg Rice', 27000, 150, 'saltegaym.jpg'),
(30, 'Dory Salted Egg Rice', 26000, 150, 'saltegdor.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `ID_Transaksi` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`ID_Transaksi`, `jumlah`, `Harga`, `tanggal`) VALUES
(11214, 1, '17000', '2022-06-16'),
(11215, 6, '109000', '2022-06-16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_detail` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `ID_Transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
