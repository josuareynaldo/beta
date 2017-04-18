<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trial Request</title>

    <!-- Bootstrap -->
    <!-- <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>    
      <div class="container">

      <div class="logo">
        <img src="image/logo-web.png" style="margin-left: 67px; height: 80px" >
      </div>

      <div class="headerr">
        <h4 style="color: black; font-family: calibri; text-align: left">TRIAL REQUEST FORM</h4>
        <hr style="border-style: solid;">
      </div>


      <div style="width:auto;height:auto;border:2px solid #000; font-family: calibri;">NO <?php echo $trial_req->trial_no ?>/VII/TECH-REQUEST/<?php echo date("Y") ?> </div>

      <br>

        <div class="row">
          <div class="col-xs-6">
            Trial / Install No. : <?php echo $trial_req->trial_no ?><br>              
            <div>
                    Date of Start Trial :  <?php echo $trial_req->date_start ?><br>
                    Date of End Trial : <?php echo $trial_req->date_end ?>

                <h4 style="text-align: left; margin-top: 3px; margin-bottom: 5px">CUSTOMER INFORMATION</h4>

                    Company : <?php echo $trial_req->company ?><br>
                    Street : <?php echo $trial_req->street ?><br>
                    Contact Person : <?php echo $trial_req->contact ?><br>
                    Phone / Fax / HP : <?php echo $trial_req->phone ?><br>
                    Email : <?php echo $trial_req->email ?><br>
                    Business Field : <?php echo $trial_req->bus_field ?>

                    <h4 style="text-align: left; margin-top: 3px; margin-bottom: 5px">APPLICATION</h4>

                    Machine Type : <?php echo $trial_req->machine_type ?><br>
                    Ink Type : <?php echo $trial_req->ink_type ?><br>
                    Solvent Type : <?php echo $trial_req->solvent_type ?><br>
                    Material to Print : <?php echo $trial_req->material ?><br>
                    Printing Application : <?php echo $trial_req->printing_app ?><br>
                    Accessories Support : <?php echo $trial_req->acc_supp ?><br>
                    Sensor Type : <?php echo $trial_req->sensor_type ?><br>
                    Encoder : <?php echo $trial_req->encoder ?><br>
                   

                <div class="col-xs-6" style="margin-top: -10px">
                    <h4>Sales Note</h4> 
                    <div style="width:280px;height:100px;border:2px solid #000;"><?php echo $trial_req->sales_note ?></div>
                </div>
                   
                <div class="col-xs-6" style="margin-top: -10px">
                    <h4>Technical Note</h4> 
                    <div style="width:280px;height:100px;border:2px solid #000;"><?php echo $trial_req->tech_note ?></div>
                </div>

              </div>
          </div>

          <br>
          <br>

      <div class="hal" style="margin-top: -10px;">
          <div class="ttd" style="border: 2px solid #000; height: 80px">
            <h5>Tanggal Cetak : <?php echo date("y/m/d") ?></h5>
          </div>
      </div>
      
      </div>       
  </body>
</html>