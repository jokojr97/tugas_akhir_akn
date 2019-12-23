<?php 
include 'header.php';
include '../koneksi.php';
?>
        <div class="col-md-9 text-justify cont"><br>        
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h2><b>Menu Beli</b></h2>
                        <hr>
                    </div>
                </div><br>    
                <?php    
                $query = mysql_query("select * from menu_makanan where status='1'");
                $no=1;
                while ($dat=mysql_fetch_array($query)){?>
                    <div class="col-md-4 text-center">
                        <div class="panel panel-primary" style="text-transform:capitalize;">
                            <div class="panel-heading" style="text-transform:capitalize;"><b><?php echo $dat['nama_menu']; ?></b></div>
                            <div class="panel-body">
                                <img class="img-thumbnail" style="width:180px;height:150px" src="../admin/foto/<?php echo $dat['foto'];?>"><br><br>
                                <p>harga : Rp. <?php echo $dat['harga']; ?></p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">&nbsp;&nbsp;&nbsp; Beli &nbsp;&nbsp;&nbsp;</a>
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