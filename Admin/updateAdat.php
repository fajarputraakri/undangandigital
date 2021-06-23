<?php
require_once('Api/koneksi.php');
// jika ada error pada file yang disertakan maka browser akan menampilkan Fatal error dan script selanjutnya tidak dijalankan
$idAdat = $_POST['idAdat'];
$penjelasan = $_POST['penjelasan'];
mysqli_query($conn,"UPDATE adat SET penjelasan='$penjelasan' where idAdat ='$idAdat'");
// menjalankan perintah atau instruksi query ke database MySQL
echo "<script>alert('berhasil disimpan');history.go(-1);</script>";
//header("location:kelolaWeddingCeremonies.php");
?>