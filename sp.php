<?php
include "koneksi.php";

$a=$_POST['penerbit_id'];
$b=$_POST['penerbit_nama'];
$c=$_POST['penerbit_negara'];
$d=$_POST['penerbit_kota'];
	
	$query = mysql_query("INSERT INTO penerbit VALUES ('$a', '$b', '$c', '$d')");
        if ($query){
            echo $_SESSION['pesan'] = "Data Penerbit dengan ID $a, Berhasil Disimpan...";
        }else{
            echo $_SESSION['pesan_salah'] = "Data Penerbit dengan ID $a, sudah ada...!";
        }
		header('Location:penerbit');
?>
