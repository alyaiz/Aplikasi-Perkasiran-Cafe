<?php
include 'koneksi.php';
if(isset($_GET['ID_Supplier'])){
    $hapus = mysqli_query($conn, "DELETE FROM supplier WHERE ID_Supplier= '".$_GET['ID_Supplier']."'");
    header('location:supplier.php');
}
