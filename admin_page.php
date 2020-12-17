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
    <title>Admin page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/admin_page/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/admin_page/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>



    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u36" class="ax_default box_3">
        <div id="u36_div" class=""></div>
        <div id="u36_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u37" class="ax_default image">
        <img id="u37_img" class="img " src="images/login_page/u8.png"/>
        <div id="u37_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u38" class="ax_default heading_1">
        <div id="u38_div" class=""></div>
        <div id="u38_text" class="text ">
          <p><span>Charity Drop</span></p>
        </div>
      </div>

      

      

      <!-- Unnamed (Rectangle) -->
      <div id="u41" class="ax_default heading_1">
        <div id="u41_div" class=""></div>
        <div id="u41_text" class="text ">
          <p><span>Admin Portal </span></p>
        </div>
      </div>
          <p>
        



          <br><br><br><br><br><br><br><br><br><br><br><br>
          <?PHP 
          $filltable = "Select updatepickup.Pickup_dates, forms.Email,forms.ID, forms.First_name, forms.Last_name, forms.City, forms.Zip_code, forms.Address, forms.Phone_number, info.Size_of_donation, info.Location from forms inner join additional_info as info on info.ID=forms.ID  inner join updatepickup on updatepickup.ID=forms.ID ORDER BY updatepickup.Pickup_dates asc;";;
          
          echo '<table border="10" cellspacing="6" cellpadding="4"> 
                  <tr> 
                      <td> <font face="Arial">Date of Pickup</font> </td> 
                      <td> <font face="Arial">Email</font> </td> 
                      <td> <font face="Arial">User ID</font> </td> 
                      <td> <font face="Arial">First Name</font> </td> 
                      <td> <font face="Arial">Last Name</font> </td> 
                      <td> <font face="Arial">City</font> </td> 
                      <td> <font face="Arial">Zip Code</font> </td> 
                      <td> <font face="Arial">Address</font> </td> 
                      <td> <font face="Arial">Phone #</font> </td> 
                      <td> <font face="Arial">Size</font> </td>  
                  </tr>';

            if ($result = $conn->query($filltable)) {
                while ($row =  mysqli_fetch_array($result)) {
                    $field1name = $row[0];
                    $field2name = $row[1];
                    $field3name = $row[2];
                    $field4name = $row[3];
                    $field5name = $row[4]; 
                    $field6name = $row[5];
                    $field7name = $row[6];
                    $field8name = $row[7];
                    $field9name = $row[8];
                    $field10name = $row[9]; 

                    echo '<tr> 
                              <td>'.$field1name.'</td> 
                              <td>'.$field2name.'</td> 
                              <td>'.$field3name.'</td> 
                              <td>'.$field4name.'</td> 
                              <td>'.$field5name.'</td> 
                              <td>'.$field6name.'</td> 
                              <td>'.$field7name.'</td> 
                              <td>'.$field8name.'</td> 
                              <td>'.$field9name.'</td> 
                              <td>'.$field10name.'</td> 
                          </tr>';
                }
                $result->free();
            } 
            ?>
            </p>
        </div>
      </div>


     
    <p>


    <!-- Unnamed (Rectangle) -->

    <div id="u40" class="ax_default heading_1">
        <div id="u40_div" class=""></div>
        <div id="u40_text" class="text ">
            <?PHP 

            
            if (empty($_SESSION['accept'])) {
            }
            else {
              if ($_SESSION['accept'] == 0) {
                echo "<p style='color:red;'> Uploaded CSV Failed </p>";
              }
              if ($_SESSION['accept'] == 1) {
                echo "<p style='color:green;'> Uploaded CSV Sucessfuly </p>";
              }

            }
            
            if (empty($_SESSION['nocsv'])) {
            }
            else{
              if ($_SESSION['nocsv'] == 1) {
                echo "<p style='color:red;'> NOT CSV EXTENSION </p>";
              }
            }

            ?>


        <form action="adminCheck.php" enctype='multipart/form-data' action='' method='post'>
		
    <label>Upload Product CSV files</label>
     <br>
    <input size='100' type='file' name='filename'>
    </br>
    <input type='submit' name='submit' value='Upload Products'>
     
    </form>
        </div>
      </div>

            
    </div>
   

    </p>
    <script src="resources/scripts/axure/ios.js"></script>


    
  </body>
  
</html>

