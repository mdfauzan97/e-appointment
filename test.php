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

// username and password sent from form 
$Username=$_POST['Username']; 
$Password=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)/*
$Username = stripslashes($Username);
$Password = stripslashes($Password);
$Username = mysqli_real_escape_string($conn, $Username);
$Password = mysqli_real_escape_string($conn, $Password);

$sql="SELECT * FROM login WHERE Username = '$Username' and Password = '$Password'";
$result=mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	header("location:adminmainew.php");
}
else 
{
	header("location:admloginfail.php");
}
?>