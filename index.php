<?php
require_once './functions/function.php';
$buku = readBuku("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsraph CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>CRUD-PHP</title>
</head>

<body>
    <div class="container">
        <div class="header text-center my-4 row">
            <h2>Data Buku Perpustakaan Seribu Jendela</h2>
        </div>
        <div class="tombol tambah_data">
            <div class="col-sm-3">
                <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
            </div>

        </div>
        <table class="table table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($buku as $row) :?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $row['isbn'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['pengarang'] ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td>
                            <a href="edit.php?id=<?=$row["id"] ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="hapus.php?id=<?=$row["id"] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Javascript -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>