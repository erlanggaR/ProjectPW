<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: home.php");
	}
?>

<!DOCTYPE html>
<html>
<link href="css/styler.css" rel="stylesheet" type="text/css" media="all" />
<head>
<title>Welcome to Cynema!</title>
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
			<p><a href="SeatChart.php">Grab Ticket!</a></p>
		    <p><a href="MovieList.html">Movie List</a></p>
	  	  </div>
		

		<li><a href="#about">About</a></li>
    </ul>   	

    	<h2 class = "ptitlel">Welcome to Cynema!</h2>
	</div>
	
<form class="forml" action="" method="post">

	<input class="logini" id="name" name="uname" placeholder="Email Address" type="text" required><br>
	<input id="password" name="psw" placeholder="********" type="password" required>

	<input class="login1" name="submit" type="submit" value=" Login ">
		<?php echo $error; ?>
    <button class = "register" type="submit">Register</button><br>
</form>

</body>
</html>


