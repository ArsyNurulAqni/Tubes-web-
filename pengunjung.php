<?php
if (!defined('INDEX')) die("");
?>
<h2 class="judul">Data pengunjung</h2>
<a class="tombol" href="?hal=pengunjung-tambah">Pesan Hotel</a>
<link rel="stylesheet" href="style2.css">
<table class="table">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Nama Hotel</th>
<th>Nomor kamar</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$query = mysqli_query($conn, "SELECT * FROM pengunjung ORDER BY id_pengunjung
DESC");
$no = 0;
while($data = mysqli_fetch_array($query)){
$no++;
?>
<tr>
<td><?= $no ?></td>
<td><?= $data['Nama_pengunjung'] ?></td>
<td><?= $data['nama_hotel'] ?></td>
<td><?= $data['nomor_kamar'] ?></td>
<td>
<a class="tombol edit"
href="?hal=pengunjung-edit&id=<?= $data['id_pengunjung'] ?>">Edit</a>
<a class="tombol hapus"
href="?hal=pengunjung-hapus&id=<?= $data['id_pengunjung'] ?>">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>