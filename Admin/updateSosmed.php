<?php
require_once('Api/koneksi.php');
// jika ada error pada file yang disertakan maka browser akan menampilkan Fatal error dan script selanjutnya tidak dijalankan
$idSosmed = $_POST['idSosmed'];
// method menampung data atau nilai dari sebuah form   // mengirimkan data atau nilai langsung ke action php untuk ditampung
$ig=$_POST['ig'];
$fb=$_POST['fb'];
$twitter = $_POST['twitter'];

mysqli_query($conn,"UPDATE sosmed SET ig='$ig', twitter='$twitter',fb='$fb' WHERE idSosmed='$idSosmed' ");
// menjalankan perintah atau instruksi query ke database MySQL
header("location:kelolaSocialMedia.php");
?>