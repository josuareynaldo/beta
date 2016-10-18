<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Exchange</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"> -->
    <link href="<?php echo base_url()?>css/tes.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4 text-center" >
          <h2>Form Exchange</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('user/add_form_exchange') ?>" method="post">
           <div class="form-group">
              <label for="">Article No.</label>
              <input class="form-control" type="text" name="article_number" placeholder="Input Article Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Serial No.</label>
              <input class="form-control" type="text" name="serial_number" placeholder="Input Serial Number" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Date Replacement</label>
              <input class="form-control" type="date" name="date_replace" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Run Time</label>
              <input class="form-control" type="text" name="run_time" placeholder="Input Run Time" required="1">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control" type="text" name="description" placeholder="Input Description" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Distributor</label>
              <input class="form-control" type="text" name="distributor" placeholder="Input Distributor" required="1">
            </div>
            <div class="form-group">
              <label for="">Technician</label>
              <input class="form-control" type="text" name="technician" placeholder="Input Technician" required="1">
            </div>
            <div class="form-group">
              <label for="">Customer</label>
              <input class="form-control" type="text" name="cust" placeholder="Input Customer" required="1">
            </div>
            <div class="form-group">
              <label for="">Part of Stock ? </label><br>
              <input type="radio"  name="stock" value="Yes"> Yes<br>
              <input type="radio"  name="stock" value="No"> No<br>
            </div>
            <div class="form-group">
              <label for="">Dismantled from a printer ?</label><br>
              <input type="radio" name="dismantled" value="Yes" required="1" > Yes<br>
              <input type="radio" name="dismantled" value="No" required="1" > No<br>
            </div>
            <div class="form-group">
              <label for="">Description of Fault</label><br>
              <input type="checkbox"  name="descr[]" value="no function"  > no function<br>
              <input type="checkbox"  name="descr[]" value="malfunction"  > malfunction<br>
              <input type="checkbox"  name="descr[]" value="leak"  > leak<br>
              <input type="checkbox"  name="descr[]" value="out of box fault"  > out of box fault<br>
            </div>
            <div class="form-group">
              <label for="">Condition</label><br>
              <input type="checkbox"  name="cond[]" value="Wet"  > wet<br>
              <input type="checkbox"  name="cond[]" value="Cold"  > cold<br>
              <input type="checkbox"  name="cond[]" value="Humid" > humid<br>
              <input type="checkbox"  name="cond[]" value="Dust"  > dust<br>
              <input type="checkbox"  name="cond[]" value="Hot"  > hot<br>
              <input type="checkbox"  name="cond[]" value="Vibration"  > vibration<br>
              <input type="checkbox"  name="cond[]" value="Other"  > other<br>
            </div>
            <div class="form-group">
              <label for="">Scrapping Permitted if repair cost wouldn't be economic(otherwise redelivery unfree)</label><br>
              <input type="radio"  name="scrapping" value="Yes" required="1" > Yes<br>
              <input type="radio"  name="scrapping" value="No" required="1" > No<br>
            </div>
            <div class="form-group">
              <label for="">If No warranty / exchange part => herewith new order for this part</label><br>
              <input type="radio"  name="warranty" value="Yes" required="1" > Yes<br>
              <input type="radio"  name="warranty" value="No" required="1" > No<br>
            </div>
            <div class="form-group">
              <label for="">Contact Person</label>
              <input class="form-control" type="text" name="contact" placeholder="Input Contact Person" required="1" >
            </div>
            <div class="form-group">
              <label for="">Date</label>
              <input class="form-control" type="date" name="date" placeholder="YYYY/MM/DD" required="1" >
            </div>
            <div class="form-group">
              <input type="submit" name="save" value="Submit" class="btn btn-primary">
            </div>
           <!--  <?php include 'checkbox.php';?> -->
          </form>

       

        </div>
        <div class="col-xs-4"></div>
      </div>

      
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>

    </div>


    
  </body>
</html>