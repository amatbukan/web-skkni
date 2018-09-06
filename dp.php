<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM penerbit WHERE penerbit_id='$id'");
header("location: penerbit");
if($query){
  $_SESSION['pesan'] = "Data Penerbit dengan ID $id, Telah Berhasil Dihapus...";
}else{
  $_SESSION['pesan_salah'] = "Data Penerbit Gagal Dihapus...";
}
?>