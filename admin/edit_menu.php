<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Edit Menu Makanan</b></h3>
                        <hr>
                    </div>
                </div><br><br>
        	    <form action="tambah-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
                    <fieldset>
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                        <?php  
                            $id=$_GET['id'];
                            $kueri=mysql_query("SELECT * FROM menu_makanan WHERE id_menu='$id'");
                            $data=mysql_fetch_array($kueri);
                        ?>
                        <div>
                            <label class="col-md-3">
                                Nama:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data['nama_menu']?>">
                            </div><br><br>
                        </div>        

                        <div>
        		            <label for="uploadimage" class="col-md-3">
        		                Foto
        		            </label>
        		            <div class="col-md-7">
        		                <input type="file" name="uploadimage" id="uploadimage" value="http://localhost/ta/admin\foto/<?php echo $data['foto']?>">
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
                                <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?php echo $data['harga']?>">
                            </div><br><br>
                        </div><br><br>	        
                        <div>
                            <label class="col-md-3">
                                Jumlah:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" value="<?php echo $data['jumlah']?>">
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
                              <button type="submit" class="btn btn-primary fa fa-plus"> Update</button>
                              <a class=" btn btn-default fa fa-close" href="menu_makanan.php"> Batal</a>
                                  
                            </div>
                        </div>
                    </div><br><br>
                </fieldset>     
            </form>
    	</div>
<?php 
include 'footer.php';
?>
