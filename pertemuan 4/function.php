<?php

/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 4 == 19 february 2021
    function 
    */

// membuat function sediri 
// bisa di isi parameter defaul
function salam($waktu="datang",$nama= "Admin"){
    return "Selamat $waktu,$nama";
};









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
    <h1>
    <!-- memenaggil php  -->
    <!-- parameter harus di isi semuanya  -->
    <!-- jika parameter tak di isi maka parameter default akan disisi  -->
    <?= salam(); ?> 

    </h1>

</body>
</html>