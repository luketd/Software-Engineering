<?php session_start() ?>




<?php 

$pickupdate= isset($_POST['pickupdate']) ? $_POST['pickupdate'] : "";
$donationsize= isset($_POST['donationsize']) ? $_POST['donationsize'] : "";
$location= isset($_POST['location']) ? $_POST['location'] : "";
$howhear= isset($_POST['howhear']) ? $_POST['howhear'] : "";
$comments= isset($_POST['comments']) ? $_POST['comments'] : "";


if ($pickupdate == $pickupdate)
	{
		header('Location:exit_page.php');
		
	}











 ?>



