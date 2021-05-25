<?php
session_start();
// ngambil data ari file function.php 
require 'function.php';


// jika belom ada variabel global session maka redirec ke login.php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
}




// pagination 

// konfigurasi
// $jumlahdataperhalaman = 3;





// memanggil function dan memasukan ke variabel mahasiswa (DIURUTKAN BERDASARKAN DATA TERBARU)
$karyawan = query("SELECT * FROM karyawan");



// jika tombol cri di klik 
if(isset($_POST["cari"])){
    $karyawan = cari($_POST["keyword"]);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Dashboard Pengelolaan Karyawan</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/index.css">
<script src="js/inde.js" defer ></script>

<style>
input{
    position: relative;
    display: inline-block;
    box-sizing: border-box;

}

input[type="text"]{
    background: rgb(201, 201, 201);
    border: none;
    outline: none;
    padding: 5px 25px;
    border-radius:25px 0 0 25px;
    color:white;
}

input[type="submit"]{
    position: relative;
    border-radius:0 25px 25px 0;
    border: none;
    outline: none;
    padding: 5px 25px;
    color:black;
    background: rgb(255, 230, 4);
    left: -5px;
}
    </style> 

</head>


<body>
    <div class="container">

            <div class="table-wrapper">

                <div class="table-title">

                    <div class="row">

                        <div class="col-sm-6">
                            <h2>Dashboard <b>Employees</b></h2>
                        </div>

                        <div class="col-sm-6">
                            <a href="logout.php" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>logout</span></a>      
                            <a href="tambahmhs.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        </div>

                    </div>

                </div>




                <table class="table table-striped table-hover">

                <div class="box">
                    <form action="" method="post">
                        <input type="text" name="keyword" size="40" placeholder="Cari ...." autocomplete="off" >
                        <input type="submit" name="cari" value="Cari"></input>
                    </form>
                </div>
                    <thead>
                        <tr>
                            <th>No.</th>
                            
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Bidang</th>
                            <th>Actions</th>
                            <th>Details</th>

                        </tr>
                    </thead>

                    <tbody>

                    <?php $urutan = 1;?>
                    <?php foreach($karyawan as $k):?>

                        <tr>
                            <td><?= $urutan; ?></td>
                            
                            <td>
                                <img src="img/<?= $k["gambar"]; ?>" alt="" width="50">
                            </td>
                            <td><?= $k["nama"]; ?></td>
                            <td><?= $k["nip"]; ?></td>
                            <td><?= $k["bidang"]; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $k["id"]; ?>" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="hapusdata.php?id=<?= $k["id"]; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                            <td><a href="detail.php?id=<?= $k["id"] ?>">Info</a></td>


                        </tr>

                        <?php $urutan++; ?>
                        <?php endforeach; ?>

                    </tbody>

                </table>





                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>



            </div>
    </div>




    




    


</body>
</html>             