<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- link style -->
  <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&display=swap" rel="stylesheet">

  <!-- other script -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
      defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
      defer></script>

  <title>Main</title>
</head>
<body>
  <nav class="navbar" style="padding: 35px 75px; position:fixed; top:0; left:0; right:0">
    <a href="public.php"><img src="../img/Logo.png" alt=""></a>
    <div class="right">
      <a href="../LoginAdmin.php">Keluar</a>
    </div>
  </nav>
  
  <div class="heading">
    <h1>Daftar Buronan</h1>
  </div>

  <div class="container">
    <div class="row row-cols-4">
      <?php
      include_once 'connection.php';
      $data = mysqli_query($connection, "SELECT * FROM buronan");
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <div class="col">
      <a href="Info.php ?name=<?php echo $d['ID']; ?>">
        <div class="card">
          <div class="header">
            <img src="../img/<?=$d['image']?>"; alt="">
          </div>
          <div class="card-body">
            <div class="type">
              <p><?php echo $d['ID']; ?></p>
            </div>
            <div class="desc">
              <p><?php echo $d['Nama']; ?></p>
              <p><?php echo $d['umur']; ?> Tahun</p>
              <p><?php echo $d['jenis_kelamin']; ?></p>
            </div>
          </div>
        </div>
      </a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>

  <footer>
    <div class="upper">
      <div class="left">
        <img src="../img/logo.png" alt="">
        <p>Anda <b>Laporkan</b> segera</p>
        <p>Kami <b>Tangkap</b> segera</p>
      </div>
      <div class="right">
        <h2>Hubungi Kami</h2>
        <p><a href="https://wa.me/81234567890" target="_blank"><img src="../img/Whatsapp.png" alt=""> Whatsapp</a></p>
        <p><a href="tel:+6281234567890" target="_blank"><img src="../img/Callcenter.png" alt=""> Call Center</a></p>
        <p style="margin-left:-.5em">Kami siap 24 jam untuk melayani anda</p>
      </div>
    </div>
    <div class="bottom">
      <b>Satuan Tangkap Buron</b>
    </div>
  </footer>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>