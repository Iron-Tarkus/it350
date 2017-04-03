<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mywarepass = mysqli_real_escape_string($db,$_POST['warehouse_number']);
      $mypassword = mysqli_real_escape_string($db,$_POST['ware_pass']); 
      
      $sql = "SELECT wName FROM Warehouse WHERE warehouseCode = '$mywarepass' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
       
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $mywarepass;
          echo '<script>console.log("Your stuff here2")</script>';
         header("location: pendingshipments.php");
      }else {
	 echo '<script>console.log("Error")</script>';
         $error = "Your Login Name or Password is invalid";
	header("location: ../index.html");

      }
   }
?>