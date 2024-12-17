<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Makassar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            background-color:rgb(255, 255, 255);
            width: 100%;
            padding: 10px;
            text-align: right;
        }
        .header a {
            color: #34495e;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
            font-size : 25px;
        }
        .header a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
        }
        .content img {
            width: 400px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        .content .text {
            max-width: 400px;
        }
        .content h1 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        .content h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        .content p {
            color: #34495e;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 30px;
            text-align: left;
        }
        .contact-info p {
            color: #7f8c8d;
        }
        .contact-info a {
            color: #3498db;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="buatakun.php">Daftar</a>
        <a href="login.php">Login</a>
    </div>
    <div class="container">
        <div class="content">
            <div class="text">
                <h1>Kami hadir untuk anda</h1>
                <h2>Hotel terviral</h2>
                <p>Temukan kebahagiaan dalamhotel kami! Dari elegan hingga estetika, pilih hotel ajaibmu sekarang!</p>
            </div>
            <img src="gambar/Group 2.png" alt="Gambar Animasi">
        </div>
        <div class="contact-info">
            <p>Contact us now:</p>
            <p>@hotelMakassar.official | 082192665449</p>
            <p>our office new Arsyaqni</p>
        </div>
    </div>
</body>
</html>
