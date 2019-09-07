<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Product Data | Enterprise Smart  Systems</title>

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
        
            <div class="container-fluid" >
              <div class="row" >
                  <div class="col-lg-8">
                        <div class="x_panel">
                          <div class="x_content" >
                            <table>
                              <tr>
                                <td align="center" style="width:30%;"> <img src="<?php echo base_url().'assets/logologo.jpeg' ?>" width="120" class="img-responsive"></td>
                                <td style="width:40%;"><h1 align="center"><b>Mall Awwab</b></h1><p align="center">Jl. Tirta Dahlia no.24, Graha Tirta | Telp. 0821-1312-0808</p></td>
                                <td style="width:30%;">&nbsp;&nbsp;</td>
                              </tr>
                              <tr >
                                  <td>&nbsp;&nbsp;</td>
                                  <td align="center"><b><u>Kartu Parkir</u></b>&nbsp;&nbsp;</td>
                                  <td>&nbsp;&nbsp;</td>
                            </table>
                            <hr>
                            <?php foreach($data_mobil as $pd){ ?>
                              <br/>
                            <table>
                              <tr>
                                <td><b>Plat Nomer &nbsp;&nbsp;</b></td>
                                <td><b>:&nbsp;&nbsp;</b></td>
                                <td><?php echo $pd->plat_no; ?></td>
                              </tr>
                              <tr>
                                <td><b>Tanggal masuk&nbsp;&nbsp;</b></td>
                                <td><b>:&nbsp;&nbsp;</b></td>
                                <td><?php echo $pd->tanggal_masuk; ?></td>
                              </tr>
                              <tr>
                                <td><b>Jam masuk&nbsp;&nbsp;</b></td>
                                <td><b>:&nbsp;&nbsp;</b></td>
                                <td><?php echo $pd->jam_masuk; ?></td>
                              </tr>
                              
                            </table>
                            <br/><br/>
                              <h4 align="left">Lokasi Parkir :</h4>
                              <h1 align="left"><b><?php echo $pd->parking_lot; ?></b></h1>
                            <?php } ?>
                              
                </div>
                  </div></div></div></div></div>
                           
                </div></div>
                
       <script>
        var myVar = setTimeout(pageprint, 1000);
        function pageprint() {
          window.print();
        }
    </script>

</body>