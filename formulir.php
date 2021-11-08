<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulir</title>
    <center><h1>Formulir Data Buku</h1></center>
  </head>
</html>
<form action="simpan.php" method="post">
    <center><table>
        <tr>
            <td>Judul Buku</d>
            <td>:</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku"></td>
        </tr>
        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku"></td>
        </table>
        <br>
        <input type="submit" name="simpan" value="SIMPAN"></center>
</form>