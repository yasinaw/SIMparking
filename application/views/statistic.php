<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Master Data | SIM Wisuda ITS</title>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="path/to/chartjs/dist/Chart.min.css">

</head>
     
 
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" style="background: url(<?php echo base_url().'assets/home-bg.jpg' ?>) no-repeat center center scroll;background-size:cover;width: 100%;">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-collapse collapse white-bg" id="navbar">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-top-links navbar-right"  style="color:black">
                    <li>
                           <h4><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?> </h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url("LoginController/logout")?>" style="color:black">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-left"  style="color:black">	
                    <li>
                        <a href="<?php echo base_url()?>Parking" style="color:black">
                            <i class="fa fa-cogs"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Parking/masterdata" style="color:black">
                            <i class="fa fa-book"></i> Master Data
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Parking/statistik" style="color:black">
                            <i class="fa fa-bar-chart"></i> Report
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
            <br/>
          <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-12"></div>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <h2><b>Dashboard</b></h2>
              <h4>Smart Parking</h4><br/>
              <br/>
              </div>
            </div>
            
            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6" >
                    <div class="x_panel">
                            <div class="x_title">
                                  <h2 style='font-weight: bold'>Kendaraan yang Sedang Parkir</h2> 
                              <br/><br/>
                          </div>
                          <div class="x_content">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="card" >
                                <?php if (count($parkir_sekarang) == 0){ ?>
                                        <h4>Tidak ada Riwayat Data</h4>
                                <?php } else { ?>
                                        <div id="container" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
                                <?php } ?>
                            </div>
                            </div>
                          </div>
                    </div>    
                  </div>
                
                <div class="col-lg-6" >
                    <div class="x_panel">
                            <div class="x_title">
                                  <h2 style='font-weight: bold'>Riwayat Kendaraan yang Telah Parkir</h2> 
                              <br/><br/>
                          </div>
                          <div class="x_content">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="card" >
                                <?php if (count($riwayat_parkir) == 0){ ?>
                                        <h4>Tidak ada Riwayat Data</h4>
                                <?php } else { ?>
                                        <div id="container2" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
                                <?php } ?>
                            </div>
                            </div>
                          </div>
                    </div>
                </div>
              <div class="row">
                <div class="col-lg-12" >
                    <div class="x_panel">
                            <div class="x_title">
                                  <h2 style='font-weight: bold'>Data Plat Nomer kendaraan berdasarkan Warna</h2> 
                              <br/><br/>
                          </div>
                          <div class="x_content">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="card" >
                                <div class="panel-group" id="accordion">

                                <div class="panel panel-default">
                                  <div id="collapse" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                      <div class="table-responsive">
                                      <table id="example1" class="table table-bordered table-striped table-hover dataTables-example" style="font-size:14px">
                                         <thead>
                                                        <tr>
                                                          <th scope="col" style="width:10%;">No.</th>
                                                          <th scope="col" style="width:50%;">Plat Nomor</th>
                                                          <th scope="col" style="width:40%;">Warna</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php $n=1; foreach ($berdasarkan_warna as $f) { ?>
                                                        <tr>
                                                          <th><?php echo $n; ?></th>
                                                          <td><?php echo $f->plat_no; ?></td>
                                                          <td><?php echo $f->warna; ?></td>
                                                        </tr>
                                                     <?php $n++; } ?>  
                                                      </tbody>
                                      </table>
                            </div>

                            </div>
                          </div>
                        </div>
                        </div>
                            </div>
                            </div>
                          </div>
                    </div>   
                </div>
              </div>
             </div>
       
          
        <div class="footer">
            <div class="pull-right">

            </div>
            <div>
                <strong>Copyright</strong> &copy; 2019 Yasin Awwab. All rights reserved.
            </div>
        </div>
                 </div>
                        
                  </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <script>
                Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    <?php foreach ($parkir_sekarang as $ps) { ?>
                        '<?php echo $ps->kategori ?>',
                    <?php } ?>
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tipe',
                data: [<?php foreach ($parkir_sekarang as $ps) { ?><?php echo number_format($ps->jumlah,0,".","."); ?>,<?php } ?>]

            }]
        });
    </script>
    <script>
                Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    <?php foreach ($riwayat_parkir as $ps) { ?>
                        '<?php echo $ps->kategori ?>',
                    <?php } ?>
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tipe',
                data: [<?php foreach ($riwayat_parkir as $ps) { ?><?php echo number_format($ps->jumlah,0,".","."); ?>,<?php } ?>]

            }]
        });
    </script>    
    
     <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'csv'},
                    {extend: 'excel', title: 'List Warrior'},
                    {extend: 'pdf', title: 'List Warrior'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    <script type="text/javascript">
            $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        </script>

</body>