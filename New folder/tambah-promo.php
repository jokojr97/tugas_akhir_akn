<?php 
    include '../sistemnya.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi || Meatgo</title>

    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/local.css" />

    <script type="text/javascript" src="../../assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js ../assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="../index.php"><i class="fa fa-user"></i> Akun</a></li>
                    
                    <li><a href="../info"><i class="fa fa-info"></i> Info Toko</a></li>
                    <li class="active"><a href="index.php"><i class="fa fa-globe"></i> Promo</a></li>
                    <li><a href="../laporan"><i class="fa fa-tasks"></i> Laporan</a></li>
                </ul>
                                <ul class="nav navbar-nav navbar-right navbar-user">
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo "<b>".$s_username.'</b>'; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../akun"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="../../logout/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Promo</h1>
                    <div class="alert alert-success alert-dismissable">
                    </div>                     
                </div>
            </div>    
            <form action="tambah-pemroses.php" class="form-horizontal" id="validate-form" method="POST">
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
                            keterangan:
                        </label>
                        <div class="col-md-9">
                            <textarea placeholder="ketrangan promo" class="form-control" rows="3" name="keterangan"></textarea>
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
                              <a class=" btn btn-default fa fa-close" href="index.php"> batal</a>
                              
                            </div>
                        </div>
                    </div><br><br>
                </fieldset>     
        </form>
            <!--<div class="row">
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                  <div class="controls">
                    <textarea class="cleditor" id="textarea2" rows="3"></textarea>
                  </div>
                </div>
            </div>-->
        </div>
    <!-- /#wrapper -->

    <script type="text/javascript">
        jQuery(function ($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 143, 132, 274, 223, 143, 156, 223, 223],
                budget = [23, 19, 11, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                sales = [11, 9, 31, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                targets = [17, 19, 5, 4, 62, 62, 75, 12, 47, 55, 65, 67],
                avrg = [117, 119, 95, 114, 162, 162, 175, 112, 147, 155, 265, 167];

            $("#shieldui-chart1").shieldChart({
                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                primaryHeader: {
                    text: "Login Data"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Logins",
                        data: visits
                    },
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Avg Visit Duration",
                        data: avrg
                    }
                ]
            });

            $("#shieldui-chart3").shieldChart({
                primaryHeader: {
                    text: "Sales Data"
                },
                dataSeries: [
                    {
                        seriesType: "bar",
                        collectionAlias: "Budget",
                        data: budget
                    },
                    {
                        seriesType: "bar",
                        collectionAlias: "Sales",
                        data: sales
                    },
                    {
                        seriesType: "spline",
                        collectionAlias: "Targets",
                        data: targets
                    }
                ]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: gridData
                },
                sorting: {
                    multiple: true
                },
                paging: {
                    pageSize: 7,
                    pageLinksCount: 4
                },
                selection: {
                    type: "row",
                    multiple: true,
                    toggle: false
                },
                columns: [
                    { field: "id", width: "70px", title: "ID" },
                    { field: "name", title: "Person Name" },
                    { field: "company", title: "Company Name" },
                    { field: "email", title: "Email Address", width: "270px" }
                ]
            });
        });
    </script>
</body>
</html>
