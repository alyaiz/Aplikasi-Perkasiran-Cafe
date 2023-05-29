<?php 
session_start();
unset($_SESSION['keranjang']);
header("location:menuCof.php");
