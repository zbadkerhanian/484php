<?php 
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
    if(isset($_POST['login']))
    {
        require 'login.php';
    }


}

?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="signup.php">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>MEAT LABS!</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="field-wrap">
            
            <input type="text" required name="username" placeholder="Username" />
          </div>
          
          <div class="field-wrap">
            
            <input type="password" required autocomplete="off" name="password" placeholder="Password" />
          </div>
          
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div> <!-- end of login -->
          
       
      </div><!-- tab-content -->
      
</div> <!-- /form -->


</body>
</html>
