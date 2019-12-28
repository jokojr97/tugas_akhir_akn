<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("../koneksi.php");
	//nangkap kiriman data
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
	$total=$_POST['jumlah']*$_POST['harga'];


	//salah
	if (empty($id) OR empty($nama) OR empty($jumlah) OR empty($total)){
		header('location:index.php');
	} 
	//jika $jeneng dan $gembok ada isinya
	else{
		//memasukkan data
		$query=mysql_query("INSERT INTO tb_sementara VALUES ('$id', '$nama', '$jumlah', '$total')");
		header('location:beli.php');
	}
?>