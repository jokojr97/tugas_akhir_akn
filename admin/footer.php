		<div class="col-md-3 sidenav text-center" style="height: 700px;background-color:transparent;">
			<div class="panel panel-primary" style="border:0px;background-color:transparent;">
		        <div class="panel-heading"><h4 class="text-center"><a class="bg bg-primary" href=""><b>PROMO</b></a></h4></div><br>
		      
            <?php 
                $query = mysql_query("select * from promo where status='1'");
                $no=1;
                while ($dat=mysql_fetch_array($query)){?>
                    
                        <div class="panel panel-primary" style="text-transform:capitalize;">
                            <div class="panel-heading" style="text-transform:capitalize;"><b><?php echo $dat['nama']; ?></b></div>
                            <div class="panel-body">
                            <?php echo $dat['keterangan']; ?><br><br>
                            <!--<div class="text-center">
                                <a href="edit_menu.php?id=<?php echo $dat['id'];?>"><i class="glyphicon glyphicon-edit"></i>Edit</a> || 
                                <a href="hapus.php?id=<?php echo $dat['id']?>"><i class="glyphicon glyphicon-trash"></i> hapus</a>
                            </div>-->                     
                        </div>       
                    </div>                
            <?php   
                $no++;}
            ?>
		    </div>
		</div>
	</div>
</div>
</body>
</html>