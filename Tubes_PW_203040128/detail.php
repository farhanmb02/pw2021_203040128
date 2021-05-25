<?php

// cek apakah ada data yang dikirim 
// jika tak ada maka kembali ke index
if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}

require 'function.php';

// mengambil data dari url 
$id = $_GET['id'];

// melakukan query denagn para meter data yang dikirim 
 $data = query("SELECT * FROM karyawan WHERE id= $id ")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="img/<?=  $data["gambar"]; ?>" alt="user" width="100">
        <h4><?=  $data["nama"]; ?></h4>
         <p><?=  $data["bidang"]; ?></p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?=  $data["email"]; ?></p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p><?=  $data["no_tlp"]; ?></p>
                  </div>
                  <div class="data">
                    <h4>Alamat</h4>
                     <p><?=  $data["alamat"]; ?></p>
               </div>
                  <div class="data">
                    <h4>NIP</h4>
                     <p><?=  $data["nip"]; ?></p>
               </div>
                  <div class="data">
                    <h4>Golongan</h4>
                     <p><?=  $data["golongan"]; ?></p>
               </div>
            </div>
        </div>
      
     
                 
            
        
      
        <div class="home">
            <ul>
              
              <li><a href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></li>
            </ul>
          </div>
    </div>
</div>



<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>