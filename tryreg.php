<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-appfake";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

if (isset($_POST['Submit'])) 
{
	$Nama = $_POST['Nama'];
	$IC = $_POST['IC'];	
	$Telefon = $_POST['Telefon'];
	$Tarikh = $_POST['Tarikh'];
	$Department = $_POST['Department'];
	$Tujuan = $_POST['Tujuan'];


	$query=  "INSERT INTO worker (Nama, IC, Telefon, Tarikh, Department, Tujuan)
			VALUES ('$Nama', '$IC', '$Telefon', '$Tarikh', '$Department', '$Tujuan')";

	mysqli_query($conn, $query);
	$conn -> close();
}
	echo "<script>alert('Your response has been recorded');document.location='index.html'</script>";

	?>