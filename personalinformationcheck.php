<?PHP session_start()  ?>
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

$request_doc_template = <<<EOT
<?xml version="1.0"?>
<AddressValidateRequest USERID="569NA0004253">
	<Revision>1</Revision>
	<Address ID="0">
		<Address1>$address</Address1>
		<Address2>$suite</Address2>
		<City>$city</City>
		<State></State>
		<Zip5>$zipcode</Zip5>
		<Zip4/>
	</Address>
</AddressValidateRequest>
EOT;

// prepare xml doc for query string
$doc_string = preg_replace('/[\t\n]/', '', $request_doc_template);
$doc_string = urlencode($doc_string);

$url = "http://production.shippingapis.com/ShippingAPI.dll?API=Verify&XML=" . $doc_string;
#echo $url . "\n\n";

// perform the get
$response = file_get_contents($url);

$xml=simplexml_load_string($response) or die("Error: Cannot create object");
#print_r($xml);

$error = $xml->Address->Error->Description;

if (empty($error) == FALSE || strlen($zipcode) != 5){
	$_SESSION['TEST'] = 1;
	header('Location:personal_information_form.php');
} else {





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
}
 ?>



