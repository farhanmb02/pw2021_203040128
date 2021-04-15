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

?>