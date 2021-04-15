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

?>