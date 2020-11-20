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
    <title>Registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/registration/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/registration/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- username (Text Field) 
      <div id="u73" class="ax_default text_field" data-label="username">
        <div id="u73_div" class=""></div>
        <input id="u73_input" type="email" value="" class="u73_input"/>
      </div> -->

      <!-- Unnamed (Text Field) 
      <div id="u74" class="ax_default text_field">
        <div id="u74_div" class=""></div>
        <input id="u74_input" type="password" value="" class="u74_input"/>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u75" class="ax_default label">
        <div id="u75_div" class=""></div>
        <div id="u75_text" class="text ">
          <p><span>Email:</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) -
      <div id="u76" class="ax_default label">
        <div id="u76_div" class=""></div>
        <div id="u76_text" class="text ">
          <p><span>Password:</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u77" class="ax_default button">
        <div id="u77_div" class=""></div>
        <div id="u77_text" class="text ">
          <p><span>Register</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Text Field) 
      <div id="u78" class="ax_default text_field">
        <div id="u78_div" class=""></div>
        <input id="u78_input" type="password" value="" class="u78_input"/>
      </div> -->

      <!-- Unnamed (Rectangle) 
      <div id="u79" class="ax_default label">
        <div id="u79_div" class=""></div>
        <div id="u79_text" class="text ">
          <p><span>Confirm Password:</span></p>
        </div>
      </div> -->

      <!-- Unnamed (Image) -->
      <div id="u80" class="ax_default image">
        <img id="u80_img" class="img " src="images/login_page/u8.png"/>
        <div id="u80_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>




          <form action="registrationcheck.php" method="post">
            <div class="imgcontainer">
            </div>
            <div style = "position: relative; left:415px; top:350px; font-size: 20px">
            <p>
                  <?PHP
                if ($_SESSION['Same Email'] == 1)    {
                  echo "<i><p style=color:red; font-size:8px;>";
                    echo "The Email you entered is already registered"; 
                  echo "</i></p>";
                } 
                if ($_SESSION['pass'] == 1 ){
                  echo "<i><p style=color:red; font-size:8px;>";
                    echo "Your password requires one Uppercase Letter,<br>a Number, a Special Character, and atleast 8 characters long"; 
                  echo "</i></p>";

                }
                if ($_SESSION['wrong'] == 1 ){
                  echo "<i><p style=color:red; font-size:8px;>";
                    echo "Your passwords must be the same"; 
                  echo "</i></p>";

                }    
                
                ?>

            </p>


            <br><br>
              <p>
                  <label for="uname"><b>Email</b></label>
            <p> 
            <p>
                  <input type="Email" placeholder="Enter Email" name="emailreg" required>
            <p>
            <p>
                  <label for="psw"><b>Password</b></label>
            <p>
            <p>
                  <input type="password" placeholder="Enter Password" name="passwordreg" required>
            <p>
            <p>
                  <input type="password" placeholder="Confirm Password" name="passwordregconfirm" required>
            <p>
            <p>
                  <button type="submit">
                    Register
                  </button>
                   

            <p>
            </div>
          </form>


























      <!-- Unnamed (Rectangle) -->
      <div id="u81" class="ax_default heading_1">
        <div id="u81_div" class=""></div>
        <div id="u81_text" class="text ">
          <p><span style="color:#F59143;">Charity Drop</span><span> Registration</span></p>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
