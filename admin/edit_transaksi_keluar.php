<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Edit Pengeluaran</b></h3>
                        <hr>
                    </div>
                </div><br>
               <form action="tambah-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
                    <fieldset>
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                        <?php  
                            $id=$_GET['id'];
                            $kueri=mysql_query("SELECT * FROM transaksi_keluar WHERE id_transaksi='$id'");
                            $data=mysql_fetch_array($kueri);
                        ?>
                        <div>
                            <label class="col-md-3">
                                Pengeluaran:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Pengeluaran" name="pengeluaran" value="<?php echo $data['pengeluaran']?>">
                            </div><br><br>
                        </div>        
                		<div>
                            <label class="col-md-3">
                                Harga (Rp.):
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?php echo $data['harga']?>">
                            </div><br><br>
                        </div>	        
                        <div>
                            <label class="col-md-3">
                                Jumlah:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" value="<?php echo $data['jumlah']?>">
                            </div><br><br>
                        </div>
                        <div>
                            <label class="col-md-3">
                                Satuan:
                            </label>
                            <div class="col-md-9">
                                <input list="satuan" name="satuan" class="listg" value="<?php echo $data['satuan']?>">
                                <datalist id="satuan">
                                    <option value="kg">
                                    <option value="btg">
                                    <option value="liter">
                                    <option value="buah">
                                </datalist>
                            </div><br><br>
                        </div>
                        <div>
                            <label class="col-md-3">
                                Total Harga (Rp.):
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Total Harga" name="total" value="<?php echo $data['total_harga']?>">
                            </div><br><br>
                        </div>                
                        <div>
                            <label class="col-md-3">
                                Tanggal:
                            </label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']?>">
                            </div><br><br>
                        </div><br>
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
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
                                  <a class=" btn btn-default" href="transaksi_keluar.php"><span class="glyphicon glyphicon-remove"> </span> Batal</a>
                                  
                                </div>
                            </div>
                        </div><br><br>
                    </fieldset>     
                </form>
            </div>
<?php 
include 'footer.php';
?>
