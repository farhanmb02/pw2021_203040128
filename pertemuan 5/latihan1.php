<?php
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
    
    div{
        width:50px;
        height:50px;
        background-color:lightblue;
        text-align:center;
        line-height:50px;
        margin:3px;
        float:left;      
    }
    
    
    
    </style>
</head>
<body>

    <?php for( $i=0; $i<count($angka); $i++ ){  ?>

        <div>
             <?php echo $angka[$i];?> 
        </div>

    <?php } ?>

    
</body>
</html>