<?php
    if (isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == 'admin' and $password == 'realadmin123'){
            header("Location: other/Admin.php ");
            exit;
        } else {
            echo "<script>alert('Username or password is wrong');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&display=swap" rel="stylesheet">

    <!--Bootstrap Extention -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- own css -->
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="bg-set">
    <div class="container">
        <div class="main">
            <img src="img/Logo.png" alt="">
        </div>
        <div class="login">
            <form action="" method="post">
                <div class="header">
                    <h1>Login</h1>
                </div>
                <div class="fill">
                    <input type="text" id="username" name="username" placeholder="Username"><br>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="bottom">
                    <button type="submit" name="login">Sign In</button>
                    <a class="btn btn-primary bg-dark" href="other/public.php"><b>User</b></a>
                </div>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>