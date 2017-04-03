<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select wName, warehouseCode from Warehouse where warehouseCode = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['wName'];
   $wareID = $row['warehouseCode'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>