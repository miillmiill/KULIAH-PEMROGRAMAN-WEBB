<?php
include 'db.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM catatan WHERE id=$id");
echo "<script>alert('Catatan dihapus!'); window.location='index.php';</script>";
?>
