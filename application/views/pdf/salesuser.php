<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/search.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.dataTables.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js">"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/sorttable.js"></script>
    <script src="<?php echo base_url() ?>js/search.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>js/datatable.js"></script>

  </head>
  <body>
  <pre>
    <?php print_r($this->session->userdata()) ?>
  </pre>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
<<<<<<< HEAD:application/views/pdf/salesuser.php
       <div class="header">
          &nbsp<p>Welcome, <?php echo $this->session->userdata('position').' ',$this->session->userdata('name') ?></p>
          &nbsp<span id="date_time"></span>
          <script type="text/javascript">window.onload = date_time('date_time');</script>
            <div class="right" style="float: right;">
               <a href="<?php echo base_url('user/edit_user/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
               <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-primary">Logout</a> 
            </div>
          </h1>
       </div>

        <div class="col-xs-6 col-sm-12">
         <ul class="nav nav-pills" id="pills">
          <li class="active"><a data-toggle="pill" href="#customerr">Customer</a></li>
=======
        <iframe src="http://free.timeanddate.com/clock/i5dtx2kz/n108/tlid38/fn2/fs20/ftb/tt0/th1/ta1" frameborder="0" width="464" height="30"></iframe>

        <p>Welcome, <?php echo $this->session->userdata('position').' ', $this->session->userdata('name') ?></p>
         <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#edit">User</a></li>
          <li><a data-toggle="pill" href="#customerr">Customer</a></li>
>>>>>>> origin/master:application/views/salesuser.php
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="pill" href="#rpt">Customer Report</a></li>
                </ul>
          </li>
          <li><a data-toggle="pill" href="#history">History</a></li>
        </ul>
          

        <div class="right" style="float: right;">
           <a href="<?php echo base_url('salesuser/edit/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
           <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-primary">Logout</a> 
        </div>
      
        <div class="tab-content">
<<<<<<< HEAD:application/views/pdf/salesuser.php
      <div id="customerr" class="tab-pane fade in active">
=======
          <div id="edit" class="tab-pane fade in active">
            <br>
          <h1>User</h1>
        <table class="table display table-bordered sortable"  id="userTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Position</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $i=1 ?>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->password ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->address ?></td>
                    <td><?php echo $user->position ?></td>
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>

      <div id="customerr" class="tab-pane">
>>>>>>> origin/master:application/views/salesuser.php
        <br>
        <h1>Customer</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Company</th>
                      <th>Address</th>
                      <th>Telp</th>
                      <th>Fax</th>
                      <th>HP</th>
                      <th>Email</th>
                      <th>Sales</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($customers as $customer): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $customer->company ?></td>
                            <td><?php echo $customer->address ?></td>
                            <td><?php echo $customer->telp ?></td>
                            <td><?php echo $customer->fax ?></td>
                            <td><?php echo $customer->hp ?></td>
                            <td><?php echo $customer->email ?></td>
                            <td><?php echo $customer->sales ?></td>
                            <td>
                            <!-- <a href="<?php echo base_url('form_sales/update_customer/'.$customer->id) ?>" class="btn btn-info">Update</a> -->
                            <a href="<?php echo base_url('form_sales/delete_customer/'.$customer->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('form_sales/save_customer/'.$customer->id) ?>" class="btn btn-primary">Save</a></td>
                            <input type="hidden" name="id" value="<?php echo $customer->id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>

              <a href="<?php echo base_url('form_sales/customer') ?>" class="btn btn-info">Customer</a>
      </div>  

<<<<<<< HEAD:application/views/pdf/salesuser.php

      <div id="trial_req" class="tab-pane">
      <br>
       <div class="container">
             <div class="row">
             <div class="col-xs-12 col-sm-12">
          <h1>Trial Request Form</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
             <div class="table-responsive">
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Trial / Install No.</th>
                      <th>Date of Start Trial</th>
                      <th>Date of End Trial</th>
                      <th>Customer Information</th>
                      <th>Application</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($trial_reqs as $trial_req): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $trial_req->trial_no ?></td>
                            <td><?php echo $trial_req->date_start ?></td>
                            <td><?php echo $trial_req->date_end ?></td>
                            <td><button type="<?php echo base_url('form_sales/see_more'.$trial_req->id) ?>" class="btn btn-success" data-toggle="modal" data-target="#cst">See more</button></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#apl">See more</button></td>
                            <td>
                            <a href="<?php echo base_url('form_sales/delete_trial_req/'.$trial_req->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('form_sales/save_trial_req/'.$trial_req->id) ?>" class="btn btn-primary">Save</a>
                            </td>
                            <input type="hidden" name="id" value="<?php echo $trial_req->id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>
             </div>
             </div>
             </div>
             </div>

              <a href="<?php echo base_url('form_sales/trial_req') ?>" class="btn btn-info">Trial Request</a>
      </div>
