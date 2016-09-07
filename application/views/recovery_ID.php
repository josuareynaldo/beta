<!DOCTYPE html>
<html>
<head>
	<title>Recover ID</title>
	<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/tes.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Andada" rel="stylesheet">
</head>
<body>
<pre>
	<?php print_r($recovery_id) ?>
</pre>
		<div class="container">
		 <div class="col-md-3 col-sm-2"></div>
		<h2 style="text-align: center;">Recover ID</h2>
		<form class="form-horizontal well" method="post" id="form" action="<?php echo base_url('forget/recovery') ?>">
			<fieldset>
	          <legend>Please Enter Recovery ID(Sent By Email)</legend>
			
				<div class="form-group">
					<label for="recovery_id">Recovery ID</label>
					<input class="box" type="text" name="recovery_id" />
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="insertID" />
				</div>
				<!-- <?php if( isset($info)): ?>
					<div class="alert alert-success">
						<?php echo($info) ?>
					</div>
				<?php elseif( isset($error)): ?>
					<div class="alert alert-error">
						<?php echo($error) ?>
					</div>
				<?php endif; ?>	 -->
				
			</fieldset>
		</form>
	</div> 
	<script src="<?php echo base_url() ?>js/modal.js"></script>
	<script src="<?php echo base_url() ?>js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
</body>
</html>

