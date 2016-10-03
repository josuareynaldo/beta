<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Service</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"> -->
    <link href="<?php echo base_url()?>css/tes.css" type="text/css" rel="stylesheet">

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
        <div class="col-xs-4"></div>
        <div class="col-xs-4 text-center" >
          <h2>Form Service</h2>
        </div>
        <div class="col-xs-4"></div>
        
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('user/add_form_service') ?>" method="post">
            <h2>Printer Information</h2>
            <div class="form-group">
              <label for="">Date Service</label>
              <input class="form-control" type="date" name="date_service" placeholder="Input Date Service" required="1" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Serial No.</label>
              <input class="form-control" type="text" name="serial_number" placeholder="Input Serial Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Printer</label>
              <input class="form-control" type="text" name="printer" placeholder="Input Printer" required="1">
            </div>
            <div class="form-group">
              <label for="">Shipment Date</label>
              <input class="form-control" type="date" name="shipment_date" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Date Install</label>
              <input class="form-control" type="date" name="date_install" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Status</label>
               <input class="form-control" type="text" name="status" placeholder="Input Status" required="1">
            </div>
            <div class="form-group">
              <label for="">Ink No.</label>
              <input class="form-control" type="text" name="ink_number" placeholder="Input Ink Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Solvent No.</label>
              <input class="form-control" type="text" name="solvent_number" placeholder="Input Solvent Number" required="1">
            </div>
            <div class="form-group">
              <label for="">Technician</label>
              <input class="form-control" type="text" name="technician" placeholder="Input Technician" required="1">
            </div>
            
            <h2>Hydraulic of Information</h2>
            <div class="form-group">
              <label for="">Visco Act</label>
              <input class="form-control" type="text" name="visco_act" placeholder="Input Visco Act" required="1">
            </div>
            <div class="form-group">
              <label for="">Pres. Act</label>
              <input class="form-control" type="text" name="pres_act" placeholder="Input Pres Act" required="1">
            </div>
            <div class="form-group">
              <label for="">Mb. Value</label>
              <input class="form-control" type="text" name="mb_value" placeholder="Input Mb. Value" required="1">
            </div>
            <div class="form-group">
              <label for="">TMP</label>
              <input class="form-control" type="text" name="tmp" placeholder="Input TMP" required="1">
            </div>
            <div class="form-group">
              <label for="">BO. Cur</label>
              <input class="form-control" type="text" name="bo_cur" placeholder="Input BO. Cur" required="1">
            </div>
            <div class="form-group">
              <label for="">BO. Ref</label>
              <input class="form-control" type="text" name="bo_ref" placeholder="Input BO. Ref" required="1">
            </div>
            <div class="form-group">
              <label for="">Date LS</label>
              <input class="form-control" type="date" name="date_ls" placeholder="YYYY/MM/DD" required="1">
            </div>
            <div class="form-group">
              <label for="">Hour Ls</label>
              <input class="form-control" type="text" name="hour_ls" placeholder="Input Hour LS" required="1">
            </div>
            <div class="form-group">
              <label for="">Total Hour</label>
              <input class="form-control" type="text" name="total_hour" placeholder="Input Total Hour" required="1">
            </div>
            <div class="form-group">
              <label for="">Description of Problems</label>
              <textarea class="form-control"  name="problem" placeholder="Input problem" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Replace Part</label>
              <textarea class="form-control"  name="replace_part" placeholder="Input part" required="1" ></textarea>
            </div>
            <div class="form-group">
              <label for="">Service Work</label>
              <textarea class="form-control"  name="service_work" placeholder="Input your work" required="1" ></textarea>
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