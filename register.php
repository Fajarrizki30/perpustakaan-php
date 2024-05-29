<?php
    session_start();

    // Cek apakah user memiliki session
    // Kalau iya, artinya user sudah login
    // Maka, pindahin ke halaman index.php
    if(isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h2 class="my-4">Register</h2>

    <!-- method form: POST -->
    <!-- action: ketika form disubmit, mau panggil PHP yang mana? -->
    <form method="POST" action="./register_process.php">
        <!-- input email -->
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a class="btn btn-success" href="./login.php">Login</a>
    </form>
</body>
</html>