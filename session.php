<?php
   include('../Test/connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysql_query("select username from member where username = '$user_check' ");
   
   $row = mysql_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login1.php");
   }
?>