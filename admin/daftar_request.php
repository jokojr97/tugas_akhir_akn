<?php 
include 'header.php';
?>		
            <div class="col-md-9 text-justify cont"><br>		
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Daftar Request</b></h3>
                        <hr>
                    </div>
                </div><br>
    			<div class="col-md-12"> 
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="3%"><center>No</center></th>
                                <th width="10%"><center>Konsumen</center></th>
                                <th width="13%"><center>Menu <br>Makanan</center></th>
                                <!--<th width="13%"><center>Lokasi</center></th>-->
                                <th width="7%"><center>jumlah</center></th>
                                <th width="15%"><center>Total Harga</center></th>
                                <th width="13%"><center>Tanggal</center></th>
                                <th width="20%"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $query1 = mysql_query("select * from transaksi_masuk where status=1");
                        $n=1;
                        while ($dt=mysql_fetch_array($query1)){?>
                        <?php if ($n%2==0){?>
                            <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                            <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                                <td><center><?php echo $n; ?></center></td>                                   
                                <td><?php echo $dt['nama_konsumen']; ?></td>
                                <td><center><?php echo $dt['menu']; ?></center></td>
                                <!--<td><center><?php echo $dt['lokasi']; ?></center></td>-->
                                <td><center><?php echo $dt['jumlah']; ?></center></td>
                                <td><center>Rp. <?php echo $dt['total_harga']; ?></center></td>
                                <td><center><?php echo $dt['tanggal']; ?></center></td>
                                <td> 
                                <center>
                                    <a class="btn btn-sm btn-info" 
                                        href="detail_daftar_request.php?id=<?php echo $dt['id_transaksi']?>"">
                                        <i class="glyphicon glyphicon-search"></i> Detail&nbsp;
                                    </a>
                                    <a class="btn btn-sm btn-danger" 
                                        href="hapus_daftar_request.php?id=<?php echo $dt['id_transaksi']?>"">
                                        <i class="glyphicon glyphicon-trash"></i> Hapus&nbsp;
                                    </a>
                                    <!--
                                    <a class="btn btn-sm btn-success" 
                                        href="selesai.php?id=<?php echo $dt['id_transaksi']?>" style="margin-top:5px">
                                        <i class="glyphicon glyphicon-check"></i> Selesai&nbsp;
                                    </a>-->
                                </center>
                                </td>
                        <?php 
                        $n++;} ?>
                                        
                        </tbody>
                    </table>
                </div>
    	    </div>
<?php 
include 'footer.php';
?>