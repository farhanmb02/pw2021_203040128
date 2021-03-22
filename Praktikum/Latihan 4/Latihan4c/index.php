<?php
// menyambungkan ke functions
require 'functions.php';

// melakukan query ke db 
$karyawan = tampilkan("SELECT * FROM karyawan");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <div class="card text-center">
                <div class="card-header">
                       PT . Techid
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Daftar Nama Karyawan</h5>
                        <table class="table table-dark table-striped table-hover table-bordered ">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No-Pegawai</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Bidang</th>
                                <th scope="col"></th>
                                
                                </tr>
                            </thead>
                            <tbody>

                            <?php $i =1; ?>
                            <?php foreach ($karyawan as $data)  :?>
                                <tr>
                                    <th scope="row"><?=  $i; ?></th>
                                    <td>
                                        <img  width="50px"  src="assets/img/<?=  $data["gambar"]; ?>">
                                    </td>
                                    <td><?=  $data["nama"]; ?></td>
                                    <td><?=  $data["no_pegawai"]; ?></td>
                                    <td><?=  $data["email"]; ?></td>
                                    <td><?=  $data["bidang"]; ?></td>
                                    <td><a href="detail.php?no_pegawai=<?= $data["no_pegawai"] ?>">Info</a></td>
                                </tr>
                            <?php $i++;
                            endforeach;?>

                            </tbody>
                        </table>
                    </div>
                <div class="card-footer text-muted">
                    2 days ago                        
                </div>
            </div>
        </div>
    </div>


</body>
</html>