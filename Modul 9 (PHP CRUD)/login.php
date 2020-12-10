<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {

    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $login = mysqli_query($base,"SELECT * FROM users WHERE username='$username'and password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:index-peg.php");
    } else {
        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
           }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                    <h4>Login</h4>

                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" />
                        </div>


                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" />
                        </div>

                        <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

                    </form>

            </div>

        </div>
    </div>

</body>

</html>