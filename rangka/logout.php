<?php
session_start();
session_destroy();
echo "<script>alert('logout Berhasil');</script>";
echo "<script>location='medicine.php';</script>";
?>