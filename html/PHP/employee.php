<?php
   include('session.php');
   include('config.php');
?>
<html">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <head>
      <title>Employees</title>
   </head>
   <div class ="container">
	<div class="fixed">
	<h1>Warehouse Management</h1>
	<p><a href="pendingshipments.php">Pending Shipments</a></p>
	<p><a href="shipped.php">Order History</a></p>
	<p><a href="returns.php">Returns</a></p>
	<p><a href="customer.php">Customers</a></p>
	<p><a href="employee.php">Employees</a></p>
	<p><a href="department.php">Departments</a></p>
	<p><a href="warehouse.php">My Warehouse</a></p>
	<p><a href="quality.php">Quality Assurance</a></p>
	<p><a href="logout.php">Log Out</a></p>

	</div>
         <div class="flex-item" align="center"><h1>Employees at <?php echo $login_session; ?></h1>
		<?php $sql = "SELECT employeeID, firstName, lastName, deptCode FROM Employee";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
    			echo "<table><tr><th>Employee ID</th><th>Name</th><th>Department</th></tr>";
    				// output data of each row
    			while($row = $result->fetch_assoc()) {
			$name = $row["firstName"] ." " . $row["lastName"];
        		echo '<tr><td>'.$row["employeeID"].'</td><td>'.$name.'</td><td>'.$row["deptCode"].'</td></tr>';
    		}
    		echo "</table>";
		} else {
    			echo "0 results";
		}
		$db->close();?>
         </div>
   </div>
   
</html>