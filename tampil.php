<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Buku</title>
  </head>
<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM BUKU"; 
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";  
        echo "$a";
        echo "<br>";
        echo "Judul Buku : " . $baris[1] . "<br>";
        echo "Penulis : " . $baris[2] . "<br>";
        echo "Jenis Buku : " . $baris[3] . "<br>";
        echo "Gambar Buku : " . $baris[4] . "<br>";
        echo "<a href='hapus.php?id_buku=$baris[0]' >Hapus</a>";
        echo "<a href='ubah_data.php?id_buku=$baris[0]'>    Ubah &nbsp</a>";
        $a++;
    }
    $conn->close();
?>