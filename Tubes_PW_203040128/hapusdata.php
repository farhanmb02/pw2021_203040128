<?php
session_start();


// jika belom ada variabel global session maka redirec ke login.php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
}



// menghubungkan ke lahaman function
require 'function.php';


// menangkap data id 
$id = $_GET["id"];

if(hapusdata($id)>0){


    // cek apakah berasil atau tidak
    echo "
    <script>
        alert('Data Berhasil di Hapus');
        document.location.href = 'index.php'
    </script>"; 
}else{
    echo mysqli_error();
    echo "<script>alert('Data Gagal di Tambahkan');</script>"; 
    
}



?>