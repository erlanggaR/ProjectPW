<!DOCTYPE html>
<html>
<link href="<?php echo base_url();?>css/Styler.css" rel="Stylesheet" type="text/css" media="all" />
<head>
<title>Welcome to Cynema!</title>
</head>
<body>
	<div class="header">
<h1>Cynema</h1>
     	<h2 class = "ptitlel">Welcome to Cynema!</h2>
	</div>
	

<form class="forml" action=<?php echo base_url('index.php/Login/login_user'); ?> method="post">

	<input class="logini" name="email" placeholder="Email Address" type="text" required><br>
	<input id="password" name="password" placeholder="********" type="password" required>

	<button class="register" type="submit">Sign In</button>
    <center>
    <p><a href="<?php echo base_url('/index.php/Daftar_user') ?>"><u>Register</u><a></p>
	</center>
    <br>
</form>

</body>
</html>


