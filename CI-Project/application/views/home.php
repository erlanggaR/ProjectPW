<!DOCTYPE html>
<html>
<link href="<?php echo base_url();?>css/Styler.css" rel="Stylesheet" type="text/css" media="all" />
<head>
<title>Cynema</title>
</head>

<body>
	<div class="header">
	<h1>Cynema
		<a class ="tombolh" href="<?php echo site_url('Login/user_logout')?>"> Logout </a> <t>
	</h1>

		<ul>
		  <li><a href="<?php echo site_url('Control/home')?>">Home</a></li>
		  <li><a href="<?php echo site_url('Control/movList')?>">Movie List</a></li>
		  <li><a href="#about">About</a></li>
		</ul>	
	</div>
	<br><br><br>
	<img class="home1" src="<?php echo base_url();?>Media\movies.jpg" alt="" width="40%" height=300px>
	<img class="home2" src="<?php echo base_url();?>Media\Cinemas.jpg" alt="" width="40%" height=300px>
</body>

</html>
