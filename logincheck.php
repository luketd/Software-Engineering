<?php session_start() ?>




<?php 

$email= isset($_POST['email']) ? $_POST['email'] : "";
$password= isset($_POST['password']) ? $_POST['password'] : "";

echo $email;
echo $password;

/*
if $email = admin@charitydrop.com | $password = admin

	go to admin page
else
	personal_information_form.php
	*/

if ($email == "admin@charitydrop.com")
	{
		header('Location:admin_page.php');
		
	}





else
	{
		header('Location:personal_information_form.php');
	}




 ?>



