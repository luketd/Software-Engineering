<?php session_start()  ?>
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
?>




<?php 
$zipcode =  $_SESSION['zip'];
$ID= $_SESSION['rand'];
$date= $_POST['pickupdate'];
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
	echo "Update Info";
} else{
		echo "ERROR: Could not able to execute  " . mysqli_error($conn);
}

#Update updatepickup with the date selected and ID
$updatePickup = "INSERT INTO updatepickup (Pickup_dates, ID) VALUES('$date', '$ID')";
if(mysqli_query($conn, $updatePickup)){
	echo "Updated updatePickup";
} else{
		echo "ERROR: Could not able to execute  " . mysqli_error($conn);
}


#Delete the Date from available dates
$deleteDate = "DELETE pickup  FROM `pickup` inner join updatepickup on updatepickup.Pickup_dates=pickup.Pickup_dates where  pickup.Zip_code='$zipcode';";
if(mysqli_query($conn, $deleteDate)){
	echo "delete Pickup";
} else{
		echo "ERROR: Could not able to execute  " . mysqli_error($conn);
}

mysqli_close($conn);



header('Location:exit_page.php');












 ?>



