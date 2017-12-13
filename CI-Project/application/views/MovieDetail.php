<!DOCTYPE html>
<html>
<head>
<title>Movie Detail</title>
<link href="<?php echo base_url();?>css/Styler.css" rel="stylesheet" type="text/css" media="all" />
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
    	<h2 class = "ptitlel"><?php echo $list_film->judul;?></h2>
	</div>

	<div class="Video">
      <iframe width="560" height="315" src="<?php echo $list_film->trailer;?>" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="text2">
	<p> <?php echo $list_film->deskripsi;?></p>
	</div>
	
	<br><br><br><br><br><br>
	<a href="<?php echo base_url()."index.php/Control/seat/".$list_film->id_film;?>">
	<button class="register">Grab Your Ticket!</button>
	</a>
	
</body>
