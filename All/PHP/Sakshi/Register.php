<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: xx-large;
	font-weight: bold;
}
.style2 {font-size: large}
.style3 {
	font-size: x-large;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="1303" height="38" border="1">
  <tr>
    <th width="1293" colspan="2" scope="col"><div align="center" class="style1">Online perfumes Store</div></th>
  </tr>
  <tr>
    <th height="51" scope="col"><div align="justify" class="style2"><a href="Home.php">Home</a> <a href="Register.php">Register</a> <a href="Flight.php"> <a href="Flight.php">store</a>  <a href="Data.php">Data</a></div></th>
    <th scope="col"><p class="style2"><a href="Login.php">Login</a></p>
      <form name="form1" method="post" action="">
          <span class="style2"><a href="Flight_main.php">
          <input name="btnLogout" type="submit" id="btnLogout" value="LogOut">
        </a></span>
    </form>    </th>
  </tr>
</table>
<p>&nbsp;</p>
<form action="" method="post" name="form1">
  <div align="center">
    
    <table width="368" border="1">
      <tr>
        <td height="40" colspan="2"><div align="center" class="style3">Register</div></td>
      </tr>
      <tr>
        <td height="28"><div align="center">ID</div></td>
        <td>          <div align="center">
          <input name="txtID" type="text" id="txtID">        
        </div></td>
      </tr>
      <tr>
        <td width="163" height="28"><div align="center">Name</div></td>
        <td width="189">          <div align="center">
          <input name="txtName" type="text" id="txtName">        
        </div></td>
      </tr>
      <tr>
        <td><div align="center">DOB</div></td>
        <td>          <div align="center">
          <input name="txtDOB" type="date" id="txtDOB">        
        </div></td>
      </tr>
      <tr>
        <td height="27"><div align="center">Mobile</div></td>
        <td>          <div align="center">
          <input name="txtMob" type="text" id="txtMob">        
        </div></td>
      </tr>
      <tr>
        <td height="29"><div align="center">Email</div></td>
        <td>          <div align="center">
          <input name="txtEmail" type="email" id="txtEmail">        
        </div></td>
      </tr>
      <tr>
        <td height="32"><div align="center">Password</div></td>
        <td>          <div align="center">
          <input name="txtPass" type="password" id="txtPass">        
        </div></td>
      </tr>
      <tr>
        <td height="37"><div align="center">
          <input name="btnRegister" type="submit" id="btnInsert2" value="Register">
        </div></td>
        <td><div align="center">
          <input type="reset" name="Submit2" value="Reset">
        </div></td>
      </tr>
    </table>
    <em>  </em>
  </div>
</form>
</body>
</html>




<?php
	
	$con = mysqli_connect("localhost","root","","Sakshi");
		
	if($_POST['btnRegister']);
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$dob = $_POST['txtDOB'];
			$mob = $_POST['txtMob'];
			$email = $_POST['txtEmail'];
			$pass = $_POST['txtPass'];
			
			$register = "insert into Register values('$id','$name','$dob','$mob','$email', $pass)";
			$data = mysqli_query($con, $register);
				if($data)
					{
						
						echo "<script>alert('Registered Successfully....!')</script>";
						
					}
		
		}	

?>