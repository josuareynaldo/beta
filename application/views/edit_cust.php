<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Customer</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js">"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10 text-center" >
          <h2>Edit Customer</h2>
        </div>
        <div class="col-xs-1"></div>
        
    </div>
   <!--  <pre>
      <?php print_r($user) ?>
    </pre> -->
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
          <form action="<?php echo base_url('salesuser/update_customer') ?>" method="post">
           <div class="form-group">
              <label for="">Company</label>
              <input class="form-control" type="text" name="company" placeholder="Input Company" value="<?php echo $customer->company ?>" disabled="1">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input class="form-control" type="text" name="address" placeholder="Input Address" required="1">
            </div>
            <div class="form-group">
              <label for="">Telp</label>
              <input class="form-control" type="text" name="telp" placeholder="Input Telephone" required="1">
            </div>
            <div class="form-group">
              <label for="">Fax</label>
              <input class="form-control" type="text" name="fax" placeholder="Input Fax" required="1">
            </div>
            <div class="form-group">
              <label for="">Hp</label>
              <input class="form-control" type="text" name="hp" placeholder="Input HP" required="1">
            </div>
            <div class="form-group">
              <label for="">Email</label>
               <input class="form-control" type="text" name="email" placeholder="Input Email" required="1">
            </div>
             <div class="form-group">
              <label for="">Sales</label>
               <input class="form-control" type="text" name="sales" placeholder="Input Sales" required="1">
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $customer->id ?>">
              <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
          </form>
        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>

    
  </body>
</html>