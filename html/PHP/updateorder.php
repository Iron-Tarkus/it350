<?php
   include("config.php");   
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $ordernum = $_POST['orderNum'];      
      $sql = "UPDATE Orders SET shipped=1,shippingNum='$ordernum' WHERE orderNum = '$ordernum'";
      $result = mysqli_query($db,$sql);
      $sql2 = "Insert into Shipping (shippingNum,shippingMethod,carrierName) VALUES ('$ordernum','2day','UPS')";
      $result = mysqli_query($db,$sql2);
      header("location: pendingshipments.php");
   }
?>