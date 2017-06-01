<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: pink;
		}
		.box{
			background-color: rgba(255,255,255,0.7);
			margin: 50px 10% 25px 10%;
			width: 80%;
			padding: 20px;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="row">
			<div class="col-md-12">
				<h3>Login</h3>
				<?php echo form_open_multipart('admin/login'); ?>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<label for="password">Password :</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<button type="submit" class="btn btn-info" value="submit">Masuk</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>
