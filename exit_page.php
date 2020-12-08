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

<!DOCTYPE html>
<html>
  <head>
    <title>Exit Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/exit_page/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/exit_page/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u68" class="ax_default heading_1">
        <div id="u68_div" class=""></div>
        <div id="u68_text" class="text ">
          <p><span>Thank you for Donating to </span><span style="color:#F59143;">Charity Drop</span><span>!</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u69" class="ax_default heading_2">
        <div id="u69_div" class=""></div>
        <div id="u69_text" class="text ">
          <p style="text-align:left;"><span>Your donation has been successfully scheduled.</span></p><p style="text-align:center;"><span>Your receipt is below
          <?PHP 

          $ID= $_SESSION['rand'];
          $receipt = "Select updatepickup.Pickup_dates, forms.ID, forms.First_name, forms.Last_name, forms.City, forms.Zip_code, forms.Address, forms.Phone_number, info.Size_of_donation, info.Location from forms inner join additional_info as info on info.ID=forms.ID  inner join updatepickup on updatepickup.ID=forms.ID where forms.ID='$ID';";
          $result = mysqli_query($conn,$receipt);

          $row = mysqli_fetch_array($result);



          echo "<br><br>";
          echo "Date of Pickup: " . " " . $row[0] . "<br>";
          echo "Receipt No: " . " " . $row[1] . "<br>";
          echo "Name: " . " " . $row[2] . " " . $row[3] . "<br>";
          echo "City: " . " " . $row[4] . "<br>";
          echo "Zip Code: " . " " . $row[5] . "<br>";
          echo "Address: " . " " . $row[6] . "<br>";
          echo "Phone_Number: " . " " . $row[7] . "<br>";
          echo "Size of Donation: " . " " . $row[8] . "<br>";
          echo "Location of Donation: " . " " . $row[9] . "<br>";
        

        
        ?>
          
          
          </span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u70" class="ax_default image">
        <img id="u70_img" class="img " src="images/login_page/u8.png"/>
        <div id="u70_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      



    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
