            <div class="col-md-3 sidenav text-center ">
                <div class="panel panel-primary" style="border:0px;">
                    <div class="panel-heading"><h4 class="text-center"><a class="bg bg-primary" href=""><b>PROMO</b></a></h4></div>
                    <div class="row" style="padding:10px 0px">
                        <div>
                            <a href="tambah_promo.php" class="btn-lg btn-primary pull-right btn-tmb"> 
                                <span class="glyphicon glyphicon-plus"></span>&nbsp <b>Tambah</b>
                            </a>
                        </div>
                    </div><?php 
                $query = mysql_query("select * from promo where status='1'");
                $no=1;
                while ($dat=mysql_fetch_array($query)){?>
                    
                        <div class="panel panel-primary capt">
                            <div class="panel-heading"><b><?php echo $dat['nama']; ?></b></div>
                                <div class="panel-body"><?php echo $dat['keterangan']; ?><br><br>
                                    <div class="text-center">
                                        <a href="edit_promo.php?id=<?php echo $dat['id'];?>"><i class="glyphicon glyphicon-edit"></i>Edit</a> || 
                                        <a href="hapus_promo.php?id=<?php echo $dat['id']?>"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                                    </div>
                                </div>       
                            </div>                
                    <?php   
                        $no++;}
                    ?>   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>