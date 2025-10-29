<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Catatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="note-container">
        <h2>Catatan</h2>
        <a class="tambah" href="tambah.php">+ Tambah Catatan</a>

        <div class="table-wrapper">
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                </tr>

                <?php
                $no = 1;
                $result = mysqli_query($conn, "SELECT * FROM catatan ORDER BY id DESC");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['judul']); ?></td>
                        <td class="isi"><?= nl2br(htmlspecialchars($row['isi'])); ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td>
                            <a class="edit" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                            <a class="hapus" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus catatan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
