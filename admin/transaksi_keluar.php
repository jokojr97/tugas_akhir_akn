<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>		
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h3><b>Transaksi Keluar</b></h3>
                        <hr>
                    </div>
                </div><br>

                <div class="row">
                    <div><a href="tambah_transaksi_keluar.php" class="btn-lg btn-primary btn-tmb pull-right"> <span class="glyphicon glyphicon-plus"></span>&nbsp <b>Tambah</b></a>  </div>
                </div><br>
                <div class="col-md-12"> 
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%"><center>No</center></th>
                                <th width="10%"><center>Pengeluaran</center></th>
                                <th width="15%"><center>Harga</center></th>                                
                                <th width="10%"><center>Jumlah</center></th>
                                <th width="15%"><center>Total Harga</center></th>
                                <th width="15%"><center>Tanggal</center></th>
                                <th width="20%"><center>Action</center></th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $query1 = mysql_query("select * from transaksi_keluar where status=1");
                        $n=1;
                        while ($dt=mysql_fetch_array($query1)){?>
                        <?php if ($n%2==0){?>
                            <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                            <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                                <td><center><?php echo $n; ?></center></td>                                   
                                <td><?php echo $dt['pengeluaran']; ?></td>
                                <td><center><?php echo "Rp. ".$dt['harga']; ?></center></td>
                                <td style="text-align: center;"><?php echo $dt['jumlah']." ".$dt['satuan'];?></td>
                                <td style="text-align: center;">Rp. <?php echo $dt['total_harga'];?></td>
                                <td style="text-align: center;"><?php echo $dt['tanggal']; ?></td>
                                <td style="text-align: center;"> 
                                <center>
                                    <a class="btn btn-sm btn-success" 
                                        href="edit_transaksi_keluar.php?id=<?php echo $dt['id_transaksi']?>"">
                                        <span class="glyphicon glyphicon-edit"></span> Edit&nbsp;
                                    </a>
                                    <a class="btn btn-sm btn-danger" 
                                        href="batal.php?id=<?php echo $dt['id_transaksi']?>"">
                                        <span class="glyphicon glyphicon-trash"></span> Hapus&nbsp;
                                    </a>
                                </center>
                                </td>
                            </tr>
                        <?php 
                        $n++;}?>                                    
                        </tbody>
                    </table>
                </div>
    	    </div>            
<?php 
include 'footer.php';
?>