<?php

$hosname = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

$koneksi = mysqli_connect($hosname, $username, $password, $database);

if (!$koneksi) {
    die("koneksi gagal!");
}
