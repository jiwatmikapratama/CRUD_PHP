<?php
require_once './functions/function.php';

if (isset($_POST['submit'])) {

    if (addBuku($_POST) > 0) {
        echo '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan
      </div>';
        header("location: index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Data Gagal Ditambahkan
      </div>';
    }
}
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
        <div class="header text-center my-4">
            <h2>Tambah Data Buku</h2>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label" for="nama">Nama Buku</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="pengarang" class="form-label" for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label" for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                </form>
            </div>
            <div class="row">
                <div class="col-8">
                    <a href="index.php" class="btn btn-warning">Kembali</a>

                </div>
            </div>
        </div>


        <!-- Javascript -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>