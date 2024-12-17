<?php
if (!defined('INDEX')) die("");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nama_hotel = $_POST['nama_hotel'];
$nomor_kamar = $_POST['nomor_kamar'];


$query = mysqli_query($conn, "UPDATE pengunjung SET
Nama_pengunjung='$nama', nama_hotel='$nama_hotel', nomor_kamar='$nomor_kamar' WHERE id_pengunjung='$id'");

if ($query) {
    echo "<meta http-equiv='refresh' content='0; url=?hal=pengunjung'>";
} else {
    echo "<script>alert('Tidak dapat mengubah data')</script>";
    echo mysqli_error($conn);
}
