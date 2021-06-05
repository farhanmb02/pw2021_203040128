<?php
/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 12 == 9 maret 2021
    
    */
session_start();


// jika belom ada variabel global session maka redirec ke login.php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
}

// Tahap 1

// ngambil data ari file function.php 
require 'function.php';







// Tahap 2
// memanggil function dan memasukan ke variabel mahasiswa 
$mahasiswa = tampilkan("SELECT * FROM mahasiswa");



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
</head>
<body>


    <h1>Daftar mahasiswa</h1>


    
    <a href="tambahmhs.php"> Tambah Data Mahasiswa </a>
    <br><br>
    
    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Cari ...." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>


<br><br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Info</th>
            

        </tr>

        <?php if(empty($mahasiswa)) :?>
            <tr>
                <td colspan="4">
                    <p>Data Mahasiswa tidak Ditemukan</p>
                </td>
            </tr>
        <?php endif; ?>

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

    <br><br>
    <a style="color:red;" href="logout.php">logout</a>
</body>
</html>