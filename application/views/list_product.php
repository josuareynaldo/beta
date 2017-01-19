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
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js">"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="product_database" class="tab-pane">
      <br>
      <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>Product</h1>
          <table class="table table-bordered sortable" id="productTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Article Number</th>
                <th>Product Name</th>
                <th>Shipment Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              <?php foreach ($products as $product): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $product->article_number ?></td>
                  <td><?php echo $product->product_name ?></td>
                  <td><?php echo $product->shipment_date ?></td>
                  <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#cart">See more</button></td>
                </tr>
  
              <?php $i++ ?>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <br>
          </div>
          </div>
          </div>
          </div>


          <div id="cart" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Quotation Info</h4>
                  </div>
                  <div class="modal-body">
                  <pre>
                    <?php print_r($product->article_number) ?>
                  </pre>
                      <form action="<?php echo base_url('test2/insert') ?>" method="post">
                        <div class="form-group">
                          <label for="">Quantity</label>
                          <input class="form-control" type="text" name="qty" required="1" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="">Price</label>
                          <input class="form-control" type="text" name="price" required="1" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <input type="submit" name="register" value="Add to Quotation" class="btn btn-primary">
                        </div>
                      </form>
                   
                  </div>
                </div>
              </div>
            </div>
  </body>
</html>