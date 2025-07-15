<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>Apotek Laras</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Apotek</span> Laras</a>

        <form action="#">
          <div class="input-group input-navbar">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarSupport'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item active'>
              <a class='nav-link' href='index.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='about.php'>About Us</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='doctors.php'>Doctors</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='contact.php'>Medicine</a>
            <li class='nav-item'>
              <a class='nav-link' href='blog.php'>News</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='contact.php'>Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
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
            include("blog-details.php");
            $sql = "SELECT * FROM berita";
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
  
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

<?php include 'footer.php'; ?>
