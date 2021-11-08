<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hapus Data Buku</title>
  </head>

<?php
    include './koneksi.php';


    $id_buku = isset ($_GET['id_buku']) ? $_GET['id_buku'] :'';

    $sql ="DELETE FROM buku WHERE id_buku ='$id_buku' ";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>