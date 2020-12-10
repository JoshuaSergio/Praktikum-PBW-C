<?php include("config.php"); 
$mysqli = new mysqli("localhost","root","","p9pbw");?>

<!DOCTYPE html>
<html>
<head>
    <title>List Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body class="bg-light">
    <br>

    <div class="container mt-4">
    <table border="1" class=col-md-6 style="text-align:center">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        session_start();
        echo "Selamat Datang ";
        echo $_SESSION['username'];
        echo "<br>";
        echo "<a href='tambah-data.php'>Tambah Data Baru</a>";
        $sql = "SELECT * FROM list_data";
        $query = mysqli_query($mysqli, $sql);

        while($list_data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$list_data['nim']."</td>";
            echo "<td>".$list_data['nama']."</td>";
            echo "<td>".$list_data['alamat']."</td>";
            echo "<td>";
            echo "<a href='edit-data.php?id=".$list_data['id']."'>Edit</a> | ";
            echo "<a href='hapus-data.php?id=".$list_data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <a href='logout.php'>Log Out</a>
    </div>
    </body>
</html>