<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>Portal Berita</h1>
        <p>Halaman Berita Seputar Kesehatan</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            include("koneksi.php");
            $sql = "SELECT * FROM Berita";
            $hasil = mysqli_query($db, $sql);

            $jml = mysqli_num_rows($hasil);
            if ($jml > 0) {
                while ($row = mysqli_fetch_assoc($hasil)) {

            ?>
                    <div class="col-sm-4">
                        <h3><?= $row["judul"]; //echo $row["judul"] 
                            ?></h3>
                        <p><?= $row["isi"]; ?></p>

                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

</body>

</html>