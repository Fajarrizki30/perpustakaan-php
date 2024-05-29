<?php
    include_once("./connect.php");

    $id = $_GET["id"];
    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_array($query_get_data);

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4" >Form edit staff</h1>


    <form action="" method="POST">
        <div class="mb-3">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" class="form-control" type="text" id="nama" name="nama">
        </div>
        <div class="mb-3">
        <label for="telp">telp</label>
        <input value="<?php echo $staff['telp'] ?>" class="form-control" type="text" id="telp" name="telp">
        </div>
        <div class="mb-3">
        <label for="email">email</label>
        <input value="<?php echo $staff['email'] ?>" class="form-control" type="email" id="email" name="email">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-success" href="./staff.php">Back</a>
    </form>
</body>
</html>