<?php
 require'connection.php';
 $regErr="";
 $nameErr="";
 $phoneErr="";
 $villErr="";
 $disErr="";
 $quanErr="";
 $soilErr="";
 $cropErr="";

if(isset($_POST['insert'])) {
	
	$regno1= $_POST['regno'];
	if (!preg_match("/^[0-9 ]*$/",$regno1)) {
			  $regErr = "* Invalid ";
			}
	
	$name1= $_POST['names'];
		// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z. ]*$/",$name1)) {
			  $nameErr = "* Only letters and white space allowed";
			}
				
				$phone1=$_POST['phone'];
			if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone1))	{
				$phoneErr ="* Invalid Number or format";
				
				}
				
				$village1=$_POST['village'];
				if (!preg_match("/^[a-zA-Z ]*$/",$village1))	{
				$villErr ="* Enter more than or equal 5 charectors";
				
				}
				
				if($_POST['district']== '1'){
				$disErr ="* Select your Distric ";
				
				}
				if($_POST['crop']== '1'){
				$cropErr ="* Select your Crop ";
				
				}
				
				$quantity1=$_POST['quantity'];
				if (!preg_match("/^[0-9.]*$/",$quantity1)) {
			  $quanErr = "* Numbers Only";
			   }
			   
				if($_POST['soil']== '1'){
				$soilErr ="* Select Soil Type ";
				
				}
				
	  		else {
		     $regno =$_POST['regno'];
		     $name = $_POST['names'];
		     $phone= $_POST['phone'];
			 $village = $_POST['village']; 
	         $district = $_POST['district']; 
			 $crop = $_POST['crop'];  
			 $quantity = $_POST['quantity'];
			 $soil = $_POST['soil']; 
		
	
	
    $insertSting1= "INSERT INTO `farmerreg` VALUES ('$regno','$name', '$phone','$village', '$district','$crop', '$quantity', '$soil') ";

if(!mysql_query($insertSting1)) 
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
                <li class="current"><a href= class="current">Register</a></li>
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
<form name="farmerForm" method="POST" style="font-weight:300" >
<table>
<caption>
<h3>Registration form for farmers</h3></caption>
<tr>
<td>Registration No:</td>
<td><input type="text" name="regno" id="regno" required/></td> <td class="error"> <?php echo $regErr;   ?> </td>
</tr>
<tr>
<td> Full Name : </td>
<td><input type="text" name="names" id="name" required/>  </td> <td class="error"> <?php echo $nameErr;  ?>  </td>  
</tr>
<tr>
<td> Phone  : </td>
<td><input type="text" name="phone"  required/></td> <td class="error"> <?php echo $phoneErr; ?> </td>
</tr>
<tr>
<td> Village/Town : </td>
<td><input type="text" name="village" required/></td> <td class="error"> <?php echo $villErr; ?> </td>
</tr>
<tr>
<td> District : </td>
<td><select name="district">
<option value="1"> Select your District </option>
<option  >Ampara  </option>
<option  >Anuradapure </option>
<option >Kurunegala</option>
<option  >Gampaha</option>
<option  >Kegalla </option>
<option >Colombo</option>
<option> Golle</option>
</select> </td> <td class="error"> <?php echo $disErr; ?> </td>
</tr>
<tr>
<td> Crop : </td>
<td> <select name="crop"> 
<option value="1"> --Select--</option> 
<option>Areca nut </option>
<option>Cocoa </option>
<option>Pepper </option>
<option>Turmeric </option>
<option>Nutmeg </option>
<option>Betel  </option>
<option>Cardamom</option>
<option>Cinnamon </option>
<option>Lemongrass </option>
<option>Clove  </option>
<option>Ginger </option>
<option>Vanilla </option>
<option>other  </option></select> </td> <td> <?php echo $cropErr; ?> </td>
</tr>
<tr>
<td>Grown Land Size(in purch): </td>
<td><input type="text" name="quantity" required /></td> <td class="error"> <?php echo $quanErr; ?> </td>
</tr>
<tr>
<td>Soil condition  : </td>
<td> <select name="soil">
<option value="1" > ---Select-- </option>
<option >Fertile clay loam soils</option>
<option >Red yellow podzolic</option>
<option >Red and Yellow Podsolic</option>
<option >Reddish brown earth soil</option>
<option >Red and Brown Latosolic</option>
<option >Other</option> </select> </td>  <td class="error"> <?php echo $soilErr; ?> </td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Submit" name="insert" />
<input type="reset" value="Reset" /></td>
</tr>
</table>
</form>


</center>
      
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