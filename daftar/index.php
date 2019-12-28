<?php 
	session_start();

	//jika ada session 
	if (isset($_SESSION["username"])){
		//maka diarahkan ke halaman admin
		if ($_SESSION['level'] == "admin") {
			header("Location: ../admin/");
		}elseif ($_SESSION['level'] == "karyawan") {
			header("Location: ../karyawan/");
		}elseif ($_SESSION['level'] == "konsumen") {
			header("Location: ../konsumen/");
		}
	}

?>
<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title> Cathering MasJoe </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet' type='text/css'>
    <link type="text/css" href="../assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="../assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">               <!-- Themify Icons -->
    <link type="text/css" href="../assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
</head>

<body class="focused-form animated-content">
    <div class="container" id="login-form">
	    <div class="login-logo"><h2><b><i>C</i>athering MasJoe</b></h2></div>
            <div class="row">
			    <div class="col-md-6 col-md-offset-3">
				    <div class="panel panel-default">
				    <div>
                        <div class="row text-center">
                        <h2>Daftar Akun</h2><br>
                        </div>

                        <form action="daftar_pemroses.php" class="form-horizontal" id="validate-form" method="POST">
                            <fieldset>
                            <div>
                                <label class="col-md-3">
                                    nama:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="nama" name="nama">
                                </div><br><br>
                            </div>        
                            <div>
                                <label class="col-md-3">
                                    alamat:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                                </div><br><br>
                            </div>        
                            <div>
                                <label for="telpon" class="col-md-3">
                                    telpon:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="telpon" name="telpon">
                                </div>
                                 <br><br>
                            </div>
                            <div>
                                <label for="sex" class="col-md-3">
                                    Jenis Kelamin:
                                </label>
                                <div class="col-md-9">
                                    <label class="radio" style="margin-left:20px">
                                        <input type="radio" name="jenis_kelamin" value="laki-laki" checked >
                                        Laki-laki
                                    </label>
                                    <label class="radio" style="margin-left:20px">
                                        <input type="radio" name="jenis_kelamin" value="perempuan">
                                        Perempuan
                                    </label>
                                </div>             
                            </div><br><br>
                        
                            <div> 
                                <label for="email" class="col-md-3">
                                    Email 
                                </label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="emailaddress" placeholder="masukkan alamat email" name="email">
                                    <p class="help-block">
                                        Example: yourname@domain.com
                                    </p>
                                </div>
                             
                            </div><br><br>
                            <div>
                                <label for="password" class="col-md-3">
                                    Password:
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password" placeholder="masukkan Password" name="password">
                                    <p class="help-block">
                                        Min: 6 characters (Alphanumeric only)
                                    </p>
                                </div>             
                            </div><br><br>
                        <!--<div>
                            <label for="country" class="col-md-3">
                                sebagai
                            </label>
                            <div class="col-md-9">
                                <select name="aktor" class="form-control">
                                    <option>--Please Select--</option>
                                    <option>pelanggan</option>
                                    <option>karyawan</option>
                                    <option>admin</option>
                                </select>
                            </div> 
                        </div>--><br><br><br>
                            <div>
                                <label for="firstname" class="col-md-3">
                                    tanggal lahir:
                                </label>
                                <div class="col-md-9">
                                    <select name="tanggal">
                                        <option>-- tanggal --</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>  
                                    </select> - 
                                    <select name="bulan">
                                        <option>-- bulan --<option>1</option></option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                                    </select> - 
                                    <select name="tahun">
                                        <option>-- tahun --</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>200</option><option>200</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option>
                                    </select>
                                    </div>
                                
                            </div><br><br>
                            <div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-10">
                                    <label>
                                        <input type="checkbox" name="checkbox"> saya setuju dengan persyratan yang ada</label>
                                </div>            
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                </div>
                                <div class="col-md-4">
                                    <div class="clearfix">
                                      <button type="submit" class="btn btn-primary">Daftar</button>
                                      <a href="../" class="btn btn-default" ">Cancel</a>
                                      
                                    </div>
                                </div>
                            </div><br><br>
                            </fieldset>
                        </form>
                    </div>  
                </div>
		  </div>
	   </div>
    </div>
	
    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="../assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="../assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="../assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="../assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="../assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="../assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="../assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="../assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="../assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="../assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="../assets/js/application.js"></script>
<script type="text/javascript" src="../assets/demo/demo.js"></script>
<script type="text/javascript" src="../assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    

    <!-- End loading page level scripts-->
    </body>
</html>