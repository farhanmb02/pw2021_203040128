<?php
session_start();


// jika belom ada variabel global session maka redirec ke login.php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
}

// ngambil data ari file function.php 
require 'function.php';

if(!isset($_GET['id'])){
    header("Location:index.php");
    exit;
}



// ambil data di url 
$id = $_GET["id"];

// query data mahasiswa berdasar id 
$mahasiswa = tampilkan("SELECT * FROM mahasiswa WHERE id = $id ")[0];

// cek apakah tombol submit apakah sudah di tekan 
if(isset ($_POST["submit"])){
  
    
    // cek data apakah berasil di ubah atau tidak 
    if(ubah($_POST)>0){
        echo "
        <script>
            alert('Data Berhasil di ubah');
            document.location.href = 'index.php'
        </script>"; 
    }else{
        echo mysqli_error();
        echo "<script>alert('Data Gagal di ubah');</script>"; 
        
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah  Data</title>
</head>
<body>
    <h1>Ubah data mahasiswa </h1><br>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>

            <!-- mengirim id dengan inputan yang di sembunyikan dari user  -->
            <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">

            <li>
             <!-- mengirimkan nama gambar lama jika gambar tak ingin di ubah  -->
             <input type="hidden" name="gambarlama" value="<?= $mahasiswa["gambar"]; ?>">

            <label>
                Gambar :
                <input  type="file" name="gambar" id="gambar" required autofocus class="gambar" onchange="previewImage()">
                </label>
                <img  class="img-preview"  src="img/<?= $mahasiswa['gambar']?>" width="150px" style="display:block;" >
            </li>

            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"required value="<?= $mahasiswa["nama"]; ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp"required value="<?= $mahasiswa["nrp"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"required value="<?= $mahasiswa["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"required value="<?= $mahasiswa["jurusan"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>
    
    
    </form>


<h1><a href="index.php">Kembali ke Tabel mAhasiswa</a></h1>

<script src="js/script.js"></script>
</body>
</html>