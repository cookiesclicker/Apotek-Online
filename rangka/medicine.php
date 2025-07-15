<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <title>Apotik Laras\Pembelian Obat</title>
    <link rel="stylesheet" href="../lamanadmin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
     
</head>
<body>
    <nav class='navbar navbar-default'>
        <div class="container">
            <ul class="nav navbar-nav">
               <li><a href="index.php">Home</a></li>
               <li><a href="keranjang.php">Keranjang</a></li>
               <!---Jika sudah login (ada session pelanggan)-->
               <?php if (isset($_SESSION['pelanggan'])):?>
                <li><a href="riwayat.php">Riwayat Belanja</a></li>
                <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Logout</a></li>
               <!---Jika belum login (tidak ada session pelanggan)-->
                   <?php else: ?>
               <li><a href="login.php">Login</a></li>
               <?php endif ?>
               <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>
    </nav>     

          
    </div> <!-- .navbar-collapse -->

    <!--Content-->
    <section class="konten">
       <div class="container">
          <h1>Produk Terbaru</h1>
          <div class="row">
               <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
               <?php while($perproduk = $ambil->fetch_assoc()) { ?>
               <div class="col-md-4">
                   <div class="thumbnail">
                       <img src="../foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
                       <div class="caption text-center">
                           <h3><?php echo $perproduk['nama_produk']; ?></h3>
                           <h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?> </h5>
                           <a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Detail Produk</a>
                           <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-success">Beli Sekarang</a>
                       </div>
                   </div>  
               </div>
               <?php } ?>  
          </div>
       </div>
    </section> 


</body>
</html>