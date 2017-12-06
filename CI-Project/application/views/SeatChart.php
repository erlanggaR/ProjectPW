<!DOCTYPE html>
<html>
<head>
<title>Movie Ticket Booking</title>

<link href="<?php echo base_url();?>css/Styler.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?php echo base_url();?>jquery/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url();?>jquery/jquery.seat-charts.js"></script>
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

	<br><br><br><br><br><br>
<div class="content">
		<h2 class = "ptitlel">Movie Ticket Booking</h2>
	<div class="main">
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie </li>
					<li>Time </li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: <?php echo $list_film->judul;?></li>
					<li>: <?php echo $list_film->tgl_main;?>, <?php echo $list_film->jam;?></li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>Rp. </i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
			

				<form action="<?php echo site_url('Control/book')?>" method="POST">
					<input type="hidden" name="id_film" value="<?= $this->uri->segment(3);?>" id="">
					<input type="hidden" name="baris" value="" id="baris">
					<input type="hidden" name="kolom" value="" id="kolom">
					<button class="checkout-button" type="submit" >Book Now</button>	
				</form>

				
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>

			<script type="text/javascript">
				var price = 40000; //price
				
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aaaaa_aaaa',
							'aa__aa__aa'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>Row '+(this.settings.row+1)+' Seat '+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);
						
							var baris = this.settings.row;
							var kolom = this.settings.label;
							$('#baris').val(baris);
							$('#kolom').val(kolom);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
											
								return 'selected';
							} 

							else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} 
							else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} 
							else {
								return this.style();
							}
						}
					});
					//sold seat
					sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
						
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	</div>
</div>
<br><br><br>
</body>
</html>
