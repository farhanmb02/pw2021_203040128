<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
               input{
    position: relative;
    display: inline-block;
    box-sizing: border-box;

}
   input[type="text"]{
    background: #fff;
    border: none;
    outline: none;
    padding: 0 25px;
    border-radius:25px 0 0 25px;
}

input[type="submit"]{
    position: relative;
    border-radius:0 25px 25px 0;
    border: none;
    outline: none;
    padding: 0 25px;
    color:white;
    background: #fff;
}

    </style>
</head>
<body>
     <div class="box">
                    <form action="" method="post">
                        <input type="text" name="keyword" size="40" placeholder="Cari ...." autocomplete="off" >
                        <input type="submit" name="cari" value="Cari"></input>
                    </form>
                </div>
</body>
</html>