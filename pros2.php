<?php
include "koneksi.php";

$id = mysql_real_escape_string($_POST['penerbit_id']);
$sql = "SELECT * FROM penerbit WHERE penerbit_id = '$id'";
$process = mysql_query($sql);
$num = mysql_num_rows($process);
if($num == 0){
	//echo " &#10004; NIM masih tersedia";
}else{
	echo "&#10060; <b>ID Sudah Ada</b>";
}
?>