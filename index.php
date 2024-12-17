<?php
session_start();
ob_start();
include "konfig.php";

if(empty($_SESSION['username']) or empty($_SESSION['password'])){
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {
    define('INDEX', true);
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Dashboard</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="style.css">
            <style>
                body {
                    background-color: rgb(217, 251, 255);
                }
                header {
                    text-align: right; /* Menyelaraskan teks ke kanan */
                    padding-right: 20px; /* Memberikan spasi pada ujung kanan */
                }
            </style>
        </head>
        <body>
            <header>
                <?php
                // Menampilkan nama pengguna yang login
                $username = $_SESSION['username'];
                echo "Anda login sebagai $username";
                ?>
            </header>
            <div class="container">
                <aside>
                    <ul class="menu">
                        <li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
                        <li><a href="?hal=pengunjung">Data Pengunjung</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </aside>
                <section class="main">
                    <?php include "konten.php"; ?>
                </section>
            </div>
        </html>
    <?php
}
?>
