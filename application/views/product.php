<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product</title>

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
  <pre>
    <?php print_r($this->session->userdata()) ?>
  </pre>
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>Product</h1>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Serial Number</th>
                <th>Article Number</th>
                <th>Description</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              <?php foreach ($products as $product): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $product->serial_number ?></td>
                  <td><?php echo $product->article_number ?></td>
                  <td><?php echo $product->description ?></td>
                  <td><?php echo $product->type ?></td>
                  <td><a href="<?php echo base_url('product/edit/'.$product->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('product/delete/'.$product->id) ?>" class="btn btn-danger">Delete</a></td>  
                </tr>
              <?php $i++ ?>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <a href="<?php echo base_url('product/register_product') ?>" class="btn btn-primary">Register</a>
          
        </div>
      </div>    
    </div>

    
  </body>
</html>