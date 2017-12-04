<html>
<head>
	<title>Daftar</title>
	<link href="<?php echo base_url();?>css/Styler.css" rel="Stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="header">
		<h1>Cynema</h1>
     	<h2 class = "ptitlel">Register an Account</h2>
	</div>


	<div class="container">
		<?php
         $error_msg=$this->session->flashdata('error_msg');
         if($error_msg)
	         {
	           echo $error_msg;
	         }
      ?>
		
		<form class="form1" method="POST" action="<?php echo base_url('index.php/Daftar_User/register_user'); ?>">
			<br><br><br><br><br><br><br><br><br><br>
			<input type="text" placeholder="id Anda" name="id" required>
			<input type="text" placeholder="Nama Lengkap" name="nama" required>
			<input type="text" placeholder="Email Anda" name="email" required>
			<input type="text" placeholder="Credit Card Anda" name="credit_card" required>
			<input type="password" placeholder="Password" name="password" required>
			<br>
			<br>		
			<button class="register" type="submit" name="register">Daftar</button>
		</form>
			
			<!--for centered text-->
		<center>
			<b>Sudah punya Akun?</b><br>
			</b><a href="<?php echo base_url('index.php/Login'); ?>"><u>Masuk disini</u></a>
		</center>
	</div>
</body>
</html>