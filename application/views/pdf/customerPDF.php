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
        <img src="image/dhass/image002.png" style="margin-bottom: 10px;margin-left: 50px;width: 300px;height: 150px">
      </div>

      <!-- <div class="headerr">
        <h4 style="color: black; font-family: calibri; text-align: center">DATA REPLACEMENT PART INK JET LEIBRINGER</h4>
        <hr style="border-style: solid;">
      </div> -->


      <div style="text-decoration: underline; font-weight: bold; font-family: calibri;text-align: center">Owner Registration Form</div>
      <div style="font-family: calibri; text-align: center; margin-top: 10px">(return by fax, mail or E-mail)</div>

    <div class="row">
        <div class="col-xs-6" style="margin-top: 10px;">
              Serial No. : <?php echo $owner_form->serial_number ?><br>
              Article No. : <?php echo $owner_form->article_number ?><br>
              Date of Installation : <?php echo $owner_form->date_install ?><br><br>

              
                  <div style="font-family: calibri; text-decoration: underline;">Customer/end user information</div>
                    Company : <?php echo $owner_form->company ?><br>
                    Address : <?php echo $owner_form->address ?> <br>
                    City : <?php echo $owner_form->city ?><br>
                    Zipcode : <?php echo $owner_form->zipcode ?><br>
                    Contact : <?php echo $owner_form->contact ?><br>
                    Telp : <?php echo $owner_form->telp ?> <br>
                    Fax : <?php echo $owner_form->fax ?><br>
                    Email : <?php echo $owner_form->email ?><br>


        <div id="boxes" style="width: 100%; margin-top: 10px">
              <div style="float: left;width: 47%;font-family: calibri;text-decoration: underline; font-weight: bold;">Industry
              </div>

              <div style="float: right;width: 47%;font-family: calibri;text-decoration: underline; font-weight: bold;">Material
              </div>
                
                    <div style="float: left;width:47%;height:80px;border:2px solid #000;"><?php echo $owner_form->industry ?>
                    </div>

                    <div style="float: right;width:47%;height:80px;border:2px solid #000;"><?php echo $owner_form->material ?>
                    </div>
          </div>

          <div class="col-xs-6">
            <div style="margin-top: 5px;float: left;width: 47%;font-family: calibri;text-decoration: underline; font-weight: bold;">Product Desc / Comments</div> 
            <div style="width:94%;height:80px;border:2px solid #000;"><?php echo $owner_form->description ?></div>
          </div>
     </div>

      <div id="box" style="width:100%; margin-top: 10px;">
              <div style="float: left;width: 47%;font-family: calibri;text-decoration: underline; font-weight: bold;">Ink No.
              </div>

              <div style="float: right;width: 46%;font-family: calibri;text-decoration: underline; font-weight: bold;">Solvent No.
              </div>

              <div id="box1" style="float:left;height: 30px;width:24%;border:2px solid black;">BLACK</div>
              <div id="box2" style="float:right;height: 30px;width:24%;border:2px solid black;"><?php echo $owner_form->ink_number ?></div>

              <div id="box3" style="float:left;height: 30px;width:24%;border:2px solid black;">SOLVENT</div>
              <div id="box4" style="float:right;height: 30px;width:24%;border:2px solid black;"><?php echo $owner_form->solvent_number ?></div>
      </div>

      <div id="kotak" style="width:100%; margin-top: 30px;">
              <div id="box1" style="float:left;height: 30px;width:24%;border:2px solid black;"><div style="font-weight: bold">Distributor</div></div>
              <div id="box2" style="float:left;height: 30px;width:24%;border:2px solid black;"><?php echo $owner_form->distributor ?></div>

              <div id="box3" style="float:right;height: 30px;width:24%;border:2px solid black;"><?php echo $owner_form->cust ?></div>
              <div id="box4" style="float:right;height: 30px;width:24%;border:2px solid black;"><div style="font-weight: bold">Customer/End User</div></div>      

              <div style="float: left;font-weight: bold;margin-top: 10px;"> Date </div>   
              <div style="float: left;font-weight: bold;margin-top: 5px;"> Signature</div>  
      </div>

          


      <div class="hal" style="margin-top: 30px; width: 100%;">
        <div id="kol" style="float: left; width: 47%; font-size: 12px;text-align: center;" >
            <div style="float: left; font-weight: bold;">Mail</div>
            <div>PT. DHASS SUMBER TEKNIK</div>
            <div>Rukan Mahkota Mas Blok K28/29</div>
            <div>Tangerang 15117, Banten- Indonesia</div>
            <div style="font-weight: bold;">Phone and Fax</div>
            <div>Telp: (021) 55743005/7, 5541505</div>
            <div>Fax: (021) 55743911</div>
        </div>

<!--         <div id="kol1" style="margin-top: 8px; width: 32%; font-size: 12px;" >
            <div>Mail</div>
            <div>PT. DHASS SUMBER TEKNIK</div>
            <div>Rukan Mahkota Mas Blok K28/29</div>
            <div>Tangerang 15117, Banten- Indonesia</div>
        </div> -->

        <div id="kol2" style="float: right; margin-top: 8px; width: 47%; font-size: 12px;text-align: center;" >
            <div style="font-weight: bold">Internet and Email</div>
            <div>www.dhass.co.id</div>
            <div>email: info@dhass.co.id</div>
        </div>
            
      </div>
      

      </div>       
  </body>
</html>