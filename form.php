<?php
// Koneksi ke MySQL dengan mysqli
$koneksi = mysqli_connect('localhost', 'root', '', 'dbtrik');

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<form method="post" action="submit.php">
    Pilih salah satu negara :
    <select name="negara">
        <?php
        // Query untuk menampilkan semua negara
        $query = "SELECT * FROM countries";
        $hasil = mysqli_query($koneksi, $query);

        // Cek apakah query berhasil
        if (!$hasil) {
            die("Query gagal: " . mysqli_error($koneksi));
        }

        // Menampilkan hasil query ke dalam tag <option></option>
        while ($data = mysqli_fetch_array($hasil)) {
            echo "<option value='" . $data['id'] . "'>" . $data['namanegara'] . "</option>";
        }
        ?> 
    </select>
    <input type="submit" name="submit" value="Submit" />
</form>

<?php
// Menutup koneksi setelah selesai
mysqli_close($koneksi);
?>