=======
>>>>>>> origin/master:application/views/salesuser.php
      
      <div id="quote" class="tab-pane">
        <br>
<<<<<<< HEAD:application/views/pdf/salesuser.php
             <div class="container">
             <div class="row">
             <div class="col-xs-12 col-sm-12">
        <h1>Trial Result Form</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
             <div class="table-responsive">
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Trial / Install No.</th>
                      <th>Customer Information</th>
                      <th>Application</th>
                      <th>Trial Result</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($trial_results as $trial_res): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $trial_res->result_no ?></td>
                            <td><button type="<?php echo base_url('form_sales/see_more'.$trial_res->id) ?>" class="btn btn-success" data-toggle="modal" data-target="#cust">See more</button></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#app">See more</button></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#res">See more</button></td>
                            <td>
                            <a href="<?php echo base_url('form_sales/delete_trial_req/'.$trial_req->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('form_sales/save_trial_req/'.$trial_req->id) ?>" class="btn btn-primary">Save</a></td>
                            <input type="hidden" name="id" value="<?php echo $trial_res->id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>
             </div>
             </div>
             </div>
             </div>

              <a href="<?php echo base_url('form_sales/trial_result') ?>" class="btn btn-info">Trial Result</a>
      </div>

      <div id="cust" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Customer Information</h4>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No. </th>
                    <th>Company</th>
                    <th>Street</th>
                    <th>Contact Person</th>
                    <th>Profession</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Business Field</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach ($trial_results as $trial_res): ?> 
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $trial_res->company ?></td>
                    <td><?php echo $trial_res->street ?></td>
                    <td><?php echo $trial_res->contact ?></td>
                    <td><?php echo $trial_res->profession ?></td>
                    <td><?php echo $trial_res->phone ?></td>
                    <td><?php echo $trial_res->email ?></td> 
                    <td><?php echo $trial_res->bus_field ?></td> 
                    <?php $i++ ?>
                 <?php endforeach ?> 
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
=======
        <h1>Quotation</h1>
        <table>
          <thead>
            <tr>
              <th>No.</th>
              <th>To</th>
              <th>Date</th>
              <th>Telp.</th>
              <th>Sales</th>
              <th>Grand Total</th>
            </tr>
          </thead>
        </table>
        <a href="<?php echo base_url('salesuser/quotation') ?>" class="btn btn-info">Create Quotation</a>
>>>>>>> origin/master:application/views/salesuser.php
      </div>

       <div id="rpt" class="tab-pane">
        <br>
        <h1>Report Form</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
              <table class="table display table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Sales name</th>
                      <th>Date Report</th>
                      <th>Date Info</th>
                      <th>Customer</th>
                      <th>Report</th>
                      <th>Action Plan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($reports as $report): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $report->sales_name ?></td>
                            <td><?php echo $report->date_report ?></td>
                            <td><?php echo $report->date_info ?></td>
                            <td><?php echo $report->customer ?></td>
                            <td><?php echo $report->report ?></td>
                            <td><?php echo $report->action_plan ?></td>
                            <td>
                            <a href="<?php echo base_url('form_sales/delete_report/'.$report->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('form_sales/save_report/'.$report->id) ?>" class="btn btn-primary">Save</a></td>
                            <input type="hidden" name="id" value="<?php echo $report>id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>

              <a href="<?php echo base_url('form_sales/report') ?>" class="btn btn-info">Report</a>
      </div>     

      <div id="history" class="tab-pane">
            <br>
            <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>History</h1>
            <table class="table display table-bordered  sortable " id="userTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Time</th>
                  <th>Report</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1 ?>
                <?php foreach ($histories as $history): ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $history->Time ?></td>
                    <td><?php echo $history->Report ?></td>
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

        <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                     $('table.display').DataTable();
                    } );
                </script>   
        </div>
      </div>    
    </div>

    
  </body>
</html>
