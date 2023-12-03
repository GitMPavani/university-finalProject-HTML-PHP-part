<?php
 require'connection.php';
 $nameErr="";
 $mtypeErr="";
 $phoneErr="";
 $userErr="";
 $passErr="";
 $comErr="";

if(isset($_POST['insert'])) {
	
	$name1= $_POST['names'];
		// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
			  $nameErr = "* Only letters and white space allowed";
			
			
			}
			if($_POST['mtype']== '1'){
				$mtypeErr ="* You must Select Member type";
				
				}
				
				$phone=$_POST['contact'];
			if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone))	{
				$phoneErr ="* Invalid Number or format";
				
				}
				
				$username=$_POST['uname'];
				if (!preg_match("/^[a-zA-Z0-9]{5,}$/",$username))	{
				$userErr ="* Enter more than or equal 5 charectors";
				
				}
				$pword=$_POST['password'];
				if (!preg_match("/^[a-zA-Z0-9]{8,}$/",$pword))	{
				$passErr ="* Enter more than or equal 8 charectors";
				
				}
				$conform1=$_POST['conform'];
				if($pword!=$conform1){
					$comErr="* Not match with Password";
					}
				
	  		else {
		     $name = $_POST['names'];
		     $address= $_POST['address'];
			$contact = $_POST['contact']; 
	        $uname = $_POST['uname']; 
			$password = $_POST['password'];  
			$conform = $_POST['conform'];
			$mtype = $_POST['mtype']; 
			$gender = $_POST['gender'];	
	
	//$insertString = "INSERT INTO `register` VALUES('','$uname','$password','$name','$address','$contact','$gender','$mtype')";
	$insertString = "INSERT INTO `register` VALUES ('','$name','$gender','$address','$contact','$uname','$password','$conform','$mtype')";

if(!mysql_query($insertString)) 
{   
die('Error : '.mysql_error()); 
}
else
{   
//echo '<br/>';   
//echo '1 record added...'; 

echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="index2.html"';
        echo '</script>';

}  	
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arunella - About Company</title>
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
        <a class="social_btn facebook">&nbsp;</a></div>	
    
    <div id="tooplate_header">
        <div id="site_title"><h1><a href="#">Iron Rush</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">About Us</a></li>
                <li><a href=>Blog</a></li>
                <li><a href="gallery.html">Crops</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
      <h1> <center>
         Register
      </center></h1>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<p>&nbsp;</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
     
      <center>
<form name="myForm" method="POST" style="font-weight:300" >
<table>
<caption>
<h3>Signin form </h3></caption>
<tr>
<td>Registration No:</td>
<td><input type="text" name="regno" id="regno" required/> </td> <td cl>
</tr>
<tr>
<td> Name : </td>
<td><input type="text" name="names" id="name" required/>  </td> <td class="error"> <?php echo $nameErr;  ?>  </td>  
</tr>
<tr>
<td> Gender : </td>
<td><input type="radio" value="male" name="gender" required/>
Male
  <input type="radio" value="female" name="gender"required />
  Female</td>
</tr>
<tr>
<td> Address : </td>
<td><textarea name="address" rows="3" cols="16" required></textarea></td>
</tr>
<tr>
<td> Contact No : </td>
<td><input type="text" name="contact" placeholder="000-000-0000" required /></td> <td class="error"> <?php echo $phoneErr; ?> </td>
</tr>
<tr>
<td> User Name : </td>
<td><input type="text" name="uname" required /></td> <td class="error"> <?php echo $userErr; ?> </td>
</tr>
<tr>
<td> Password : </td>
<td><input type="text" name="password"  required/> </td> <td class="error"> <?php echo $passErr; ?> </td>
</tr>
<tr>
<td> Conform  : </td>
<td><input type="text" name="conform"  required/></td> <td class="error"> <?php echo $comErr; ?> </td>
</tr>
<tr>
<td> Member Type : </td>
<td><select name="mtype" />
<option value="1"> Select Member type </option>
<option  > Admin </option>
<option  > Farmer </option>
<option > Staff </option>
</select></td> <td class="error" > <?php echo $mtypeErr;  ?>  </td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Submit" name="insert" />
<input type="reset" value="Reset" />
</td>

</tr>
</table>
</form>


</center>
      
      </div>
    </div> <!-- end of main -->

	<div class="cleaner">
	 
	</div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_w200 float_l">
        	<h4>Pages</h4>
            <ul class="tooplate_list">
                <li><a href="index.html"> Home </a> </li>
                <li> <a href="gallery.html">Crops </a> </li>
                <li> <a href="contact.html"> Contact Us </a> </li>
                <li>About us</li>
            </ul>
        </div>
        <div class="col_w200 float_l">
        	<h4>Contact Us</h4>
            <p>Level #16, BOC Merchant Tower, St Michaels Rd,</p>
            <p> Colombo<br />
              <br />
              Phone: 011-1234567<br />
              Email: <a href="mailto:info@company.com">arunella@gmail.co</a></p>
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