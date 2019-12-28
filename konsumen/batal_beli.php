<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("../koneksi.php");
	//nangkap kiriman data
	$id=$_GET['id'];

	//salah
	if (empty($id)){
		header('location:index.php');
	} 
	//jika $jeneng dan $gembok ada isinya
	else{
		//memasukkan data
		$query=mysql_query("DELETE FROM tb_sementara WHERE kode='$id'");
		header('location:beli.php');
	}
?>