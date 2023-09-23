<?php 
    $conn = mysqli_connect("localhost","root","","mahasiswa1");
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa1");
    $mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>