<?php
require 'functions.php';

$id = $_GET["id"];
$alatmusik = query("SELECT * FROM pakaian WHERE id = $id") [0];

	if(isset($_POST["ubah"])) {

		if(ubah($_POST) > 0) {
			echo 	"
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data</title>
</head>
<body>
	<h3>Ubah Data</h3>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $pakaian["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $pakaian["Gambar"]; ?>">
		<ul>
			<li>
			<li><label for="Gambar">Gambar :</label>
				<img src="../assets/img/<?= $pakaian["Gambar"]; ?>" width = 150px>
				<input type="text" name="Gambar" id="Gambar">
			</li>
			<li><label for="NamaBarang">Nama Barang :</label>
				<input type="text" name="NamaBarang" id="NamaBarang" required value="<?= $pakaian["NamaBarang"]; ?>">
			</li>
			<li><label for="Merk">Merk :</label>
				<input type="text" name="Merk" id="Merk" required value="<?= $pakaian["Merk"]; ?>">
			</li>
			<li><label for="Jml Barang">Jml Barang :</label>
				<input type="text" name="Jml Barang" id="Jml Barang" required value="<?= $pakaian["Jml Barang"]; ?>">
			</li>
			<li><label for="TotalHarga">TotalHarga :</label>
				<input type="text" name="TotalHarga" id="TotalHarga" required value="<?= $pakaian["TotalHarga"]; ?>">
			</li>

		</ul>
		<button class="waves-effect waves-light btn" type="submit" name="ubah">ubah
			<i class="material-icons right">all_inclusive</i>
		</button>

	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>