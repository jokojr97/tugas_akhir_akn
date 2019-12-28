        <!-- sisi kanan -->
        <div class="col-md-3 sidenav">
            <div class="panel panel-primary" style="border:0px;background-color:transparent;">
                <div class="panel-heading"><h4 class="text-center"><a class="bg bg-primary" href=""><b>Pembelian</b></a></h4></div><br>
                <div  style="font-size:12px">
                    <form action="beli_proses.php" class="form-horizontal" id="validate-form" method="POST">
                    <input type="text" name="lokasi" value="<?php echo $s_alamat?>" style="width: 240px;margin-bottom: 5px">
                    <input type="hidden" name="username" value="<?php echo $s_username?>">

                    <input type="hidden" name="nama" value="<?php echo $s_nama?>">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="30%">Menu</th>
                                <th width="10%">Jumlah</th>
                                <th width="45%">Total</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $id=$s_username;
                        $nama=$s_nama;
                        $tgl=date('d-m-Y');
                        ?>
                        <tbody>
                        <?php 
                        $query1 = mysql_query("select * from tb_sementara");
                        $n=1;
                        $total=0;
                        while ($dt=mysql_fetch_array($query1)){?>
                        <tr>
                            <td><center><?php echo $n; ?></center></td>                                   
                            <td><?php echo $dt['nama']; ?></td>
                            <td><center><?php echo $dt['jumlah']; ?></center></td>
                            <td style="text-align: center;"><?php echo $dt['total'];$total=$total+$dt['total'] ?></td>
                            <td style="text-align: center;"> 
                            <center>
                                <a href="batal_beli.php?id=<?php echo $dt['kode']?>"><span class="glyphicon glyphicon-remove"></span></a>
                            </center>
                            </td>
                        <?php 
                        $n++;}?>
                    </table>
                </div>
                <div  style="font-size:12px">
                    <table>
                        <tr>
                            <td>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                            <td>&nbsp;&nbsp; Rp. <?php echo $total?> </td>
                        </tr>
                        <tr>
                            <td>Tanggal &nbsp;&nbsp;&nbsp;&nbsp;:</td>
                            <td>&nbsp;&nbsp; <?php echo $tgl?></td>
                        </tr>
                    </table>
                </div><br>
                <div>
                    <?php 
                        $query1 = mysql_query("select * from penjualan");
                        $no_nota=1;
                        while ($dt=mysql_fetch_array($query1)){
                    $no_nota++;};?>
                    <input type="hidden" name="no_nota" style="" value="<?php echo $no_nota?>">
                    <input type="hidden" name="total" value="<?php echo $total?>">
                    <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d') ?>">
                    <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-shopping-cart"></span> Beli</button>                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>