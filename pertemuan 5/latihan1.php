<?php


/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 5 == 21 february 2021
    array
    */

    
// pengulangan pada array
// for / foreach

$angka=[1,2,5,6,7,8,4,3,2];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
    
    .kotak{
        width:50px;
        height:50px;
        background-color:lightblue;
        text-align:center;
        line-height:50px;
        margin:3px;
        float:left;      
    }
    
    .clear{
        clear:both;
    }
    
    </style>
</head>
<body>



<!-- menampilkan array dengan pengulangan  -->
<!-- menggunakan for  -->
    <?php for( $i=0; $i<count($angka); $i++ ){  ?>
        <div class="kotak">
             <?php echo $angka[$i];?> 
        </div>
    <?php } ?>

    <div class="clear"></div>


<!-- mengunakan foreach -->
    <?php foreach( $angka as $a )  { ?>

        <div class="kotak"><?php echo $a;?> </div>
 
    <?php } ?>



</body>
</html>