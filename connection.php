<?php
// $servername = "sql105.epizy.com";
// $username = "epiz_26159128";
// $password = "5oVUL4cZMcZk";
// $dbname = "epiz_26159128_fyp2020";

$servername = "localhost";//http://127.0.0.1
$username = "root";
$password = "";
$dbname = "e-appfake";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
};
?>