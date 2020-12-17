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


<html>
  <head>
    <title>Login Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/login_page/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/login_page/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.php'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.php'; };
    </script>
  </head>
  <body>
    <div id="base" class="">
    	

      
      <!-- Unnamed (Rectangle) -->
      <div id="u1" class="ax_default heading_1">
        <div id="u1_div" class=""></div>
        <div id="u1_text" class="text ">
          <p><span>Welcome to</span><span> </span><span style="color:#F59143;">Charity Drop!</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u2" class="ax_default heading_2">
        <div id="u2_div" class=""></div>
        <div id="u2_text" class="text ">
          <p><span>Charitable Donation Scheduler</span></p>
        </div>
      </div> 



					<!-- AIDAN WORK BEGIN -->



					<head>
					</head>		

          <br><br>
					<form action="logincheck.php" method="post">
					  <div class="imgcontainer">
					  </div>
					  <div style = "position: relative; left:415px; top:420px; font-size: 20px">
					    <p>
							    <label for="uname"><b>Email</b></label>
						<p> 
						<p>
							    <input type="Email" placeholder="Enter Email" name="uEmail" required>
						<p>
						<p>
							    <label for="password"><b>Password</b></label>
						<p>
						<p>
							    <input type="password" placeholder="Enter Password" name="password" required>
						<p>
						<p>
							    <button type="submit">
					    			Log In
					    		</button>
									 

						<p>
					  </div>
					</form>
					
					<div style = "position: relative; left:525px; top:383px; font-size: 20px">
								<button class="signupbutton" 
									onclick="window.location.href = 'registration.php';"> 
										Sign Up 
								</button> 
					</div>



      <!-- Unnamed (Image) -->
      <div id="u8" class="ax_default image">
        <img id="u8_img" class="img " src="images/login_page/u8.png"/>
        <div id="u8_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u9" class="ax_default heading_3">
        <div id="u9_div" class=""></div>
        <div id="u9_text" class="text ">
          <p><span>Enter your Email and Password</span></p><p><span>to schedule a donation <br> 
          
          <?PHP
          if (empty($_SESSION['Login Fail'])){

          } else {
            if ($_SESSION['Login Fail'] == 1)    {
              echo "<i><p style=color:red; font-size:8px;>";
                 echo "You entered your Email or Password inccorectly"; 
              echo "</i></p>";
            } 

          }
               
          
          ?>
          
          </span></p>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>

  </body>

</html>

