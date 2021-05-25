
<?php
session_start();
require 'function.php';


// cek dulu cockie 
// jika kokie sudah di buatt maka cek isinya tru atau false,jka true buat sesion nya tru 
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
   $id = $_COOKIE['id'];
   $key = $_COOKIE['key'];

//    ambil username berdasarkan id nya 
    $result =mysqli_query($koneksidb,"SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);


    // cek username dan cookie yang sudah di acak 
    if($key === hash('sha265',$row['username'])){
        $_SESSION['login'] = true;
    }

            

    }




// jika belom ada variabel global session maka redirec ke login.php 
if(isset($_SESSION["login"])){
    header("location: index.php");
}







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

                // cek remember me
                if(isset($_POST['remember'])){

                    // buat cokies 
                    setcookie('id',$row['id'],time()+60);
                    setcookie('key',hash('sha256',$row['username']));



                }
                
                header("Location: index.php");
                exit;
            }

        }
        $error = true;
    }


?>



<!DOCTYPE html>

<html lang="en" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="wrapper">
        <div class="title">Login</div>

        


        <form action="" method="post">

            <div class="field">
                <input type="text" name="username" id="username" required autocomplete="off" >
                <label for="username">Username </label>
            </div>

            <div class="field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password </label>
            </div>

            <div class="content">

                <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me </label>
                </div>

                <div class="pass-link">
                    <a href="registrasi.php">Registrasi!!</a></div>
                </div>

                <div class="field">
                    <input type="submit" name="login" value="Login">
                </div>

            </div>

        </form>

        <!-- jika ter jadi kesalahan password  -->
        <?php if (isset($error)) : ?>
            <p class="error" >Username/password salah</p>
            
        <?php endif; ?>
    </div>


</body>
</html>
