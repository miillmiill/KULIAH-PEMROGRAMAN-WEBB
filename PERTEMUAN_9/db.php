<?php
$host = "localhost";
$user = "root"; // default user XAMPP
$pass = "";
$db   = "Catatan9";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
