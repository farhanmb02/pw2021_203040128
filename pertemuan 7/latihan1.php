<?php
/*
Farhan Mohamad Bintang Atoilah
203040128
https://github.com/farhanmb02/pw2021_203040128
pertemuan 7 == 3 maret2021
Get & Post
*/

// Superglobals = variabel global milik php dan merupakan Array asosiatif

// salah satu superglobals 
// 1. $_GET

// menambahkan data ke array 

// 1. cara 1 
// $_GET["nama"] = "farhan";
// $_GET["nrp"] = "203040128";
// var_dump($_GET);

// 2. cara 2 
// menambahkannya di daam url web nya 

// contoh
// menambahkan ?(dan pasangan key dan value array) 

// http://localhost/pw2021_203040128/pertemuan%207/latihan%201.php?nama=farhan

// jika ingin menambahkan data  lagi 
// tambahkan & sesudah data yang sebelumnya 

// http://localhost/pw2021_203040128/pertemuan%207/latihan%201.php?nama=farhan&nrp=20304028

// var_dump($_GET);


$mahasiswa = [
    [
    "nama"  => "maman",
    "nrp"   => "20202",
    "kelas" => "D",
    "jurusan"=> "teknik",
    // "gambar"=> "nbn,.jpg"
    ]
    ,
    // "tugas" => [9,2,3,4] 
    [
    "nama"  => "joni",
    "nrp"   => "20202",
    "kelas" => "a",
    "jurusan"=> "teknik"],
    [
    "nama"  => "saman",
    "nrp"   => "20202",
    "kelas" => "b",
    "jurusan"=> "teknik"
     ]
    
    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Daftar mahasiswa</h2>

    <ul>
        <?php  foreach($mahasiswa as $mhs ): ?>
            
            <li>
            <!-- menambahkan ?(key=value) untuk mengirimkan data ke halaman selanjut nya / -->
            <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"];?>&kelas=<?= $mhs["kelas"];?>&jurusan=<?= $mhs["jurusan"];?>">
            <?= $mhs["nama"]; ?></a>
            </li>
        
        <?php endforeach;?>
    </ul>

</body>
</html>