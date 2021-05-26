<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="gaya.css">
      <!--Let browser know website is optimized for mobile-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@300&display=swap" rel="stylesheet">
  
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

<?php

$databarang=[

[
    "gambar"=>"img/gambar1.jpg",
    "nama"=>"Vas Bunga",
    "deskripsi"=>"Kerajinan Kayu Berbentuk Vas Bunga dengan motif anyaman ",
    "harga"=> "Rp.50.000",
    "stok"=>10
],

[
    "gambar"=>"img/gambar2.jpg",
    "nama"=>"Keranjang",
    "deskripsi"=>"kerajinan keranjang dari kayu ",
    "harga"=>"Rp.75.000",
    "stok"=>6
],

[
    "gambar"=>"img/gambar3.jpg",
    "nama"=>"Hiasan Dinding",
    "deskripsi"=>"kerajinan  dari kayu ",
    "harga"=>"Rp.60.000",
    "stok"=>3
],

[
    "gambar"=>"img/gambar4.jpg",
    "nama"=>"Piring",
    "deskripsi"=>"Piring dari kayu untuk hiasan maupun digunakan",
    "harga"=>"Rp.15.000",
    "stok"=>200
],

[
    "gambar"=>"img/gambar5.jpg",
    "nama"=>"Gantungan",
    "deskripsi"=>"rak kayu Untuk gantungan ",
    "harga"=>"Rp.45.000",
    "stok"=>30
],

[
    "gambar"=>"img/gambar6.jpg",
    "nama"=>"Rak Belajar",
    "deskripsi"=>"rak belajar untuk anak dari kayu",
    "harga"=>"Rp.80.000",
    "stok"=>10
],

[
    "gambar"=>"img/gambar7.jpg",
    "nama"=>"Kursi",
    "deskripsi"=>"Kursi Terbuat dari kayu jati",
    "harga"=>"Rp.150.000",
    "stok"=>9
],

[
    "gambar"=>"img/gambar8.jpg",
    "nama"=>"Kursi",
    "deskripsi"=>"Meja dengan motif Perkotaan ",
    "harga"=>"Rp.200.000",
    "stok"=>13
],

[
    "gambar"=>"img/gambar9.jpg",
    "nama"=>"Guci Kayu",
    "deskripsi"=>"Guci yang terbuat Dari kayu",
    "harga"=>"Rp.150.000",
    "stok"=>30
],

[
    "gambar"=>"img/gambar10.jpg",
    "nama"=>"Tempat Tissue",
    "deskripsi"=>"Kerajinan kayu tempat tissue",
    "harga"=>"Rp.30.000",
    "stok"=>29
]



];


?>
    <h1 class="#6d4c41 brown darken-1">Daftar Kerajinan Kayu</h1>
    <?php  ?>

    <table border="1" >

        <thead>
          <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Stok</th>
          </tr>
        </thead>




        <tbody>
        <?php $i=1; ?>    
          <?php foreach($databarang as $data ): ?>
              <tr class="center-align">
                <td><blockquote><?= $i ?></blockquote></td>
                <td > <img src="<?= $data["gambar"] ?>" > </td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["deskripsi"] ?></td>
                <td><?= $data["harga"] ?></td>
                <td><?= $data["stok"] ?></td>
              </tr>
              <?php $i++;  ?>
          <?php endforeach; ?>
        </tbody>







      </table>







      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>