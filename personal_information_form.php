<?PHP
session_start() ;
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
?>
<?PHP
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$rand = rand (1000,  10000 );
$_SESSION['rand'] = $rand;

?>       
<!DOCTYPE html>
<html>
  <head>
    <title>Personal Information Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/personal_information_form/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/personal_information_form/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.php'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.php'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u10" class="ax_default box_3">
        <div id="u10_div" class=""></div>
        <div id="u10_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>


      
   
     

      <!-- Unnamed (Rectangle) -->
      <div id="u24" class="ax_default heading_3">
        <div id="u24_div" class=""></div>
        <div id="u24_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

    
      <!-- Unnamed (Rectangle) -->
      <div id="u29" class="ax_default heading_3">
        <div id="u29_div" class=""></div>
        <div id="u29_text" class="text ">
        
          <?php
          if (empty($_SESSION['TEST']) == 1) {
          } else {
            echo "<p style='color:red;'> ";
            echo  "One of Address, City, or Zip Code not valid";
            echo "</p>";
          }
          
          ?>
        

          <p><span>Please fill out all required fields (marked with *)</span></p><p><span>Once you fill out everything on the form, then click the submit form button to move onto the next page
          </span>
          
          
          </p>
        </div>
      </div>


      <br><br> <br><br>
      

      <!-- Unnamed (Rectangle) -->
      <div id="u31" class="ax_default heading_1">
        <div id="u31_div" class=""></div>
        <div id="u31_text" class="text ">
          <p><span>Personal Information Form</span></p>
        </div>
      </div>




          <form action="personalinformationcheck.php" method="post">
            <div class="imgcontainer">
            </div>
            <div style = "position: relative; text-align: right; left:250px; top:350px; font-size: 20px">
            <p>
                  <label for="firstname"><b>* First Name</b></label>
                  <input type="text" name="firstname" required>
            <p>
            <p>
                  <label for="lastname"><b>* Last Name</b></label>
                  <input type="text" name="lastname" required>
            <p>
            <p>
                  <label for="address"><b>* Address</b></label>
                  <input type="text" name="address" required>
            <p>
            <p>
                  <label for="suite"><b>Suite/Apartment Number</b></label>
                  <input type="text" name="suite" >
            <p>
            <p>
                  <label for="cross"><b>Cross/Street</b></label>
                  <input type="text" name="cross" >
            <p>
            <p>
                  <label for="city"><b>* City</b></label>
                  <input type="text" name="city" required>
            <p>
            <p>
                  <label for="zipcode"><b>* Zip Code</b></label>
                  <input type="text" name="zipcode" required>
            <p>
            <p>
                  <label for="phonenumber"><b>* Phone Number</b></label>
                  <input type="text" name="phonenumber" required>
            <p>
            <p>
                  <label for="prefcontact"><b>* Preferred Contact Method</b></label>
                  <select name="contactmethod" id="contactmethod">
                   <option value='' disabled selected>Select One</option>
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                  </select>
            <p>
            <p>
                  <button type="submit">
                    Submit Form
                  </button>
            <p>
            </div>
          </form>


      <!-- Unnamed (Rectangle) -->
      <div id="u33" class="ax_default box_3">
        <div id="u33_div" class=""></div>
        <div id="u33_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u34" class="ax_default image">
        <img id="u34_img" class="img " src="images/login_page/u8.png"/>
        <div id="u34_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u35" class="ax_default heading_1">
        <div id="u35_div" class=""></div>
        <div id="u35_text" class="text ">
          <p><span>Charity Drop</span></p>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>

