<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Product</title>

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
          <h2>Product Registration</h2>
        </div>
        <div class="col-xs-1"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
          <form action="<?php echo base_url('product/update') ?>" method="post">
            <div class="form-group">
              <label for="">Article Number</label>
              <input class="form-control" type="text" name="article_number" placeholder="Input Serial Number" value="<?php echo $products->article_number ?>" >
            </div>
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Input Product Name"> 
            </div>
           <div class="form-group">
              <label for="shipment_date">Shipment Date</label>
              <input class="form-control" type="date" name="shipment_date" autocomplete="off" id="shipment_date">
            </div>
            <div class="form-group">
              <label for="product_name">Description</label>
              <input class="form-control" type="text" id="description" name="description" placeholder="Input Description"> 
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $products->article_number ?>">
              <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
          </form>
        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>

    
  </body>
</html>