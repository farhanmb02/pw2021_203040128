
<!-- menggunakan cara while  -->
<!-- <?php
/*
Nama : Farhan Mohamad Bintang Atoilah
NRP : 203040128
Kelas :D
Shift: Jumat 13.00

*/
function papancatur($baris, $kolom) {
    $x=1;
    echo "<table align=center border=2px cellspacing=10px>";
    while ($x <= $baris) {
        echo "<tr>";
        $y=1;
        while ($y <= $kolom) {
            if (($x+$y) %2 > 0)
            echo "<td width=50 height=50  bgcolor=salmon>
                </td>";
            else
            echo "<td width=50 height=50 bgcolor=light-blue>
                </td>";
            $y++;
        }
        echo "</tr>";
        $x++;
    }
    echo "</table><br><br>";
} 

papancatur(6,6);
?> -->

<!-- menggunakal for  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align=center border=2px cellspacing=10px>
        <?php for( $b=1; $b<= 6; $b++):?>
            <tr>
                <?php for( $k=1; $k<= 6; $k++):?>
                    
                    <?php if (($b+$k) %2 > 0):?>
                        <td width=50 height=50  bgcolor=salmon></td>
                    <?php else : ?>
                        <td width=50 height=50 bgcolor=light-blue></td>
                    <?php endif;?> 
                    
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>