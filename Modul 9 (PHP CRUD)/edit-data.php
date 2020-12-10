<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM list_data WHERE id=$id";
$query = mysqli_query($base, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap.min.css">
<head>
    <title>Edit Data</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                    <h4>Edit Data</h4>

    <form action="proses-edit.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

            <div class="form-group">
            <label for="nim">NIM: </label>
            <input class="form-control" type="text" name="nim" value="<?php echo $data['nim'] ?>" />
            </div>

            <div class="form-group">
            <label for="nama">Nama: </label>
            <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'] ?>" />
            </div>

            <div class="form-group">
            <label for="alamat">Alamat: </label>
            <input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'] ?>" />
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Simpan" name="simpan" />

    </form>
            </div>
        </div>
    </div>
    </body>
</html>