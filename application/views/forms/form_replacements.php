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
          <h2>Form Replacement</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('user/add_form_replacement') ?>" method="post">
            <div class="form-group">
              <label for="">Exchange ID</label>
              <input class="form-control" type="text" name="exchange_id" placeholder="Input Exchange ID" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Article No.</label>
              <input class="form-control" type="text" name="article_number" placeholder="Input Article Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Date Record</label>
              <input class="form-control" type="date" name="date_record">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <input class="form-control" type="text" name="description" placeholder="Input Description" required="1">
            </div>
            <div class="form-group">
              <label for="">Technician</label>
              <input class="form-control" type="text" name="technician" placeholder="Input Technician" required="1">
            </div>
            <div class="form-group">
              <label for="">Serial No.</label>
              <input class="form-control" type="text" name="serial_number" placeholder="Input Serial Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Date Install</label>
              <input class="form-control" type="date" name="date_install">
            </div>
            <div class="form-group">
              <label for="">Date Replace</label>
              <input class="form-control" type="date" name="date_replace">
            </div>
            <div class="form-group">
              <label for="">Description of Problems</label>
              <textarea class="form-control"  name="problem" placeholder="Input problem" required="1" ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="save" value="Save Form" class="btn btn-primary">
            </div>
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