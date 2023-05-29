<?php
include 'koneksi.php';
if (isset($_GET['ID_Barang'])) {
    $hapus = mysqli_query($conn, "DELETE FROM barang WHERE ID_Barang= '" . $_GET['ID_Barang'] . "'");
    header('location:barang.php');
}
