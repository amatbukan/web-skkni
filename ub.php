<?php
include "koneksi.php";

$a=$_POST['buku_id'];
$b=$_POST['buku_kategori'];
$c=$_POST['buku_nama'];
$d=$_POST['buku_pengarang'];
$e=$_POST['buku_harga'];
$f=$_POST['buku_stok'];
$g=$_POST['penerbit_id'];


	$query = mysql_query("UPDATE buku SET buku_nama='$c', buku_kategori='$b', buku_pengarang='$d', buku_harga='$e', buku_stok='$f', penerbit_id='$g' WHERE buku_id='$a'");
	if ($query){
		echo $_SESSION['pesan'] = "Data Buku dengan ID $a, Berhasil Diperbarui...";
	} else{
		echo $_SESSION['pesan_salah'] = "Data Buku Gagal Diperbarui";
	}
header("Location:index");
?>