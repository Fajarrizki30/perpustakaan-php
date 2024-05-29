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
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Login</h1>

    
    <form action="./login_process.php" method="POST">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-success" href="./register.php">Register</a>
</form>

    <!--  -->
        <!-- email -->
        <!-- <div>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email">
        </div>
        <br>
        password -->
        <!-- <div> -->
            <!-- <label for="password">Password</label><br> -->
            <!-- <input type="password" id="password" name="password"><br> -->
        <!-- </div>
        <br>
        <button type="submit" name="submit">LOGIN</button>
    </form> -->
    </div>
</body>
</html>