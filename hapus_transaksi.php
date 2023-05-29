<?php
include 'koneksi.php';
if(isset($_GET['ID_Transaksi'])){
    $hapus = mysqli_query($conn, "DELETE FROM transaksi WHERE ID_Transaksi= '".$_GET['ID_Transaksi']."'");
    header('location:transaksi.php');
}
