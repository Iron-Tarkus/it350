<?php
   include('session.php');
   include('config.php');
?>
<html">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <head>
      <title>Quality Assurance</title>
   </head>
   <div class ="container">
	<div class="fixed">
	<h1>Quality Assurance</h1>
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
         <div class="flex-item" align="center"><h1>Quality Assurance Information at <?php echo $login_session; ?></h1>
		<?php $sql = "SELECT productLead, processLead, warehouseID FROM QualityAssurance WHERE warehouseID = $wareID";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
    			echo "<table><tr><th>Warehouse</th><th>Product Contact</th><th>Process Contact</th></tr>";
    				// output data of each row
    			while($row = $result->fetch_assoc()) {
        		echo '<tr><td>'.$row["warehouseID"].'</td><td>'.$row["productLead"].'</td><td>'.$row["processLead"].'</td></tr>';
    		}
    		echo "</table>";
		} else {
    			echo "0 results";
		}
		$db->close();?>
         </div>
   </div>
   
</html>