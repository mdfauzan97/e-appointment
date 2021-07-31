<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maklumat Pengguna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hospital Kental</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  

</head>
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
  <br><br>
  <h2>PATIENT'S FEEDBACK</h2>
  <table>
    <tr><!-- 
      <th>Number</th> -->
      <th><th>Name</th></th>
      <th></th><th>Phone Number</th><th></th>
      <th>E-mail</th>
      <th>Feedback</th>
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
//  die("Connection failed: ". mysqli_connect_error());
// }

$sql = "SELECT * FROM feedbacks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td></td><td>".$row["Nama"]."</td><td></td><td>".$row["phonenum"]."</td><td></td><td>".$row["email"]."</td><td>".$row["Tujuan"] ."</td></tr>";
    }

    echo "</table>";
}
else{
  echo "ERROR";
}

$conn-> close()

?>

  </table>
  <br>
  <br>
  <center>
  <button class="center" onclick="window.location.href ='index2.php';">BACK</button>
</body>
</html>



