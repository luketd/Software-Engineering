<?php session_start() ?>




<?php 

$firstname= isset($_POST['firstname']) ? $_POST['firstname'] : "";
$lastname= isset($_POST['lastname']) ? $_POST['lastname'] : "";
$address= isset($_POST['address']) ? $_POST['address'] : "";
$suite= isset($_POST['suite']) ? $_POST['suite'] : "";
$cross= isset($_POST['cross']) ? $_POST['cross'] : "";
$city= isset($_POST['city']) ? $_POST['city'] : "";
$zipcode= isset($_POST['zipcode']) ? $_POST['zipcode'] : "";
$phonenumber= isset($_POST['phonenumber']) ? $_POST['phonenumber'] : "";
$contactmethod= isset($_POST['contactmethod']) ? $_POST['contactmethod'] : "";

if ($contactmethod == $contactmethod)
	{
		header('Location:schedule_pickup_form.php');
		
	}











 ?>



