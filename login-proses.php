<?php 
	session_start();//memulai session

	//jika ada session 
	
	if (isset($_SESSION["username"])){
		header("Location: admin/");//maka diarahkan ke halaman admin
	}
	

	//koneksi
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="catjoe"; // Database name
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	//verifikasi (cek data masukan ($username dan $password) dengan data yang ada di dalam database)

	//jika username dan passwornya ada
	if(empty($_POST['username']) && empty($_POST['password'])){ //isset= mengecek apakah ada data yang di masukkan dari inputan username dan password
		
 		$_SESSION['pesan']="Username atau password tidak boleh kosong";//memunculkan pesan user namae dan password tidak boleh kosong
 		header("location: index.php");//redirect ke halaman login/index.php
	}
	//jika username dan passwornya tidak ada/kosong:session akan memunculkan tulisan bahwa username dan pasword tidak boleh kosong
	else {
 		$username = $_POST['username'];//membuat variabel  username dan mengecek dari database
		$password = $_POST['password'];//membuat variabel  password dan mengecek dari database
		$status="1";		
		//ADMIN
		$sql = "select * from admin where nama = '$username' AND password = '$password' AND status='$status'";//membuat variabel sql untuk melihat data dari tabel admin pada field id_admin dan password
		$result = mysql_query($sql);//membuatvariabel result untuk melihat semua data dari tabel admin
		$jumlahditemukan=mysql_num_rows($result);

	 	//id_konsumen
	 	$sqlkns = "select * from konsumen where nama = '$username' AND password = '$password' AND status='$status'";//membuat variabel sql untuk melihat data dari tabel admin pada field id_admin dan password
		$resultkns = mysql_query($sqlkns);//membuatvariabel result untuk melihat semua data dari tabel admin
		$jumlahditemukankns=mysql_num_rows($resultkns);


		if ($jumlahditemukan == 1){ //kondisi :melihat data per rows dari tabel admin apakah ada(1) atau tidak
		  $row = mysql_fetch_array($result);//melihatkan perintah query berdasarkan objek oriented
		  $_SESSION['username'] = $row['id_admin'];
		  $_SESSION['nama'] = $row['nama'];//session menyimpan informasi data (id_admin) pada server 
		  $_SESSION['jk'] = $row['jenis_kelamin'];//session menyimpan informasi data (id_admin) pada server 
		  $_SESSION['level'] = "admin";//memunculkan session admin karna login sebgai admin
		  header("location:admin/");//  meredirect ke kehalaman admin/index.php  
	 	}
	 	else if ($jumlahditemukankns == 1){
	 	  $rowkns = mysql_fetch_array($resultkns);//melihatkan perintah query berdasarkan objek oriented
	 	  $_SESSION['username']=$rowkns['id_konsumen'];
		  $_SESSION['nama'] = $rowkns['nama'];//session menyimpan informasi data (id_admin) pada server browser ynag kemudian akan di gunakan pada halaman lain maupun halamn itu sendiri	  
		  $_SESSION['jk'] = $row['jenis_kelamin'];//session menyimpan informasi data (id_admin) pada server 
		  $_SESSION['level'] = "konsumen";
		  header("location:konsumen/");//  meredirect ke kehalaman admin/index.php  
	 	}

	 	else{ //jika tidak: session pesan memunculkan tulisan username dan password salah karena tidak ada dalam database
  			$_SESSION['pesan']="Username atau Password salah";//memunculkan pesan username dan password salah karena tidak ada dalam database
  			header("location:index.php");//redirect ke halaman login/index.php
 		}
 
	}
?>