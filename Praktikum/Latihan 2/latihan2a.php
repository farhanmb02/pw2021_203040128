
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .gaya1{
        border:1px solid black;
        box-shadow:;
        box-shadow: 5px 5px 5px 5px #888888;
        border-radius:5px;
        padding:10px;
    }

    .gaya2{
        font-family:arial;
        font-size:28px;
        color:#8c782d;
        font-style:italic;
        font-weight:bold;
    }
    </style>
</head>
<body>
    
    <?php

    function gantigaya($tulisan,$gaya1="gaya1",$gaya2="gaya2"){
    return "<div class=$gaya1><h1 class=$gaya2>$tulisan</h1></div>";
    }

    echo gantigaya("Selamat Datang Di Prakikum PW");

    ?>

</body>
</html>
