<?php
session_start();
include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <title>Apotek Laras | Detail</title>
    <link rel="stylesheet" href="../lamanadmin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <section class="konten">
        <div class="container">
            <h1>Detail Produk</h1><br>

            <?php
            $id_produk = $_GET['id'];
            
            $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk' ");
            $detail = $ambil->fetch_assoc();
            ?>

            <div class="row">
                <div class="col-md-6">
                    <img src="../foto_produk/<?php echo $detail['foto_produk'] ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2><?php echo $detail['nama_produk']; ?></h2>
                <h3>Rp. <?php echo number_format($detail['harga_produk']); ?></h3>
                <h3><?php echo number_format($detail['berat']); ?> Gram</h3>
                <form method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" min="1" class="form-control" name="jumlah">
                            <div class="input-group-btn">
                                <button class="btn btn-success" name="beli">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['beli'])) {
                    //mendapatkan jumlah yang diinputkan
                    $jumlah = $_POST['jumlah'];

                   //masukkan ke keranjang belanja
                    $_SESSION['keranjang'][$id_produk] = $jumlah;

                    echo "<script>alert('Produk Telah Masuk Kedalam Keranjang');</script>";
                    echo "<script>location='keranjang.php';</script>";

                }
                ?>
                <p><?php echo $detail['deskripsi_produk']; ?></p>
                <a href="medicine.php" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </section>
</body>
</html>