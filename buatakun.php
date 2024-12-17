<?php
include "konfig.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password dan konfirmasi password
    if ($password !== $confirm_password) {
        echo "<script>alert('Password dan Konfirmasi Password tidak cocok!');</script>";
        echo "<meta http-equiv='refresh' content='1; url=buatakun.php'>";
    } else {
        $password_hash = md5($password); // Enkripsi password dengan md5

        // Cek apakah username atau email sudah ada
        $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' OR email='$email'");
        if (mysqli_num_rows($cek_user) > 0) {
            echo "<script>alert('Username atau Email sudah terdaftar!');</script>";
            echo "<meta http-equiv='refresh' content='1; url=login.php'>";
        } else {
            // Simpan data ke database
            $query = "INSERT INTO user (nama, email, umur, username, password) 
                      VALUES ('$nama', '$email', '$umur', '$username', '$password_hash')";
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registrasi berhasil! Silahkan login');</script>";
                echo "<meta http-equiv='refresh' content='1; url=login.php'>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Buat Akun</title>
    <style>
        /* CSS di dalam file */
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(175, 198, 255);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #2c3e50;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: #fff;
        }

        a {
            color: rgb(0, 157, 255);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Buat Akun</h2>
        <form method="POST" action="">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Umur:</label>
            <input type="number" name="umur" min="1" required>

            <label>Username:</label>
            <input type="text" name="username" required>
            
            <label>Password:</label>
            <input type="password" name="password" required>
            
            <label>Konfirmasi Password:</label>
            <input type="password" name="confirm_password" required>

            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>
