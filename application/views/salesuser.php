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
        <iframe src="http://free.timeanddate.com/clock/i5dtx2kz/n108/tlid38/fn2/fs20/ftb/tt0/th1/ta1" frameborder="0" width="464" height="30"></iframe>

        <p>Welcome, <?php echo $this->session->userdata('position').' ', $this->session->userdata('name') ?></p>
         <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#edit">User</a></li>
          <li><a data-toggle="pill" href="#customerr">Customer</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="pill" href="#quote">Quotation</a></li>
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
                            <!-- <a href="<?php echo base_url('salesuser/update_customer/'.$customer->id) ?>" class="btn btn-info">Update</a> -->
                            <a href="<?php echo base_url('salesuser/delete_customer/'.$customer->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('salesuser/save_customer/'.$customer->id) ?>" class="btn btn-primary">Save</a></td>
                            <input type="hidden" name="id" value="<?php echo $customer->id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>

              <a href="<?php echo base_url('salesuser/customer') ?>" class="btn btn-info">Customer</a>
      </div>  

      
      <div id="quote" class="tab-pane">
        <br>
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
                            <a href="<?php echo base_url('salesuser/delete_report/'.$report->id) ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('salesuser/save_report/'.$report->id) ?>" class="btn btn-primary">Save</a></td>
                            <input type="hidden" name="id" value="<?php echo $report>id ?>">
                          </tr>
                        <?php $i++ ?>
                        <?php endforeach ?>
                      </tbody>
             </table>

              <a href="<?php echo base_url('salesuser/report') ?>" class="btn btn-info">Report</a>
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
