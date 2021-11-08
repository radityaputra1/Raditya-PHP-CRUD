<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Buku</title>
    <h1>Form Update Data Buku</h1>
  </head>

<?php
    include './koneksi.php';
    $id_buku = isset ($_POST['id_buku']) ? $_POST['id_buku'] : '';
    $judul_buku = isset ($_POST['judul_buku']) ? $_POST['judul_buku'] :'';
    $penulis = isset ($_POST['penulis']) ? $_POST['penulis'] : '';
    $jenis_buku = isset ($_POST['jenis_buku']) ? $_POST['jenis_buku'] : '' ;
    $gambar_buku = isset ($_POST['gambar_buku']) ? $_POST['gambar_buku'] : '';

    $sql = "UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis' , jenis_buku='$jenis_buku' , gambar_buku='$gambar_buku' WHERE id_buku='$id_buku'";
    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " .$sql . "<br>" . $conn->error;
    }

    $conn->close();

?>