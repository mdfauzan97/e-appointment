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
	$phonenum = $_POST['phonenum'];
	$email = $_POST['email'];
	$Tujuan = $_POST['Tujuan'];


	$query=  "INSERT INTO feedbacks (Nama, phonenum, email, Tujuan)
			VALUES ('$Nama', '$phonenum', '$email', '$Tujuan')";

	mysqli_query($conn, $query);
	$conn -> close();
}
	echo "<script>alert('Your response has been recorded');document.location='index.html'</script>";

	?>