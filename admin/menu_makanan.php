<?php 
include 'header.php';
include '../koneksi.php';
?>
        <div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:1000px;overflow:auto;"><br>
			<h3 style="margin-left:15px;color:white;"><b>Menu Makanan</b></h3><br>
			<div class="alert alert-info alert-dismissable" style="background-color:#338ac6">
            </div><br>
            <div class="row">
                <div><a href="tambah_menu.php" class="btn-lg btn-primary pull-right" style="margin-right:30px;font-size:15px;text-decoration: none;"> <span class="glyphicon glyphicon-plus"></span>&nbsp <b>Tambah</b></a>  </div>
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
                            <div class="text-center">
                                <a href="edit_menu.php?id=<?php echo $dat['id'];?>"><i class="glyphicon glyphicon-edit"></i>Edit</a> || 
                                <a href="hapus.php?id=<?php echo $dat['id']?>"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                            </div>                     
                        </div>       
                    </div>                
                </div>
            <?php   
                $no++;}
            ?>
        </div>
<?php 
include 'footer.php';

?>