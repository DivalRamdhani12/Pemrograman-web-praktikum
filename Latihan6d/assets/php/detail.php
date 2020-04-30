<?php 

    if (!isset($_GET['id'])){
        header("location: ../ index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $p = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<html>
    <head>
        <title>Latihan6dDetail_193040085</title>
        <link rel="stylesheet" href="styleCdetail.css">
    </head>
    <body>
    <center>
    <h2>Pakaian</h2>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $p["photo"]; ?>" alt="">
            </div>
                <div class="keterangan">
                    <p><?= $p["Pakaian"]; ?></p>
                    <p>Merk : <?= $p["Apparel"]; ?></p>
                    <p>Jml barang : <?= $p["jml"]; ?></p>
                    <p>Total Harga : <?= $p["harga"]; ?></p>
                </div>

        <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
        </center>
    </body>
</html>