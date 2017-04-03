<?php
   include('session.php');
   include('config.php');
?>
<html">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <head>
      <title>Returns</title>
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
         <div class="flex-item" align="center"><h1>Returns For <?php echo $login_session; ?></h1>
		<?php $sql = "SELECT orderNum, refundId, customerId, received FROM Refund";
		$result = $db->query($sql);
		$rowNum = 1;
		if ($result->num_rows > 0) {
    			echo "<table><tr><th>Row Number</th><th>Return ID</th><th>Customer ID</th><th>Order Number</th><th>Received?</th><th>Mark as Received</th></tr>";
    				// output data of each row
    			while($row = $result->fetch_assoc()) {
        		echo '<tr><td>'.$rowNum.'<form method="POST" action="updatereturn.php"><input type="hidden" name="refundId" value = "'.$row["refundId"].'"/></td><td>'.$row["refundId"].'</td><td>'.$row["customerId"].'</td><td>'.$row["orderNum"].'</td><td>'.$row["received"].'</td><td><input type="submit" name="submit" value="Received";/></td></tr></form>';
			$rowNum ++;
    		}
    		echo "</table>";
		} else {
    			echo "0 results";
		}
		$db->close();?>
         </div>
   </div>
   
</html>