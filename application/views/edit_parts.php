<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Part</title>

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
        <div class="col-xs-1"></div>
        <div class="col-xs-10 text-center" >
          <h2>Parts Registration</h2>
        </div>
        <div class="col-xs-1"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
          <form action="<?php echo base_url('product/update_acc') ?>" method="post">
            <div class="form-group">
              <label for="">Article Number Product</label>
              <input class="form-control" type="text" name="article_number_product" value="<?php echo $articles->article_number_product ?>" readonly="readonly">
            </div>
            <div class="form-group">
              <label for="">Article Number Accessories</label>
              <input class="form-control" type="text" name="article_number_acc" required="1" value="<?php echo $articles->article_number_acc ?>" readonly="readonly">
            </div>
            <div class="form-group">
              <label for="">Serial Number</label>
              <input class="form-control" type="text" name="serial_number" placeholder="Input article number" required="1" value="<?php echo $articles->serial_number ?>" readonly="readonly">
            </div>
           <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control"  name="description" value="<?php echo $articles->description ?>" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Type</label>
              <textarea class="form-control"  name="type" value="<?php echo $articles->type ?>" required="1" ></textarea>
            </div>
            <div class="form-group">
             <label for="">Quantity</label>
             <input class="form-control" type="number" name="quantity" value="<?php echo $articles->article_number ?>" required="1">
           </div>
            <div class="form-group">
              <label for="">Service Date</label>
              <input class="form-control" type="date" name="service_date" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Installation Date</label>
              <input class="form-control" type="date" name="date_install" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $articles->serial_number ?>">
              <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
          </form>
        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>

    
  </body>
</html>