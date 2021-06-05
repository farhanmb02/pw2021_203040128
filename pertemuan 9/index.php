<?php
// Tahap 1
/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 9 == 6 maret 2021
    
    */
// ngambil data ari file function.php 
require 'function.php';

// Tahap 2
// memanggil function dan memasukan ke variabel mahasiswa 
$mahasiswa = tampilkan("SELECT * FROM mahasiswa");

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


    <h1>Daftar mahasiswa</h1>

    <a href="tambahmhs.php"> Tambah Data Mahasiswa </a>
    <br><br>
    

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Info</th>
            

        </tr>


<?php $urutan = 1;?>
<?php foreach($mahasiswa as $mhs):?>
        <tr>
            <td><?= $urutan; ?></td>
           
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50">
            </td>
            <td><?= $mhs["nama"]; ?></td>
            <td>
                <a href="detail.php?id=<?= $mhs["id"]; ?>">Lihat detail</a>
            </td>
        
        </tr>
<?php $urutan++; ?>
<?php endforeach; ?>

    </table>
</body>
</html>