<?php 
	session_start();

	//jika ada session 
	if (isset($_SESSION["username"])){
		//maka diarahkan ke halaman admin
		if ($_SESSION['level'] == "admin") {
			header("Location: admin/");
		}elseif ($_SESSION['level'] == "konsumen") {
			header("Location: konsumen/");
		}
	}

?>
<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>

    <meta charset="utf-8">
    <title> Cathering MasJoe </title>
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">             
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
    <?php include 'js.php'; ?>
</head>

<body class="focused-form animated-content">
               
<div class="container" id="login-form">
	<div class="login-logo"><h2><b><i>C</i>athering MasJoe</b></h2></div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Login</h2>
					</div>
					<div class="panel-body">
						
						<form action="login-proses.php" class="form-horizontal" id="validate-form" method="POST">
							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
										<input type="text" class="form-control" placeholder="Username" autofocus="on" autocomplete="off" placeholder="At least 6 characters"  name="username">
									</div>
		                        </div>
							</div>

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
										<input type="password" class="form-control" id="password" placeholder="Password" name="password" autocomplete="off">
									</div>
		                        </div>
							</div>
							<div class="panel-footer">
								<div class="clearfix">
								<input type="submit" name="submit"  class="btn btn-primary pull-right" value="Login">
								</div>
							</div>
						</form>
							<div class="col-xs-12">
							<center>Belum punya akun ?<br><br>
								<a href="daftar/" class="btn btn-primary">Daftar</a>
							</center>
							</div>					
					</div>
				</div>
			</div>
		</div>
</div>

    </body>
</html>