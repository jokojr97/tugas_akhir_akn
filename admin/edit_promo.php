<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Edit Promo</b></h3>
                        <hr>
                    </div>
                </div><br>
                <form action="tambah_promo_proses.php" class="form-horizontal" id="validate-form" method="POST">
                    <fieldset>
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                        <?php  
                            $id=$_GET['id'];
                            $kueri=mysql_query("SELECT * FROM promo WHERE id='$id'");
                            $data=mysql_fetch_array($kueri);
                        ?>
                        <div>
                            <label class="col-md-3">
                                Nama:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data['nama']?>">
                            </div><br><br>
                        </div>        

                        <div>
                            <label class="col-md-3">
                                Keterangan:
                            </label>
                            <div class="col-md-9">
                                <textarea placeholder="ketrangan promo" class="form-control" name="keterangan"><?php echo $data['keterangan']?></textarea>
                            </div><br><br><br>
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
                                  <a class=" btn btn-default fa fa-close" href="index.php"> batal</a>
                                  
                                </div>
                            </div>
                        </div><br><br>
                    </fieldset>     
                </form>
            </div>
      
<?php 
include 'footer.php';

?>
  