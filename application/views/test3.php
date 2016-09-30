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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript">
       
        $(document).ready(function(){

            $("#name").autocomplete({
                source: 'test/lookup',

                focus: function(event, ui){
                    event.preventDefault();

                    $(this).val(ui.item.label);
                    $('#position').val(ui.item.value);

                    return false;
                },

                select: function(event, ui){
                    event.preventDefault();

                    $(this).val(ui.item.label);
                    $('#position').val(ui.item.value);
                    
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

    <form style="width:50%;">
        <div class="form-group">
            <label for="name">Nama user</label>
            <input class="form-control ui-widget" id="name" type="text" name="name" placholder="Nama Negara Asia Tenggara" required autocomplete="off">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input class="form-control" id="position" type="text" name="position" placholder="Ibu Kota Negara" disabled="">
        </div>
    </form>
</div>


    
  </body>
 
</html>