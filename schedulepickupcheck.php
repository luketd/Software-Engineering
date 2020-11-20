<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start() 
?>




<?php 

$ID= $_SESSION['rand'];
$pickupdate= isset($_POST['pickupdate']) ? $_POST['pickupdate'] : "";
$donationsize= isset($_POST['donationsize']) ? $_POST['donationsize'] : "";
$location= isset($_POST['location']) ? $_POST['location'] : "";
$howhear= isset($_POST['howhear']) ? $_POST['howhear'] : "";
$comments= isset($_POST['comments']) ? $_POST['comments'] : "";

if(empty($howhear)){
	$howhear = "0";
}

if(empty($comments)){
	$comments = "0";
}

$addInfo = "INSERT into additional_info (ID, Size_Of_Donation, Location, Hear_about, Comments)
VALUES('$ID', '$donationsize', '$location', '$howhear', '$comments')";

if(mysqli_query($conn, $addInfo)){
	echo "Records inserted successfully.";
} else{
		echo "ERROR: Could not able to execute  " . mysqli_error($conn);
}
mysqli_close($conn);



header('Location:exit_page.php');












 ?>



