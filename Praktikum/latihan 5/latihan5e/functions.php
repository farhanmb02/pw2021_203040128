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
function hapus($no_pegawai){

    global $conn;
    // membuat query mengapus data dengan parameter id yang dikirim dari halaman index dan hapusdata 
    mysqli_query($conn,"DELETE FROM karyawan  WHERE no_pegawai = $no_pegawai ");
    
    // meng cek apakah berasil atau tidak 
    return mysqli_affected_rows($conn);
}

function ubah($data){


    global $conn;
    
    // ambil data dari setiap element di dalam form

    $no_pegawai= $data["no_pegawai"];

    // $gambarlama =htmlspecialchars($data["gambarlama"]);
    
    // cek apakah user pilih gambar lama atau baru 
    // jika gambar tidak di upload maka gunakan gambar lama 
    // if ($_FILES['gambar']['error'] === 4){
    //     $gambar = $gambarlama;
    // }
    // // tapi jika gambar di isi maka gunakan function upload 
    // else{
    //     $gambar =upload();
        
    // }


    $nama = htmlspecialchars($data["nama"]);
    // $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
      $bidang = htmlspecialchars($data["bidang"]);
      
      
      // query insert data 
      $query ="UPDATE karyawan SET
                no_pegawai='$no_pegawai',
                nama='$nama',
                bidang='$bidang',
                email='$email',
                gambar='$gambar'
                WHERE no_pegawai = $no_pegawai
                ";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
    
}

function cari($keyword){
    // memakai LIKE dan % agar data yg di tampilkan data yg mengandung inputan dari user 
    $query = " SELECT * FROM karyawan 
    WHERE 
    nama LIKE '%$keyword%' OR
    no_pegawai  LIKE '%$keyword%' OR
    bidang LIKE '%$keyword%' OR
    email LIKE '%$keyword%' 
    ";


    // mengembalikan fungsi query di baris 7 dengan parameter variabel query lokal
    return query($query);
}


?>