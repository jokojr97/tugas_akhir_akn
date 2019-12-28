<?php
	include "sistemnya.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cathering Mas Joe</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
	<link rel="stylesheet" type="text/css" href="../assets/css/styleku.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/cssku.css">
</head>
<body>
	<nav class="navbar navbar-inverse bg"><b>
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a href="index.php" class="navbar-brand" style="color:white">Cathering MasJoe</a>
		    </div>				
				<ul class="nav navbar-nav navbar-right navbar-user">
					<li class="dropdown user-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white"><i class="glyphicon glyphicon-user"></i>  Hello,  <?php 	echo $s_nama  ?> <b class="caret"></b></a>
						<ul class="dropdown-menu li">
                            <li><a href="../logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
					</li>
				</ul>
  		</div>
	</nav>
		<div class="container-fluid">    
		<div class="row content">
			<div class="col-sm-2 sidenav">
				<div class="avatar">
				<center>
				<ul class="nav nav-pills nav-stacked content side-left">
					<li class="active"><a href="index.php">Konsumen</a></li>								
				</ul>
				</center>
				<a class="thumbnail side-left bg-trans"><img class="img-circle" src="foto/akun.png"></a>
				</div>
				
				<ul class="nav nav-pills nav-stacked content side-left">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
					<li class="li"><a href="beli.php"><span class="glyphicon glyphicon-usd"></span>  Beli</a></li>
					<li class="li"><a href="nota_saya.php"><span class="glyphicon glyphicon-list"></span>  Nota Saya</a></li>
					<li class="li"><a href="info_toko.php"><span class="glyphicon glyphicon-info-sign"></span>  Info Toko</a></li>        												
					<li class="li"><a href="ganti_password.php"><span class="glyphicon glyphicon-lock"></span>  Ganti Password</a></li>
				</ul>
			</div>
		<div class="col-md-10"> 
		<div class="row">&nbsp</div>