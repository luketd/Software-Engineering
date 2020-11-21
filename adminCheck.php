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
<?PHP 

$mimes = array(
    'text/csv',
    'text/plain',
    'application/csv',
    'text/comma-separated-values',
    'application/excel',
    'application/vnd.ms-excel',
    'application/vnd.msexcel',
    'text/anytext',
    'application/octet-stream',
    'application/txt',
);

if (isset($_POST['submit'])) 
{
    $info = pathinfo($_FILES['filename']['name']);

    if($info['extension'] == 'csv') {
        echo "CSV confirmed";
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        $headers = fgetcsv($handle, 1000, ",");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
        {
            if ($data[0] == ''){
                $_SESSION['accept'] = 0;
                $_SESSION['nocsv'] = 0;
                header('Location:admin_page.php');
            }
            else {
                $uploadcsv = "INSERT INTO pickup (Pickup_dates, Zip_code) VALUES ('$data[0]', '$data[1]');";
                if(mysqli_query($conn, $uploadcsv)){

                } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            }

        }
        fclose($handle);
        mysqli_close($conn);
        $_SESSION['accept'] = 1;
        $_SESSION['nocsv'] = 0;
        echo "inserted into query";
        header('Location:admin_page.php');
    }
    else {
        
        echo "not in csv format";
        $_SESSION['nocsv'] = 1;
        $_SESSION['accept'] = '';
        header('Location:admin_page.php');

    }
  

  
}
?>