<?php

$conn = mysqli_connect("localhost","root","","phpdasar");

function tampilkan($query){

    // membuat variabel $conn menjadi global scope agarbisa di ambil didalam funtion 
    global $conn;

    // mengambil query/table/perintak sql dari DB 
    $result = mysqli_query($conn,$query);

    // membuat array kosong sebagai wadah
    $rows =[];

    // membuat looping untuk memasukan data ke array yang baru dibuat 
    while($row = mysqli_fetch_assoc($result)){
        // memasukan data ke array 
        $rows[]=$row;
    }

    // mereturn nilai array rows 
    return $rows;
}

function tambah($data){


    global $conn;
    
    // ambil data dari setiap element di dalam form

    $gambar =htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $no_pegawai = htmlspecialchars($data["no_pegawai"]);
    $email = htmlspecialchars($data["email"]);
      $bidang = htmlspecialchars($data["bidang"]);
      
      
      // query insert data 
      $query ="INSERT INTO karyawan
    VALUES 
    ('$gambar','$nama','$no_pegawai','$email','$bidang')
    ";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
    
}

?>