<?php
    include_once("./connect.php");
    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container w-75">
    <h1 class="mt-5">Daftar Buku PERPUSTAAKAAN</h1>

    <table class="table">
    <thead>
    <tr>
    <th scope="col">Nama</th>
    <th scope="col">ISBN</th>
    <th scope="col">Unit</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php foreach($query as $buku){ ?>
        <tr>
        <td><?php echo $buku["nama"] ?></td>
        <td><?php echo $buku["isbn"] ?></td>
        <td><?php echo $buku["unit"] ?></td>
        <td>
            <a class="btn btn-warning" href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a> | 
            <a class="btn btn-danger" href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
    </tr>
</tbody>
</table>
    </table>
    <br>
    <a class="btn btn-primary" href="./tambah-buku.php">Tambah data buku</a>
    <a class="btn btn-success" href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>