
<?php


    /*
    Farhan Mohamad Bintang Atoilah
    203040128
    https://github.com/farhanmb02/pw2021_203040128
    pertemuan 3 == 17 february 2021
    Struktur kendali pada PHP
    */


    // pengulangan 
    // 1. for
    // 2.while 
    // 3. do..while 
    // 4. foreach :pengulangan untuk array 


    // penggunaan for 

    // for( $i = 0; $i <5; $i++){
    //     echo " ini penggunaan for! <br> ";
    // }


    // // penggunaan while 

    // // masukan nilai awal 
    // $i = 0;

    // // buat while 
    // while($i <5){

    //     // berikan perintah 
    //     echo " ini penggunaan while! <br> ";

    //     // berikan increment
    //     $i++;
    // }

    // penggunaan do..while 
    // melakukan dulu baru pengecekan (kebalikan dari while)
    // akan dilakukan dulu selama sekali jika kondidi false


    // $i =0;

    // do {

    //     // berikan perintah 
    //     echo " ini pengunaan do while! <br> ";

    //     // berikan increment
    //     $i++;

    // }while($i <5);


?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<style>

.warnabaris{
    background-color:silver;
}

</style>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">

        <!-- CARA 1 -->
        <?php

        // for($i =0; $i<3; $i++){

        //     echo"<tr>";
        //         for($j=0;$j<5;$j++){
        //             echo"<td> $i,$j </td>";
        //         }
        //     echo"</tr>";

        // }


        ?>


        <!-- CARA 2 -->


            <?php for($i =0; $i<5; $i++):?>

                <?php if($i % 2 ==1):?>
                    <tr class="warnabaris">

                <?php else: ?>
                    <tr>
                    <?php endif;?>
                        
                        <?php for($j=0;$j<5;$j++):?>

                            <td><?="$i,$j";  ?></td>
                        
                        <?php endfor;?>

                    </tr>

            <?php endfor;?>

    </table>




</body>



</html>