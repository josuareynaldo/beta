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
    <!-- <script src="<?php echo base_url() ?>jquery/jquery.min.js"></script> -->
    <script src="<?php echo base_url()?>jquery/jquery-ui.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    
     <!-- <script type="text/javascript">
      $(document).ready(function() {
        $(".js-example-basic-single").select2();
      });
    </script> -->
    <script type="text/javascript">
      $(function () {

          $("#kode").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url

              minLength:0,

              delay:0,

              source:'<?php echo base_url('test/get_allkota'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota

              select:function(event, ui){

                  $('#name').val(ui.item.name);

                  $('#address').val(ui.item.address);

                  $('#position').val(ui.item.position);

                  }

              });

          });
    </script>
  </head>
  <body>
  

<!-- <select class="js-example-basic-single">
  <option value="AL">Alabama</option>
  
  <option value="WY">Wyoming</option>
</select> -->
  
<div class="container">

<p> <input type="text" id="kode" placeholder="Ketikan nama kota" > </p>

<p>

 Nama Kota : </br><input type="text" id="name"></br>

 Keterangan :</br> <textarea id="address"></textarea></br>
 
 Ibu Kota : </br><input type="text" id="position"></br>

 

 </p>

</div>

    
  </body>
 
</html>