<?php

require 'function.php';


// jika fungsi register menghasilkan nilai lebih dari 0 maka tampilkan alert jika sebalikya maka tapilkan error/
if(isset($_POST['register'])){
    if(register($_POST) > 0){
        echo "
        <script>
            alert('User Baru telah di tambahkan');
            
        </script>"; 
    }else{
        echo mysqli_error($koneksidb);
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>

    <style>
        label{
            display:block;
            padding:2px;
        }
        button{
            margin-top:5px;
        }
    </style>
</head>
<body>

    <h1>halaman Registrasi</h1>


    <form action="" method="post">

        <ul>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">    
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" id="password">    
            </li>
            <li>
                <label for="password2">konfirmasi password : </label>
                <input type="password" name="password2" id="password2">    
            </li>
            <li>
                <button type="submit" name="register"> register </button>
            </li>
        </ul>
    
    
    
    
    </form>














</body>
</html>