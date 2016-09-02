<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/tes.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </head>
  <body>
    <div class="container-fluid">
  
  <div id="header"></div>


 <div class="container" >

  <div class="col-md-3 col-sm-2"></div>
  <div class="col-md-6 col-sm-8" id="login_container">
    <div class="row">
        <div class="col-sm-2 "></div>
      <div class="col-sm-8 col-xs-12">  
          <form class="omb_loginForm" action="<?php echo base_url('login/log_in')   ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="pass" placeholder="Password">
          </div>

          <p class="admin_btn">
          <a href="<?php echo base_url('admin')   ?>">Login as Admin</a>
        </p>

          <button class="btn btn-lg btn-warning btn-block" class="log_in" type="submit">Login</button>
          <!-- <input type="submit" name="signin" value="Sign In" class="btn btn-primary"> -->
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4 col-xs-12">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Remember Me
        </label>
      </div>
      <div class="col-sm-4 col-xs-12">
        <p class="forgot_pwd">
          <a href="#">Forgot password?</a>
        </p>
      </div>
    </div>  
  </div>
        
</div>
  </div>

<script src="<?php echo base_url() ?>js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </body>
</html>