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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
     <script src="<?php echo base_url() ?>js/sorttable.js"></script>
    <script src="<?php echo base_url() ?>js/search.js"></script>

  </head>
  <body>
  <pre>
    <?php print_r($this->session->userdata()) ?>
  </pre>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <p>Welcome, <?php echo $this->session->userdata('position').' ', $this->session->userdata('name') ?></p>
         <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#edit">Edit</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="pill" href="#form_replace">Form Replacement</a></li>
                    <li><a data-toggle="pill" href="#form_service">Form Service</a></li>
                </ul>
          </li>
          <li><a data-toggle="pill" href="#history">History</a></li>
        </ul>
          

        <div class="right" style="float: right;">
           <a href="<?php echo base_url('user/edit/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
           <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-primary">Logout</a> 
        </div>
      
        <div class="tab-content">
          <div id="edit" class="tab-pane fade in active">
            <br>
          <h1>User</h1>
        <table class="table table-bordered sortable " id="userTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Position</th>
                  <!-- <th>Action</th> -->
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
                   <!--  <td><a href="<?php echo base_url('manager/edit/'.$user->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('manager/delete/'.$user->id) ?>" class="btn btn-danger">Delete</a></td>  
                  </tr> -->
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>


      <div id="form_replace" class="tab-pane">
      <br>
          <h1>Form Replacement</h1>
        <!--    <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For article No" title="Type in a name"> -->
              <table class="table table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Exchange ID</th>
                      <th>Article No.</th>
                      <th>Date Record</th>
                      <th>Description</th>
                      <th>Technician</th>
                      <th>Serial No.</th>
                      <th>Date Install</th>
                      <th>Date Replace</th>
                      <th>Problem Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1 ?>
                    <?php foreach ($form_replacements as $form_replacement): ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $form_replacement->exchange_id ?></td>
                        <td><?php echo $form_replacement->article_number ?></td>
                        <td><?php echo $form_replacement->date_record ?></td>
                        <td><?php echo $form_replacement->description ?></td>
                        <td><?php echo $form_replacement->technician ?></td>
                        <td><?php echo $form_replacement->serial_number ?></td>
                        <td><?php echo $form_replacement->date_install ?></td>
                        <td><?php echo $form_replacement->date_replace ?></td>
                        <td><?php echo $form_replacement->problem ?></td>
                        
                        <td><a href="<?php echo base_url('user/delete_replacement/'.$form_service->id) ?>" class="btn btn-danger">Delete</a>
                        <a href="<?php echo base_url('user/save_replacement/'.$form_service->id) ?>" class="btn btn-primary">Save</a>
                        </td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>
                    
                  </tbody>
                </table>
                <a href="<?php echo base_url('user/form_replacement') ?>" class="btn btn-info">Form Replacement</a>
                </div>
            
      <div id="form_service" class="tab-pane">
      <br>
          <h1>Form Service</h1>
             <!-- <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Serial No" title="Type in a name"> -->
          <h3>Printer Information</h3>
              <table class="table table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Date Service</th>
                      <th>Serial No.</th>
                      <th>Printer</th>
                      <th>Year Model</th>
                      <th>Date Install</th>
                      <th>Status</th>
                      <th>Ink No.</th>
                      <th>Solvent No.</th>
                      <th>Technician</th>
                    </tr>
                  </thead>
                  </table>
            <h3>Hydraulic</h3>
              <table class="table table-bordered sortable" id="formTable">
                  <thead>
                    <tr>
                      <th>Visco Act</th>
                      <th>Pres. Act</th>
                      <th>Mb. Value</th>
                      <th>TMP</th>
                      <th>BO. Cur</th>
                      <th>BO. Ref</th>
                      <th>Date LS</th>
                      <th>Hour LS</th>
                      <th>Total Hour</th>
                      <th>Problem Description</th>
                      <th>Replace Part</th>
                      <th>Service Work</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $i=1 ?>
                    <?php foreach ($form_services as $form_service): ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $form_service->date_service ?></td>
                        <td><?php echo $form_service->serial_number ?></td>
                        <td><?php echo $form_service->printer ?></td>
                        <td><?php echo $form_service->year_model ?></td>
                        <td><?php echo $form_service->date_install ?></td>
                        <td><?php echo $form_service->status ?></td>
                        <td><?php echo $form_service->ink_number ?></td>
                        <td><?php echo $form_service->solvent_number ?></td>
                        <td><?php echo $form_service->technician ?></td>
                        <td><?php echo $form_service->visco_act ?></td>
                        <td><?php echo $form_service->pres_act ?></td>
                        <td><?php echo $form_service->mb_value ?></td>
                        <td><?php echo $form_service->tmp ?></td>
                        <td><?php echo $form_service->bo_cur ?></td>
                        <td><?php echo $form_service->bo_ref ?></td>
                        <td><?php echo $form_service->date_ls ?></td>
                        <td><?php echo $form_service->hour_ls ?></td>
                        <td><?php echo $form_service->total_hour ?></td>
                        <td><?php echo $form_service->problem ?></td>
                        <td><?php echo $form_service->replace_part ?></td>
                        <td><?php echo $form_service->service_work ?></td>

                        
                        <td><a href="<?php echo base_url('user/delete_service/'.$form_service->id) ?>" class="btn btn-danger">Delete</a>
                        <a href="<?php echo base_url('user/save_service/'.$form_service->id) ?>" class="btn btn-primary">Save</a>
                        </td>
                      </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>
                    
                  </tbody>
              </table>
              <a href="<?php echo base_url('user/form_service') ?>" class="btn btn-info">Form Service</a>
      </div>

       <div id="history" class="tab-pane">
            <br>
            <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>History</h1>
            <table class="table table-bordered  sortable " id="userTable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1 ?>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->position ?></td>
                    <td><?php echo $user->position ?></td>
                    <td><a href="<?php echo base_url('manager/edit/'.$user->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('manager/delete/'.$user->id) ?>" class="btn btn-danger">Delete</a></td>  
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>
        </div>
           
        </div>
      </div>    
    </div>

    
  </body>
</html>