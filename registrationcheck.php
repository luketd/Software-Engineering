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

$uppercase = preg_match('@[A-Z]@', $passwordreg);
$lowercase = preg_match('@[a-z]@', $passwordreg);
$number    = preg_match('@[0-9]@', $passwordreg);
$specialChars = preg_match('@[^\w]@', $passwordreg);

##start of password check
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($passwordreg) < 8) {
    //echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    header('Location:registration.php');
}else{
    //echo 'Strong password.';
    if ($passwordreg == $passwordregconfirm)
	{
		$insertLogin = "INSERT INTO login (email,password) VALUES('$emailreg','$passwordreg' )";
		if(mysqli_query($conn, $insertLogin)){
			echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
		mysqli_close($conn);
		header('Location:login_page.php');
		
	}





else
	{
		header('Location:registration.php');
	}
}

##end of password check


 ?>



