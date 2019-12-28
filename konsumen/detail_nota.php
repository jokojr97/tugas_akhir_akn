<?php 
include 'header.php';
?>
		<div class="col-md-9 text-justify cont"><br>        
                <div class="row cont-head">
                    <div class="col-md-12 cont-bg">
                        <h2><b>Nota Pembelian</b></h2>
                        <hr>
                    </div>
                </div><br>      
			<?php
            $id=$_GET['id'];
            $query1 = mysql_query("select * from penjualan where no_nota=$id");
                $no=1;
                while ($dt=mysql_fetch_array($query1)){
            
                $tanggal=$dt['tanggal'];
            $no++;

        }
            ?>
			<div class="col-md-12"> 
                <div class="navbar-form">Konsumen
                <input type="text" name="nama" value="<?php echo $s_nama?>"  style="width: 100px" class="capt" disabled>
                <div class="pull-right">Nota    
                <input type="text" name="no_nota" value="<?php echo $id?>" disabled>
                <input type="text" name="tanggal" value="<?php echo $tanggal?>" disabled>
                    
                </div>
                </div>  
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="5%"><center>No</center></th>
                            <th width="5%"><center>Id<br>Menu</center></th>
                            <th width="15%"><center>Nama<br>Menu</center></th>
                            <th width="40%"><center>Lokasi</center></th>
                            <th width="10%"><center>Harga</center></th>
                            <th width="10%"><center>Jumlah</center></th>
                            <th width="20%"><center>Subtotal</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query1 = mysql_query("select * from detail_penjualan where no_nota='$id'");
                        $n=1;
                        $total=0;
                        while ($dt=mysql_fetch_array($query1)){?><?php if ($n%2==0){?>
                        <tr style="text-transform:capitalize;" class="info">     
                        <?php } else {?>
                        <tr style="text-transform:capitalize;" class="active">     
                        <?php }?>
                            <td><center><?php echo $n; ?></center></td> 
                            <td><center><?php echo $dt['id_menu']?></center></td>               
                            <td><center><?php echo $dt['nama_menu']?></center></td>               
                            <td><?php echo $dt['lokasi']?></td>               
                            <td><center><?php echo $dt['harga']?></center></td>               
                            <td><center><?php echo $dt['jumlah']?></center></td>               
                            <td><center><?php $total=$total+$dt['total'];echo $dt['total']?></center></td>               
                        <?php 
                        $n++;}?>
                    </tbody>
                </table>
                <div class="col-md-3 pull-right text-right">
                    <h4><strong>Total : Rp. <?php echo $total;?></strong></h4>
                </div>
            </div>
	    </div>
<?php 
include 'footer.php';
?>