<?php
if(!defined('INDEX')) die(""); // Pastikan untuk menghindari akses langsung

// Daftar halaman yang valid
$halaman = array("dashboard", "pengunjung", "pengunjung-tambah", "pengunjung-edit", "pengunjung-hapus", "pengunjung-insert", "pengunjung-update");

$hal = isset($_GET['hal']) ? $_GET['hal'] : "dashboard";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung-tambah";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung-edit";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung-hapus";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung-insert";
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pengunjung-update";

if (in_array($hal, $halaman)) {
    $file = "$hal.php";

    if (file_exists($file)) {
        include $file;
    } else {
        echo "File halaman '$hal.php' tidak ditemukan.";
    }
} else {
    echo "Halaman tidak ditemukan!";
}
?>
