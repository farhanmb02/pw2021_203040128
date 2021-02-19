<?php

// memanggil beberapa function built in php 

// 1. date 
// harus ada parameter
// memanggil function date
// documentasi date ada di w3school
// memanggil hari,tangal,bulan ,tahun



// date();
//   echo date("l,d-M-Y");
 

// 2. time
// UNIX Timestamp / EPOCH time 
// detik yang sudah berlalu sejak 1 january 1970
// waktu awal komputer 

// time();
// echo time();

// menggabungkan date dan time 

        // tampilkan 2 hari setelah hari ini 
        // 60d x 60m x 24j x 2h =172800d
        // echo date("l",time()+172800);
        // tampilkan 100 hari  kedepan
        // echo date("l",time()+60*60*24*100);

// 3. mktime
// membuat sendiri detik 

// butuh 6 parameter 
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun

// contoh
// mencari tau tanggal hari dari tanggal yang di buat 
echo date("l", mktime(0,0,0,7,17,1945));



// 4. strtotime
// kebalikan mktime 
strtotime("25 aug 1985");






?>