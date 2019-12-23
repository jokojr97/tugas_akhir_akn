<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	//include 'cek.php';
	//include 'config.php';
	?>
	<title>Cathering Mas Joe</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
	<link rel="stylesheet" type="text/css" href="../assets/css/styleku.css">

<style>
body {
    background-image: url("../back.jpg");  
    
}
.li{
	background-color:white;
	border:4px solid #337ab7;
}
.nb{
	background-color:white;
	border:4px solid #337ab7;	
	margin-left:13px;
}
th{
	background-color:#337ab7;
	color:white;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="background-color:#337ab7;"><b>
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a href="index.php" class="navbar-brand" style="color:white">Cathering MasJoe</a>
		    </div>
		    <div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li style="background-color:#337ab7;"><a style="color:white" id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-user'></span>  Login</a></li>
				</ul>
			</div>
  		</div>
	</nav>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<?php 
					include '../login.php';
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>
	<!-- sisi kiri -->
	<div class="container-fluid">    
		<div class="row content">
			<div class="col-sm-2 sidenav" style="background-color:transparent;">
				<div class="avatar">
				<a class="thumbnail" style="background:none;border:0px solid blue;margin-left:-15px"><img class="img-responsive img-circle" src="foto/akun.png"></a>
				</div>
				<div class="row">
				<center>
				<div class="col-md-10 nb">
					<a href="index.php" style="font-size: 20px">Admin</a>
				</div>
				</center>
				</div>
				<div class="row">.</div>
				<ul class="nav nav-pills nav-stacked content" style="background-color:;margin-left:-15px;">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
					<li class="li"><a href="menu_makanan.php"><span class="glyphicon glyphicon-th-list"></span>  Menu Makanan</a></li>
					<li class="li"><a href="daftar_request.php"><span class="glyphicon glyphicon-list"></span>  Daftar Request</a></li>        												
					<li class="li"><a href="transaksi_masuk.php"><span class="glyphicon glyphicon-log-in"></span>  Transaksi Masuk</a></li>
					<li class="li"><a href="transaksi_keluar.php"><span class="glyphicon glyphicon-log-out"></span>  Transaksi keluar</a></li>
					<li class="li"><a href="info_toko.php"><span class="glyphicon glyphicon-info-sign"></span>  Info Toko</a></li>
					<li class="li"><a href="promo.php"><span class="glyphicon glyphicon-comment"></span> Promo</a></li>
					<li class="li"><a href="../logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>			
				</ul>
			</div>
		<div class="col-md-10" style="margin-left:-30px"> 
		<div class="row">&nbsp</div>