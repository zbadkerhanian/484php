<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

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
