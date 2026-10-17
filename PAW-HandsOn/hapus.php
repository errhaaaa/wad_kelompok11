<?php
require "koneksi.php";

$id = $_GET["id"];

mysqli_execute_query(
    $koneksi,
    "DELETE FROM paw_handson WHERE id = ?",
    [$id]
);

header("Location: index.php");
exit;
?>