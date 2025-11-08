<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM catatan WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Catatan</h2>
    <a href="index.php">← Kembali</a>
    <br><br>

    <form method="POST">
        Judul: <br>
        <input type="text" name="judul" value="<?= $row['judul']; ?>" required><br><br>
        Isi Catatan: <br>
        <textarea name="isi" rows="5" cols="40" required><?= $row['isi']; ?></textarea><br><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        mysqli_query($conn, "UPDATE catatan SET judul='$judul', isi='$isi' WHERE id=$id");
        echo "<script>alert('Catatan berhasil diupdate!'); window.location='index.php';</script>";
    }
    ?>
</body>
</html>
