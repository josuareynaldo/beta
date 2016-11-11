<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Owner Form</title>

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
        <img src="image/dhass/image002.png" style="margin-left: 10px;width: 200px;height: 100px">
      </div>

      <!-- <div class="headerr">
        <h4 style="color: black; font-family: calibri; text-align: center">DATA REPLACEMENT PART INK JET LEIBRINGER</h4>
        <hr style="border-style: solid;">
      </div> -->


      <div style="text-decoration: underline; font-weight: bold; font-family: calibri;text-align: center">Owner Registration Form</div><br>
      <div style="font-family: calibri; text-align: center">(return by fax, mail or E-mail)</div>

      <br>
      <br>

    <div class="row">
        <div class="col-xs-6">
              Serial No. : <?php echo $owner_form->serial_number ?><br>
              Article No. : <?php echo $owner_form->article_number ?><br>
              Date of Installation : <?php echo $owner_form->date_install ?><br><br>

              <!--   <table style="width:50%;">
                  <tr>
                  <th>  -->
                  <div style="font-family: calibri; text-decoration: underline;">Customer/end user information</div>
                    Company : <?php echo $owner_form->company ?><br>
                    Address : <?php echo $owner_form->address ?> <br>
                    City : <?php echo $owner_form->city ?><br>
                    Zipcode : <?php echo $owner_form->zipcode ?><br>
                    Contact : <?php echo $owner_form->contact ?><br>
                    Telp : <?php echo $owner_form->telp ?> <br>
                    Fax : <?php echo $owner_form->fax ?><br>
                    Email : <?php echo $owner_form->email ?><br>
                 <!--  </th>
                  </tr>
                </table> -->
                <br>

           <!--  <table style="width:100%; text-align: left;">
              <tr>
              <th>  -->
              <h4 style="font-family: calibri;text-decoration: underline; font-weight: bold;">Industry</h4>
                <div style="width:250px;height:100px;border:2px solid #000;"><?php echo $owner_form->industry ?></div>
<!--               </th>
              <th> -->
               <h4 style="font-family: calibri;text-decoration: underline; font-weight: bold;">Material</h4>
                <div style="width:250px;height:100px;border:2px solid #000;"><?php echo $owner_form->material ?></div>
             <!--  </th>
            </tr>
            </table> -->
                
          </div>

          <div class="col-xs-6">
            <h4>Product Desc / Comments</h4> 
            <div style="width:180px;height:80px;border:2px solid #000;"><?php echo $owner_form->description ?></div>
          </div>
     </div>

          <br>
          <br>

      <div class="hal" style="margin-top: 40px;">
      <hr style="border-style: solid">

            <h5 style="float: right">Mail</h5>
            <h5>PT. DHASS SUMBER TEKNIK</h5>
            <h5>Rukan Mahkota Mas Blok K28/29</h5>
            <h5>Tangerang 15117, Banten- Indonesia</h5>

      </div>
      
      </div>       
  </body>
</html>