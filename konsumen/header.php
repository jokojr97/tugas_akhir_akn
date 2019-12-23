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
					<li style="background-color:#337ab7;"><a class="dropdown-toggle" style="color:white" data-toggle="dropdown" role="b"utton" href="#">Hello,  <?php 
					echo $_SESSION['username']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user" ></span></a></li>
				</ul>
			</div>
  		</div>
	</nav>
	<!-- modal input -->
	<div class="container-fluid">    
		<div class="row content">
			<div class="col-sm-2 sidenav" style="background-color:transparent;">
				<div class="avatar">
				<a class="thumbnail" style="background:none;border:0px solid blue;margin-left:-15px"><img class="img-circle" src="foto/akun.png"></a>
				</div>
				<
				<ul class="nav nav-pills nav-stacked content" style="background-color:;margin-left:-15px;">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
					<li class="li"><a href="beli.php"><span class="glyphicon glyphicon-th-list"></span>  Beli</a></li>
					<li class="li"><a href="daftar_request.php"><span class="glyphicon glyphicon-list"></span>  Daftar Request</a></li>
					<li class="li"><a href="info_toko.php"><span class="glyphicon glyphicon-info-sign"></span>  Info Toko</a></li>        												
					<li class="li"><a href="promo.php"><span class="glyphicon glyphicon-log-in"></span>  Promo</a></li>
					<li class="li"><a href="../logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>			
				</ul>
			</div>
		<div class="col-md-10" style="margin-left:-30px"> 
		<div class="row">&nbsp</div>