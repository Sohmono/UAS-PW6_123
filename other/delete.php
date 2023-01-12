<?php
if(isset($_GET['name']))
{
    include('connection.php');
    $ID        = $_GET['name'];
    $del = mysqli_query($connection,"DELETE FROM buronan WHERE ID = '$ID'");

        if($del)
        {
            header("Location: Admin.php");
            exit();
        }
        else
        {
            echo "<h2>Gagal menghapus data</h2>";
            echo "<a href = 'Admin.php'>kembali</a>";
        }
}
else
{
    echo "<script>window.history.back()</script>";
}

?>