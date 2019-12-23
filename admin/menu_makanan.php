<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Menu Makanan</b></h3>
                        <hr>
                    </div>
                </div><br>

                <div class="row">
                    <div><a href="tambah_menu.php" class="btn-lg btn-primary pull-right btn-tmb"> <span class="glyphicon glyphicon-plus"></span>&nbsp <b>Tambah</b></a>  </div>
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
                                <p>jumlah : <?php echo $dat['jumlah'];?></p>
                                <div class="text-center">
                                <a href="edit_menu.php?id=<?php echo $dat['id_menu'];?>"><i class="glyphicon glyphicon-edit"></i>Edit</a> || 
                                <a href="hapus.php?id=<?php echo $dat['id_menu']?>"><i class="glyphicon glyphicon-trash"></i> hapus</a>
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