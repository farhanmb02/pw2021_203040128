<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landingpage Farhan Mohamad Bintang Atoilah</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <main>

      <section class="glass">

        <div class="dashboard">

          <div class="user">
            <img src="./images/avatar2.jpg" alt="" />
            <h3>Farhan Mohamad Bintang Atoilah</h3>
            <p>D-20304050128</p>
          </div>


          <div class="links">
            <div class="link">
             <a href="index.php"><img src="./images/clipboard.png" alt="" /></a>
              <h2 >Kuliah</h2>
            </div>
            <div class="link">
              <a href="praktikum.php"><img src="./images/working-man.png" alt="" /></a>
              <h2 class="active">Praktikum</h2>
            </div>
            <div class="link">
              <a href="tubes.php"><img src="./images/browser.png" alt="" /></a>
              <h2>TugasBesar</h2>
            </div>
            
          </div>
          <div class="pro">
            <h2>Pemograman Website Semeter 2.</h2>
            <a href=""><img src="./images/open-book.png" alt="" /></a>
          </div>
        </div>

        
        <div class="games">
          
          <div class="status">
            <h3>Tugas</h3>
          </div>

          <div class="container">

<?php for($i=1;$i<=2;$i++):?>
  <div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Latihan<?= $i; ?></h2>
        <a href="../Praktikum/Latihan <?= $i; ?>/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
<?php endfor;?>

<div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Latihan3</h2>
        <a href="../Praktikum/Latihan 3/latihan 3e/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
<div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Latihan4</h2>
        <a href="../Praktikum/Latihan 4/latihan4c/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
<div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Latihan5</h2>
        <a href="../Praktikum/Latihan 5/latihan5e/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Latihan6</h2>
        <a href="../Praktikum/Latihan 6/latihan 6C/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
  <div class="cards">
    <div class="card">
      <div class="card-info">
        <h2>Tugas Praktikum</h2>
        <a href="../Praktikum/Tugas praktikum/index.php" ><img src="./images/link.png" width="20px" alt=""></a>
      </div>
    </div>
  </div>
          

          </div>
         

          
          
           


          </div>

        </div>

      </section>

    </main>

    <div class="circle1"></div>
    <div class="circle2"></div>


  </body>
</html>
