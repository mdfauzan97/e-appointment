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

if (isset($_POST['Submit'])) 
{
	$Nama = $_POST['Nama'];
	$IC = $_POST['IC'];
	$Jantina = $_POST['Jantina'];
	$Telefon = $_POST['Telefon'];
	$Tarikh = $_POST['Tarikh'];
	$Department = $_POST['Department'];
	$Message = $_POST['Message'];


	$query=  "INSERT INTO worker (Nama,  IC, Jantina,  Telefon, Tarikh, Department, Message )
			VALUES ('$Nama', '$IC',  '$Jantina', '$Telefon', '$Tarikh', '$Department', '$Message')";

	mysqli_query($conn, $query);
	$conn -> close();
}
	echo "<script>alert('Your response has been recorded');document.location='viewlist.php'</script>";

	?>