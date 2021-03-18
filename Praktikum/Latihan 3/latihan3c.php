<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .box{
    border:1px solid black ;
    padding:10px;
}

p{
    font-weight:bold;
}
li{
    list-style:none;
}
    </style>
</head>
<body>
<?php

$pemainbola=[
"Mohammad Salah    "=>"Liverpool",
"Cristiano Ronaldo " =>"Juventus",
"Lionel Messi      "=>"Barcelona",
"Zlatan Ibrahimovic"=>"Ac Milan",
"Neymar Jr         "=>"PSG",
"Luca Modric       "=>"Real Madrid",
"Sadio Mane        "=>"Liverpool"
];
ksort($pemainbola);

?>



    <div class="box">
        <p>Daftar pemain bola terkenal dan Clubnya</p>
        
<?php foreach($pemainbola as $nama => $club): ?>
        <table  cellpadding="1">
            <tr>
                <td style="width:150px;" > <?=" <b> $nama </b> "; ?> </td>
                <td > <?=" :   $club  "; ?></td>
            </tr>
        </table>
<?php endforeach; ?>

    </div>




</body>
</html>
