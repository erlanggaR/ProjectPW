<!DOCTYPE html>
<html>
<head>
<title>Movie List</title>
<link href="<?php echo base_url();?>css/Styler.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="header">
	<h1>Cynema </h1>
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

<div class="Movie" align="center">
      <img src="<?php echo base_url();?>Media\m2.jpg" alt="" width="20%" height=300px> </img>

      <a href="<?php echo site_url('Control/movDet')?>">
      	<img src="<?php echo base_url();?>Media\m3.jpg" alt="" width="20%" height=300px> </img> 
      </a>
      
      <br><br> <br> <br>
      <img src="<?php echo base_url();?>Media\m1.jpg" alt="" width="20%" height=300px> </img>
</div>

</body>