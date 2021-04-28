<?php


// ngambil data ari file function.php 
require 'function.php';


// cek apakah tombol submit apakah sudah di tekan 
if(isset ($_POST["submit"])){
  
    
    // cek data apakah berasil di tambahkan atau tidak 
    if(tambah($_POST)>0){
        echo "
        <script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'index.php'
        </script>"; 
    }else{
        echo mysqli_error();
        echo "<script>alert('Data Gagal di Tambahkan');</script>"; 
        
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah  Data</title>
</head>
<body>
    <h1>Tambah data mahasiswa </h1><br>

    <form action="" method="post">
        <ul>



            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required autofocus>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"required>
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp"required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"required>
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    
    
    </form>


<h1><a href="index.php">Kembali ke Tabel mAhasiswa</a></h1>
</body>
</html>