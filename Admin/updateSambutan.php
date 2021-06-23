<?php
require_once('Api/koneksi.php');
// jika ada error pada file yang disertakan maka browser akan menampilkan Fatal error dan script selanjutnya tidak dijalankan
$idSambutan = $_POST['idSambutan'];
// method menampung data atau nilai dari sebuah form   // mengirimkan data atau nilai langsung ke action php untuk ditampung
$pembukaSambutan = $_POST['pembukaSambutan'];
$isiSambutan = $_POST['isiSambutan'];
$penutupSambutan = $_POST['penutupSambutan'];

mysqli_query($conn,"UPDATE sambutan SET 
			pembukaSambutan='$pembukaSambutan',
			isiSambutan='$isiSambutan', 
			penutupSambutan='$penutupSambutan' 
			WHERE idSambutan='$idSambutan'");
// menjalankan perintah atau instruksi query ke database MySQL
header('location:kelolaSambutan.php');
?>