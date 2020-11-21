<?php session_start()  ?>
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



<!DOCTYPE html>
<html>
  <head>
    <title>Schedule Pickup Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/schedule_pickup_form/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/schedule_pickup_form/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u50" class="ax_default box_3">
        <div id="u50_div" class=""></div>
        <div id="u50_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u51" class="ax_default box_3">
        <div id="u51_div" class=""></div>
        <div id="u51_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u52" class="ax_default heading_3">
        <div id="u52_div" class=""></div>
        <div id="u52_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) 
      <div id="u53" class="ax_default heading_3">
        <div id="u53_div" class=""></div>
        <div id="u53_text" class="text ">
          <p><span>Please fill out all required fields (marked with *)</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u54" class="ax_default label">
        <div id="u54_div" class=""></div>
        <div id="u54_text" class="text ">
          <p><span>* Pickup Date</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u55" class="ax_default label">
        <div id="u55_div" class=""></div>
        <div id="u55_text" class="text ">
          <p><span>* Size of Donation</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u56" class="ax_default label">
        <div id="u56_div" class=""></div>
        <div id="u56_text" class="text ">
          <p><span>* Location of Items</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u57" class="ax_default label">
        <div id="u57_div" class=""></div>
        <div id="u57_text" class="text ">
          <p><span>* How did you hear about us?</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u58" class="ax_default label">
        <div id="u58_div" class=""></div>
        <div id="u58_text" class="text ">
          <p><span>Additional Comments</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Image) -->
      <div id="u65" class="ax_default image">
        <img id="u65_img" class="img " src="images/login_page/u8.png"/>
        <div id="u65_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u66" class="ax_default heading_1">
        <div id="u66_div" class=""></div>
        <div id="u66_text" class="text ">
          <p><span>Charity Drop</span></p>
        </div>
      </div>





          <form action="schedulepickupcheck.php" method="post">
            <div class="imgcontainer">
            </div>
            <div style = "position: relative; text-align: right; left:250px; top:250px; font-size: 20px">
            <!-- Pickup Date List (Droplist) -->
            <p>
                  <label for="pick"><b>* Pickup Date</b></label>
                  <select name="pickupdate" id="pickupdate" >

                  <?PHP 
                  $zipcode =  $_SESSION['zip'];
                  $dates = "Select pickup.Pickup_dates as PU from pickup where pickup.Zip_code='$zipcode' order by Pickup_dates limit 6";
                  $result = mysqli_query($conn,$dates);
                  echo "<option value='' disabled selected>Select a date</option> ";
                  while($row = mysqli_fetch_array($result)) 
                  {        
                  echo "<option value='".$row['PU']."'>".$row['PU']."</option>"; 
                  }

                  ?>
                  </select>


                  

            <p>
            <!-- Size of Donation List (Droplist) -->
            <p>
                  <label for="donation"><b>* Size of Donation</b></label>
                  <select name="donationsize" id="donationsize">
                    <option value='' disabled selected>Size of donation</option>
                    <option value="small">Small(1-3 Bags/Boxes)</option>
                    <option value="medium">Medium((4-10 Bags/Boxes)</option>
                    <option value="large">Large(11-24 Bags/Boxes)</option>    
                    <option value="large">Extra Large(25+ Bags/Boxes)</option>                      
                  </select>
            <p>
            <p>
                  <label for="location"><b>* Location of Items</b></label>
                  <input type="text" name="location" required>
            <p><br><br>              
            <p>
                  <label for="howhear"><b>How did you hear about us?</b></label> <br>
                  <textarea name = "howhear"> </textarea>
            <p><br>
            <p>
                  <label for="comments"><b>Additional Comments</b></label> <br>
                  <textarea name = "comments"> </textarea>
            <p>

           

            <!-- Submit Button (Rectangle) -->
            <p>
                  <button type="submit">
                    Submit Form
                  </button>
            <p>
            </div>
          </form>


      <!-- Unnamed (Rectangle) -->
      <div id="u67" class="ax_default heading_1">
        <div id="u67_div" class=""></div>
        <div id="u67_text" class="text ">
          <p><span>Pickup Information</span></p>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
