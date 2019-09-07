<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Dashboard | SIM Wisuda ITS</title>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/metro-all.css?ver=@@b-version") ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.css">
    
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
                    <li >
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
              <h2><b>Dasboard</b></h2>
              <h4>Smart Parking</h4><br/> 
              <br/>
              </div>
            </div>
            
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6" >
                        <div class="x_panel">
                            <div class="x_title">
                                  <h2 style='font-weight: bold'>Kendaraan Masuk</h2> 
                              <br/><br/>
                          </div>
                          <div class="x_content">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="card" >
                                <form id="demo-form2" action="<?php echo base_url()?>Parking/data_entry/" method="post" target="_blank" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Plat Nomer
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <input type="text" id="first-name" required name="plat" class="form-control col-md-7 col-xs-12" placeholder="Ex: B 1358 EOP">
                                    </div>
                                   </div>
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warna
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select style="width: 100%;" class="js-example-basic-single" name="warna" required >
                                              <option >---Pilih Warna---</option>
                                            <?php foreach ($warna as $w){ ?>
                                              <option value="<?php echo $w->id_warna ?>"><?php echo $w->warna ?></option>
                                            <?php } ?>
                                      </select>
                                    </div>
                                   </div>
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipe 
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select style="width: 100%;" class="js-example-basic-single" name="tipe" required>
                                              <option >---Pilih Tipe---</option>
                                            <?php foreach ($tipe as $t){ ?>
                                              <option value="<?php echo $t->id_tipe ?>"><?php echo $t->tipe ?></option>
                                            <?php } ?>
                                      </select>
                                    </div>
                                   </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                    </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                         <button class="btn btn-success">Cetak</button>
                                     </div>
                                  </div>      
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6" >
                        <div class="x_panel">
                            <div class="x_title">
                                  <h2 style='font-weight: bold'>Kendaraan Keluar</h2> 
                              <br/><br/>
                          </div>
                          <div class="x_content">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="card" >
                                <form id="demo-form2" action="<?php echo base_url()?>Parking/data_out/" method="post" target="_blank" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                   <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Plat Nomer
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select style="width: 100%;" class="js-example-basic-single" name="plat" required >
                                              <option >---Pilih Plat Nomer---</option>
                                            <?php foreach ($plat as $p){ ?>
                                              <option value="<?php echo $p->id ?>"><?php echo $p->plat_no ?></option>
                                            <?php } ?>
                                      </select>
                                    </div>
                                   </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                    </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                         <button class="btn btn-success">Cetak</button>
                                     </div>
                                  </div>      
                                </form>
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
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url()?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url()?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url()?>js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url()?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url()?>js/plugins/toastr/toastr.min.js"></script>
    <!-- ECharts -->
    <script src="<?php echo base_url()?>vendors/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url()?>vendors/echarts/map/js/world.js"></script>
     <!-- Knob -->
    <script src="<?php echo base_url()?>js/plugins/jsKnob/jquery.knob.js"></script>
    
    <script>
          function move() {
              var elem = document.getElementById("linechartgauge"); 
              var width = 10;
              var id = setInterval(frame, 10);
              function frame() {
                if (width >= 100) {
                  clearInterval(id);
                } else {
                  width++; 
                  elem.style.width = width + '%'; 
                  elem.innerHTML = width * 1 + '%';
                }
              }
            }
    </script>   
    <script type="text/javascript">
      $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
    <style>
        #linechartgauge {
          width: 10%;
          height: 30px;
          background-color: #52b4f2;
          text-align: center; /* To center it horizontally (if you want) */
          line-height: 30px; /* To center it vertically */
          color: white; 
        }
    </style>

</body>