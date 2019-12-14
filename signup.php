<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <!-- <?php include 'css/css.html'; ?> -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    
  </style>

</head>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    if($_POST['password'] == $_POST['passwordConf']){

      if(isset($_POST['register']))
      {
          require 'register.php';
      }
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="index.php">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">  
          <h1>Make an account for MEATLABS!</h1>
          
          <form action="signup.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" required autocomplete="on" name='firstname' placeholder="First Name" />
            </div>
        
            <div class="field-wrap">
              <input type="text" required autocomplete="on" name='lastname' placeholder="Last Name" />
            </div>
          </div>

          <div class="field-wrap">
            <input type="text" required autocomplete="off" name='username' placeholder="Username" />
          </div>

          <div class="field-wrap">
            <input type="email" required autocomplete="on" name='email' placeholder="Email" />
          </div>
          
          <div class="field-wrap">
            <input type="password" required autocomplete="off" name='password' placeholder="Pasword" />
          </div>
          
          <div class="field-wrap">
            <input type="password" required autocomplete="off" name='passwordConf' placeholder="Confirm Pasword" />
          </div>

          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  <!--end of sign up-->
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!--   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
 -->
</body>
</html>
