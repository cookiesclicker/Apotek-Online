<?php include 'koneksi.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

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

 
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medicine.php">Medicine</a>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">News</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <div class="panel-body">
                    <form method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Subject</label>
                            <div class="col-md-6">
                                <input type="subjek" class="form-control" name="Subjek" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Message</label>
                            <div class="col-md-6">
                                <input type="message" class="form-control" name="Pesan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn btn-primary btn-lg" name="Send">Send</button>
                            </div>
                        </div>
                    </form>
                    <?php 
                    if (isset($_POST['Send'])) {
                        $nama = $_POST['Nama'];
                        $email = $_POST['Email'];
                        $subjek = $_POST['Subjek'];
                        $message = $_POST['Pesan'];

                            //query memasukkan kedalam database
                            $koneksi->query("INSERT INTO kontak(Nama, Email, Subjek, 
                            Pesan) VALUES('$nama', '$email', '$subjek', '$message')");
                            echo"<script>alert('Berhasil Mengirimkan Pesan');</script>";
                            echo "<script>location='contact.php';</script>";
                        }

  
                    ?>
                </div>
              </div>
           </div>
       </div>
    </div>
       


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>
<?php include 'footer.php'; ?>