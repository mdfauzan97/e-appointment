<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-appfake";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connections
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

if (isset($_POST['Submit'])) 
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phonenum = $_POST['phonenum'];
	$subject = $_POST['subject'];


	$query=  "INSERT INTO contact (firstname, lastname, phone_num, message)
			VALUES ('$firstname', '$lastname', '$phonenum', '$subject')";

	mysqli_query($conn, $query);
	$conn -> close();
}
	echo "<script>alert('Your response has been recorded');document.location='index.html'</script>";

	?>