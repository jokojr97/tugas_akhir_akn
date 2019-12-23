<?php 
include 'header.php';
include '../koneksi.php';
?>
        <div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:1000px;overflow:auto;"><br>
            <h3 style="margin-left:15px;color:white;"><b>Promo</b></h3><br>
            <div class="alert alert-info alert-dismissable" style="background-color:#338ac6">
            </div><br>
            <div class="row">
                <div><a href="tambah_promo.php" class="btn-lg btn-primary pull-right" style="margin-right:30px;font-size:15px;text-decoration: none;"> <span class="glyphicon glyphicon-plus"></span>&nbsp <b>Tambah</b></a>  </div>
            </div><br>
            
            <?php 
                $query = mysql_query("select * from promo where status='1'");
                $no=1;
                while ($dat=mysql_fetch_array($query)){?>
                    
                        <div class="panel panel-primary" style="text-transform:capitalize;">
                            <div class="panel-heading" style="text-transform:capitalize;"><b><?php echo $dat['nama']; ?></b></div>
                            <div class="panel-body">
                            <?php echo $dat['keterangan']; ?><br><br>
                            <div class="text-center">
                                <a href="edit_promo.php?id=<?php echo $dat['id'];?>"><i class="glyphicon glyphicon-edit"></i>Edit</a> || 
                                <a href="hapus.php?id=<?php echo $dat['id']?>"><i class="glyphicon glyphicon-trash"></i> hapus</a>
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