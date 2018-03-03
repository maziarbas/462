
<?php
//including the database connection file
include_once("connect-db.php");
 

$result = mysqli_query($conn, "SELECT * FROM shifts"); 


?>
 
<html>
<head>    
    <title>Create New Shift</title>
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
</head>
 
<body>
  <h1>Shift Management</h1>
    <table align="center">
        <tr>
            <th>ID</th>
            <th>Day</th>
            <th>Starting Time</th>
            <th>End Time</th>
			<th>Priority</th>
			<th># Shifts </th>
			<td><a href="add_shift.html">Add New Shift</a></td>

        </tr>
		
        <?php 
         
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['shiftid']."</td>";
            echo "<td>".$res['day']."</td>";
            echo "<td>".$res['starttime']."</td>";    
            echo "<td>".$res['endtime']."</td>";  
            echo "<td>".$res['priority']."</td>"; 
			echo "<td>".$res['numreq']."</td>";			
            echo "<td><a href=\"edit_shift.php?shiftid=$res[shiftid]\">Edit</a> | <a href=\"delete_shift.php?shiftid=$res[shiftid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
			echo "</tr>";
		}
        ?>
    </table>
</body>
</html>