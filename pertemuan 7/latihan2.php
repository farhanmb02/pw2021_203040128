<?php

// cek apakah  ada tidak data? di $_GET 

if( 
// jika data di bawah itu tak ada maka redirect ke url dibawah 
    !isset($_GET["nama"])||
    !isset($_GET["nrp"])||
    !isset($_GET["kelas"])||
    !isset($_GET["jurusan"])
){
    // redirect url nya
    header("Location:latihan1.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa </title>
</head>
<body>
    
    <ul>

        <!-- menangkap data yang dikirim memakai get -->
        <li>Nama = <?= $_GET["nama"];?></li>
        <li>NRP = <?= $_GET["nrp"];?></li>
        <li>Jurusan = <?= $_GET["kelas"];?></li>
        <li>Email = <?= $_GET["jurusan"];?></li>
    </ul>

    <a href="latihan1.php"> kembali ke daftar mahasiswa</a>

</body>
</html>