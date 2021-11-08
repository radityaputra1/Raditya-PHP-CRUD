<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Buku</title>
    <center><h1>Form Update Data Buku</h1></center>
  </head>

<?php
    include './koneksi.php';
    $id_buku = $_GET["id_buku"];

    $sql = "SELECT * FROM buku WHERE id=".$id_buku;
    $result = $conn->query($sql);

?>

<form action="ubah.php" method="post">
   <center> <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="nama_buku" value="<?php echo $result['nama_buku']?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis" value="<?php echo $result['penulis']?>"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku" value="<?php echo $result['jenis_buku']?>"></td>
        </tr>
        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku" value="<?php echo $result['gambar_buku']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH"> </center>
</form>