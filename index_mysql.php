<?php 
    $conn = mysqli_connect("localhost","root","","mahasiswa1");
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa1");
    $mahasiswa1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <h1><a href="tambah.php">Tambah Data</a></h1>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Npm</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach($mahasiswa1 as $mhs) : ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $mhs["nama"]?></td>
            <td><?php echo $mhs["npm"]?></td>
            <td><?php echo $mhs["jurusan"]?></td>
            <td><?php echo $mhs["fakultas"]?></td>
            <td><a href="delete.php/?id=<?= $mhs["id"]; ?>">Hapus</a></td>
            <td>Edit</td>
        </tr>
        <?php $no++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>