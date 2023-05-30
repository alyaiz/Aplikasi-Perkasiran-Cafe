-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 03:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafecash`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int(50) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Jumlah_Barang` int(50) NOT NULL,
  `Harga_Barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
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
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `username`, `password`, `nama`) VALUES
(1, 'kasir', 'kasir1', 'Zalfa');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_detail` int(100) NOT NULL,
  `id_Order` int(100) NOT NULL,
  `id_menu` int(100) NOT NULL,
  `pembelian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_detail`, `id_Order`, `id_menu`, `pembelian`) VALUES
(14, 11214, 1, 1),
(15, 11215, 2, 2),
(16, 11215, 3, 3),
(17, 11215, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
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
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID_Supplier` int(100) NOT NULL,
  `Nama_Supplier` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `Keterangan_Supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `supplier`
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
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(50) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
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
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `ID_Transaksi` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin1', 'Zalfa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID_Supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_Barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_detail` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `ID_Supplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908054;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009684;

--
-- AUTO_INCREMENT for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `ID_Transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11216;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
