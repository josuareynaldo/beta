<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trial Result Form</title>

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
          <h2>Trial Result</h2>
        </div>
        <div class="col-xs-4"></div>
    </div>
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <form action="<?php echo base_url('form_sales/add_trial_result') ?>" method="post">
            <div class="form-group">
              <label for="">Trial / Install No.</label>
              <input class="form-control" type="text" name="result_no" placeholder="Input Trial No" required="1" autocomplete="off">
            </div>
            

            <h3>Customer Information</h3>
            <div class="form-group">
              <label for="">Company</label>
              <input class="form-control" type="text" name="company" placeholder="Input Company" required="1">
            </div>
            <div class="form-group">
              <label for="">Street</label>
               <input class="form-control" type="text" name="street" placeholder="Input Street" required="1">
            </div>
            <div class="form-group">
              <label for="">Contact Person</label>
              <input class="form-control" type="text" name="contact" placeholder="Input Contact Person" required="1">
            </div>
            <div class="form-group">
              <label for="">Profession</label>
              <input class="form-control" type="text" name="profession" placeholder="Input Profession" required="1">
            </div>
            <div class="form-group">
              <label for="">Phone</label>
              <input class="form-control" type="text" name="phone" placeholder="Input Phone" required="1">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input class="form-control" type="text" name="email" placeholder="Input Email" required="1">
            </div>
            <div class="form-group">
              <label for="">Business Field</label>
              <input class="form-control" type="text" name="bus_field" placeholder="Input Business Field" required="1">
            </div>
            
            <h3>Application</h3>
            <div class="form-group">
              <label for="">Machine Type</label><br>
              <input type="checkbox"  name="machine_type[]" value="JET2 neo"  > JET2 neo<br>
              <input type="checkbox"  name="machine_type[]" value="JET2 neo-3"  > JET2 neo-3<br>
              <input type="checkbox"  name="machine_type[]" value="JET3 up"  > JET3 up<br>
              <input type="checkbox"  name="machine_type[]" value="LCP"  > LCP<br>
              <input type="checkbox"  name="machine_type[]" value="HR"  > HR<br>
              <input type="checkbox"  name="machine_type[]" value="Other"  > Other<br>
            </div>
            <div class="form-group">
              <label for="">Ink Type</label>
              <input class="form-control" type="text" name="ink_type" placeholder="Input Ink Type" required="1">
            </div>
            <div class="form-group">
              <label for="">Solvent Type</label>
              <input class="form-control" type="text" name="solvent_type" placeholder="Input Solvent Type" required="1">
            </div>
            <div class="form-group">
              <label for="">Material to Print</label><br>
              <input type="checkbox"  name="material[]" value="Plastic"  > Plastic<br>
              <input type="checkbox"  name="material[]" value="Metal"  > Metal<br>
              <input type="checkbox"  name="material[]" value="Paper"  > Paper<br>
              <input type="checkbox"  name="material[]" value="Glass"  > Glass<br>
              <input type="checkbox"  name="material[]" value="Aluminium Foil"  > Aluminium Foil<br>
              <input type="checkbox"  name="material[]" value="Other"  > Other<br>
            </div>
            <div class="form-group">
              <label for="">Printing Application</label><br>
              <input type="checkbox"  name="printing_app[]" value="Feeder"  > Feeder<br>
              <input type="checkbox"  name="printing_app[]" value="Rewinder"  > Rewinder<br>
              <input type="checkbox"  name="printing_app[]" value="Conveyor"  > Conveyor<br>
              <input type="checkbox"  name="printing_app[]" value="Package Machine"  > Package Machine<br>
            </div>
            <div class="form-group">
              <label for="">Accessories Support</label><br>
               <input type="checkbox"  name="acc_supp[]" value="Linear"  > Linear Moving Device
              <input type="checkbox"  name="acc_supp[]" value="Mini"  > Mini Conveyor<br>
            </div>
            <div class="form-group">
              <label for="">Sensor Type</label><br>
              <input type="checkbox"  name="sensor_type[]" value="photo"  > Photoelectric
              <input type="checkbox"  name="sensor_type[]" value="fibre"  > Fibre Optic
              <input type="checkbox"  name="sensor_type[]" value="induc"  > Inductive Proximity<br>
            </div>
            <div class="form-group">
              <label for="">Encoder</label><br>
              <input type="checkbox"  name="encoder[]" value="rev1"  > 2.500 pulses/rev
              <input type="checkbox"  name="encoder[]" value="rev2"  > 10.000 pulses/rev<br>
            </div>

            <h3>Trial Result Data</h3>
            <div class="form-group">
              <label for="">Printed characters</label>
              <input class="form-control" type="text"  name="print_char" placeholder="Input character" required="1">
            </div>
            <div class="form-group">
              <label for="">Printed dots</label>
              <input class="form-control" type="text" name="dots" placeholder="Input dot" required="1">
            </div>
            <div class="form-group">
              <label for="">Counter Start</label>
              <input class="form-control" type="text" name="counter_start" placeholder="Input counter" required="1">
            </div>
            <div class="form-group">
              <label for="">Counter End</label>
              <input class="form-control" type="text" name="counter_end" placeholder="Input counter" required="1">
            </div>
            <div class="form-group">
              <label for="">Total Counter</label>
              <input class="form-control" type="text" name="total_counter" placeholder="Input total" required="1">
            </div>
            <div class="form-group">
              <label for="">Date Start</label>
              <input class="form-control" type="date" name="date_start" placeholder="" required="1">
            </div>
            <div class="form-group">
              <label for="">Date End</label>
              <input class="form-control" type="date" name="date_end" placeholder="" required="1">
            </div>
            <div class="form-group">
              <label for="">Time Start</label>
              <input class="form-control" type="text" name="time_start" placeholder="" required="1">
            </div>
            <div class="form-group">
              <label for="">Time End</label>
              <input class="form-control" type="text" name="time_end" placeholder="" required="1">
            </div>
            <div class="form-group">
              <label for="">Ink</label>
              <input class="form-control" type="text" name="ink" placeholder="Input ink" required="1">
            </div>
            <div class="form-group">
              <label for="">Solvent</label>
              <input class="form-control" type="text" name="solvent" placeholder="Input solvent" required="1">
            </div>
            <div class="form-group">
              <label for="">Temperature</label>
              <input class="form-control" type="text" name="temperature" placeholder="Input temperature" required="1">
            </div>
            <div class="form-group">
              <label for="">Humidity</label>
              <input class="form-control" type="text" name="humidity" placeholder="Input humidity" required="1">
            </div>
            <div class="form-group">
              <label for="">Trial Result</label>
              <textarea class="form-control" name="result" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
              <label for="">Customer</label>
              <input class="form-control" type="text" name="customer" placeholder="" required="1">
            </div>
            <div class="form-group">
              <label for="">Status </label><br>
              <input type="radio"  name="stats" value="done"> Done<br>
              <input type="radio"  name="stats" value="ongoing"> Ongoing<br>
              <input type="radio"  name="stats" value="pending"> Pending<br>
              <input type="radio"  name="stats" value="cancelled"> Cancelled<br>
            </div>
            <div class="form-group">
              <input type="submit" name="save" value="Save Form" class="btn btn-primary">
            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
      </div>
      </div>
  </body>
</html>