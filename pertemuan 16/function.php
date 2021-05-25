<?php

// mengkoneksikan ke data base 
$koneksidb = mysqli_connect("localhost","root","","phpdasar");

// meembuat function untuk di panggil 
function query($query){

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

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
      

    // upload file (gambar)
    $gambar = upload();
        if (!$gambar){
            return false;
        }

      
      // query insert data 
      $query ="INSERT INTO mahasiswa
    VALUES 
    ('','$nrp','$nama','$jurusan','$email','$gambar')
    ";

    mysqli_query($koneksidb,$query);
    
    return mysqli_affected_rows($koneksidb);
    
}


function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    $tipe_file= $_FILES['gambar']['type'];


    // cek apakah file di upload 

    if ($error === 4)
    {
        echo "<script>
         alert('pilih gambar untuk di upload');
         </script>";
         return false;


    }

    // cek apakh gambar yang di upload atau file lain 

    $ekstensigambarvalid =['jpg','jpeg','png'];
    // memisahkan nama gambar dan ekstensi
    $ekstensigambar = explode('.',$namafile);
    // membuat semua eksensinya menjadi huruf kecil dan mengambil karakter panling akhir dari nama file 
    $ekstensigambar = strtolower(end($ekstensigambar));

    
    if(!in_array($ekstensigambar,$ekstensigambarvalid)){
        echo "<script>
        alert('gambar harus format jpg,jpeg,png');
        </script>";
        return false;
    }


    // cek tipe file 
    if($tipe_file!= 'image/jpeg' && $tipe_file != 'image/png'){
        echo "<script>
        alert('yang anda pilih bukan gambar');
        </script>";
        return false;
    }

    // cek ukuran file gambar 
    // 1 mb = 1000000
    if($ukuranfile >1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar ');
        </script>";
        return false;
    }

    // lolos pengecekan ,upoad gambar 

    // generate nama gambar yang d upload user agar nanti namanya tidak ada yang sama 

    // gabungkan namafilebaru dengan ektensi gambar 
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;



    // parameter (filename,destinasi tujuan)
    move_uploaded_file($tmpname,'img/'.$namafilebaru);

    // mengembalikan nilai nma file untuk di masukan ke variabel gambar
    return $namafilebaru;
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

    $gambarlama =htmlspecialchars($data["gambarlama"]);
    
    // cek apakah user pilih gambar lama atau baru 
    // jika gambar tidak di upload maka gunakan gambar lama 
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    }
    // tapi jika gambar di isi maka gunakan function upload 
    else{
        $gambar =upload();
        
    }


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
    return query($query);
}


    function register($data){
        global $koneksidb;

        // menghilangkan karakter selain string username seperti / dll,dan menjadikan username menjadi lowercase 
        $username = strtolower(stripcslashes($data["username"]));

        $password = mysqli_real_escape_string($koneksidb,$data["password"]);
        $password2 = mysqli_real_escape_string($koneksidb,$data["password2"]);



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