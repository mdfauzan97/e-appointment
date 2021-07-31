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

		<h1>You have logged out from e-Appointment staff site.</h1>
		<h1>You will be redirect automatically in few seconds.</h1>
		


	<?php header('Refresh: 5; URL = index.html')?>
</div>	
</body>
</html>

