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
<?PHP

$emailreg= isset($_POST['emailreg']) ? $_POST['emailreg'] : "";
$passwordreg= isset($_POST['passwordreg']) ? $_POST['passwordreg'] : "";
$passwordregconfirm= isset($_POST['passwordregconfirm']) ? $_POST['passwordregconfirm'] : "";

##validate password strength
$_SESSION['pass'] = 0;
$_SESSION['wrong'] = 0;
$_SESSION['Same Email'] = 0;
$uppercase = preg_match('@[A-Z]@', $passwordreg);
$lowercase = preg_match('@[a-z]@', $passwordreg);
$number    = preg_match('@[0-9]@', $passwordreg);
$specialChars = preg_match('@[^\w]@', $passwordreg);

##start of password check
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($passwordreg) < 8) {
	//echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
	$_SESSION['pass'] = 1;
	$_SESSION['wrong'] = 0;
	$_SESSION['Same Email'] = 0;
    header('Location:registration.php');
}else{
	if ($passwordreg != $passwordregconfirm)
	{
		$_SESSION['wrong'] = 1;
		$_SESSION['pass'] = 0;
		$_SESSION['Same Email'] = 0;
    	header('Location:registration.php');

	}
    //echo 'Strong password.';
    if ($passwordreg == $passwordregconfirm)
	{
		$checkLogin = "Select if(email='$emailreg',1,0) from login where email='$emailreg';";
		$result = mysqli_query($conn,$checkLogin);
		$row = mysqli_fetch_array($result);
		$check = $row[0];
		if ($check==0){
			$insertLogin = "INSERT INTO login (email,password) VALUES('$emailreg','$passwordreg' )";
			if(mysqli_query($conn, $insertLogin)){

				echo "Records inserted successfully.";
				$_SESSION['wrong'] = 0;
				$_SESSION['Same Email'] = 0;
				$_SESSION['pass'] = 0;
				mysqli_close($conn);
				header('Location:login_page.php');
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
		

		}
		else {
			$_SESSION['Same Email'] = 1;
			$_SESSION['wrong'] = 0;
			$_SESSION['pass'] = 0;
			header('Location:registration.php');

		}

		

		
		
	}





else
	{
		$_SESSION['pass'] = 1;
		header('Location:registration.php');
	}
}

##end of password check


 ?>



