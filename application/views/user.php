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
  <pre>
    <?php print_r($this->session->userdata()) ?>
  </pre>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <p>Welcome, <?php echo $this->session->userdata('position').' ', $this->session->userdata('name') ?></p>
        <h1>Employee</h1>
          

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
                <?php $i++; ?>
                <?php endforeach; ?>
                
              </tbody>
            </table>

      <h1>Forms</h1>
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
                  <th>Description Problems</th>
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
                    
                    <td><a href="<?php echo base_url('user/delete/'.$form_replacement->id) ?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo base_url('user/save/') ?>" class="btn btn-primary">Save</a>
                    </td>
                  </tr>
                <?php $i++ ?>
                <?php endforeach ?>
                
              </tbody>
            </table>
        
        <a href="<?php echo base_url('user/form_replacement') ?>" class="btn btn-info">Form</a>
        
        <a href="<?php echo base_url('user/edit/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
        <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-info">Logout</a>         
        </div>
      </div>    
    </div>

    
  </body>
</html>