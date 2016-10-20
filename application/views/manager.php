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
      
  </head>
  <body>
  <pre>
    <?php print_r($childs) ?>
    <?php print_r($this->session->userdata()) ?>
  </pre>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <iframe src="http://free.timeanddate.com/clock/i5dtx2kz/n108/tlid38/fn2/fs20/ftb/tt0/th1/ta1" frameborder="0" width="464" height="30"></iframe>

        <p>Welcome, <?php echo $this->session->userdata('position').' ',$this->session->userdata('name') ?></p>
        <h1>Mr. Manager </h1>

        <div class="right" style="float: right;">
           <a href="<?php echo base_url('user/edit/'.$this->session->userdata('id')) ?>" class="btn btn-success">Edit</a>
           <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-primary">Logout</a> 
        </div>

        <ul class="nav nav-pills">
        	<li class="active"><a data-toggle="pill" href="#user_database">User Database</a></li>
        	<li><a data-toggle="pill" href="#product_database">Product Database</a></li>
          <li><a data-toggle="pill" href="#history">History</a></li>
        </ul>
        <div class="tab-content">
	        <div id="user_database" class="tab-pane fade in active">
	        	<br>
             <div class="container">
             <div class="row">
             <div class="col-xs-12">
                <h1>Employee</h1>
               

    	        	<table class="table display table-bordered  sortable " id="userTable">
    	            <thead>
    	              <tr>
    	                <th>No.</th>
    	                <th>Name</th>
    	                <th>Password</th>
                      <th>Email</th>
    	                <th>Address</th>
    	                <th>Position</th>
    	                <th>Action</th>
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
    	                  <td><a href="<?php echo base_url('manager/edit/'.$user->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('manager/delete/'.$user->id) ?>" class="btn btn-danger">Delete</a></td>  
    	                </tr>
    	              <?php $i++; ?>
    	              <?php endforeach; ?>
    	              
    	            </tbody>
    	          </table>
                   

                <a href="<?php echo base_url('manager/register') ?>" class="btn btn-primary">User Register</a>
                <!-- <a href="<?php echo base_url('product/index') ?>" class="btn btn-info">Product</a> -->
        	</div>
          </div>
          </div>
          </div>
        	<div id="product_database" class="tab-pane">
        		<br>
        		 <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>Product</h1>
          <table class="table table-bordered sortable" id="productTable">
            <thead>
              <tr>
                <th>Toggle</th>
                <th>No.</th>
                <th>Serial Number</th>
                <th>Product Name</th>
                <th>Shipment Date</th>
                <th>Status</th>
                <th>Printer Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              <?php foreach ($products as $product): ?>
                <tr class="clickable" data-toggle="collapse" id="row<?php echo $i ?>" data-target=".row<?php echo $i ?>">
                  <td><i class="glyphicon glyphicon-plus"></i></td>
                  <td><?php echo $i ?></td>
                  <td><?php echo $product->serial_number ?></td>
                  <td><?php echo $product->product_name ?></td>
                  <td><?php echo $product->shipment_date ?></td>
                  <td><?php echo $product->status ?></td>
                  <td><img src="<?php echo base_url().$product->image_name ?>" alt=""></td>
                  <td><a href="<?php echo base_url('product/register_part/'.$product->serial_number) ?>" class="btn btn-info">New Parts</a><a href="<?php echo base_url('product/edit/'.$product->serial_number) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('product/delete/'.$product->serial_number) ?>" class="btn btn-danger">Delete</a></td>
                </tr>
  
                  <?php foreach ($childs as $key => $value): ?>
                    <?php if($product->serial_number == $key): ?>
                      <tr class="collapse row<?php echo $i ?>">
                        <th>Article Number</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Service Date</th>
                        <th>Installation Date</th>
                        <th>Part Image</th>
                        <th>Action</th>
                      </tr>
                       <?php foreach ($value as $row):?>
                          <tr class="collapse row<?php echo $i ?>">
                            <td><?php echo $row->article_number ?></td>  
                            <td><?php echo $row->description ?></td>
                            <td><?php echo $row->type ?></td>
                            <td><?php echo $row->service_date ?></td>
                            <td><?php echo $row->date_install ?></td>
                            <td><img src="<?php echo base_url().$row->image_name ?>" alt=""></td>
                            <td><a href="<?php echo base_url('product/edit/'.$product->article_number) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('product/delete/'.$product->article_number) ?>" class="btn btn-danger">Delete</a></td>
                            
                          </tr>
                       <?php endforeach; ?>


                    <?php endif; ?>
                  <?php endforeach ?>
              <?php $i++ ?>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <a href="<?php echo base_url('product/register_product') ?>" class="btn btn-primary">Product Register</a>
        	</div>
          </div>
          </div>
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
         

          <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                     $('.display').DataTable();
                     $('#productTable').DataTable();
                    } );
                </script>
          
        </div>
      </div>    
    </div>

    
  </body>
</html>