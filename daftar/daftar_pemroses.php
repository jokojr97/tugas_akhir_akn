<?php 
	//koneksi
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="meatgo"; // Database name
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	//verifikasi (cek data masukan ($username dan $password) dengan data yang ada di dalam database)

		if(empty($_POST['nama']) && empty($_POST['alamat']) && empty($_POST['telpon']) && empty($_POST['password']) && empty($_POST['email']) && empty($_POST['checkbox'])){		

 		header("location:../daftar");//redirect ke halaman login/index.php
			
		}else{

		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telpon = $_POST['telpon'];
		$Jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal = $_POST['tanggal'];
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$status="1";

		$sql = "INSERT INTO `konsumen` VALUES(NULL, '$nama', '$alamat', '$telpon', '$Jenis_kelamin', '$tahun-$bulan-$tanggal', '$email', '$password', $status)";//membuat variabel sql untuk melihat data dari tabel admin pada field id_admin dan password
		$result = mysql_query($sql);//membuatvariabel result untuk melihat semua data dari tabel admin
		header("location:../login");
 		$_SESSION['pesan']="Username atau password tidak boleh kosong";//memunculkan pesan user namae dan password tidak boleh kosong
	}




?>