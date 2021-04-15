<?php

// menghubungkan ke lahaman function
require 'functions.php';


// menangkap data id 
$no_pegawai = $_GET["no_pegawai"];

if(hapus($no_pegawai)>0){


    // cek apakah berasil atau tidak
    echo "
    <script>
        alert('Data Berhasil di Hapus');
        document.location.href = 'index.php'
        </script>"; 
    }else{
        echo mysqli_error();
        echo "
        <script>
        alert('Data Gagal di Tambahkan');
        document.location.href = 'index.php'
    </script>"; 
    
}



?>