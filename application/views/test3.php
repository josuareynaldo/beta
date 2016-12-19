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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
 <script type="text/javascript">
       
                    $(document).ready(function(){

                        $("#serial_number").autocomplete({
                            source: 'manager/lookup',

                            focus: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                $('#article_number').val(ui.item.value5);
                                $('#description').val(ui.item.value);
                                $('#type').val(ui.item.value1);
                                $('#service_date').val(ui.item.value2);
                                $('#date_install').val(ui.item.value3);
                                $('#img').attr("src",ui.item.value4);
                                $('#img').show();
                                return false;
                            },

                            select: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                $('#article_number').val(ui.item.value5);
                                $('#description').val(ui.item.value);
                                $('#type').val(ui.item.value1);
                                $('#service_date').val(ui.item.value2);
                                $('#date_install').val(ui.item.value3);
                                $('#img').attr("src",ui.item.value4);
                                $('#img').show();
                                return false;
                            }
                        });
                    });
                </script>

  </head>
  <body>
  <div class="container">
    <h1>Tutorial Autocomplete</h1>
    <hr>

    <div class="form-group">
                    <label for="serial_number">Serial Number</label>
                    <input class="form-control ui-widget" id="serial_number" type="text" name="name" placholder="" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="article_number">Article Number</label>
                    <input class="form-control" id="article_number" type="text" name="article_number" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" id="description" type="text" name="description" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input class="form-control" id="type" type="text" name="type" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="service_date">Service Date</label>
                    <input class="form-control" id="service_date" type="text" name="service_date" placholder="" disabled="">
                </div>
                <div class="form-group">
                    <label for="date_install">Installation Date</label>
                    <input class="form-control" id="date_install" type="text" name="date_install" placholder="" disabled="">
                </div>
                <div class="form-group">
                  <label for="date_install">Parts Image</label>
                  <br>
                  <img id="img">
                </div>


    
  </body>
 
</html>