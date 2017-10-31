<!DOCTYPE html>
<html>
<head>
<title>Movie Detail</title>
<link href="<?php echo base_url();?>css/Styler.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="header">
<h1>Cynema</h1>
    <ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="#news">News</a></li>   
				 <div class="dropdown">
	  		<li><a class="dropdown" href="#category">Category</a></li>
	  		<div class="dropdown-content">
			<p>Content</p>
			<p><a href="SeatChart.html">Grab Ticket!</a></p>
		    <p><a href="MovieList.html">Movie List</a></p>
	  	  </div>
		<li><a href="#about">About</a></li>
    </ul>   	

    	<h2 class = "ptitlel">Kingsman 2</h2>
	</div>

	<div class="Video">
      <video width="575" height="350" controls>
	  <source src="<?php echo base_url();?>Media/Kingsman2.mp4" type="video/mp4">
	  <source src="<?php echo base_url();?>Media/Kingsman2.ogg" type="video/ogg">
	</div>

	<div class="text2">
	<p> When their headquarters are destroyed and the world is held hostage, the Kingsman's journey leads them to the discovery of an allied spy organization in the US. These two elite secret organizations must band together to defeat a common enemy.</p>
	</div>
	
</body>