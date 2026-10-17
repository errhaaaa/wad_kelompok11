<?php
require "koneksi.php";
$hasil = mysqli_query($koneksi,
"SELECT * FROM paw_handson");
?>
<!DOCTYPE html>
<html lang="id"></html>
<head>
    <meta charset="UTF-8">
    <title>Laundry Kel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="p-3 mb-2 bg-info text-dark"><h1>Selamat Datang di Laundry Kel 11</h1>
</div>
    <div class="p-3 mb-2 bg-info-subtle text-info-emphasis"><p>Berikut <strong>layanan laundry</strong> yang Kami Tawarkan:</p>
</div>

<table class="table">
  <thead>
    <tr>
        <th>ID</th>
        <th>Nama Pengguna</th>
        <th>Nomor Telepon
        <th>Paket Cuci</th>
    </tr>
  </thead>
   <tbody class="table-group-divider">
      <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
        <tr>
          <td><?= $row["id"] ?></td>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["no_telp"] ?></td>
          <td><?= $row["paket_cuci"] ?></td>

          <td>
            <a href="edit.php?id=<?= $row["id"] ?>"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>
             <a href="hapus.php?id=<?= $row["id"] ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus data ini?')">
                Hapus
              </a>
       </tr>
      <?php } ?>
    </tbody>
</table>
</body>
</html>




