<?php
	session_start();
	$base_url="http://localhost/ta/";
	//session_start(); //mulai session
	if (!(isset($_SESSION["username"]))){ //jika belum login akan diarahkan ke halaman login
		header("Location: $base_url");
	} 
	if ($_SESSION['level']=='admin') {//
		header('location:../admin/');
	}
	$s_username=$_SESSION["username"]; //menangkap session username
	$s_level=$_SESSION["level"]; //menangkap sessio level
	$s_nama=$_SESSION["nama"]; //menangkap sessio level
	$s_alamat=$_SESSION["alamat"];
	$namasistemnya="Catering Masjoe";

	include "../koneksi.php";
?>