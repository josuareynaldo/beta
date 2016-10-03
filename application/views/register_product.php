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
    <link href="<?php echo base_url() ?>css/fileinput.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/fileinput.js" type="text/javascript"></script>

    
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4 text-center" >
          <h2>Product Registration</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>

      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('product/add_product') ?>" method="post">
            <div class="form-group">
              <label for="">Serial Number</label>
              <input class="form-control" type="text" id="serial_number" name="serial_number" placeholder="Input serial number" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input class="form-control" type="text" id="product_name" name="product_name" disabled="" > 
            </div>
            <div class="form-group">
              <label for="">Article Number</label>
              <input class="form-control" type="text" name="article_number" placeholder="Input article number" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control"  name="description" placeholder="Input description" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Type</label>
              <textarea class="form-control"  name="type" placeholder="Input type" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="shipment_date">Shipment Date</label>
              <input class="form-control" type="date" name="shipment_date" autocomplete="off" id="shipment_date">
<<<<<<< HEAD
=======
            </div>
            <div class="form-group">
              <label for="">Service Date</label>
              <input class="form-control" type="date" name="service_date" required="1" autocomplete="off">
>>>>>>> origin/master
            </div>
            <div class="form-group">
              <label for="">Installation Date</label>
              <input class="form-control" type="date" name="date_install" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Upload Printer Image</label>
              <input class="file" type="file" name="upload_image" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <input type="submit" name="register_product" value="Register Product" class="btn btn-primary">

            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>

    </div>  
    <script type="text/javascript">
        $(document).ready(function(){
            
            $("#serial_number").autocomplete({
                source: '<?php echo base_url('product/lookup'); ?>',

                focus: function(event, ui){
                    event.preventDefault();

                    $(this).val(ui.item.label);
                    $('#product_name').val(ui.item.value);
                    $('#shipment_date').val(ui.item.value1);

                    return false;
                },

                select: function(event, ui){
                    event.preventDefault();

                    $(this).val(ui.item.label);
                    $('#product_name').val(ui.item.value);
                    $('#shipment_date').val(ui.item.value1);

                    return false;
<<<<<<< HEAD
                }
<<<<<<< HEAD
                else{
                  $('#product_name').hide();
                  $('label[for="product_name"]').hide();
                  $('#shipment_date').hide();
                  $('label[for="shipment_date"]').hide();
                }
            }
=======

>>>>>>> origin/master
=======
                }

>>>>>>> origin/master

            });
        });
    </script>
  </body>
</html>