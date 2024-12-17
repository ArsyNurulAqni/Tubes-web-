<?php
session_start();
include "konfig.php";

// Cek apakah user sudah login
if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu');</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    exit();
}

// Ambil data pengguna dari database berdasarkan username
$username = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

// Jika data tidak ditemukan
if (!$data) {
    echo "<script>alert('Data pengguna tidak ditemukan!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Pengguna</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS untuk halaman profil */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color:rgb(175, 198, 255);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #2c3e50;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            color: #ffffff;
            text-align: center;
        }

        h2 {
            font-size: 26px;
            margin-bottom: 25px;
            color: #ffffff;
        }

        .info {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 7px;
            color:rgb(255, 255, 255);
        }

        .value {
            margin-bottom: 20px;
            color: #e0f7fa;
            font-size: 18px;
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color:rgb(255, 255, 255);
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            text-align: center;
            margin-top: 25px;
        }

        .button a {
            padding: 12px 25px;
            background: #007bff;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Profil Pengguna</h2>
        <div class="info">
            <label>Nama Lengkap:</label>
            <div class="value"><?php echo htmlspecialchars($data['Nama']); ?></div>
        </div>
        <div class="info">
            <label>Email:</label>
            <div class="value"><?php echo htmlspecialchars($data['email']); ?></div>
        </div>
        <div class="info">
            <label>Umur:</label>
            <div class="value"><?php echo htmlspecialchars($data['umur']); ?></div>
        </div>
        <div class="info">
            <label>Username:</label>
            <div class="value"><?php echo htmlspecialchars($data['username']); ?></div>
        </div>
        <div class="button">
            <a href="index.php">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
