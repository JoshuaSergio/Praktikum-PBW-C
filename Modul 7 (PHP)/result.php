    <?php
      $nama   = $_POST['nama'];
      $nim    = $_POST['nim'];
      $tugas  = $_POST['tugas'];
      $uts    = $_POST['uts'];
      $uas    = $_POST['uas'];

      $result = ($tugas+$uts+$uas)/3; 
      
      echo"
      <h1>Nilai Akhir Mahasiswa</h1>
      <p>Nama Mahasiswa : $nama</p> 
      <p>NIM : $nim</p>
      <p>Nilai Tugas : $tugas</p>
      <p>Nilai UTS : $uts</p>
      <p>Nilai UAS : $uas</p>
      <br>
      <p>Nilai Akhir Anda: $result </p>
      ";
        if ($result >= 80) {
            echo "Anda Lulus Mata Kuliah Dengan Predikat A";
        } elseif ($result >= 70) {
            echo "Anda Lulus Mata Kuliah Dengan Predikat B";
        } elseif ($result >= 60) {
            echo "Anda Lulus Mata Kuliah Dengan Predikat C";
        } else {
            echo "Maaf Anda Tidak Lulus Mata Kuliah, Silahkan Mengulang Tahun Depan.";
        }
    ?> 