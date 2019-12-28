<?php 
	session_start();

	//jika ada session 
	if (isset($_SESSION["username"])){
		//maka diarahkan ke halaman admin
		if ($_SESSION['level'] == "admin") {
			header("Location: ../admin/");
		}elseif ($_SESSION['level'] == "konsumen") {
			header("Location: ../konsumen/");
		}
	}else
    header("Location: login.php");

?>
