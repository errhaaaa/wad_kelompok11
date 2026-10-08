<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $paket_cuci = $_POST["paket"];

    $sql = "INSERT INTO paw_handson (nama, paket_cuci)
            VALUES (?, ?)";

    mysqli_execute_query(
        $koneksi,
        $sql,
        [$nama, $paket_cuci]
    );

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id"></html>
<head>
    <meta charset="UTF-8">
    <title>Pilih Layanan Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Pilih Layanan Laundry</h1>
    <form method="post">
        <div class="mb-3">
            <label for="nama">Nama Pengguna:</label>
            <input type="text" id="nama" name="nama" required><br><br>
        </div>
        <div class="mb-3">
            <label for="paket">Paket Cuci:</label>
            <select id="paket" name="paket" required>
                <option value="">Pilih Paket</option>
                <option value="Cuci Setrika Reguler">Cuci Setrika Reguler</option>
                <option value="Cuci Setrika Express">Cuci Setrika Express</option>
                <option value="Cuci Setrika Instant">Cuci Setrika Instant</option>
            </select><br><br>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</body>