<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    
    // buat query update
    $sql = "UPDATE list_data SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($base, $sql);

    // apakah query update berhasil?
    if( $query ) {
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>