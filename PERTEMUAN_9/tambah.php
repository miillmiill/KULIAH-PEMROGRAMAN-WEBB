<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
     <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
    <h2>Tambah Catatan Baru</h2>
    <a href="index.php">← Kembali</a>
    <br><br>

    <form method="POST">
        Judul: <br>
        <input type="text" name="judul" required><br><br>
        Isi Catatan: <br>
        <textarea name="isi" rows="5" cols="40" required></textarea><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $query = "INSERT INTO catatan (judul, isi) VALUES ('$judul', '$isi')";
        mysqli_query($conn, $query);

        echo "<script>alert('Catatan berhasil disimpan!'); window.location='index.php';</script>";
    }
    ?>
</body>
</html>
