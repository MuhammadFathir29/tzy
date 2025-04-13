<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ukk_kasir_aidil";
$koneksi = mysqli_connect("localhost", "root", "", "ukk_kasir_aidil");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>