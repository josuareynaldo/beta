<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Report Form</title>

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
          <h2>Report Form</h2>
        </div>
        <div class="col-xs-4"></div>
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('form_sales/add_report') ?>" method="post">
            <div class="form-group">
              <label for="">Date of Report</label>
              <input class="form-control" type="date" name="date_report" placeholder="YYYY/MM/DD" value="<?php echo date("Y-m-d"); ?>" required="1" disabled="1">
            </div>
            <div class="form-group">
              <label for="">Sales Name</label>
              <input class="form-control" type="text" name="sales_name" placeholder="Input Sales Name" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Visiting Date</label>
              <input class="form-control" type="date" name="visit_date" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Customer</label>
              <input class="form-control" type="text" name="customer" placeholder="Input Customer" required="1">
            </div>
            <div class="form-group">
              <label for="">Report</label><br>
              <input type="radio"  name="report" value="Visit" required="1" > Visit<br>
              <input type="radio"  name="report" value="Trial" required="1" > Trial<br>
              <input type="radio"  name="report" value="Negotiations" required="1" > Negotiations<br>
              <input type="radio"  name="report" value="Quote" required="1" > Quote<br>
              <input type="radio"  name="report" value="Order" required="1" > Order<br>
            </div>
            <div class="form-group">
              <label for="">Action Plan</label>
               <textarea class="form-control" type="text" name="action_plan" placeholder="Input Action Plan" required="1"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="save" value="Save Form" class="btn btn-primary">
            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>
      </div>
  </body>
</html>