<?php

$tgl_lahir = "15-01-1992";
$tgl_sekarang = date("d-m-Y");

mysql_connect("localhost:8080","root","");
mysql_select_db("dbtrik");

$query = "SELECT date_diff('$tgl_sekarang', '$tgl_lahir') as selisih";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

echo "Tanggal Lahirnya : $tgl_lahir<br>;
Sekarang Usianya : $data[selisih] hari";
?>