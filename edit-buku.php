<?php
    include_once("./connect.php");

    $id = $_GET["id"];
    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_array($query_get_data);

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container w-75">
    <h1 class="my-4">Form edit buku</h1>

    <form action="" method="POST">

    <div class="mb-3">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku['nama'] ?>" class="form-control" type="text" id="nama" name="nama">
        </div>
        <div class="mb-3">
        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku['isbn'] ?>" class="form-control" type="text" id="isbn" name="isbn">
        </div>
        <div class="mb-3">
        <label for="unit">Unit</label>
        <input value="<?php echo $buku['unit'] ?>" class="form-control" type="text" id="unit" name="unit">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-success" href="./buku.php">Back</a>
    </form>
</body>
</html>