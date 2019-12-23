<?php 
include 'header.php';
include '../koneksi.php';
?>
		<div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:500px;max-height:600px;"><br>
			<h2 style="color:white"><b>Beli</b></h2>
			<hr style="border:10px solid #338ac6;"><br><br>	
		    
		    <div class="row">
			    <div>
			        <label for="country" class="col-md-2">
			            Menu Makanan
			        </label>
			    </div>
			    <form action="beli-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
			        <div class="col-md-9">
			            <select name="id_daging" class="form-control">
			                <option>--Please Select--</option>
			                    <?php 
			                        $query1 = mysql_query("select * from menu_makanan");
			                        $n=1;
			                        while ($dt=mysql_fetch_array($query1)){?>                                
			                                <option><?php echo $dt['nama_menu']; ?></option>
			                            <?php 
			                            $n++;
			                        }
			                    ?>
			            </select>
			        </div><br><br><br>   
			        <div>
			            <label for="firstname" class="col-md-2">
			                Lokasi
			            </label>
			            <div class="col-md-9">
			                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
			            </div>
			        </div><br><br><br>   
			        <div>
			            <label for="firstname" class="col-md-2">
			                Jumlah
			            </label>
			            <div class="col-md-9">
			                <input type="text" class="form-control" name="jumlah" placeholder="jumlah">
			            </div>               
			        </div><br><br><br>   
			        <div>
			            <label for="firstname" class="col-md-2">
			                Harga
			            </label>
			            <div class="col-md-9">
			                <input type="text" class="form-control" name="harga" placeholder="Harga" >
			            </div>                       
			        </div><br><br><br>   
			        <div>   
			            <label for="firstname" class="col-md-2">
			                Total Harga
			            </label>
			            <div class="col-md-9">
			                <input type="text" class="form-control" name="total_harga" placeholder="Total Harga" value="">
			            </div>               
			        </div> <br><br><br>   
		            <?php$tanggal="2017-01-17";?>
			        <input type="hidden" class="form-control" name="tanggal" value="$tanggal">
			        <div class="row">
			            <div class="col-md-2"></div>
			            <div class="col-md-9">
			                <button type="submit" class="btn btn-info pull-right" style="margin-right:18px">
			                    &nbsp;&nbsp;&nbsp;&nbsp; Order  &nbsp;&nbsp;&nbsp;&nbsp;
			                </button>
			            </div>
			        </div>        
			    </form>
			</div>
			<div class="row">&nbsp</div>

			<div class="row"><br><br>
				<div class="col-md-12 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:800px;overflow:auto;"><br>
			<h3 style="margin-left:15px;"><b>Menu Makanan</b></h3><br>
			<div class="alert alert-info alert-dismissable" style="background-color:#338ac6">
            </div><br>
			<?php 
                $query = mysql_query("select * from menu_makanan where status='1'");
                $no=1;
                while ($dat=mysql_fetch_array($query)){?>
                    
                    <div class="col-md-4 text-center">
                        <div class="panel panel-primary" style="text-transform:capitalize;">
                            <div class="panel-heading" style="text-transform:capitalize;"><b><?php echo $dat['nama_menu']; ?></b></div>
                            <div class="panel-body">
                            <img class="img-thumbnail" style="width:180px;height:150px" src="foto/<?php echo $dat['foto'];?>"><br><br>
                            <p>harga : Rp.
                            <?php echo $dat['harga']; ?></p>
                            <p>jumlah :
                            <?php echo $dat['jumlah']; ?></p>
                        </div>       
                    </div>                
                </div>
            <?php   
                $no++;}
            ?>
        </div>
			</div>
	    </div>
<?php 
include 'footer.php';

?>