<?php 
    require 'koneksi.php';
    if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];

    $result = mysqli_query($conn, "INSERT INTO mahasiswa1(`id`, `nama`, `npm`, `jurusan`, `fakultas`) VALUES(NULL, '$nama', '$npm', '$jurusan', '$fakultas')");
    header("location: index_mysql.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        button a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Tambah Data</legend>
    <form action="" method="POST">
        <pre>
        <label for="nama">Nama      : </label><input type="text" name="nama" id="">
        </pre>
        <pre>
        <label for="npm">NPM       : </label><input type="text" name="npm" id="">
        </pre>
        <pre>
        <label for="jurusan">Jurusan   : </label><input type="text" name="jurusan" id="">
        </pre>
        <pre>
        <label for="fakultas">Fakultas  : </label><input type="text" name="fakultas" id="">
        </pre>
        <pre>        
        <button type="submit" name="submit">Submit</button>
        </pre>
        
    </form>
    </fieldset>
</body>
</html>