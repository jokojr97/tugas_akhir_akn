<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("../koneksi.php");
	//nangkap kiriman data
	$no_nota=$_POST['no_nota'];
	$tgl=$_POST['tanggal'];
	$total=$_POST['total'];
	$lokasi=$_POST['lokasi'];
	$username=$_POST['username'];
	$nama=$_POST['nama'];
	$status=1;
	//salah
	if (empty($no_nota) OR empty($tgl) OR empty($total)){
		header('location:index.php');
	} 
	//jika $jeneng dan $gembok ada isinya
	else{
		//memasukkan data
		$query=mysql_query("INSERT INTO penjualan VALUES ('$no_nota', '$username', '$nama', '$tgl', '$total', '$status')");
		
		$query1 = mysql_query("select * from tb_sementara");
        $no=1;
        while ($dt=mysql_fetch_array($query1)){
        	
        	$kode=$dt['kode'];
        	$nama=$dt['nama'];
        	$harga=$dt['total']/$dt['jumlah'];
        	$jumlah=$dt['jumlah'];
        	$total=$dt['total'];

        	$query=mysql_query("INSERT INTO `detail_penjualan` VALUES ('$no_nota', '$username', '$kode', '$nama', '$lokasi', '$harga', '$jumlah', '$total');");	

        	$no++;
        }
		
        $query1=mysql_query("TRUNCATE TABLE tb_sementara");
		header('location:beli.php');
	}
?>