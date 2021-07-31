<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
	body{
		background-image: url('img.png');
	}
	.container{
/*		border: 10px solid #33ccff;*/
		text-align: center;
		padding: 50px;
		margin-left: 400px;
		margin-right: 400px;
		margin-top: 150px;
/*		  background-image: url('img.png');*/
		background-color: transparent;
		font-family: courier;
	}

</style>

<body>
	<div class="container">
		<div class = "header">
	<img src="smile.png" alt="logo" width="128" height="128">
</div>	

		<h1>Your booking details have been booked and we will contact you soon.</h1>
		<a>Thank you for using our services and we wish you have a very good day.</a>
		<br>
		<br>
		<p>You will be redirect automatically in few seconds.</p>
		


	<?php header('Refresh: 7; URL = index.html')?>
</div>	
</body>
</html>

