<?php
include "koneksi.php";

$a=$_POST['penerbit_id'];
$b=$_POST['penerbit_nama'];
$c=$_POST['penerbit_negara'];
$d=$_POST['penerbit_kota'];


	$query = mysql_query("UPDATE penerbit SET penerbit_nama='$b', penerbit_negara='$c', penerbit_kota='$d' WHERE penerbit_id='$a'");
	if ($query){
		echo $_SESSION['pesan'] = "Data Penerbit dengan ID $a, Berhasil Diperbarui...";
	} else{
		echo $_SESSION['pesan_salah'] = "Data Penerbit Gagal Diperbarui";
	}
header("Location:penerbit");
?>