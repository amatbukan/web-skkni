<?php
include "koneksi.php";

$id = mysql_real_escape_string($_POST['buku_id']);
$sql = "SELECT * FROM buku WHERE buku_id = '$id'";
$process = mysql_query($sql);
$num = mysql_num_rows($process);
if($num == 0){
	//echo " &#10004; NIM masih tersedia";
}else{
	echo "&#10060; <b>ID Sudah Ada</b>";
}
?>