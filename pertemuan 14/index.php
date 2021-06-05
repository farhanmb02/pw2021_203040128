<?php
/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 14 == 21 maret 2021
    
    */
//  CARA 2


// Tahap 1

// ngambil data ari file function.php 
require 'function.php';

// Tahap 2
// memanggil function dan memasukan ke variabel mahasiswa (DIURUTKAN BERDASARKAN DATA TERBARU)
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC ");

// jika tombol cri di klik 
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}














?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .home{
            cursor: pointer;
            text-decoration:none;
            color:black;
        }
    
    </style>


</head>
<body>


    <a href="index.php" class="home"> <h1>Daftar mahasiswa</h1></a>

    <a href="tambahmhs.php"> Tambah Data Mahasiswa </a>
    <br><br>
    


    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Cari ...." autocomplete="off" >
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>
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