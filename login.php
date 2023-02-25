<?php 

$servername = "us-cdbr-east-06.cleardb.net";
$username = "bff0c0ff38cdb9";
$password = "f6afcbcf";

// Create connection to the database
  $conn = new mysqli($servername, $username, $password,'heroku_ae501d3ce4b65a5');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if (isset($_POST['login'])) {
	// code...
	//login part

//login variables
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password1 = md5($password);

$query = "SELECT * FROM user WHERE email='$email' AND password='$password1'";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) == 1) {
	// code...
			echo "Login Successful";
			//$_SESSION["loggedin]=TRUE;
			header('location: index.php');
			
} else {
	// code...
	echo "Login credentials are wrong";
}

}
 ?>