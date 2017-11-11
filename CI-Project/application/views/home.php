<!DOCTYPE html>
<html>
<link href="<?php echo base_url();?>css/Styler.css" rel="Stylesheet" type="text/css" media="all" />
<head>
<title>Cynema</title>
</head>

<body>
	<div class="header">
	<h1>Cynema
		<a class ="tombolh" href="<?php echo site_url('Control/logout')?>"> Logout </a> <t>
		<a class ="tombolh1" href="<?php echo site_url('Control/index')?>"> Login </a>
	</h1>

		<ul>
		  <li><a href="<?php echo site_url('Control/home')?>">Home</a></li>
		  <li><a href="#news">News</a></li>	  
		 
		 <div class="dropdown">
	  		<li><a class="dropdown" href="#category">Category</a></li>
	  		<div class="dropdown-content">
			<p>Content</p>
			<p><a href="<?php echo site_url('Control/seat')?>">Grab Ticket!</a></p>
		    <p><a href="<?php echo site_url('Control/movList')?>">Movie List</a></p>
	  	  </div>

		  <li><a href="#about">About</a></li>
		</ul>	
	</div>
		</div>
	<br><br><br>
	<img class="home1" src="<?php echo base_url();?>Media\movies.jpg" alt="" width="40%" height=300px>
	<img class="home2" src="<?php echo base_url();?>Media\Cinemas.jpg" alt="" width="40%" height=300px>
</body>

</html>
