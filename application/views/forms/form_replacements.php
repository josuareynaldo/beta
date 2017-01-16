<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Replacement</title>

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
    <script src="<?php echo base_url() ?>js/jquery-1.11.1.min.js">"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/time.js"></script>
  </head>
  <body>
  <div class="container">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 text-center" >
                  <h2>Form Replacement</h2>
                </div>
                <div class="col-xs-4"></div>
                
            </div>
            <div class="row">
                <div class="col-xs-4"></div>
                  <div class="col-xs-4">
                    <form action="<?php echo base_url($this->session->userdata('position')); ?>/add_form_replacement"  method="post">
                      <div class="form-group">
                        <label for="">Exchange ID</label>
                        <input class="form-control" type="text" name="exchange_id" placeholder="Input Exchange ID" required="1" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label for="">Article No.</label>
                        <input class="form-control" id="article_number" type="text" name="article_number" placeholder="Input Article Number" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Date Record</label>
                        <input class="form-control" type="date" name="date_record" placeholder="YYYY/MM/DD" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Description</label>
                        <input class="form-control" type="text" name="description" placeholder="Input Description" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Technician</label>
                        <input class="form-control" type="text" name="technician" placeholder="Input Technician" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Serial No.</label>
                        <input class="form-control" id="serial_number" type="text" name="serial_number" placeholder="Input Serial Number" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Date Install</label>
                        <input class="form-control" type="date" name="date_install" placeholder="YYYY/MM/DD" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Date Replace</label>
                        <input class="form-control" type="date" name="date_replace" placeholder="YYYY/MM/DD" required="1">
                      </div>
                      <div class="form-group">
                        <label for="">Problem Description</label>
                        <textarea class="form-control"  name="problem" placeholder="Input problem" required="1" ></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" name="save" value="Save Form" class="btn btn-primary">
                      </div>
                    </form>

                    <div class="alert" id="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      Article Number/ Serial Number is not found in database
                    </div>

                  </div>
                <div class="col-xs-4"></div>
            </div>    
  </div>
    
  </body>
</html>

<script>
      $(document).ready(function(){

                            $("#article_number").autocomplete({
                                source: '<?php echo base_url()?>manager/lookupProduct',

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
                            $("#serial_number").autocomplete({
                            source: '<?php echo base_url() ?>manager/lookupParts',

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
                            $("#alert").alert().hide();
                        });
</script>

