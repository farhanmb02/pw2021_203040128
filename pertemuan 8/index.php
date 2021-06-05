<?php
/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 8 == 5 maret 2021
    
    */
// Tahap 1
// koneksikan ke database
// parameter (server,username,password,database)
// masukan koneksi ke variabel agar lebih fleksibel
$koneksidb = mysqli_connect("localhost","root","","phpdasar");

// Tahap 2 
// ambil data table mahasiswa/ query 
// masukan ke variabel
// parameter (koneksidatabase,sql memanggil tabel)
$result = mysqli_query($koneksidb,"SELECT * FROM mahasiswa");

// Tahap 3
// memanggil result memakai var_dump (object)
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result 
    // cara 1 
    // mengembalikan array numerik
    // mysqli_fetch_row()
        // contoh :
        // $mhs = mysqli_fetch_row($result);
        // var_dump($mhs[2]);
    
    // cara 2
    // mengembalikan array asosiatif
    // mysqli_fetch_assoc()
        // contoh :
        // $mhs = mysqli_fetch_assoc($result);
        // var_dump($mhs["nama"]);

    // cara 3
    // menembaikan array numeric dan assosiatif
    // mysqli_fetch_array()
        // contoh :
        // $mhs = mysqli_fetch_array($result);
        // var_dump($mhs["nama"]);
        // var_dump($mhs[2]);

    // cara 4
    // harus memakai panah(->) karena object
    // mysqli_fetch_object()
        // contoh : 
        // $mhs = mysqli_fetch_object($result);
        // var_dump($mhs->nama);
        
    
        
// menampilkan semua 
// menggunakan looping
    // while ($mhs = mysqli_fetch_assoc($result)){
    // var_dump($mhs["nama"]);
    // }










?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Jurusan</th>

        </tr>


<?php $urutan = 1;?>
<?php while($mhs = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $urutan; ?></td>
            <td>
                <a href="">Ubah</a>|
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50">
            </td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        
        </tr>
<?php $urutan++; ?>
<?php endwhile; ?>

    </table>
</body>
</html>