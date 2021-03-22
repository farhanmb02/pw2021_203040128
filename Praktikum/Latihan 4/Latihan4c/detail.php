<?php

// cek apakah ada data yang dikirim 
// jika tak ada maka kembali ke index
if (!isset($_GET['no_pegawai'])){
    header("location: index.php");
    exit;
}

require 'functions.php';

// mengambil data dari url 
$nopegawai = $_GET['no_pegawai'];

// melakukan query denagn para meter data yang dikirim 
 $karyawan = tampilkan("SELECT * FROM karyawan WHERE no_pegawai= $nopegawai ")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    
        <div class="card" style="width: 18rem;">
            <img width="200px" class="rounded " src="assets/img/<?=  $karyawan["gambar"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <b>Nama : </b> <?=  $karyawan["nama"]; ?></h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>No Pegawai : </b>  <?=  $karyawan["no_pegawai"]; ?></li>
                <li class="list-group-item"><b>E-mail : </b> <?=  $karyawan["email"]; ?></li>
                <li class="list-group-item"><b>Bidang : </b> <?=  $karyawan["bidang"]; ?></li>
            </ul>
            <div class="card-body">
                <a href="index.php" class="card-link">Menu awal</a>
            </div>
        </div>



</body>
</html>