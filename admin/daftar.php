<?php 
include 'header.php';
?>
        <div class="col-md-9 text-justify cont capt"><br>        
            <div>
                        <div class="row text-center">
                        <h2>Daftar Akun</h2><br>
                        </div>

                        <form action="daftar_pemroses.php" class="form-horizontal" id="validate-form" method="POST">
                            <fieldset>
                            <div>
                                <label class="col-md-3">
                                    nama:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="nama" name="nama">
                                </div><br><br>
                            </div>        
                            <div>
                                <label class="col-md-3">
                                    alamat:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                                </div><br><br>
                            </div>        
                            <div>
                                <label for="telpon" class="col-md-3">
                                    telpon:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="telpon" name="telpon">
                                </div>
                                 <br><br>
                            </div>
                            <div>
                                <label for="sex" class="col-md-3">
                                    Jenis Kelamin:
                                </label>
                                <div class="col-md-9">
                                    <label class="radio" style="margin-left:20px">
                                        <input type="radio" name="jenis_kelamin" value="laki-laki" checked >
                                        Laki-laki
                                    </label>
                                    <label class="radio" style="margin-left:20px">
                                        <input type="radio" name="jenis_kelamin" value="perempuan">
                                        Perempuan
                                    </label>
                                </div>             
                            </div><br><br>
                        
                            <div> 
                                <label for="email" class="col-md-3">
                                    Email 
                                </label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="emailaddress" placeholder="masukkan alamat email" name="email">
                                    <p class="help-block">
                                        Example: yourname@domain.com
                                    </p>
                                </div>
                             
                            </div><br><br>
                            <div>
                                <label for="password" class="col-md-3">
                                    Password:
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password" placeholder="masukkan Password" name="password">
                                    <p class="help-block">
                                        Min: 6 characters (Alphanumeric only)
                                    </p>
                                </div>             
                            </div><br><br>
                        <!--<div>
                            <label for="country" class="col-md-3">
                                sebagai
                            </label>
                            <div class="col-md-9">
                                <select name="aktor" class="form-control">
                                    <option>--Please Select--</option>
                                    <option>pelanggan</option>
                                    <option>karyawan</option>
                                    <option>admin</option>
                                </select>
                            </div> 
                        </div>--><br><br><br>
                            <div>
                                <label for="firstname" class="col-md-3">
                                    tanggal lahir:
                                </label>
                                <div class="col-md-9">
                                    <select name="tanggal" style="padding: 7px">
                                        <option>-- tanggal --</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>  
                                    </select> - 
                                    <select name="bulan" style="padding: 7px">
                                        <option>-- bulan --<option>1</option></option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                                    </select> - 
                                    <select name="tahun" style="padding: 7px">
                                        <option>-- tahun --</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>200</option><option>200</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option>
                                    </select>
                                    </div>
                                
                            </div><br><br>
                            <div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-10">
                                    <label>
                                        <input type="checkbox" name="checkbox"> saya setuju dengan persyratan yang ada</label>
                                </div>            
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4">
                                    <div class="clearfix">
                                      <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                                      <a href="../login" class="btn btn-default btn-lg">Cancel</a>
                                      
                                    </div>
                                </div>
                            </div><br><br>
                            </fieldset>
                        </form>
                    </div>  
        </div>
<?php 
include 'footer.php';
?>