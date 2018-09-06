<?php
include "koneksi.php";

$a=$_POST['buku_id'];
$b=$_POST['buku_kategori'];
$c=$_POST['buku_nama'];
$d=$_POST['buku_pengarang'];
$e=$_POST['buku_harga'];
$f=$_POST['buku_stok'];
$g=$_POST['penerbit_id'];
	
	$query = mysql_query("INSERT INTO buku VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')");
        if ($query){
            echo $_SESSION['pesan'] = "Data Buku dengan ID $a, Berhasil Disimpan...";
        }else{
            echo $_SESSION['pesan_salah'] = "Data Buku dengan ID $a, sudah ada...!";
        }
		header('Location:index');
?>
