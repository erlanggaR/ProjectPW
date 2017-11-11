<?php
	session_start(); // Mulai Session
	
	$error=''; // Variable jika ada Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['uname']) || empty($_POST['psw'])) {
			$error = "Anda belum mengisi dengan benar";
		}
		else if (($_POST['uname'] == 'user1') && ($_POST['psw'] == 1))
		{
			$username=$_POST['uname'];
			$password=$_POST['psw'];
		
			$_SESSION['login_user']=$username; 
			header("location: home.php"); // Redirect KE Page Welcome
		}

		else{
			$error = "Username atau Password invalid";
		}


	}
?>