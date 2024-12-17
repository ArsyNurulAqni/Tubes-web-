<?php
if (!defined('INDEX')) die(""); // Memastikan file ini hanya dapat diakses jika INDEX didefinisikan

// Menampilkan nama pengguna yang login (contoh: Administrator) menggunakan session
$role = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; // Default sebagai Guest jika tidak ada session
?>

<!DOCTYPE HTML>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style1.css"> <!-- Link ke CSS -->
</head>
<body>
     <!-- Header -->
     <section id="home">
      <div class="slider-text">
      <h2>SELAMAT DATANG DI HOTEL VIRAL MAKASSAR</h2>
        <nav>
          <ul>
                  <li><a href="#hotel">Hotel</a></li>
                  <li><a href="#services">Layanan</a></li>
                  <li><a href="#kontak">Kontak</a></li>
          </ul>
          <nav>
          <img src="gambar/hotel.jpg" alt="Pantai Bali" class="slider-image">
          </section>
      </div>
  
    <!-- <header class="top-bar">
    <div>
     <img src="gambar/arthama.jpeg" alt="Pantai Bali" class="slider-image">
          <nav>
          <h2>LIHAT BERBAGAI PILIHAN HOTEL & KAMAR MEWAH KAMI</h2>
              <ul>
                  <li><a href="#hotel">Hotel</a></li>
                  <li><a href="#services">Layanan</a></li>
                  <li><a href="#kontak">Kontak</a></li>
              </ul>
          </nav>
      </div>
  </header>
  
    <!-- Rooms Section -->
    <section id="hotel">
        <div class="room-cards">
            <div class="card">
                <img src="gambar/mercure.jpg" alt="Kamar Suite Bali">
                <h4>Mercure Hotel</h4>
                <p>Rasakan keindahan makassar dari kamar suite mewah kami dengan pemandangan laut.</p>
                <button onclick="openModal('modal1')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/claro.jpeg" alt="Kamar Deluxe Jogja">
                <h4>Claro Hotel</h4>
                <p>Menikmati suasana tradisional makassar dengan fasilitas modern.</p>
                <button onclick="openModal('modal2')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/arthama.jpeg" alt="Kamar Standard Lombok">
                <h4>Arthama Hotel</h4>
                <p>Kamar nyaman dengan pemandangan pantai dan akses cepat ke spot snorkeling terbaik.</p>
                <button onclick="openModal('modal3')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/maxone.jpeg" alt="Kamar Superior Jakarta">
                <h4>Maxone Hotel</h4>
                <p>Hotel mewah dengan pemandangan kota makassar, cocok untuk perjalanan bisnis dan liburan.</p>
                <button onclick="openModal('modal4')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/aston.jpeg" alt="Kamar Deluxe Bandung">
                <h4>Aston Hotel</h4>
                <p>Hotel bintang lima dengan fasilitas lengkap dan pemandangan pegunungan Makassar.</p>
                <button onclick="openModal('modal5')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/myko.jpeg" alt="Kamar Premier Surabaya">
                <h4>myko Hotel</h4>
                <p>Penginapan elegan di pusat kota Makassar dengan fasilitas terbaik untuk keluarga dan bisnis.</p>
                <button onclick="openModal('modal6')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/horizon.jpeg" alt="Kamar Premier Surabaya">
                <h4>Horison Hotel</h4>
                <p>Penginapan elegan di pusat kota Makassar dengan fasilitas terbaik untuk keluarga dan bisnis.</p>
                <button onclick="openModal('modal6')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
            <div class="card">
                <img src="gambar/melia.jpeg" alt="Kamar Premier Surabaya">
                <h4>Melia Hotel</h4>
                <p>Penginapan elegan di pusat kota Makassar dengan fasilitas terbaik untuk keluarga dan bisnis.</p>
                <button onclick="openModal('modal6')">Selengkapnya</button>
                <button class="blue-button" onclick="location.href='?hal=pengunjung-tambah'">Pesan Hotel</button>
            </div>
        </div>
    </section>

    <!-- Modals for Room Details -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <pc class="lokasi"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

    <!-- Tambahan Modal untuk Hotel Baru -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h4>Daftar harga kamar</h4>
            <table class="room-table">
                <tr><th>Nama Kamar</th><th>Harga per Malam</th><th>Fasilitas</th></tr>
                <tr><td>Deluxe Room</td><td>Rp 1.500.000</td><td>Wi-Fi, TV, AC</td></tr>
                <tr><td>Grand Deluxe Room</td><td>Rp 2.000.000</td><td>Wi-Fi, TV, AC, Balkon</td></tr>
                <tr><td>Presidential Suite</td><td>Rp 3.500.000</td><td>Wi-Fi, TV, AC, Balkon, Jacuzzi</td></tr>
            </table>
            <p><b>Lokasi</b></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15894.61681676251!2d119.4027895303248!3d-5.159216862434616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29fa411aab1%3A0x8dd79fabf7ecca2a!2sPallubasa%20Serigala!5e0!3m2!1sid!2sid!4v1729653977272!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>
</body>
<body>
    <!-- Services Section -->
<!-- Services Section -->
<section id="services">
    <h2 align="center">LAYANAN KAMI</h2>
    <div class="service-box">
        <ul>
            <li>Room Service 24 Jam</li>
            <li>Kolam Renang Infinity</li>
            <li>Ruang Gym dan Kesehatan</li>
            <li>Spa & Sauna Eksklusif</li>
            <li>Restoran dengan Menu Internasional</li>
            <li>Bar dan Lounge di Rooftop</li>
            <li>Wi-Fi Gratis di Seluruh Area Hotel</li>
            <li>Layanan Antar-Jemput Bandara</li>
            <li>Tempat Parkir Luas dan Aman</li>
            <li>Ruang Meeting dan Ballroom</li>
        </ul>
    </div>
</section>
</body>
<section id="kontak">
<body align="center">
    <h2>Kontak</h2>
    <p>email : hotelviralmksr@gmail.com</p>
    <p>nomor hp : 08219243543</p>
    <p>instagram : hotelviralmksr</p>
    <p>facebook : hotelviralmksr</p>
    <p>Twiter : @hotelviralmksr</p>
</body>
</section>
<body>
    <footer>
        Copyright &copy; 2024
    </footer>
</body>
</html>
