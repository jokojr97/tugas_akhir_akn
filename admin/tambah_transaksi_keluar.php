<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Tambah Pengeluaran</b></h3>
                        <hr>
                    </div>
                </div><br>
               <form action="tambah-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
                    <fieldset>
                        <div>
                            <label class="col-md-3">
                                Pengeluaran:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Pengeluaran" name="pengeluaran">
                            </div><br><br>
                        </div>        
                		<div>
                            <label class="col-md-3">
                                Harga:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Harga" name="harga">
                            </div><br><br>
                        </div>	        
                        <div>
                            <label class="col-md-3">
                                Jumlah:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah">
                            </div><br><br>
                        </div>
                        <div>
                            <label class="col-md-3">
                                Total Harga:
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Total Harga" name="total">
                            </div><br><br>
                        </div>                
                        <div>
                            <label class="col-md-3">
                                Tanggal:
                            </label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="tanggal">
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
