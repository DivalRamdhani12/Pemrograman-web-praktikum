<?php
    //menghubungkan dengan file
    require 'functions.php';
    $pakaian = query("SELECT * From pakaian");

    if(isset($_GET["cari"]) ) {
				
		$pakaian = cari($_GET["keyword"]);
	}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <style type="text/css">
	  		img{
	  		width: 200px;
	  		height: 200px;

	  	}
	  </style>
</head>
<body>
    <table border="1" cellpading="10" cellspacing="0">
    <a href="tambah.php" class="waves-effect waves-light btn card-panel teal lig">Tambah Data Baru</a>
    <form action="" method="get">
			<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyowrd pencarian.." autofocus>
			<button type="submit" name="cari" class="btn">Cari!!</button>
		</form>
        <br>
        <br>
        <tr class="card-panel teal lig">
               <th>#</th>
               <th>Kd Barang</th>
               <th>Nama Barang</th>
               <th>Merk</th>
               <th>Photo</th>
               <th>Jml Barang</th>
               <th>Total Harga</th>
        </tr>
        <?php if (empty($pakaian)) : ?>
            <tr>
                <td>
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $p) : ?>
        <tr>
            <td align="center"><?= $i; ?></td>
            <td>
                <a class="waves-effect waves-light btn" href="ubah.php?id=<?= $p['id']; ?>">Ubah</a>
                <a class="waves-effect waves-light btn red" href="hapus.php?id=<?= $p['id']; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
            </td>
                <td><?= $p["kd Barang"]; ?></td>
                <td><?= $p["Nama"]; ?></td>                
                <td><?= $p["apparel"]; ?></td>
                <td><img src="../asset/img/<?= $p['photo']; ?>"></td>
                <td><?= $p["jml"]; ?></td>
                <td><?= $p["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>