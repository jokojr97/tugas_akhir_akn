<?php 
include 'header.php';
include '../koneksi.php';
?>
		<div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:1000px;overflow:auto;"><br>		

            <h2><b>Daftar Request</b></h2>
            <hr style="border:10px solid #338ac6;"><br><br> 
            
			<?php
            $id=$_SESSION['id'];
            $nama=$_SESSION['username'];
            ?>
            <input type="hidden" class="form-control" name="id_konsumen" value="<?php echo $id ?>">
            <input type="hidden" class="form-control" name="nama_konsumen" value="<?php echo $nama ?>">
			<div class="col-md-12"> 
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="5%"><center>No</center></th>
                                <th width="10%"><center>Konsumen</center></th>
                                <th width="15%"><center>Menu <br>Makanan</center></th>
                                <th width="15%"><center>Lokasi</center></th>
                                <th width="10%"><center>jumlah</center></th>
                                <th width="15%"><center>Total Harga</center></th>
                                <th width="15%"><center>Tanggal</center></th>
                                <th width="15%"><center>Action</center></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query1 = mysql_query("select * from transaksi_masuk where id_konsumen='$id' AND status=1");
                                $n=1;
                                while ($dt=mysql_fetch_array($query1)){?>
                                    <tr style="color:gray">     
                                        <td><center><?php echo $n; ?></center></td>                                   
                                        <td><?php echo $dt['nama_konsumen']; ?></td>
                                        <td><center><?php echo $dt['menu']; ?></center></td>
                                        <td style="text-align: center;"><?php echo $dt['lokasi']; ?></td>
                                        <td style="text-align: center;"><?php echo $dt['jumlah']; ?></td>
                                        <td style="text-align: center;">Rp. <?php echo $dt['total_harga']; ?></td>
                                        <td style="text-align: center;"><?php echo $dt['tanggal']; ?></td>
                                        <td style="text-align: center;"> 
                                        <center>
                                            <a class="btn btn-sm btn-warning" 
                                                href="batal.php?id=<?php echo $dt['id_transaksi']?>"">
                                                <i class="glyphicon glyphicon-remove-sign"></i> Batal&nbsp;&nbsp;&nbsp;
                                            </a>
                                        </center>
                                        </td>
                                    <?php 
                                    $n++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
	    </div>
<?php 
include 'footer.php';
?>