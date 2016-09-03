<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
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
          <h2>User Registration</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('user/add_user') ?>" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input class="form-control" type="text" name="name" placeholder="Input name" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Input password" required="1">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea class="form-control"  name="address" placeholder="Input address" required="1" ></textarea>
            </div>

            
            <label for="">Position</label><br>
            <div class="radio-btn">
              <input type="radio" name="pos" value="Employee"> <b>Employee</b>
              <input type="radio" name="pos" value="Manager"> <b>Manager</b>
              <input type="radio" name="pos" value="Stakeholder"> <b>Stakeholder</b>
            </div>
            <div class="form-group">
              <input type="submit" name="register" value="Register" class="btn btn-primary">
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