<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .box{
        border:1px solid black;
        padding:10px;
    }
    
    </style>
</head>

<body>
    
<?php
    $soal =  ["ada","abel","men","pung","nilai"];
?>
       
       
    <div class="box">
            <?= "<p>Array  $soal[0]lah suatu vari$soal[1] yang dapat $soal[2]an$soal[3]  banyak $soal[4] </p>" ?>
    </div>



</body>
</html>