<?php

// mengkoneksikan ke data base 
$koneksidb = mysqli_connect("localhost","root","","phpdasar");

// meembuat function untuk di panggil 
function tampilkan($query){

    // membuat variabel $koneksidb menjadi global scope agarbisa di ambil didalam funtion 
    global $koneksidb;

    // mengambil query/table/perintak sql dari DB 
    $result = mysqli_query($koneksidb,$query);

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


// membuat fuction tambah data mahasiswa
function tambah($data){


    global $koneksidb;
    
    // ambil data dari setiap element di dalam form

    $gambar =htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);
      
      
      // query insert data 
      $query ="INSERT INTO mahasiswa
    VALUES 
    ('','$nrp','$nama','$jurusan','$email','$gambar')
    ";

    mysqli_query($koneksidb,$query);
    
    return mysqli_affected_rows($koneksidb);
    
}



// membuat function Hapus data mahasiswa 
function hapusdata($id){
    global $koneksidb;
    
    // membuat query mengapus data dengan parameter id yang dikirim dari halaman index dan hapusdata 
    mysqli_query($koneksidb,"DELETE FROM mahasiswa  WHERE id = $id ");
    
    // meng cek apakah berasil atau tidak 
    return mysqli_affected_rows($koneksidb);
    
}

function ubah($data){


    global $koneksidb;
    
    // ambil data dari setiap element di dalam form

    $id= $data["id"];
    $gambar =htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);
      
      
      // query insert data 
      $query ="UPDATE mahasiswa SET
                nrp='$nrp',
                nama='$nama',
                jurusan='$jurusan',
                email='$email',
                gambar='$gambar'
                WHERE id = $id
                ";

    mysqli_query($koneksidb,$query);
    
    return mysqli_affected_rows($koneksidb);
    
}
function cari($keyword){
    // memakai LIKE dan % agar data yg di tampilkan data yg mengandung inputan dari user 
    $query = " SELECT * FROM mahasiswa 
    WHERE 
    nama LIKE '%$keyword%' OR
    nrp  LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    email LIKE '%$keyword%' 
    ";


    // mengembalikan fungsi query di baris 7 dengan parameter variabel query lokal
    return tampilkan($query);
}

function register($data){
    global $koneksidb;

    // menghilangkan karakter selain string username seperti / dll,dan menjadikan username menjadi lowercase 
    $username = strtolower(stripcslashes($data["username"]));

    $password = mysqli_real_escape_string($koneksidb,$data["password"]);
    $password2 = mysqli_real_escape_string($koneksidb,$data["password2"]);


    if(empty($username) || empty($password) || empty($password2)){
        echo "
        <script>
            alert('tidak boleh ada yang kosong');
            
        </script>"; 
        return false;
    }

    // cek username sudah ada belum

    $result = mysqli_query($koneksidb,"SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('Username telah terdaftar');
            
        </script>"; 
        return false;
    }




    // cek konfirmasi password 
    if($password !== $password2){
        echo "<script>
                alert('pastikan password anda sama dengan konfirmasi password');
                
            </script>"; 
        return false;
    }


            // enkripsi dulu password 
    // parameter(pasword yang mau di ubah ,menambahkan apa dalam passwordnya)
    $password = password_hash($password,PASSWORD_DEFAULT);

    // tambahkan user bru ke data base 
    mysqli_query($koneksidb,"INSERT INTO user VALUES('','$username','$password')");




    return mysqli_affected_rows($koneksidb);
}


?>