<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST["id"];
    $nama = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $paket_cuci = $_POST["paket"];

    $sql = "UPDATE paw_handson
            SET nama = ?, no_telp = ?, paket_cuci = ?
            WHERE id = ?";

    mysqli_execute_query($koneksi,$sql,
        [$nama, $no_telp, $paket_cuci, $id]
    );

    header("Location: index.php");
    exit;
    }
    $id  = $_GET["id"];
    $hasil = mysqli_execute_query($koneksi,
    "SELECT * FROM paw_handson WHERE id = ?", [$id]);
    $row   = mysqli_fetch_assoc($hasil);
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Laundry</h2>

    <form method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label>Nama Pengguna</label>
    <input type="text" name="nama"
           value="<?= htmlspecialchars($row['nama']) ?>" required>
    <br><br>

    <label>Nomor Telepon</label>
    <input type="tel" name="no_telp"
           value="<?= htmlspecialchars($row['no_telp']) ?>" required>
    <br><br>
    <label>Paket Cuci</label>
    <select name="paket" required>
        <option value="Cuci Setrika Reguler"
            <?= $row['paket_cuci'] == 'Cuci Setrika Reguler' ? 'selected' : '' ?>>
            Cuci Setrika Reguler
        </option>
        <option value="Express"
            <?= $row['paket_cuci'] == 'Express' ? 'selected' : '' ?>>
            Express
        </option>
        <option value="Instant"
            <?= $row['paket_cuci'] == 'Instant' ? 'selected' : '' ?>>
            Instant
        </option>
    </select>
    <br><br>

    <button type="submit" name="simpan">Simpan Perubahan</button>
    <a href="index.php">Kembali</a>
</form>
</div>
</body>
</html>