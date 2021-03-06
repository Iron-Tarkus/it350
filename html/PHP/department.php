<?php
   include('session.php');
   include('config.php');
?>
<html">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <head>
      <title>Departments</title>
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
         <div class="flex-item" align="center"><h1>Departments at <?php echo $login_session; ?></h1>
		<?php $sql = "SELECT deptCode, deptName, managerID FROM Department WHERE warehouseCode = $wareID";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
    			echo "<table><tr><th>Department Number</th><th>Department</th><th>Manager ID</th></tr>";
    				// output data of each row
    			while($row = $result->fetch_assoc()) {
        		echo '<tr><td>'.$row["deptCode"].'</td><td>'.$row["deptName"].'</td><td>'.$row["managerID"].'</td></tr>';
    		}
    		echo "</table>";
		} else {
    			echo "0 results";
		}
		$db->close();?>
         </div>
   </div>
   
</html>