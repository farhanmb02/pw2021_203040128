<?php
//  CARA 2


// Tahap 1

// ngambil data ari file function.php 
require 'function.php';

// Tahap 2
// memanggil function dan memasukan ke variabel mahasiswa 
$mahasiswa = query("SELECT * FROM mahasiswa");







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
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Jurusan</th>

        </tr>


<?php $urutan = 1;?>
<?php foreach($mahasiswa as $mhs):?>
        <tr>
            <td><?= $urutan; ?></td>
            <td>
                <!-- mengirim data -->
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a>|
                <!-- mengirim data -->
                <!-- dan cek apakah benar mau di hapus  -->
                <a href="hapusdata.php?id=<?= $mhs["id"]; ?>" onclick=
                "return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50">
            </td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        
        </tr>
<?php $urutan++; ?>
<?php endforeach; ?>

    </table>
</body>
</html>