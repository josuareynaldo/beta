<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Replacement</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
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
        <img src="image/logo-web.png" style="margin-left: 10px">
      </div>

      <div class="headerr">
        <h4 style="color: black; font-family: calibri; text-align: center">DATA REPLACEMENT PART INK JET LEIBRINGER</h4>
        <hr style="border-style: solid;">
      </div>


      <div style="width:auto;height:auto;border:2px solid #000; font-family: calibri;">WORKSHOP</div>

      <br>

        <div class="row">
          <div class="col-xs-6">
          Serial No. : <?php echo $form_replacement->serial_number ?><br><br>

            <table style="width:100%; text-align: left;">
              <tr>
              <th> 
                Exchange ID : <?php echo $form_replacement->exchange_id ?><br>
                Date Record : <?php echo $form_replacement->date_record ?> <br>
                Technician : <?php echo $form_replacement->technician ?><br>
                Date Install : <?php echo $form_replacement->date_install ?><br>
              </th>
             <!--  </tr>
              </table>

               <table style="width:300px; text-align: right">
               <tr> -->
              <th>
                Article No : <?php echo $form_replacement->article_number ?><br>
                Description : <?php echo $form_replacement->description ?><br>
                Serial No. : <?php echo $form_replacement->serial_number ?><br>
                Date Replace : <?php echo $form_replacement->date_replace ?><br>
              </th>
            </tr>
            </table>
          </div>

          <div class="col-xs-6">
            <h4>Description of Problem</h4> 
            <div style="width:300px;height:120px;border:2px solid #000;"><?php echo $form_replacement->problem ?></div>
          </div>
            </div>

          <br>
          <br>
          <div class="row">
            <div class="col-xs-6">

            <table style="width:100%; text-align: left;">
              <tr>
              <th> 
                Exchange ID : <?php echo $form_replacement->exchange_id ?><br>
                Date Record : <?php echo $form_replacement->date_record ?> <br>
                Technician : <?php echo $form_replacement->technician ?><br>
                Date Install : <?php echo $form_replacement->date_install ?><br>
              </th>
              <th>
                Article No : <?php echo $form_replacement->article_number ?><br>
                Description : <?php echo $form_replacement->description ?><br>
                Serial No. : <?php echo $form_replacement->serial_number ?><br>
                Date Replace : <?php echo $form_replacement->date_replace ?><br>
              </th>
            </tr>
            </table>
          </div>
          <div class="col-xs-6">
            <h4>Description of Problem</h4> 
            <div style="width:300px;height:120px;border:2px solid #000;"><?php echo $form_replacement->problem ?></div>
          </div>
      </div>

      <div class="hal" style="margin-top: 40px;">
      <hr style="border-style: solid">
          <h6 style="float: right">Halaman <?php echo $form_replacement->id ?></h6>
          <div class="hal_kiri" style="float: left">
            <h6>Tanggal Cetak : <?php echo $form_replacement->date_replace ?></h6>
          </div>
      </div>
      
      </div>       
  </body>
</html>