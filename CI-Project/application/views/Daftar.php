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
		<?php $this->load->library('form_validation');?>
		
		<form class="form1">
			<br><br><br><br><br><br><br><br><br><br>
		</form>

		<?php echo form_open('Daftar_User/register_user'); ?>

			
			<input type="hidden" name="id" value="">

			<input type="Text" name="nama" value="<?= set_value('nama') ?>" placeholder="Nama Lengkap">
			<input type="Text" name="email" value="<?= set_value('email')?>" placeholder="Email Anda">
			<input type="Text" name="credit_card" value="<?= set_value('credit_card')?>" placeholder="Nomor Kartu Kredit">
			<input type="Password" name="password" value="<?= set_value('password') ?>" placeholder="Password"> <br>	
			<input type="Password" name="passconf" placeholder="Konfirmasi Password"><br>	
			

			<button class="register" type="submit" name="register">Daftar</button>
			
			<center>
			<?php echo form_error('nama')?>
			<?php echo form_error('email')?>
			<?php echo form_error('credit_card')?>
			<?php echo form_error('password')?>
			<?php echo form_error('passconf')?>
			</center>
		</form>
			<!--for centered text-->
		<center>
			<b>Have an Accout?</b><br>
			<a href="<?php echo base_url('index.php/Login'); ?>"><button class="register">Login Here!</button> </a>
		</center>
	</div>
</body>
</html>