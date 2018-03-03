<?php
  session_start();
  include 'initiate_db.php';
  if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query = "SELECT COUNT(*), username, password, fname, lname, role FROM (SELECT username, password, fname, lname, role FROM users WHERE username = '".$username."' && password = '".$password."') AS x";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $row){
      if($row['COUNT(*)'] > 0){
        $_SESSION['user'] = $username;
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        if($row['role'] == "admin"){
          header('Location:http://localhost/462Project/admin_homepage.html.php');
        }elseif($row['role'] == "manager"){
          header('Location:http://localhost/462Project/manager_homepage.html.php');
        }elseif($row['role'] == "employee"){
          header('Location:http://localhost/462Project/employee_homepage.html.php');
        }
      } else{
        header('Location:http://localhost/462Project/index.html.php');
      }
    }
  }
?>
