<?php
$koneksi = mysqli_connect("localhost", "root", "", "modul_layanan_tarif");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";
?>