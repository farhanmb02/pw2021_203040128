
<!-- Nama : Farhan Mohamad Bintang Atoilah
NRP : 203040128
Kelas :D
Shift: Jumat 13.00 -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bulat{
        
        width:50px;
        height:50px;
        background:salmon;
        border:1px solid black;
        border-radius:30px;
        text-align:center;
        line-height:50px;
        display:inline-block;
        margin:10px;
        
    }
 
    </style>
</head>

<body>

  
        <?php for( $i = 1; $i <=3; $i++): ?>
        <br>
            <?php for($j=1; $j<=$i; $j++):?>
                    <div class="bulat"> <?= $i  ?>   </div>
            <?php endfor;?>
        <?php endfor;?>
         

</body>
</html>