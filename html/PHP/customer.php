<?php
   include('session.php');
   include('config.php');
?>
<html">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <head>
      <title>Customers</title>
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
         <div class="flex-item" align="center"><h1>Customers at <?php echo $login_session; ?></h1>
		<?php $sql2 = "SELECT customerId, firstName, lastName, zipCode FROM Customer";
		$result2 = $db->query($sql2);
		if ($result2->num_rows > 0) {
    			echo "<table><tr><th>Customer ID</th><th>Name</th><th>ZipCode</th></tr>";
    				// output data of each row
    			while($row = $result2->fetch_assoc()) {
			$name2 = $row["firstName"] ." " . $row["lastName"];
        		echo '<tr><td>'.$row["customerId"].'</td><td>'.$name2.'</td><td>'.$row["zipCode"].'</td></tr>';
    		}
    		echo "</table>";
		} else {
    			echo "0 results";
		}

		$db->close();?>
         </div>
   </div>
   
</html>