<?php


// ngambil data ari file function.php 
require 'functions.php';

$no_pegawai = $_GET["no_pegawai"];

// query data  
$data = query("SELECT * FROM karyawan WHERE no_pegawai = $no_pegawai ")[0];


// cek apakah tombol submit apakah sudah di tekan 
if(isset ($_POST["submit"])){
  
    
    // cek data apakah berasil di tambahkan atau tidak 
    if(tambah($_POST)>0){
        echo "
        <script>
            alert('Data Berhasil di Ubah');
            document.location.href = 'index.php'
        </script>"; 
    }else{
        echo mysqli_error();
        echo "<script>alert('Data Gagal di Ubah');</script>"; 
        
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
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</head>
<body>

    <div class="wadah">
    <h1>Ubah data Karyawan </h1><br>
    <form action="" method="post" enctype="multipart/form-data" >
        <ul>


            <input type="hidden" name="id" value="<?= $data["no_pegawai"]; ?>">
            <li>
                <label for="gambar">Gambar : </label><br>
                <input type="text" name="gambar" id="gambar" required value="<?= $data["gambar"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label><br>
                <input type="text" name="nama" id="nama"required value="<?= $data["nama"]; ?>">
            </li>
            <li>
                <label for="no_pegawai">No Pegawai : </label><br>
                <input type="text" name="no_pegawai" id="no_pegawai"required value="<?= $data["no_pegawai"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label><br>
                <input type="text" name="email" id="email"required value="<?= $data["email"]; ?>">
            </li>
            <li>
                <label for="bidang">Bidang : </label><br>
                <select name="bidang" id="bidang" value="<?= $data["bidang"]; ?>">
                    <option value="">-----Pilih Bidang-----</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Finance">Finance</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Backend">Backend</option>
                    <option value="Produksi">Produksi</option>
                </select>        
            </li>

            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
                <button><a href="index.php">Kembali ke data karyawan</a></button>
            </li>
        </ul>
    
    
    </form>
</div>

</body>
</html>