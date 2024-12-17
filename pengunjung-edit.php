<?php
if (!defined('INDEX')) die("");
$query = mysqli_query($conn, "SELECT * FROM pengunjung WHERE id_pengunjung='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengunjung</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */
        .form-container {
            width: 90%;
            max-width: 400px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .judul {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #00796b;
        }

        .form-group {
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
        }

        .label {
            font-size: 17px;
            margin-bottom: 8px;
            color: #004d40;
        }

        .input input[type="text"] {
            padding: 20px; /* Padding yang lebih besar */
            font-size: 16px;
            border: 2px solid #00796b;
            border-radius: 8px;
            width: calc(100% - 20px); /* Lebih besar dari sebelumnya untuk kesan lebih lega */
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .input input[type="text"]:focus {
            border-color: #004d40;
            outline: none;
        }

        .tombol.simpan, .tombol.reset {
            padding: 10px 18px;/* Padding yang lebih besar */
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            border-radius: 5px;
        }

        .tombol.simpan {
            background-color: #00796b;
            color: white;
        }

        .tombol.simpan:hover {
            background-color: #004d40;
        }

        .tombol.reset {
            background-color: #f44336;
            color: white;
        }

        .tombol.reset:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="judul">Edit Pengunjung</h2>
        <form action="?hal=pengunjung-update" method="post">
            <input type="hidden" name="id" value="<?= $data['id_pengunjung'] ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $data['Nama_pengunjung'] ?>" required>
            </div>
            <div class="form-group">
            <label class="label" for="nama_hotel">Nama Hotel</label>
                <select id="nama_hotel" name="nama_hotel" required>
                    <option value="Arthama Hotel">Arthama Hotel</option>
                    <option value="Claro Hotel">Claro Hotel</option>
                    <option value="Maxone Hotel">Maxone Hotel</option>
                    <option value="Melia Hotel">Melia Hotel</option>
                    <option value="Mercure Hotel">Mercure Hotel</option>
                    <option value="Myko Hotel">Myko Hotel</option>
                    <option value="Horizon Hotel">Horizon Hotel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nomor_kamar">Nomor Kamar</label>
                <input type="text" id="nomor_kamar" name="nomor_kamar" value="<?= $data['nomor_kamar'] ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="tombol simpan">
                <input type="reset" value="Batal" class="tombol reset" onclick="history.back()">
            </div>
        </form>
    </div>
</body>
</html>
