<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Login Result</title>
    <style type = "text/css">
      body { font-family: sans-serif;
             background-color: lightyellow; }
      table { background-color: lightblue;
      border-collapse: collapse;
      border: 1px solid gray; }
      td { padding: 5px; }
      tr:nth-child(odd) {
      background-color: white; }
    </style>
  </head>
  <body>

    <?php

    $db_handle_name = mysqli_connect( "localhost", "webphp", "password", "finaldb");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    }
    ?>
  </body>
</html>
