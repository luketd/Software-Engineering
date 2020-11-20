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
$firstname= isset($_POST['firstname']) ? $_POST['firstname'] : "";
$lastname= isset($_POST['lastname']) ? $_POST['lastname'] : "";
$address= isset($_POST['address']) ? $_POST['address'] : "";
$suite= isset($_POST['suite']) ? $_POST['suite'] : "";
$cross= isset($_POST['cross']) ? $_POST['cross'] : "";
$city= isset($_POST['city']) ? $_POST['city'] : "";
$zipcode= isset($_POST['zipcode']) ? $_POST['zipcode'] : "";
$phonenumber= isset($_POST['phonenumber']) ? $_POST['phonenumber'] : "";
$contactmethod= isset($_POST['contactmethod']) ? $_POST['contactmethod'] : "";



$_SESSION['zip'] = $zipcode;

if(empty($suite)){
	$suite="0";
}
if(empty($cross)){
	$cross="0";
} 

#echo $contactmethod;


$insertLogin = "INSERT into forms (ID, First_name, Last_name, Contact_method, City, Zip_code, Cross_Street, Suite_Apartment_num, Address,Phone_number)
VALUES('$ID', '$firstname', '$lastname', '$contactmethod', '$city', '$zipcode', $cross, $suite, '$address', '$phonenumber' );";

#echo $insertLogin;

if(mysqli_query($conn, $insertLogin)){
	echo "Records inserted successfully.";
} else{
		echo "ERROR: Could not able to execute  " . mysqli_error($conn);
}
mysqli_close($conn);

header('Location:schedule_pickup_form.php');












 ?>



