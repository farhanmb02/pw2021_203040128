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
</style>

</head>
<body>
    
<?php

$pemainbola=[
"Mohammad Salah",
"Cristiano Ronaldo",
"Lionel Messi",
"Zlatan Ibrahimmovic",
"Neymar Jr"
];

?>



    <div class="box">

        <p>Daftar pemain bola terkenal</p>
        <ol>
        <?php for($i =0;$i<count($pemainbola); $i++):?>
         <?=  "<li> $pemainbola[$i]</li>";?>
        <?php endfor ?>
        </ol>


<!-- Menambahkan elemnet baru  -->
<?php
array_push($pemainbola,"Luca Modric","Sadio Mane");
sort($pemainbola);
?>


        <p>Daftar pemain bola terkenal baru</p>
        <ol>
        <?php for($i =0;$i<count($pemainbola); $i++):?>
        <?=  "<li> $pemainbola[$i]</li>";?>
        <?php endfor ?>
        </ol>

    </div>

</body>
</html>