<?php

    function koneksi() 
    {
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040085") or die("Database Salah!");

        return $conn;
    }

    function query($sql)
    {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;   
    }

    //fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $Gambar = htmlspecialchars($data['photo']);
        $NamaBarang = htmlspecialchars($data['Nama Barang']);
        $Merk = htmlspecialchars($data['apparel']);
        $JmlBarang = htmlspecialchars($data['jml']);
        $TotalHarga = htmlspecialchars($data['TotalHarga']);

        $query = "INSERT INTO pakaian
                  VALUES
                  ('', '$Gambar', '$NamaBarang', '$Merk', '$JmlBarang', '$TotalHarga')";

                  mysqli_query($conn, $query);
                  return mysqli_affected_rows($conn);
    }
?>