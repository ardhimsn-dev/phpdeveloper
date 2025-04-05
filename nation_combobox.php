<form method="post" action="">
	Pilih Salah satu Negara = 

<select name="Negara">
<?php
mysqli_connect('localhost','root','');
mysqli_select_db('dbtrik');

$query = 'SELECT * FROM countries';
$hasil = mysqli_query($query);
while ($data = mysqli_fetch_array($hasil)) {
	// code...
	echo "<option value=$data[id]>$data[namanegara]</option>";
}
?>
</select>

<input type="submit" name="submit" value="Submit"/>
</form>