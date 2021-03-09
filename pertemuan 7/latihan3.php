<!-- Menggunaak Post agar dta yang terkirim tidak terlihat di url  -->
<!-- dan harus menggunakan form  -->
<!-- /*
Farhan Mohamad Bintang Atoilah
203040128
https://github.com/farhanmb02/pw2021_203040128
pertemuan 7 == 3 maret2021
Get & Post
*/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    
<!-- mengirim data dari form dibawah ke latihan 4 menggunakan post  -->
<!-- <form action ="latihan4.php"  method="post"> -->


<!-- mengcek apakah tombool submit sudah di isi atau di gunakan jika sudah di gunakan maka tampilkan code di bawahh  -->
<?php if(isset($_POST["tombol"])):?>
    <h1> Hallo selamat datang <?=$_POST["username"]; ?> </h1>
<?php endif;?>


<!-- mengirim data dari form dibawah ke latihan 3 sendiri menggunakan post tetapi tombol action nya di kosongkan sehingga mengrim data nya ke halaman itu sendiri -->
<form action =""  method="post">




    <!-- membuat inputan user  -->
    Masukan username :
    <input type="text" name="username">

    <br>
    <!-- membuat tombol  -->
    <button type="submit" name="tombol"> Kirim!</button>

</form>


</body>
</html>