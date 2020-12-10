<?php
    session_start();
    include("config.php"); 
    $mysqli = new mysqli("localhost","root","","p9pbw");
    $user = $_SESSION["username"];

    if(isset($_POST['edit'])){
    // filter data yang diinputkan
    $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $id = $_SESSION["username"];

    // menyiapkan query
    $sql = "INSERT INTO list_data (id, nim, nama, alamat) 
            VALUES (:id, :nim, :nama, :alamat)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":id" => $id,
        ":nim" => $nim,
        ":nama" => $nama,
        ":alamat" => $alamat
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved)
     {
        header("Location: index.php");}
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>

    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row">   
        <div class="col-md-8">

            <form action="" method="POST">

            <div class="form-group">
                <label for="nim">NIM</label>
                <input class="form-control" type="text" name="nim" placeholder="NIM" />
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" placeholder="Nama" />
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="edit" value="Tambah Data" />
        </form>
        </div>
    
    </div>
</div>

</body>
</html>