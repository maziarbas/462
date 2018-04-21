<?php

//including the database connection file
include("connect-db.php");
 
//getting id of the data from url
$shiftid = $_GET['shiftid'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM shifts WHERE shiftid=$shiftid");
 
//redirecting to the display page (index.php in our case)
header("Location:create_shifts.php");

?>