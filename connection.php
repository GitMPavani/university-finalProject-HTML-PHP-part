<?php  //connect to the database  
 $mysql_host = "localhost"; 
 $mysql_user = "root"; 
 $mysql_pass = "";  
 $mysql_db = "simple_login";
 $db= mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
 
 echo "DBconnect";
 if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db))
 { 
 echo " not bd connected";
 die(mysql_error());  
 
 }  
?>
