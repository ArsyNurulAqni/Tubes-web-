<?php
session_start();
include "konfig.php"; // Pastikan path ini benar

$username = $_POST['username'];
$password = md5($_POST['password']); // Enkripsi password dengan md5

if (!isset($conn)) {
    die("Koneksi belum tersedia. Pastikan file config.php sudah benar.");
}

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$nBaris = mysqli_num_rows($query);

if ($nBaris > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location: index.php');
} else {
    echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
    echo "<meta http-equiv='refresh' content='1; url=login.php'>";
}
?>
