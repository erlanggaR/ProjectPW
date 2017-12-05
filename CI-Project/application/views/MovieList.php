<!DOCTYPE html>
<html>
<head>
<title>Movie List</title>
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
	</div>

<div class="Movie" align="center">

   <?php 
        foreach ($list_film->result() as $row) {
          ?>
            <tr>
              <td>
               <a href="<?php echo base_url()."index.php/Control/movDet/".$row->id_film;?>">
                <img src="<?php echo $row->gambar;?>" alt="Gambar Film" width="20%" height=300px> </img> </a> </td>
            </tr>
          <?php
        }
       ?>   
</div>

</body>