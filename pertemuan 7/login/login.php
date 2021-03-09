<?php
/*
Farhan Mohamad Bintang Atoilah
203040128
https://github.com/farhanmb02/pw2021_203040128
pertemuan 7 == 3 maret2021
Get & Post
*/


// cek apakah tombol submit sudah di tekan atau belum 
if(isset($_POST["tombol"])){
    // cek username dan password 
    if( $_POST["username"] == "admin" && $_POST["password"]=="123"){
        // jika benar redirect ke halamana admin 
        header("Location: admin.php");
        exit;
    }else{ 
        // jika salah tampilkan tulisan kesalahan 
        $error = true;
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <H1>Login Admin</H1>

<?php if(isset($error)):?>
        <p>Username atau Password anda salah boss!!!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username = </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password = </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="tombol">login</button>
            </li>
        </form>
    </ul>

</body>
</html>