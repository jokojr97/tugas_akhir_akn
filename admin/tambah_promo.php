<?php 
include 'header.php';
include '../koneksi.php';
?>
        <div class="col-md-9 text-justify" style="background-color:rgba(192,192,192,0.8);min-height:680px;max-height:1000px;overflow:auto;"><br>
                <h3 style="margin-left:15px;color:white;"><b>Tambah Promo</b></h3><br>
                <div class="alert alert-info alert-dismissable" style="background-color:#338ac6">
                </div><br>

              <form action="tambah_promo_proses.php" class="form-horizontal" id="validate-form" method="POST">
                <fieldset>
                    <div>
                        <label class="col-md-3">
                            Nama:
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                        </div><br><br>
                    </div>        

                    <div>
                        <label class="col-md-3">
                            Keterangan:
                        </label>
                        <div class="col-md-9">
                            <textarea placeholder="Ketrangan Promo" class="form-control" rows="3" name="keterangan"></textarea>
                        </div><br><br><br>
                    </div>        
                    <div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-10">
                            <label>
                                <input type="checkbox" name="checkbox"> saya setuju dengan persyratan yang ada</label>
                        </div>            
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5" >
                            <div class="clearfix pull-right" style="margin-right:10px">
                              <button type="submit" class="btn btn-primary fa fa-plus"> tambah</button>
                              <a class=" btn btn-default fa fa-close" href="promo.php"> batal</a>
                              
                            </div>
                        </div>
                    </div><br><br>
                </fieldset>     
            </form>
    </div>      
<?php 
include 'footer.php';

?>
  