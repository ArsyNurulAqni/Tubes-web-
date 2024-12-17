<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "db_tubes";
 //Membuat koneksi
 $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

 if(mysqli_connect_errno()){
 echo "Koneksi gagal: ".mysqli_connect_error();
 }