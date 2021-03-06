<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible refresh" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/tes.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/font.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>js/time.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet"> -->

 

    
    <!-- Include all compiled plugins (below), or include individual files as needed 
    //ini javascript buat MODAL-->
    
  </head>
  <body>
    <div class="container-fluid">
  
  <div id="header"></div>


 <div class="container" >

  <div class="col-md-3 col-sm-2"></div>
  <div class="col-md-6 col-sm-8" id="login_container">
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>


    <div class="row">
        <div class="col-sm-2 "></div>
      <div class="col-sm-8 col-xs-12">  
          <form class="omb_loginForm" action="" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" id="password" name="pass" placeholder="Password">
          </div>


          <button class="btn btn-lg btn-warning btn-block" class="log_in" type="submit" id="login">Login</button>

          
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Attention</h4>
                </div>
                <div class="modal-body">
                <img src="<?php echo base_url(); ?>image/alert.png" style="width:100px">
                  <p>Username / Password Wrong</p>
                </div>
              </div>
            </div>
          </div>
          
         

           <div class="window-popup" id="popUpWindow" role="dialog">
                <div class="modal-header">
                </div>
            </div>


          <!-- <input type="submit" name="signin" value="Sign In" class="btn btn-primary"> -->
        </form>
      </div>
    </div>
  </div>
        
</div>
  </div>
<script src="<?php echo base_url() ?>js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){

    $('#login').click(function(){

      var username = $('#username').val();
      var password = $('#password').val();

      
      $.ajax({
        url: "<?php echo base_url('login/log_in') ?>",
        type: 'POST',
        data : {username : username, pass : password},
        success : function(result){
          if(result == 'failed'){
            $('#myModal').modal('show');
          }else{
            location.reload();
          }
        }
      });

    });

  });
</script>


  </body>
</html>