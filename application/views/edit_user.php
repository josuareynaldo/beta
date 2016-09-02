<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit</title>

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
        <div class="col-xs-4 text-center" >
          <h2>User Registration</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
    <pre>
      <?php print_r($user) ?>
    </pre>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('user/update') ?>" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input class="form-control" type="text" name="name" placeholder="Input name" value="<?php echo $user->name ?>" disabled="1">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Input password" value="">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea class="form-control"  name="address" placeholder="Input address" ><?php echo $user->address ?></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $user->id ?>">
              <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>
    </div>

    
  </body>
</html>