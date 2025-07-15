<?php 
session_start();
include 'koneksi.php';

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
    echo "<script>alert('Produk Kosong, Silahkan Belanja Terlebih Dahulu');</script>";
    echo "<script>location='medicine.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apotek Laras | Keranjang</title>
    <link rel="stylesheet" href="../lamanadmin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<?php include 'menu.php'; ?>

    <section class="konten">
        <div class="container">
            <h1>Keranjang Belanja</h1><br>
            <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Produk</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Subharga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                   </thead>
                   <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
                      <?php
                      $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
                      $pecah = $ambil->fetch_assoc();
                      $subharga = $pecah['harga_produk'] * $jumlah;
                      ?>
                      
                       <tr>
                           <td><?php echo $nomor; ?></td>
                           <td><?php echo $pecah['nama_produk']; ?></td>
                           <td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
                           <td><?php echo $jumlah; ?></td>
                           <td>Rp. <?php echo $subharga; ?></td>
                           <td>
                              <a href="hapus_keranjang.php?id=<?php echo $id_produk; ?>" class="btn btn-danger btn-xs"onclick = "
                                 return confirm('Apakah Anda Yakin Ingin Menghapus Produk Ini?')">Hapus</a>
                           </td>
                       </tr>
                       <?php $nomor++; ?>
                       <?php endforeach ?>
                   </tbody>
            </table>
            <a href="medicine.php" class="btn btn-default">Lanjutkan Belanja</a>
            <a href="checkout.php" class="btn btn-success">Checkout</a>
        </div>
    </section>
</body>
</html>