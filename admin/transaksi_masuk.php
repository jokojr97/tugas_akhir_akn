<?php 
include 'header.php';
?>
            <div class="col-md-9 text-justify cont"><br>
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">    
                        <h3><b>Transaksi Masuk</b></h3>
                        <hr>
                    </div>
                </div><br>
                
            <div class="col-md-12"> 
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="5%"><center>No</center></th>
                            <th width="10%"><center>Konsumen</center></th>
                            <th width="15%"><center>Tanggal</center></th>
                            <th width="15%"><center>Total</center></th>
                            <th width="15%"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query1 = mysql_query("select * from penjualan where status=2");
                        $n=1;
                        while ($dt=mysql_fetch_array($query1)){?><?php if ($n%2==0){?>
                        <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                        <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                            <td><center><?php echo $n; ?></center></td>                                   
                            <td><?php echo $dt['konsumen']; ?></td>
                            <td><center><?php echo $dt['tanggal']; ?></center></td>
                            <td style="text-align: center;"><?php echo $dt['total']; ?></td>
                            <td style="text-align: center;"> 
                            <center>
                                <a class="btn btn-sm btn-info" 
                                    href="detail_nota.php?id=<?php echo $dt['no_nota']?>"">
                                    <i class="glyphicon glyphicon-search"></i> Detail&nbsp;&nbsp;&nbsp;
                                </a>
                                <a class="btn btn-sm btn-danger" 
                                    href="detail_nota.php?id=<?php echo $dt['no_nota']?>"">
                                    <i class="glyphicon glyphicon-trash"></i> Hapus&nbsp;&nbsp;&nbsp;
                                </a>
                            </center>
                            </td>
                        <?php 
                        $n++;}?>
                        </tbody>
                </table>
            </div>
            </div>
<?php 
include 'footer.php';
?>