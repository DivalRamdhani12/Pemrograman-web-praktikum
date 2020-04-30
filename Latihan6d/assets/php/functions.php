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
    //fungsi untuk menghapus data dalam database
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

        return mysqli_affected_rows($conn);
    }


    //fungsi untuk mengubah data dalam database
    function ubah($data)
    {
         $conn = koneksi(); 

        $id = htmlspecialchars($data['id']);
        $Gambar = htmlspecialchars($data['photo']);
        $NamaBarang = htmlspecialchars($data['NamaBarang']);
        $Merk = htmlspecialchars($data['apparel']);
        $JmlBarang = htmlspecialchars($data['jml']);
        $TotalHarga = htmlspecialchars($data['TotalHarga']);

        $query = "UPDATE pakaian
                        SET
                        Gambar = '$Gambar',
                        NamaBarang = '$NamaBarang',
                        Merk = '$Merk',
                        jml = '$jmlBarang',
                        TotalHarga = '$TotalHarga'
                        WHERE id = '$id' ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>