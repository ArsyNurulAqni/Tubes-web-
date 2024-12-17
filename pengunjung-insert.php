<?php
if (!defined('INDEX')) die("");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama_pengunjung = $_POST['nama'];
$nama_hotel = $_POST['nama_hotel'];
$nomor_kamar = $_POST['nomor_kamar'];


$query = "INSERT INTO pengunjung (nama_pengunjung, nama_hotel, nomor_kamar) VALUES ('$nama_pengunjung', '$nama_hotel', '$nomor_kamar')";
$result = mysqli_query($conn, $query);

if($result){
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<meta http-equiv='refresh' content='0; url=?hal=pengunjung'>";
} else {
    echo "<script>alert('Tidak dapat menyimpan data');</script>";
    echo "Error: " . mysqli_error($conn);
}

// Pastikan koneksi ditutup setelah digunakan
mysqli_close($conn);
?>
