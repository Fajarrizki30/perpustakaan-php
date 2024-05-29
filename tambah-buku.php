<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (
        NULL, '$nama', '$isbn', $unit
    )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form tambah data buku</h1>
    <!-- <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br><br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br><br>
        <label for="unit">Unit</label>
        <input type="text" id="unit" name="unit"> -->
        
        <form action="" method="POST">
        <div class="mb-3">
    <label for="nama">Nama</label>
    <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="mb-3">
    <label for="isbn">ISBN</label>
    <input class="form-control" type="text" id="isbn" name="isbn">
        </div>
        <div class="mb-3">
    <label for="unit">Unit</label>
    <input class="form-control" type="text" id="unit" name="unit">
        </div>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-success" href="./buku.php">Back</a>
</form>
</body>
</html>