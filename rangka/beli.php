<?php 
session_start();
//mendapatkan id_produk dari url 
$id_produk = $_GET['id'];

//jika produk itu sudah ada dikeranjang maka produk itu ditambah 1
if (isset($_SESSION['keranjang'][$id_produk])) {
    $_SESSION['keranjang'][$id_produk] += 1;
} else {
//selain itu (belum ada di keranjang), maka produk itu dianggap dibeli 1
    $_SESSION['keranjang'][$id_produk] = 1;
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//Hubungkan ke keranjang.php
echo "<script>alert('Produk Telah Masuk Kedalam Keranjang Belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>