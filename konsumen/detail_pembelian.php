<?php 
include 'header.php';
include '../koneksi.php';
?>
		<div class="col-md-9 text-justify cont"><br>        
	        <div class="row cont-head">
	            <div class="col-md-12 cont-bg">
	               <h2><b>Detail Pembelian</b></h2>
	                <hr>
	            </div>
	        </div><br><br/>
            <div class="col-md-3 pull-right"> Tanggal : 15-05-2017</div><br><br>
			<?php
            $id=$s_username;
            $nama=$s_nama;
            $id_menu=$_GET['id'];
            $alamat=$s_alamat;
            $jumlah=1;
            ?>
            <input type="hidden" class="form-control" name="id_menu" value="<?php echo $id_menu ?>">
            <input type="hidden" class="form-control" name="id_konsumen" value="<?php echo $id ?>">
            <input type="hidden" class="form-control" name="nama_konsumen" value="<?php echo $nama ?>">
			<div class="col-md-12"> 
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="5%"><center>No</center></th>
                            <th width="10%"><center>Konsumen</center></th>
                            <th width="15%"><center>Menu <br>Makanan</center></th>
                            <th width="25%"><center>Lokasi</center></th>
                            <th width="15%"><center>Harga</center></th>
                            <th width="5%"><center>Jumlah</center></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query1 = mysql_query("select * from menu_makanan where id_menu='$id_menu'");
                            $n=1;
                            while ($dt=mysql_fetch_array($query1)){?>
                                <tr style="text-transform:capitalize;">     
                                    <td><center><?php echo $n; ?></center></td>                                   
                                    <td><?php echo $nama; ?></td>
                                    <td><center><?php echo $dt['nama_menu']; ?></center></td>
                                    <td><center><input type="text" name="lokasi" value="<?php echo $s_alamat?>" style="width: 250px"></center></td>
                                    <td><center>Rp. <?php $harga=$dt['harga']; echo $harga; ?></td>
                                    <td><center><input type="number" name="jumlah" value="<?php echo $jumlah?>" style="width: 50px"></center></td>
                                <?php 
                                $n++;
                            }
                        ?>
                    </tbody>
                </table>
                <br>
                <div class="row cont-head">
                <div class="col-md-12 cont-bg">
                   <table class="table table-striped" cellspacing="0" width="10%">
                       <tr> 
                        <td width="10%">Total :</td>
                        <td>Rp. <?php echo $jumlah*$harga?></td>
                       </tr>
                   </table>
                    <div style="margin:-20px 10px 0px">
                    <label><input type="checkbox" name="checkbox"> saya setuju dengan persyratan yang ada</label>
                    </div>            
                    <div class="row">
                        <div class="col-md-3 pull-right">                            
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Beli</button>
                            <a href="beli.php" class="btn btn-default" "><span class="glyphicon glyphicon-remove"></span> Batal</a><br><br>
                        </div>
                    </div>
                    
                </div>
            </div><br><br/>
            </div>
	    </div>
<?php 
include 'footer.php';
?>