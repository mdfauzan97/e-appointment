<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maklumat Pengguna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  	table {
  		margin-top: 40px;
  		border-collapse: collapse;
  		width: 100%;
  		color: black;
  		font-family: monospace;
  		font-size: 15px;
  		text-align: left;
  	}

  	th{
  		background-color: #606060;
  		color: white;
  		padding: 15px;
  	}

  	h2 {
  		text-align: center;
  	}

  	td {
  		padding: 15px;
  	}

  	tr:nth-child(even) {
  		background-color: #E0E0E0;
  		padding-top: 15px;
  		padding-bottom: 15px;
  	}

  	body {
  		background-image: url('img.png');
  background-repeat: no-repeat;
  	}

  	.buttons {
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  	.buttonss {
  		background-color: #008CBA;
  		margin-left: 700px;
  		margin-top: 25px;
  	}
  </style>
</head>

<body>
	<h2>MAKLUMAT PENGGUNA</h2>
	<table>
		<tr><!-- 
			<th>Number</th> -->
			<th>Nama</th>
			<th>Nombor Kad-Pengenalan/Passport</th>
			<th>Jantina</th>
			<th>Nombor Telefon</th>
      <th>Tujuan Temu Janji</th>
		</tr>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "fyp";

include ('connection.php');
//create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
// if (!$conn) {
// 	die("Connection failed: ". mysqli_connect_error());
// }

$sql = "SELECT * FROM MAKLUMAT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr><td>".$row["Nama"] ."</td><td>".$row["IC"] ."</td><td>".$row["Jantina"] ."</td><td>".$row["Telefon"] ."</td><td>".$row["Tujuan"] ."</td></tr>";
    }

    echo "</table>";
}
else{
	echo "ERROR";
}

$conn-> close()

?>

	</table>
	<button class="buttons buttonss" onclick="window.location.href ='index2.php';">BACK</button>
</body>
</html>



