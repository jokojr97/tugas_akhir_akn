<?php 
include 'header.php';
?>
		<div class="col-md-9 text-justify cont"><br>        
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                       <h3><b>Ganti Password</b></h3>
                        <hr>
                    </div>
                </div><br><br/>
				<div class="col-md-5 col-md-offset-3">
					<form action="ganti_pass_act.php" method="post">
						<div class="form-group">
							<input name="user" type="hidden" value="malasngoding">
						</div>
						<div class="form-group">
							<label>Password Lama</label>
							<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
						</div>
						<div class="form-group">
							<label>Password Baru</label>
							<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
						</div>
						<div class="form-group">
							<label>Ulangi Password</label>
							<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
						</div>	
						<div class="form-group">
							<label></label>
							<input type="submit" class="btn btn-info" value="Simpan">
							<input type="reset" class="btn btn-danger" value="reset">
						</div>																	
					</form>
				</div>

	    </div>
<?php 
include 'footer.php';

?>