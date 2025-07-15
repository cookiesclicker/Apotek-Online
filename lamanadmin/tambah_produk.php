<h2 class="text-center">Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label for="Harga">Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
        <div class="form-group">
        <label for="Berat">Berat (Gram)</label>
        <input type="number" class="form-control" name="berat">
    </div>
        <div class="form-group">
        <label for="Deskripsi">Deskripsi</label>
        <textarea type="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" name="deskripsi"></textarea>
    </div>
        <div class="form-group">
        <label for="Foto">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
    <a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_produk/" . $nama);
    $koneksi->query("INSERT INTO produk(nama_produk, harga_produk, berat, foto_produk, deskripsi_produk)
        VALUES('$_POST[nama]', '$_POST[harga]' , '$_POST[berat]' , '$nama', '$_POST[deskripsi]')");
    echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>
