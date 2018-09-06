<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM buku WHERE buku_id='$id'");
header("location: index.php");
if($query){
  $_SESSION['pesan'] = "Data Buku dengan ID BUKU $id, Telah Berhasil Dihapus...";
}else{
  $_SESSION['pesan_salah'] = "Data Buku Gagal Dihapus...";
}
?>