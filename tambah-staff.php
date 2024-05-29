<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama', '$telp', '$email'
    )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form tambah data staff</h1>


    <form action="" method="POST">
    <div class="mb-3">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" id="nama" name="nama">
        </div>
    <div class="mb-3">
        <label for="telp">Telpon</label>
        <input class="form-control" type="text" id="telp" name="telp">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input class="form-control" type="text" id="email" name="email" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-success" href="./staff.php">Back</a>
    </form>
    </form>
</body>
</html>