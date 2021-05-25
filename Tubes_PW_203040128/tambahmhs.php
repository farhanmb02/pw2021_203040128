<?php
session_start();


// jika belom ada variabel global session maka redirec ke login.php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
}





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
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>


<div class="container">

  <div class="title">Tambah Data Karyawan</div>

  <div class="content">

    <form action="" method="post" enctype="multipart/form-data">

      <div class="user-details">

        <div class="input-box">
          <span class="details">Nama Lengkap</span>
          <input type="text" name="nama" id="nama" required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">NIP</span>
          <input type="text" name="nip" id="nip" required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="email" id="email" required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">Nomor Telepon</span>
          <input type="text" name="no_tlp" id="no_tlp"required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">Bidang</span>
          <input type="text" name="bidang" id="bidang"required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">Alamat</span>
          <input type="text" name="alamat" id="alamat"required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">Golongan</span>
          <input type="text" name="golongan" id="golongan"required autocomplete="off">
        </div>

        <div class="input-box">
          <span class="details">gambar</span>
          <input type="file" name="gambar" id="gambar"required autocomplete="off">
        </div>

      </div>

      


      <div class="button">
        <input type="submit" name="submit" value="Tambahkan">
      </div>

    </form>
    
      <a class="home" href="index.php">Dashboard</a>
  </div>
</div>

<div>
</div>
</body>
</html>