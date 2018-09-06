<?php
session_start();
ob_start();

function koneksi () {
	$dbname = "bukudb";
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$koneksi=mysql_connect($dbhost, $dbuser, $dbpass) or die ('Gagal Koneksi!');
	mysql_select_db($dbname,$koneksi) or die ('DB tidak ada!');		
}
koneksi();

function pesan_salah($pesan) {
    $pesan = "<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>$pesan</div>";
    return $pesan;
}

function pesan_benar($pesan) {
    $pesan = "<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>$pesan</div>";
    return $pesan;
}

?>
