<html><body>
<?php
	$nama = $NIM ="";
	if($_SERVER["REQUEST_METHOD"]== "POST"&& isset($_POST["nama"])&& isset($_POST["NIM"])){
		echo "<h2> Silahkan Isi Biodata Anda !!</h2>";
		$nama =$_POST["nama"];
		$NIM = $_POST["NIM"];
	}
?>
<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Nama :<input type="text" name="nama"><br>
	NIM  :<input type="text" name="NIM"><br>
	<input type="submit" value="Selesai">
</form>

<?php
if (!empty($nama)&& !empty($NIM)) {
	echo "<h2> Selamat Datang</h2>";
	echo "<h3> Pemograman Web PHP</h3>";
	echo $nama ."<br>".$NIM;
	# code...
}
?>
</body>
</html>