<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bulat{

    width:30px;
    height:30px;
    background:salmon;
    border:1px solid black;
    border-radius:30px;
    text-align:center;
    line-height:30px;
    display:inline-block;
    margin:5px;
    
    }
    div{
        border:2px solid black;
        padding:5px;
        height:;
        width:;
    }
    
    </style>

</head>
<body>

    <div >
    <?php
    function tumpukanbola($Bola){
         for( $i = 1; $i <=$Bola; $i++){
        echo"<br>";
             for($j=1; $j<=$i; $j++){
               echo "<div class='bulat'> $i  </div>";
            }  
         } 
        }
        echo tumpukanbola(5);
    ?>
    </div>


</body>
</html>