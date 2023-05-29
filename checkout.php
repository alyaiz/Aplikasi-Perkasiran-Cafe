<?php
session_start();

require_once 'koneksi1.php';

if (!isset($_SESSION['keranjang'])) {
    header('Location: menuCof.php');
}

$keranjang = unserialize(serialize($_SESSION['keranjang']));
$total_item = 0;
$total_bayar = 0;

for ($i = 0; $i < count($keranjang); $i++) {
    $total_item += $keranjang[$i]['pembelian'];
    $total_bayar += $keranjang[$i]['pembelian'] * $keranjang[$i]['harga'];
}

// proses penyimpanan data
$query = mysqli_query($conn, "INSERT INTO transaksi_penjualan (jumlah, Harga, tanggal) VALUES ('$total_item', '$total_bayar', '" . date('Y-m-d') . "')");


$id_order = mysqli_insert_id($conn);

for ($i = 0; $i < count($keranjang); $i++) {
    $id_produk = $keranjang[$i]['id_produk'];
    $pembelian = $keranjang[$i]['pembelian'];

    $query = mysqli_query($conn, "INSERT INTO laporan (id_Order, id_menu, pembelian) VALUES ('$id_order', '$id_produk', '$pembelian')");
}

unset($_SESSION['keranjang']);
$_SESSION['pesan'] = "Pembelian sedang diproses, terimakasih.";
header('Location: menuCof.php');
