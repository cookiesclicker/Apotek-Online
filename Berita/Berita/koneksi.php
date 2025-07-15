<?php

$db = mysqli_connect("localhost", "root", "", "db_berita");
if ($db) {
    echo "";
} else {
    echo "Koneksi Gagal";
}
