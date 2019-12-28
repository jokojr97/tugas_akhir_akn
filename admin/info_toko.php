<?php 
include 'header.php';
?>
			<div class="col-md-9 text-justify cont">
				<div class="row cont-head"><br>
            		<div class="col-md-12 cont-bg">
			            <h3><b>Info Toko</b></h3>
			            <hr>
            		</div>
            	</div><br><br>
             	<div class="row cont-head">
                	<div class="col-lg-4">
                    	<img src="../welcome.jpg" style="height:180px;width:240px;m"></img>
                	</div>
                    <div class="col-lg-7" style="margin-left:17px">
                        <ul class="list-group"> 
                            <li class="list-group-item">
                              <b>Nama Toko</b> <a class="pull-right"> Catering MasJoe</a>
                            </li>
                            <li class="list-group-item">
                              <b>Alamat</b> <a class="pull-right">Ds. Jono, Dk. Kajangan, Kec. Temayang</a>
                            </li>
                            <li class="list-group-item">
                                <b>telpon</b> <a class="pull-right">082335086263</a>
                            </li>
                            <li class="list-group-item">
                              <b>Email</b> <a class="pull-right">catering@masjoe.com</a>
                            </li>
                        </ul>
                    </div>
            	</div>
                <br>
                <div class="row cont-head"><br>
                    <div class="col-md-12 cont-bg">
                        <h3><b>Info User</b></h3>
                        <hr>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12"> 
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="7%"><center>No</center></th>
                                <th width="20%"><center>Nama</center></th>
                                <th width="15%"><center>Jenis <br>Kelamin</center></th>
                                <th width="20%"><center>Email</center></th>
                                <th width="15"><center>Status</center></th>
                                <th width="20"><center>Aksi</center></th>
                            </tr>
                        </thead>
                        </thead>
                        <tbody>
                        <?php 
                        $query1 = mysql_query("select * from admin where status=1");
                        $no=1;
                        while ($dt=mysql_fetch_array($query1)){?>
                        <?php if ($no%2==0){?>
                            <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                            <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                                <td><center><?php echo $no; ?></center></td>
                                <td><?php echo $dt['nama']; ?></td>
                                <td style="text-align: center;"><?php echo $dt['jenis_kelamin']; ?></td>
                                <td style="text-align: center;"><?php echo $dt['email']; ?></td>
                                <td style="text-align: center;">Admin</td>
                                <td style="text-align: center;"> 
                                    <center>
                                        <a class="btn btn-sm btn-info" 
                                            href="detail_toko.php?id=<?php echo $dt['id_transaksi']?>"">
                                            <i class="glyphicon glyphicon-search"></i> Detail&nbsp;&nbsp;&nbsp;
                                        </a>
                                        <a class="btn btn-sm btn-danger" 
                                            href="hapus.php?id=<?php echo $dt['id_transaksi']?>"">
                                            <i class="glyphicon glyphicon-trash"></i> Hapus&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </center>
                                </td>   
                        <?php 
                        $no++;} ?>

                        <?php 
                        $query1 = mysql_query("select * from konsumen where status=1");
                        
                        while ($dt=mysql_fetch_array($query1)){?>
                        <?php if ($no%2==0){?>
                            <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                            <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                                <td><center><?php echo $no; ?></center></td>
                                <td><?php echo $dt['nama']; ?></td>
                                <td style="text-align: center;"><?php echo $dt['jenis_kelamin']; ?></td>
                                <td style="text-align: center;"><?php echo $dt['email']; ?></td>
                                <td style="text-align: center;">Admin</td>
                                <td style="text-align: center;"> 
                                    <center>
                                        <a class="btn btn-sm btn-info" 
                                            href="detail_toko.php?id=<?php echo $dt['id_transaksi']?>"">
                                            <i class="glyphicon glyphicon-search"></i> Detail&nbsp;&nbsp;&nbsp;
                                        </a>
                                        <a class="btn btn-sm btn-danger" 
                                            href="hapus.php?id=<?php echo $dt['id_transaksi']?>"">
                                            <i class="glyphicon glyphicon-trash"></i> Hapus&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </center>
                                </td>   
                        <?php 
                        $no++;} ?>                
                        </tbody>
                    </table>
                </div>
                </div>
			</div>
<?php 
include 'footer.php';   

?>