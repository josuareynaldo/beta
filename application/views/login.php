<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign in</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">

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
        <div class="col-xs-4">
          <form action="<?php echo base_url('login/log_in') ?>" method="post">
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Input name" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Input password" required="1" autocomplete="off">
            </div>

            <input type="submit" name="signin" value="Sign In" class="btn btn-primary">
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>
      
    </div>
  </body>
</html>