<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .gaya{
        border:1px solid black;
        padding:10px;
        
    }
    
    </style>

</head>
<body>
    
    
<?php

$GLOBALS ['jawabanIsset'] = "Fungsi isset adalah = Fungsi yang digunakan untuk memeriksa apakah suatu variabel sudah diatur/dibuat atau belum <br><br>";
$GLOBALS ['jawabanEmpty'] = "Fungsi empty adalah =  Fungsi yang digunakan untuk menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi";
function soal($style){
    return "<div class=$style><p>". $GLOBALS ['jawabanIsset'] . $GLOBALS ['jawabanEmpty']  ."</p> </div>";
}

    echo soal("gaya");
    ?>

</body>
</html>