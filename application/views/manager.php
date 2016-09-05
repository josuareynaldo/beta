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
        <p>Welcome, <?php echo $this->session->userdata('position'),$this->session->userdata('name') ?></p>
        <h1>Mr. Manager </h1>
        <ul class="nav nav-pills">
        	<li class="active"><a data-toggle="pill" href="#user_database">User Database</a></li>
        	<li><a data-toggle="pill" href="#product_database">Product Database</a></li>
			
        </ul>
        <div class="tab-content">
	        <div id="user_database" class="tab-pane fade in active">
	        	<br>
            <h1>User List</h1>
            <input type="text" id="search1" onkeyup="searchFunctionUser()" placeholder="Search For Name" title="Type in a name">

	        	<table class="table table-bordered sortable " id="userTable">
	            <thead>
	              <tr>
	                <th>No.</th>
	                <th>Name</th>
	                <th>Password</th>
	                <th>Address</th>
	                <th>Position</th>
	                <th>Action</th>
	              </tr>
	            </thead>
	            <tbody>
	              <?php $i=1 ?>
	              <?php foreach ($users as $user): ?>
	                <tr>
	                  <td><?php echo $i ?></td>
	                  <td><?php echo $user->name ?></td>
	                  <td><?php echo $user->password ?></td>
	                  <td><?php echo $user->address ?></td>
	                  <td><?php echo $user->position ?></td>
	                  <td><a href="<?php echo base_url('manager/edit/'.$user->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('manager/delete/'.$user->id) ?>" class="btn btn-danger">Delete</a></td>  
	                </tr>
	              <?php $i++ ?>
	              <?php endforeach ?>
	              
	            </tbody>
	          </table>
                   

            <a href="<?php echo base_url('manager/register') ?>" class="btn btn-primary">Register</a>
            <a href="<?php echo base_url('login/log_out') ?>" class="btn btn-info">Logout</a>
            <!-- <a href="<?php echo base_url('product/index') ?>" class="btn btn-info">Product</a> -->
        	</div>
        	<div id="product_database" class="tab-pane">
        		<br>
        		 <div class="container">
      <div class="row">
          <div class="col-xs-12">
          <h1>Product</h1>
          <input type="text" id="search2" onkeyup="searchFunctionProduct()" placeholder="Search For Serial Number" title="Type in a number">
          <table class="table table-bordered sortable" id="productTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Serial Number</th>
                <th>Article Number</th>
                <th>Description</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              <?php foreach ($products as $product): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $product->serial_number ?></td>
                  <td><?php echo $product->article_number ?></td>
                  <td><?php echo $product->description ?></td>
                  <td><?php echo $product->type ?></td>
                  <td><a href="<?php echo base_url('product/edit/'.$product->id) ?>" class="btn btn-success">Edit</a>  <a href="<?php echo base_url('product/delete/'.$product->id) ?>" class="btn btn-danger">Delete</a></td>  
                </tr>
              <?php $i++ ?>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <a href="<?php echo base_url('product/register_product') ?>" class="btn btn-primary">Product Register</a>
        	</div>

        </div>
         

         
          
        </div>
      </div>    
    </div>

    
  </body>
</html>