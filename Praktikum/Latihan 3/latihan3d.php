<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $datapemain=[

        [
        "NO"=>1,
        "NAMA"=>"Cristiano Ronaldo",
        "CLUB"=>"Juventus",
        "MAIN"=>100,
        "GOL"=>76,
        "ASSIST"=>30
        ],
        
        [
        "NO"=>2,
        "NAMA"=>"Lionel Messi",
        "CLUB"=>"Barcelona",
        "MAIN"=>120,
        "GOL"=> 80,
        "ASSIST"=>12
        ],

        [
        "NO"=>3,
        "NAMA"=>"Luca Modric",
        "CLUB"=>"Real Madrid",
        "MAIN"=>87,
        "GOL"=>12,
        "ASSIST"=>48
        ],

        [
        "NO"=>4,
        "NAMA"=>"Mohammad Salah",
        "CLUB"=>"Liverpool",
        "MAIN"=>90,
        "GOL"=>103,
        "ASSIST"=>8
        ],

        [
        "NO"=>5,
        "NAMA"=>"Neymar Jr",
        "CLUB"=>"PSG",
        "MAIN"=>109,
        "GOL"=>56,
        "ASSIST"=>15
        ],

        [
        "NO"=>6,
        "NAMA"=>"Sadio Mane",
        "CLUB"=>"Liverpool",
        "MAIN"=>63,
        "GOL"=>30,
        "ASSIST"=>70
        ],

        [
        "NO"=>7,
        "NAMA"=>"Zlatan Ibrahimovic",
        "CLUB"=>"Ac Milan",
        "MAIN"=>100,
        "GOL"=>10,
        "ASSIST"=>12
        ]

    ];



    $jumlah_main=0;
    $jumlah_gol=0;
    $jumlah_assist=0;

    foreach($datapemain as $item => $nilai){
        $jumlah_main += $nilai["MAIN"];
        $jumlah_gol += $nilai["GOL"];
        $jumlah_assist += $nilai["ASSIST"];
    }


    ?>

<table border="1" cellspacing="0" cellpadding="2" style=" text-align: left;   ">
    <tr>
        <th style="width:30px;" >NO</th>
        <th style="width:150px;" >NAMA</th>
        <th style="width:150px;">CLUB</th>
        <th style="width:50px;">MAIN</th>
        <th style="width:50px;">GOL</th>
        <th style="width:50px;">ASSIST</th>
    </tr>


<?php $i=1; ?>    
<?php foreach($datapemain as $data ): ?>
    <tr>
       <td><?= $i ?></td>
       <td><?= $data["NAMA"] ?></td>
       <td><?= $data["CLUB"] ?></td>
       <td><?= $data["MAIN"] ?></td>
       <td><?= $data["GOL"] ?></td>
       <td><?= $data["ASSIST"] ?></td>
    </tr>
    <?php $i++;  ?>
<?php endforeach; ?>


    <tr>
        <th>#</th>
        <th colspan="2" style="text-align:center;">Jumlah</th>
        <td><?=  $jumlah_main  ?></td>
        <td><?=  $jumlah_gol   ?></td>
        <td><?=  $jumlah_assist  ?></td>
    </tr>
    
        
       
</table>






</body>
</html>



