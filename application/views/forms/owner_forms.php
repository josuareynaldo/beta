<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Owner Form</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery-ui.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/search.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.dataTables.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js">"></script>
    <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/time.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4 text-center" >
          <h2>Owner Form</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url(); ?>form_tech/add_owner_form" method="post">
            <div class="form-group">
              <label for="">Article Number Accessories</label>
              <input class="form-control" type="text" id="article_number_acc" name="article_number_acc" placeholder="Input Serial Number" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Article Number Product.</label>
              <input class="form-control" type="text" id="article_number_product" name="article_number" placeholder="Input Article Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Date of Installation</label>
              <input class="form-control" type="date" name="date_install" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Company</label>
              <input class="form-control" type="text" name="company" placeholder="Input Company" required="1">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input class="form-control" type="text" name="address" placeholder="Input Address" required="1">
            </div>
            <div class="form-group">
              <label for="">City</label>
              <input class="form-control" type="text" name="city" placeholder="Input City" required="1">
            </div>
            <div class="form-group">
              <label for="">Zipcode</label>
              <input class="form-control" type="text" name="zipcode" placeholder="Input Zipcode" required="1">
            </div>
            <div class="form-group">
              <label for="">Contact</label>
              <input class="form-control" type="text" name="contact" placeholder="Input Contact" required="1">
            </div>
            <div class="form-group">
              <label for="">Telp</label>
              <input class="form-control" type="text"  name="telp" placeholder="Input Telp" required="1" >
            </div>
            <div class="form-group">
              <label for="">Fax</label>
              <input class="form-control" type="text" name="fax" placeholder="Input fax" required="1" >
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input class="form-control" type="text" name="email" placeholder="Input email" required="1" >
            </div>
            <div class="form-group">
              <label for="">Industry</label>
              <input class="form-control" type="text" name="industry" placeholder="Input Industry" required="1" >
            </div>
            <div class="form-group">
              <label for="">Material</label>
              <input class="form-control" type="text" name="material" placeholder="Input Material" required="1" >
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control" type="text" name="description" placeholder="Input Description" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Ink No.</label>
              <input class="form-control" type="text" name="ink_number" placeholder="Input Ink Number" required="1" >
            </div>
            <div class="form-group">
              <label for="">Solvent No.</label>
              <input class="form-control" type="text" name="solvent_number" placeholder="Input Solvent Number" required="1" >
            </div>
            <div class="form-group">
              <label for="">Distributor</label>
              <input class="form-control" type="text" name="distributor" placeholder="Input distributor" required="1" >
            </div>
            <div class="form-group">
              <label for="">Customer / End User</label>
              <input class="form-control" type="text" name="cust" placeholder="Input Customer" required="1" >
            </div>
            <div class="form-group">
              <label for="">Date</label>
              <input class="form-control" type="date" name="date" placeholder="YYYY/MM/DD" required="1" >
            </div>
            <div class="form-group">
              <input type="submit" name="save" value="Save Form" class="btn btn-primary">
            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>

      
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>

    </div>

    
  </body>
</html>

<script>
      $(document).ready(function(){

                            $("#article_number_product").autocomplete({
                                source: '<?php echo base_url()?>product/lookup_Product',

                                focus: function(event, ui){
                                    event.preventDefault();

                                    $(this).val(ui.item.label);
                                    return false;
                                },

                                select: function(event, ui){
                                    event.preventDefault();

                                    $(this).val(ui.item.label);
                                    return false;
                                }
                            });

                          $("#article_number_acc").autocomplete({
                            source: '<?php echo base_url() ?>product/lookup_Acc',

                            focus: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                return false;
                            },

                            select: function(event, ui){
                                event.preventDefault();

                                $(this).val(ui.item.label);
                                return false;
                            }
                        });
                        });
</script>