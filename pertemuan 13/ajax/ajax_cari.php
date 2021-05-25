<?php

require '../function.php';
$mahasiswa = cari($_GET["keyword"]);

?>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Info</th>
    

</tr>

<?php if(empty($mahasiswa)) :?>
    <tr>
        <td colspan="4">
            <p>Data Mahasiswa tidak Ditemukan</p>
        </td>
    </tr>
<?php endif; ?>

<?php $urutan = 1;?>
<?php foreach($mahasiswa as $mhs):?>
<tr>
    <td><?= $urutan; ?></td>
   
    <td>
        <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50">
    </td>
    <td><?= $mhs["nama"]; ?></td>
    <td>
        <a href="detail.php?id=<?= $mhs["id"]; ?>">Lihat detail</a>
    </td>

</tr>
<?php $urutan++; ?>
<?php endforeach; ?>

</table>