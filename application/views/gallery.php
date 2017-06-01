<?php
 	$user_id = $this->session->userdata('user_id');
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Keterangan Produk - W Store Indonesia</title>

	<link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/font-awesome/font/saturday-be-like-madness.ttf" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url()?>assets/css/agency.min.css" rel="stylesheet">

	<style type="text/css">
		body{
			background-color: whitesmoke;
		}
		.box{
			background-color: rgb(255,230,230,0.95);
			margin: 50px 10% 25px 10%;
			width: 80%;
			padding: 20px;
			border-radius: 15px;
		}
		@font-face {
			font-family: "Saturday";
			src: "../assets/font-awesome/font/saturday-be-like-madness.ttf";
		}
		.saturday {
			font-family: "Saturday";
		}
	</style>
</head>
<body>
	<p style="text-align: center; color: #f06292; font-size: 50px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive; font-size: 75px;">W Store Indonesia</p>
	<div>
		<ul class="nav navbar-nav" style="margin-left: 410px;">
			<li>
				<a href="../#portfolio" style="font-size: 20px; font-family: 'Roboto Slab','Helvetica Neue',Helvetica,Arial,sans-serif;">GALLERY</a>
			</li>
			<li>
				<a href="<?php echo site_url().'/cart/'.$user_id?>" style="font-size: 20px; font-family: 'Roboto Slab','Helvetica Neue',Helvetica,Arial,sans-serif;">CART</a>
			</li>
			<li>
				<a href="<?php echo site_url().'/cart/'.$user_id.'#about'?>" style="font-size: 20px; font-family: 'Roboto Slab','Helvetica Neue',Helvetica,Arial,sans-serif;">ORDER</a>
			</li>
			<li>
				<a href="../#team" style="font-size: 20px; font-family: 'Roboto Slab','Helvetica Neue',Helvetica,Arial,sans-serif;">TEAM</a>
			</li>
			<li>
				<a href="../#contact" style="font-size: 20px; font-family: 'Roboto Slab','Helvetica Neue',Helvetica,Arial,sans-serif;">CONTACT</a>
			</li>
		</ul>
	</div><br>
	<div class="box">
		<div class="row">
			<div class="container">
				<?php
				foreach ($produk as $item) {
					?>
					<div class="col-md-6">
						<img src="<?php echo base_url()."/uploads/".$item['fotoproduk'];?>" style="width: 450px; height: 450px;">
					</div>
					<div class="col-md-5">
						<h3 style="margin-left: 150px;">More Info</h3><br>
						<p style="font-size: 20px"><?php echo $item['namaproduk'];?></p>
						<p>Rp. <?php echo $item['hargaproduk'];?></p><br>
						<p><?php echo $item['keteranganproduk'];?></p><br>
						<p>Type : <?php echo $item['tipeproduk'];?></p>
						<p><?php echo form_open('addtocart/'.$item['produk_id'])?>Quantity : <input type="number" name="jumlahbeli" value="1" style="width: 50px"></p>
						<p class="submit" style="margin-top: 80px; margin-left: 350px;">
							<input type="hidden" name="is_submit" value="1" />
							<button type="submit" class="btn btn-danger" value="submit">Add to Cart</button></p>
							<?php echo form_close();?>
						</div>
						<div class="col-md-1"></div>
						<?php } ?>
					</div>
				</div>
			</div>
			<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
			<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
			<script src="<?php echo base_url()?>assets/js/jqBootstrapValidation.js"></script>
			<script src="<?php echo base_url()?>assets/js/contact_me.js"></script>
			<script src="<?php echo base_url()?>assets/js/agency.min.js"></script>
		</body>
		</html>