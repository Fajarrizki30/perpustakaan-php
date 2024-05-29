<?php
    include_once("./connect.php");
    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container w-75">
    <h1 class="my-5">Daftar staff</h1>

    <table class="table">
    <thead>
    <tr>
    <th scope="col">Nama</th>
    <th scope="col">Telp</th>
    <th scope="col">Email</th>
    <th scope="col">ACTION</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php foreach($query as $staff){ ?>
        <tr>
        <td><?php echo $staff["nama"] ?></td>
        <td><?php echo $staff["telp"] ?></td>
        <td><?php echo $staff["email"] ?></td>
        <td>
            <a class="btn btn-warning" href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>EDIT</a> | 
            <a class="btn btn-danger" href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
    </tr>
</tbody>
</table>
    </table>
    <br>
    <a class="btn btn-primary" href="./tambah-staff.php">Tambah data staff</a>
    <a class="btn btn-success" href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>