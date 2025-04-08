<?php

function getJavaneseMarketDay($date) {
    // Array Pasaran Jawa
    $pasaran = ['Legi', 'Pahing', 'Pon', 'Wage', 'Kliwon'];
    
    // Menghitung jumlah hari sejak 1 Januari 1900 (tanggal yang sudah pasti diketahui pasaran jawa-nya)
    $start_date = strtotime("1900-01-01"); // 1 Januari 1900
    $current_date = strtotime($date); // Tanggal yang diinputkan
    
    // Menghitung selisih hari
    $day_diff = floor(($current_date - $start_date) / (60 * 60 * 24));
    
    // Pasaran Jawa berdasarkan selisih hari
    $pasaran_index = $day_diff % 5; // Menggunakan sisa bagi 5 untuk menentukan pasaran
    
    return $pasaran[$pasaran_index];
}

function getDayName($date) {
    // Mengambil nama hari dalam bahasa Indonesia
    $days = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];

    $day_of_week = date('l', strtotime($date)); // Mengambil nama hari dalam bahasa Inggris
    return $days[$day_of_week];
}

// Contoh penggunaan
$date = '2025-04-08'; // Ganti dengan tanggal yang diinginkan

$day_name = getDayName($date);
$market_day = getJavaneseMarketDay($date);

echo "Tanggal: $date\n";
echo "Hari: $day_name\n";
echo "Pasaran Jawa: $market_day\n";

?>
