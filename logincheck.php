<?php
$servername = "localhost";
$username = "root";
$password2 = "";
$dbname = "software";

// Create connection
$conn = new mysqli($servername, $username, $password2,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start()
?> 
<?php 

$email= isset($_POST['uEmail']) ? $_POST['uEmail'] : "";
$password= isset($_POST['password']) ? $_POST['password'] : "";

$_SESSION['email'] = $email;

$sql = "Select IF(password='$password',TRUE,FALSE) from login where email='$email' ;";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$check = $row[0];
mysqli_close($conn);

//Check if Email is correct
if ($email == "admin@charitydrop.com" && $check==1)
	{
		$_SESSION['accept'] = 0;
        $_SESSION['nocsv'] = 0;
		header('Location:admin_page.php');
		
	}
else if ($check==1)
	{
		$_SESSION['Login Fail'] = 0;
		$_SESSION['TEST'] = 0;
		header('Location:personal_information_form.php');
	}
else {
		$_SESSION['Login Fail'] = 1;
		header('Location:login_page.php');
}
 ?>



