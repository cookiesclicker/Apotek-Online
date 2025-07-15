<?php

$db = mysqli_connect("localhost", "root", "", "apotik");
if ($db) {
    echo "";
} else {
    echo "Koneksi Gagal";
}
