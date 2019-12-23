<?php 
include 'header.php';
include '../koneksi.php';
?>
        <div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:1000px;overflow:auto;"><br>
    		<h3 style="margin-left:15px"><b>Tambah Menu Makanan</b></h3>
            <hr style="border:10px solid #338ac6;"><br><br>
    	    <form action="tambah-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
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
    		            <label for="uploadimage" class="col-md-3">
    		                Foto
    		            </label>
    		            <div class="col-md-7">
    		                <input type="file" name="uploadimage" id="uploadimage">
    		                <p class="help-block">
    		                    Format : jpeg, jpg, gif, png
    		                </p>
    		            </div>          
            		</div><br>
            		<div>
                        <label class="col-md-3">
                            Harga:
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Harga" name="harga">
                        </div><br><br>
                    </div><br><br>	        
                    <div>
                        <label class="col-md-3">
                            Jumlah:
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Jumlah" name="jumlah">
                        </div><br><br>
                    </div>        
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
                        <div class="col-md-5" >
                        <div class="clearfix pull-right" style="margin-right:10px">
                          <button type="submit" class="btn btn-primary fa fa-plus"> tambah</button>
                          <a class=" btn btn-default fa fa-close" href="menu_makanan.php"> batal</a>
                              
                        </div>
                    </div>
                </div><br><br>
            </fieldset>     
        </form>
    </div>
<?php 
include 'footer.php';
?>
