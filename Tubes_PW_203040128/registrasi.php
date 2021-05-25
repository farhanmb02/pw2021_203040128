<?php

require 'function.php';


// jika fungsi register menghasilkan nilai lebih dari 0 maka tampilkan alert jika sebalikya maka tapilkan error/
if(isset($_POST['register'])){
    if(register($_POST) > 0){
        echo "
        <script>
            alert('registrasi berhasil');
            document.location.href ='login.php';
        </script>"; 
    }else{
        echo "
        <script>
            alert('registrasi gagal');
            
        </script>"; 
    }
}



?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/registrasi.css">
  </head>
<body>
    <div class="wrapper">

        <div class="title">Registrasi</div>

            <form action="" method="post">

                <div class="field">
                    <input type="text" name="username" id="username" required autocomplete="off">   
                    <label for="username">username </label>
                </div>

                <div class="field">
                    <input type="password" name="password" id="password" required> 
                    <label for="password">password </label>
                </div>

                <div class="field">
                    <input type="password" name="password2" id="password2" required>
                    <label for="password2">konfirmasi password </label>
                </div>

                <div class="content">

                    

                    <div class="pass-link">
                        <a href="login.php">Sudah Punya akun!</a></div>
                    </div>

                    <div class="field">
                            <input type="submit" name="register" value="Daftar">
                </div>

                
            </form>
        </div>

    </div>
</body>
</html>
