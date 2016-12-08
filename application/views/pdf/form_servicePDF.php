<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Service</title>

    <!-- Bootstrap -->
    <!-- <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <link rel="stylesheet" href="<?php echo base_url() ?>css/service.css">
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
        <img src="image/logo-web.png" style="margin-left: 10px">
      </div>

      <div class="headerr">
        <h3 style="color: black/*#F5F7FC*/; font-family: arial; text-align: center">Laporan Service Jet Printer Leibringer</h3>
        <hr style="border-style: solid;">
      </div>

      <br>
        <div class="row">
          <div class="col-xs-6">
          Serial No. : <?php echo $form_service->serial_number ?><br>

         <!--  <div style="border: 2px solid #000;width: 520px;height: 280px"> -->
            <table style="width:90%; text-align: right;">
              <tr>
              <th> 
              <div style="text-decoration: underline; font-weight: bold;">Printer Information</div> <br><br>
                Date Service : <?php echo $form_service->date_service ?><br>
                Serial No. : <?php echo $form_service->serial_number ?> <br>
                Printer : <?php echo $form_service->printer ?><br>
                Year Model : <?php echo $form_service->year_model ?><br>
                Date Install : <?php echo $form_service->date_install ?><br>
                Status : <?php echo $form_service->status ?> <br>
                Ink No. : <?php echo $form_service->ink_number ?><br>
                Solvent No. : <?php echo $form_service->solvent_number ?><br>
                Teknisi : <?php echo $form_service->technician ?><br>
              </th>
              <th>
              <br>
               <div style="text-decoration: underline; font-weight: bold;">Hydraulic Information</div> <br><br>
                Visco Act : <?php echo $form_service->visco_act ?><br>
                Pres. Act : <?php echo $form_service->pres_act ?> <br>
                Printer : <?php echo $form_service->printer ?><br>
                Mb. Value : <?php echo $form_service->mb_value ?><br>
                TMP : <?php echo $form_service->tmp ?><br>
                BO.Cur: <?php echo $form_service->bo_cur ?> <br>
                BO.Ref : <?php echo $form_service->bo_ref ?><br>
                Date LS : <?php echo $form_service->date_ls ?><br>
                Hour LS : <?php echo $form_service->hour_ls ?><br>
                Total Hour : <?php echo $form_service->total_hour ?><br>
              </th>
            </tr>
            </table>
          </div>
          </div>


          <div class="col-xs-6">
            <h4>Description of Problem</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->problem ?></div>
          </div>
   
             <div class="col-xs-6">
            <h4>Replace Part</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->replace_part ?></div>
          </div>

             <div class="col-xs-6">
            <h4>Service Work</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->service_work ?></div>
          </div>

        <div class="row">
          <div class="col-xs-6">
         <!--  <div style="border: 2px solid #000;width: 520px;height: 280px"> -->
            <table style="width:90%; text-align: left;">
              <tr>
              <th> 
              <div style="text-decoration: underline; font-weight: bold;">Printer Information</div> <br><br>
                Date Service : <?php echo $form_service->date_service ?><br>
                Serial No. : <?php echo $form_service->serial_number ?> <br>
                Printer : <?php echo $form_service->printer ?><br>
                Year Model : <?php echo $form_service->year_model ?><br>
                Date Install : <?php echo $form_service->date_install ?><br>
                Status : <?php echo $form_service->status ?> <br>
                Ink No. : <?php echo $form_service->ink_number ?><br>
                Solvent No. : <?php echo $form_service->solvent_number ?><br>
                Teknisi : <?php echo $form_service->technician ?><br>
              </th>
              <th>
              <br>
               <div style="text-decoration: underline; font-weight: bold;">Hydraulic Information</div> <br><br>
                Visco Act : <?php echo $form_service->visco_act ?><br>
                Pres. Act : <?php echo $form_service->pres_act ?> <br>
                Printer : <?php echo $form_service->printer ?><br>
                Mb. Value : <?php echo $form_service->mb_value ?><br>
                TMP : <?php echo $form_service->tmp ?><br>
                BO.Cur: <?php echo $form_service->bo_cur ?> <br>
                BO.Ref : <?php echo $form_service->bo_ref ?><br>
                Date LS : <?php echo $form_service->date_ls ?><br>
                Hour LS : <?php echo $form_service->hour_ls ?><br>
                Total Hour : <?php echo $form_service->total_hour ?><br>
              </th>
            </tr>
            </table>
          </div>
          </div>


          <div class="col-xs-6">
            <h4>Description of Problem</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->problem ?></div>
          </div>
   
             <div class="col-xs-6">
            <h4>Replace Part</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->problem ?></div>
          </div>
               <br>
             <div class="col-xs-6">
            <h4>Service Work</h4> 
            <div style="width:400px;height:120px;border:2px solid #000;"><?php echo $form_service->problem ?></div>
          </div>


        <div class="hal" style="margin-top: 40px;">
            <hr style="border-style: solid">
                    <h5 style="float: right">Halaman <?php echo $form_service->id ?></h5>
                <div class="hal_kiri" style="float: left">
                    <h5>Tanggal Cetak : <?php echo date("y/m/d") ?></h5>
                </div>
      </div>

    </div>
  </body>
</html>