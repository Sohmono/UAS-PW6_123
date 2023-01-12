<?php

if(isset($_POST['edit']))
{
    include('connection.php');
    $Nama = $_POST['Nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $deskripsi = $_POST['deskripsi'];
    $image = $_POST['image'];
    $ID = $_POST['ID'];

    $update     = mysqli_query($connection,"UPDATE buronan SET 
    Nama = '$Nama',
    umur = '$umur', 
    jenis_kelamin = '$jenis_kelamin', 
    deskripsi = '$deskripsi', 
    image = '$image' 
    where ID = '$ID' ")

    or die(mysqli_error($connection));

    if($update)
    {
        header("Location: Admin.php");
        exit();
    }

    else
    {
        echo "<h2>Gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?>kembali</a>";
    }
}

else
{
    echo "<script>window.history.back()</script>";
}

?>