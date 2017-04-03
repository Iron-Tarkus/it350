<?php
   include("config.php");   
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $refundId = $_POST['refundId'];      
      $sql = "UPDATE Refund SET received=1 WHERE refundId = '$refundId'";
      $result = mysqli_query($db,$sql);
      header("location: returns.php");
   }
?>