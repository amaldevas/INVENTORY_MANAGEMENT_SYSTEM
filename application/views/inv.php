<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/boot.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>INVENTORY</title>
</head>
<body>
<div class="container full">
	<div class="row">
		<div class="col-md-12 head123">INVENTORY</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<a href="<?php echo base_url();?>index.php/add-user">
					<div class="col-md-12 center">
						<img class="logo" src="<?php echo base_url();?>assets/images/add_user.jpg">
						<div class="logo_text">ADD USER</div>
					
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url();?>index.php/add-item">
					<div class="col-md-12 center">
						<img class="logo" src="<?php echo base_url();?>assets/images/add_item.jpg">
						<div class="logo_text">ADD ITEM</div>
					
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url();?>index.php/add-cat">
					<div class="col-md-12 center">
						<img class="logo" src="<?php echo base_url();?>assets/images/add_cat.png">
						<div class="logo_text">CATEGORY</div>
					
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url();?>index.php/add-inv">
					<div class="col-md-12 center">
						<img class="logo" src="<?php echo base_url();?>assets/images/inv.png">
						<div class="logo_text">INVENTORY</div>
					
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php echo base_url();?>index.php/Logout">
					<div class="col-md-12 center">
						<img class="logo" src="<?php echo base_url();?>assets/images/logout.png">
						<div class="logo_text">LOGOUT</div>
					
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-10 box">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 center_text">
							ITEM LIST
						</div>
					</div>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php 
						echo "<table><tr><th>ITEM_ID</th><th>ITEM_NAME</th><th>CATEGORY</th><th>PRICE</th></tr>";
						if(!empty($inv))
						{
							for($i=0;$i<$inv['total'];$i++)
							{
								echo "<tr><td>".$inv[$i]['item_id']."</td><td>".$inv[$i]['name']."</td><td>".$inv[$i]['category']."</td><td>".$inv[$i]['price']."</td></tr>";
							}
						}
						echo "</table>";
					 ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>