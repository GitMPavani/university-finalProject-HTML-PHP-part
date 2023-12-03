<?php
   include('session.php');
   include("connection.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
   $mtype="Select member_type from `member` WHERE  username = '$myusername' and password = '$mypassword'";
   $result2 =mysql_query($mtype);
   echo $result2; 
   
    $sql = "SELECT mem_id FROM `member` WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysql_query($sql);
	echo $result;
	}
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; 
	   
	  ?>
      <form action="" method="post">
      User name<input type = "text" name = "username" class = "box"/>
      password<input type = "password" name = "password" class = "box" />
       <input type = "submit" value = " Submit "/>
      </form>
      </h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>