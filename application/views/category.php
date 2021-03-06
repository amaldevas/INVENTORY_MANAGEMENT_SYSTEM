<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/boot.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>ADD CATEGORY</title>
</head>
<body>
<div class="container full">
	<div class="row">
		<div class="col-md-12 head123">ADD CATEGORY</div>
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
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 center_text">
							NEW USER
						</div>
					</div>
					<form method="post" action="<?php echo base_url();?>index.php/create-cat">
					<div class="row read_user">
						<div class="col-md-6">CATEGORY NAME</div>
						<div class="col-md-6"><input type="text" name="name"></div>
					</div>
					<div class="row read_user">
						<div class="col-md-4"></div>
						<div class="col-md-4"><input type="submit" value="ADD CATEGORY"></div>
						<div class="col-md-4"></div>
					</div>
				</form>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 center_text">
							CATEGORY LIST
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2  in_box">
							<?php 
							if(!empty($cat))
							{
									for($i=0;$i<$cat['total'];$i++)
									{
										echo "<div>".$cat[$i]['name']."</div>";
									}
							}
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>