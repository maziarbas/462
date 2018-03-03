<!DOCTYPE html>
<?php
  session_start();
  $_SESSION['user'] = "";
  $_SESSION['fname'] = "";
  $_SESSION['lname'] = "";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    Please enter your username and password
    <form action="/462Project/462input_handler.php" method="post">
      Username:<br>
      <input type="text" name="username"><br>
      Password:<br>
      <input type="password" name="password" ><br><br>
      <input type="submit" name="login_submit" value="Submit">
    </form>
  </body>
</html>
