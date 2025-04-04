<?php

 echo "Selamat Datang di Peminjaman Rental Buku @ardhimsn";

// kasus peminjaman buku dengan pengembalian 7 hari
	$n = 7;
	echo "<br>Tanggal Hari ini : ";
	echo date("d-m-Y");

	echo "<br>$n hari berikutnya Peminjaman Rental : ";
 
// menentukan timestamp 7 hari berikutnya dari tanggal hari ini
$nextN = mktime(0, 0, 0, date("m"), date("d")+ $n , date("Y"));
 
// menentukan timestamp 7 hari sebelumnya dari tanggal hari ini
$prevN = mktime(0, 0, 0, date("m"), date("d")- $n , date("Y"));
 
// menampilkan tanggal 7 hari berikutnya dari tanggal hari ini berdasarkan timestamp nya
echo date("d-m-Y", $nextN);
 
echo "<br>";
echo " $n hari sebelumnya Peminjaman Rental : ";
// menampilkan tanggal 7 hari sebelumnya dari tanggal hari ini berdasarkan timestamp nya
echo date("d-m-Y", $prevN);

// menentukan timestamp n bulan berikutnya dari tanggal hari ini
$nextM = mktime(0, 0, 0, date("m") +1, date("d"), date("Y"));

echo "<br>Bulan berikutnya Peminjaman Rental : ";
echo date("d-m-Y", $nextM);

// menentukan timestamp n tahun berikutnya dari tanggal hari ini
$nextY = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);

echo "<br>Tahun berikutnya Peminjaman Rental : ";
echo date("d-m-Y", $nextY);
	
?>