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

  <title>Admin</title>
</head>
<body>
  <nav class="navbar" style="padding: 35px 75px; position:fixed; top:0; left:0; right:0">
    <img src="../img/Logo.png" alt="">
    <div class="right">
      <a href="Create.php">Tambah</a>
      <a href="../LoginAdmin.php">Keluar</a>
    </div>
  </nav>
  
  <div class="heading">
    <h1>Admin Site</h1>
    <hr>
  </div>
  
  
  <div class="container">
    <div class="row row-cols-4">
      <?php
      include_once 'connection.php';
      $data = mysqli_query($connection, "SELECT * FROM buronan");
      while ($d = mysqli_fetch_array($data)) {
      ?>
      <div class="col">
        <div class="card">
          <div class="header">
            <div class="heading">
              <div class="left">
                <a href="edit.php ?name=<?php echo $d['ID']; ?>">
                  <img src="../img/pencil.png" alt="">
                </a>
              </div>
              <div class="right">
                <a href="delete.php ?name=<?php echo $d['ID']; ?>">
                  <img src="../img/trash.png" alt="">
                </a>
              </div>
            </div>
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
      </div>
      <?php
      }
      ?>
    </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>