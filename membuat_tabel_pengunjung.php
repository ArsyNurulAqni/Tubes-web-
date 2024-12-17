<?php
include "konfig.php"; // Pastikan koneksi ke database sudah benar

// Membuat tabel 'user'

$sql_insert_user = "CREATE TABLE IF NOT EXISTS user (
    id_user INT(50) AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
// Menambah data ke tabel 'user' (pastikan password dienkripsi)
$Nama = "Arsy Nurul Aqni";
$username = "arsy";
$password = md5("1234");  // Menggunakan MD5 untuk enkripsi password

$sql_insert_user = "INSERT INTO user (Nama, username, password) VALUES ('$Nama', '$username', '$password')";

if (mysqli_query($conn, $sql_insert_user)) {
    echo "Data pengguna berhasil ditambahkan.<br>";
} else {
    echo "Gagal menambahkan data pengguna: " . mysqli_error($conn) . "<br>";
}

// Membuat tabel 'pengunjung'
$sql_pengunjung = "CREATE TABLE IF NOT EXISTS pengunjung (
    id_pengunjung INT(11) AUTO_INCREMENT PRIMARY KEY,
    Nama_pengunjung VARCHAR(100) NOT NULL,
    nama_hotel VARCHAR(100) NOT NULL,
    nomor_kamar VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql_pengunjung)) {
    echo "Tabel 'pengunjung' berhasil dibuat.<br>";
} else {
    echo "Gagal membuat tabel 'pengunjung': " . mysqli_error($conn) . "<br>";
}
?>
