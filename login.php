<?php
   include("connection.php");
   session_start();
   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql= "SELECT regno FROM `register`  WHERE username = '$myusername' and password = '$mypassword'";
	  $mtype="Select `membertype` from `register`  WHERE  username = '$myusername' and password = '$mypassword'";
	 

      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
	    
	 $result2 =mysql_query($mtype);
	 $row2 = mysql_fetch_array($result2);
	 
	 if($result == FALSE  && $row == FALSE && $result2 == FALSE  && $row2 == FALSE ) {
		 
		die(mysql_error()); 
	 }
	 
      $count = mysql_num_rows($result);
     
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1 ){
	          //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
        
		//echo $msg="login success";
		if($row2['membertype']=='Farmer'){
			//echo $row2['membertype'];
		
        header("location: index2.html");
		}
		
		else if($row2['membertype']=='Admin')
		{
		header("location: profile.php");	
		}
		
		else {
			header("location:about.html");
			} 
	        }else {
         $error = "Your Login Name or Password is invalid";
		  
      }
   }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iron Rush - Blog Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2034 Iron Rush
http://www.tooplate.com/view/2034-iron-rush
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
    	<a class="social_btn twitter">&nbsp;</a>
        <a class="social_btn facebook">&nbsp;</a>
    </div>	
    
    <div id="tooplate_header">
        <div id="site_title"><h1><a href="#">Iron Rush</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Login</h2>
        <p>&nbsp;</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
   	 
        
        
        
        <div class="cleaner">
        <form action="" method="post" >
          <table align="center" width="600" height="200" border="2" bordercolor="#006633" background="images/banner.jpg">
            <tr>
              <td colspan="2"><h1 class="cleaner" align="center">&nbsp;<img src="images/loginuser.png" /> </h1></td>
            </tr>
            <tr>
              <td><label><h6> <strong> UserName </strong> </h6>  </label></td>
              <td width="182"><input type = "text" name = "username" class = "box"/></td>
            </tr>
            <tr>
              <td><label><h6 id="contact_form"><strong>Password</strong></h6></label></td>
              <td><input type = "password" name = "password" class = "box" /></td>
            </tr>
            <tr>
              <td colspan="2" align="right" class="submit_btn" >
                <p><?php 
				
				
			   if($error!="")
			   {
			   	echo "$error";
			   }
			   ?>
                  
                  <input type = "submit" value = " Submit "/>
                  <input type="submit"  align="right" name="button2" id="cancel" value="Cancel" />
                
              </p></td>
            </tr>
          </table>
          </form>
        </div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_w200 float_l">
        	<h4>Pages</h4>
            <ul class="tooplate_list">
                <li><a href="index.html"> Home </a></li>
                <li> <a href="gallery.html">Crops </a></li>
                <li> <a href="contact.html"> Contact Us </a></li>
                <li>About us</li>
                <li></li>
            </ul>
        </div>
        <div class="col_w200 float_l">
        	<h4>Cool Links</h4>
            <ul class="tooplate_list"> 
				<li><a href="#">Donec condimentum et</a></li>
                <li><a href="#"> Cras venenatis lacinia turpis </a></li>
                <li><a href="#">Suscipit tincidunt gravida</a></li>
                <li><a href="#">Rutrum purus at eleifend</a></li>
                <li><a href="#">Fusce at dui at augue ut</a></li>
                <li><a href="#">Nullam eget magna tellus</a></li>
            </ul>
        </div>
		<div class="col_w200 float_l">
        	<h4>Social Media</h4>
             <ul class="tooplate_list">
        	<li> <a href="https://www.facebook.com/"> <img src="images/facebook.png" width="24" height="24" />Facebook </a> </li>
       	  <li> <a href=""> <img src="images/tooplate_twitter.png" width="24" height="24" /> Twitter </a> </li>
          </ul>
      </div>
        <div class="col_w200 float_r col_last">
        	<h4>Contact Us</h4>
            142-115 Maecenas ac eros ut, <br />
            Curabitur vehicula elit, 15540 <br />
            Suspendisse euismod<br /><br />
            Phone: 010-010-5500 <br />
            Email: <a href="mailto:info@company.com">info@company.com</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	
		Copyright © 2048 <a href="#">Company Name</a>
		
    </div>
</div>
</body>
</html>