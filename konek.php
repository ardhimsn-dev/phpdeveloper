<?php
//buat koneksi dengan MySQL
$link=mysqli_connect('localhost','root','');
 
//cek apakah koneksi dengan MySQL berhasil
if ($link)
   {
     //koneksi berhasil
     echo "Koneksi dengan MySQL berhasil";
   }
else
   {
     //koneksi gagal
     die("Koneksi dengan MySQL gagal");
     echo "Pesan ini tidak akan pernah ditampilkan";
   }
?>