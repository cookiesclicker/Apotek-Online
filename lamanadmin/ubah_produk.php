<h2 class="text-center">Ubah Produk</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<pre><?php print_r($pecah); ?></pre>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Berat (gram)</label>
        <input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat']; ?>">
    </div>
    <div class="form-group">
        <img src="../foto_produk/<?php echo $pecah['foto_produk']?>" width="200" height="150">
    </div>
    <div class="form-group">
        <label>Ganti Foto Produk</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi Produk</label>
        <textarea name='deskripsi' class='form-control' rows='5'>
            <?php echo $pecah['deskripsi_produk']; ?>
        </textarea><p>
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
    <a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
</form>

<?php 
if (isset($_POST['ubah'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];

    if(!empty(($lokasi))) {
      move_uploaded_file($lokasi, "../foto_produk/$nama");

      $koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', berat = '$_POST[berat]',
        foto_produk = '$nama', deskripsi_produk = '$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");
    }else{
      $koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', berat = '$_POST[berat]',
        foto_produk = '$nama', deskripsi_produk = '$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");

    }
    echo "<script>alert('Data Berhasil Diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>