<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "lab8_php_database";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
}