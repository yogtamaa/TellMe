<?php
function koneksiTellme() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "tellme";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}
?>