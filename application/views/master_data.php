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
                    <div class="row">
            <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="btn btn-success" data-toggle="modal"  data-target="#addParking"><i class="fa fa-plus"></i></a>
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse">Daftar Parking Lot</a>
                </h4>
              </div>
              <div id="collapse" class="panel-collapse collapse in">
                <div class="panel-body">

                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover dataTables-example" style="font-size:14px">
                     <thead>
								    <tr>
								      <th scope="col" style="width:40%;">Parking Lot</th>
								      <th scope="col" style="width:30%;">Status</th>
								      <th scope="col" style="width:30%;">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								    <?php foreach ($parking_lot as $f) { ?>
                                    <tr>
								      <th><?php echo $f->parking; ?></th>
								      <td><?php if($f->status == 0){ ?> <i class="fa fa-circle" style="color:green"></i> <?php } else{ ?> <i class="fa fa-circle" style="color:red"></i> <?php } ?></td>
								      <td>
								      	<form method="POST" action="<?php echo base_url()?>Parking/delParking" onsubmit="return confirm('Apakah anda yakin ingin menghapus data tersebut?');">
                                                      <input type="hidden" id="first-name" required readonly name="parking" class="form-control col-md-7 col-xs-12" value="<?php echo $f->parking; ?>" >
                                                           <button class="btn btn-danger">Hapus Data</button>
                                                         </form>
                                      </td>
								    </tr>    
                                 <?php } ?>  
								  </tbody>
                  </table>
                </div>

                </div>
              </div>
            </div>
            </div>
            </div>    
                  </div>
                
                <div class="col-lg-6" >
                    <div class="row">
            <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="btn btn-success" data-toggle="modal"  data-target="#addTipe"><i class="fa fa-plus"></i></a>
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse">Daftar Tipe Kendaraan</a>
                </h4>
              </div>
              <div id="collapse" class="panel-collapse collapse in">
                <div class="panel-body">

                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover dataTables-example" style="font-size:14px">
                     <thead>
								    <tr>
								      <th scope="col" style="width:10%;">ID</th>
								      <th scope="col" style="width:30%;">Tipe</th>
                                      <th scope="col" style="width:10%;">Biaya Jam Pertama</th>
								      <th scope="col" style="width:30%;">Biaya Perjam</th>
								      <th scope="col" style="width:10%;">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								    <?php foreach ($tipe as $f) { ?>
                                    <tr>
								      <th><?php echo $f->id_tipe; ?></th>
								      <td><?php echo $f->tipe; ?></td>
                                      <td><?php echo $f->jam_pertama; ?></td>
                                      <td><?php echo $f->perjam; ?></td>
								      <td>
								      	 <a class="btn btn-success" data-toggle="modal"  data-target="#datatipe<?php echo $f->id_tipe; ?>">Ubah Data</a>
                                      </td>
								    </tr>
                                     <!--                  modal data -->
                                      <div class="modal fade" id="datatipe<?php echo $f->id_tipe; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Tipe</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- Isi Modal -->
                                                    <div class="box-body">
                                                    <form id="demo-form2" action="<?php echo base_url()?>Parking/updateTipe" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                      
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Tipe
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" readonly  name="id_tipe" class="form-control col-md-7 col-xs-12" value="<?php echo $f->id_tipe; ?>">
                                                        </div>
                                                       </div><br/><br/><br/>
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipe
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="tipe" class="form-control col-md-7 col-xs-12" value="<?php echo $f->tipe; ?>">
                                                        </div>
                                                       </div><br/><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Biaya Jam Pertama
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="jam_pertama" class="form-control col-md-7 col-xs-12" value="<?php echo $f->jam_pertama; ?>">
                                                        </div>
                                                       </div><br/><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                        </label>
                                                         <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                                             <button class="btn btn-success">Ubah Data</button>
                                                         </div>
                                                       </div>      
                                                    </form>
                                                    <form method="POST" action="<?php echo base_url()?>Parking/delTipe" onsubmit="return confirm('Apakah anda yakin ingin menghapus tipe tersebut?');">
                                                      <input type="hidden" id="first-name" required readonly name="id_tipe" class="form-control col-md-7 col-xs-12" value="<?php echo $f->id_tipe; ?>" >
                                                           <button class="btn btn-danger">Hapus Data</button>
                                                         </form>
                                              </div><br/>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                 <?php } ?>  
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
        <div class="row">
                
              <div class="col-lg-6" >
                    <div class="row">
            <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="btn btn-success" data-toggle="modal"  data-target="#addWarna"><i class="fa fa-plus"></i></a>
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse">Daftar Warna Kendaraan</a>
                </h4>
              </div>
              <div id="collapse" class="panel-collapse collapse in">
                <div class="panel-body">

                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover dataTables-example" style="font-size:14px">
                     <thead>
								    <tr>
								      <th scope="col" style="width:10%;">ID</th>
								      <th scope="col" style="width:30%;">Warna</th>
								      <th scope="col" style="width:10%;">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								    <?php foreach ($warna as $f) { ?>
                                    <tr>
								      <th><?php echo $f->id_warna; ?></th>
								      <td><?php echo $f->warna; ?></td>
								      <td>
								      	 <a class="btn btn-success" data-toggle="modal"  data-target="#datawarna<?php echo $f->id_warna; ?>">Ubah Data</a>
                                      </td>
								    </tr>
                                     <!--                  modal data -->
                                      <div class="modal fade" id="datawarna<?php echo $f->id_warna; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Data Warna</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- Isi Modal -->
                                                    <div class="box-body">
                                                    <form id="demo-form2" action="<?php echo base_url()?>Parking/updateWarna" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                      
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Warna
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" readonly  name="id_warna" class="form-control col-md-7 col-xs-12" value="<?php echo $f->id_warna; ?>">
                                                        </div>
                                                       </div><br/><br/><br/>
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warna
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="warna" class="form-control col-md-7 col-xs-12" value="<?php echo $f->warna; ?>">
                                                        </div>
                                                       </div><br/><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                        </label>
                                                         <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                                             <button class="btn btn-success">Ubah Data</button>
                                                         </div>
                                                       </div>      
                                                    </form>
                                                    <form method="POST" action="<?php echo base_url()?>Parking/delWarna" onsubmit="return confirm('Apakah anda yakin ingin menghapus warna tersebut?');">
                                                      <input type="hidden" id="first-name" required readonly name="id_warna" class="form-control col-md-7 col-xs-12" value="<?php echo $f->id_warna; ?>" >
                                                           <button class="btn btn-danger">Hapus Data</button>
                                                         </form>
                                              </div><br/>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                 <?php } ?>  
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
            
            <!--                  modal data -->
                                      <div class="modal fade" id="addParking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Add Parking lot</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- Isi Modal -->
                                                    <div class="box-body">
                                                    <form id="demo-form2" action="<?php echo base_url()?>Parking/addParking" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                      
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Parking Lot
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="parking" class="form-control col-md-7 col-xs-12" placeholder="cth: A1">
                                                        </div>
                                                       </div><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                        </label>
                                                         <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                                             <button class="btn btn-success">Add Data</button>
                                                         </div>
                                                       </div>      
                                                    </form>
                                              </div><br/>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
            
            <div class="modal fade" id="addWarna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Add Warna</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- Isi Modal -->
                                                    <div class="box-body">
                                                    <form id="demo-form2" action="<?php echo base_url()?>Parking/addWarna" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                      
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warna
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="warna" class="form-control col-md-7 col-xs-12" placeholder="cth: Hijau">
                                                        </div>
                                                       </div><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                        </label>
                                                         <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                                             <button class="btn btn-success">Add Data</button>
                                                         </div>
                                                       </div>      
                                                    </form>
                                              </div><br/>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
            
            <div class="modal fade" id="addTipe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Add Tipe</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- Isi Modal -->
                                                    <div class="box-body">
                                                    <form id="demo-form2" action="<?php echo base_url()?>Parking/addTipe" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                      
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipe
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="tipe" class="form-control col-md-7 col-xs-12" placeholder="cth: Hijau">
                                                        </div>
                                                       </div><br/>
                                                        <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Biaya Jam Pertama
                                                        </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <input type="text" id="first-name" required  name="jam_pertama" class="form-control col-md-7 col-xs-12" placeholder="cth: 25000">
                                                        </div>
                                                       </div><br/>
                                                       <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                                        </label>
                                                         <div class="col-md-9 col-sm-9 col-xs-12"><br/>
                                                             <button class="btn btn-success">Add Data</button>
                                                         </div>
                                                       </div>      
                                                    </form>
                                              </div><br/>
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
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>
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