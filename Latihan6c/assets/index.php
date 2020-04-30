<?php 

    require 'php/functions.php';

    $pakaian = query("SELECT * FROM pakaian")
?>

<html>
    <head>
        <title>Latihan6c_193040085</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>    
    <body background="assets/img/bckgrd.png">
        <center>
                <h1>Pakaian</h1>
                <div class="container">
                    <?php foreach ($pakaian as $p) : ?>
                        <P class="tipe">
                            <a href="php/detail.php?id=<?= $p['id'] ?>">
                            <b><?= $p["pakaian"] ?></b>
                            </a>
                        </P>
                    <?php endforeach; ?>
                </div>
                <a class="waves-effect waves-light btn" href="../assets/php/admin.php">Pergi ke Halaman Admin</a>
        </center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
