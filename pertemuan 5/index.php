<?php
/*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 5 == 21 february 2021
    array
    */
$mahasisa=[
    ["maman","020202","teknik","email"],
    ["baban","0202023","sospol","email"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dftar mahasiswa</h2>

    <?php  foreach($mahasisa as $mhs ): ?>
        <ul>
                <li>Nama = <?= $mhs[0];?></li>
                <li>NRP = <?= $mhs[1];?></li>
                <li>Jurusn = <?= $mhs[2];?></li>
                <li>Email = <?= $mhs[3];?></li>
                

        </ul>
    <?php endforeach;?>


</body>
</html>