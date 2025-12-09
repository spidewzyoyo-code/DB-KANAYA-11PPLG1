<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ujian_kanaya";

$config = mysqli_connect ($host, $user, $pass, $db);
if (!$config) {
    echo "Koneksi gagal: " . mysqli_connect_error();
}
?>
