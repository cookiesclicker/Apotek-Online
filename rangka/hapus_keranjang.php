<?php 
session_start(); //agar tidak terhapus semua maka saya gunakan start bukan destroy
$id_produk = $_GET['id'];
unset($_SESSION['keranjang'][$id_produk]);
echo "<script>location='keranjang.php';</script>";
?>