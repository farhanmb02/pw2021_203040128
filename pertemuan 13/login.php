<?php
session_start();



// jika belom ada variabel global session maka redirec ke login.php 
if(isset($_SESSION["login"])){
    header("location: index.php");
}





require 'function.php';


    if (isset($_POST['login'])){

        $username=$_POST["username"];
        $password=$_POST["password"];


        // cek apakah username ada di database 
        $result = mysqli_query($koneksidb,"SELECT * FROM user WHERE username ='$username'");

        // jika di dalam result mengembalikan nilai 1 maka cek password 
        // mysqli_num_rows = mengcek baris di dalam db 
        if(mysqli_num_rows($result)===1){

            // cek password 
            $row = mysqli_fetch_assoc($result);


            // mengguanakan function password_verify(password awal,pasword yang sudah di hash )
            if(password_verify($password,$row["password"])){

                // set session 
                // membuat variabel dengan variabel super global session 
                $_SESSION["login"] = true;



                header("Location: index.php");
                exit;
            }

        }
        $error = true;
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <h1>Hallaman Login </h1>


        <?php if (isset($error)) : ?>
            <p style="color:red;">Username/password salah</p>
            
        <?php endif; ?>


        <form action="" method="post">
        
            <ul>
                <li>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="login"> Login </button>
                    |
                    <a href="registrasi.php">registrasi </a>
                </li>
            </ul>
        
        
        </form>


</body>
</html>