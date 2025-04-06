<?php

$tgl_lahir = "15-01-1992";
$tgl_sekarang = date("d-m-Y");

$tgl_lahir_mysql = date("Y-m-d", strtotime($tgl_lahir));
$tgl_sekarang_mysql = date("Y-m-d", strtotime($tgl_sekarang));

// Koneksi ke MySQL dengan mysqli
$koneksi = mysqli_connect("localhost", "root", "", "dbtrik");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk menghitung selisih hari antara tanggal lahir dan tanggal sekarang
$query = "SELECT DATEDIFF('$tgl_sekarang_mysql', '$tgl_lahir_mysql') AS selisih";
$hasil = mysqli_query($koneksi, $query);

// Cek hasil query
if (!$hasil) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Ambil hasil dan tampilkan
$data = mysqli_fetch_array($hasil);

echo "Tanggal Lahirnya: $tgl_lahir<br>";
echo "Sekarang Usianya: $data[selisih] hari";

// Menutup koneksi setelah selesai
mysqli_close($koneksi);
?>
