<!DOCTYPE html>
<html>
<link href="<?php echo base_url();?>css/Styler.css" rel="Stylesheet" type="text/css" media="all" />
<head>
	<?php header('Control-Allow-Origin'); ?>
<title>Welcome to Cynema!</title>
</head>
<body>
	<?php $this->load->library('form_validation') ?>
	<div class="header">
<h1>Cynema</h1>
     	<h2 class = "ptitlel">Welcome to Cynema!</h2>
	</div>
	

	<form class="forml">
	</form>
	
	<?php echo form_open('Login/login_user'); ?>

		<input class="logini" name="email" placeholder="Email Address" type="text" required><br>
		<input id="password" name="password" placeholder="********" type="password" required>

		<button class="register" type="submit">Sign In</button>
	</form>

    <a href="<?php echo base_url('/index.php/Daftar_user') ?>"> 
	<button class="register">Register</button> </a>
	<br>
			<center><?php echo validation_errors();  ?></center>
			<center><?php echo $error;  ?></center>


</body>
</html>


