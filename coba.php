<?php  
	$name = $nim = $wilayah = $positif = $rawat = $sembuh = $meninggal = "";
	$tanggal = date("d F Y");
	$waktu = date("H:i:s");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["nama"];
		$nim = $_POST["nim"];
		$wilayah = $_POST["wilayah"];
		$positif = $_POST["positif"];
		$rawat = $_POST["rawat"];
		$sembuh = $_POST["sembuh"];
		$meninggal = $_POST["meninggal"];
	}
?>
<!DOCTYPE html>
<html>
<body>
	<form action="" method="POST">
 	nama operator :<br> <input type="text" name="nama"><br><br>
 	nim :<br> <input type="text" name="nim"><br><br>
 	wilayah :<br> <select name="wilayah" id="wilayah">
 		<option value="">pilih wilayah</option>
 		<option value="DKI Jakarta">Dki Jakarta</option>
 		<option value="Jawa Barat">Jawa Barat</option>
 		<option value="Banten">Banten</option>
 		<option value="Jawa Tengah">Jawa Tengah</option>
 	</select><br><br>
 	jumlah positif :<br> <input type="text" name="positif"><br><br>
 	jumlah dirawat :<br> <input type="text" name="rawat"><br><br>
 	jumlah sembuh :<br> <input type="text" name="sembuh"><br><br>
 	jumlah meninggal:<br> <input type="text" name="meninggal"><br><br>
 		<input type="submit">
 </form>
 <?php 
 	echo "<center>data pemantauan covid-19 wilayah " . $wilayah . "</center>";
 	echo "<center>per " . $tanggal . " " . $waktu . "</center>";
 	echo "<center> " . $name . "/" . $nim . "</center>";
 	echo "<br>";
 	echo "<center><table width = 500 border= 1>
 	<tr>
 		<td>positif</td>
 		<td>dirawat</td>
 		<td>sembuh</td>
 		<td>meninggal</td>
 	</tr>
 	<tr>
 		<td>" . $positif . "</td>
 		<td>" . $rawat . "</td>
 		<td>" . $sembuh . "</td>
 		<td>" . $meninggal . "</td>
 	</tr>
 	</table></center>";

  ?>
</body>
</html>