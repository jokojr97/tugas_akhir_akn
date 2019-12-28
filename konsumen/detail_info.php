<?php 
include 'header.php';
include '../koneksi.php';
?>
			<div class="col-md-9 text-justify cont">
				<div class="row cont-head"><br>
            		<div class="col-md-12 cont-bg">
			            <h3><b>Info User</b></h3>
			            <hr>
            		</div>
            	</div><br><br>
                <?php 
                $id=$_GET['id'];
                $query1 = mysql_query("select * from konsumen where id_konsumen=$id");
                $no=1;  
                 while ($dt=mysql_fetch_array($query1)){
                ?>

                <table class="table table-bordered" cellspacing="0" width="50%">
                    <tr class="active">
                        <td width="40%">Nama</td>
                        <td class="capt"><?php echo $dt['nama']?></td>
                    </tr>
                    <tr class="active">
                        <td width="40%">Alamat</td>
                        <td class="capt"><?php echo $dt['alamat']?></td>
                    </tr>
                    <tr class="active">
                        <td width="40%">Telpon</td>
                        <td class="capt"><?php echo $dt['telpon']?></td>
                    </tr>
                    <tr class="active">
                        <td width="40%">Jenis Kelamin</td>
                        <td class="capt"><?php echo $dt['jenis_kelamin']?></td>
                    </tr>
                    <tr class="active">
                        <td width="40%">Tanggal Lahir</td>
                        <td class="capt"><?php echo $dt['tanggal_lahir']?></td>
                    </tr>
                    <tr class="active">
                        <td width="40%">Email</td>
                        <td class="capt"><?php echo $dt['email']?></td>
                    </tr>
                </table>

                <?php 
                $no++;} ?>

                <div class="row">
                    <div class="col-md-2 pull-right">                            
                        <a href="info_toko.php" class="btn btn-primary" "><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a><br><br>
                    </div>
                </div>

			</div>
<?php 
include 'footer.php';   

?>