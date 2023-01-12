<?php 
  
  if(isset($_POST['Create'])) {
    include_once 'connection.php';
    $Nama = $_POST['Nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $deskripsi = $_POST['deskripsi'];
    $image = $_POST['image'];

    $input = mysqli_query($connection, "INSERT INTO buronan VALUES (null, '$Nama', '$deskripsi', '$jenis_kelamin', '$image', '$umur')");

    if ($input) {
      header("Location: Admin.php");
      exit();
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<a href='Create.php'>Kembali</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }