<?php
	
	$con = mysqli_connect("localhost","root","","Sakshi");
	
	if($_POST['btnLogin'])
		{
			$email = $_POST['txtEmail'];
			$pass = $_POST['txtPass'];
			
			$login = "select * from register where Email = '$email' && Password = '$pass'";
			$data = mysqli_query($con, $login);
			
			$result = mysqli_num_rows($data);
				if($result == 1)
					{
						header('location:Home.php');
					}
			}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: xx-large;
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
<form name="form1" method="post" action="">
  <div align="center">
    <table width="1303" height="38" border="1">
      <tr>
        <th width="1293" colspan="2" scope="col"><div align="center" class="style1">Online perfumes Store</div></th>
      </tr>
      <tr>
        <th height="51" scope="col"><div align="justify" class="style2"><a href="Home.php">Home</a> <a href="Register.php">Register</a> <a href="Flight.php"> <a href="Flight.php">store</a>  <a href="Data.php">Data</a></div></th>
        <th scope="col"><p><span class="style2"><a href="Login.php">Login </a></span></p>
          <p> <span class="style2"><a href="Flight_main.php">
            <input name="btnLogout" type="submit" id="btnLogout" value="LogOut">
        </a></span> <span class="style2"><a href="Flight_main.php"> </a></span></p></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="274" height="153" border="1">
      <tr>
        <td colspan="2"><div align="center" class="style3">Login</div></td>
      </tr>
      <tr>
        <td width="88"><div align="center">Email</div></td>
        <td width="170"><div align="center">
          <input name="txtEmail" type="text" id="txtEmail">
        </div></td>
      </tr>
      <tr>
        <td><div align="center">Password</div></td>
        <td><div align="center">
          <input name="txtPass" type="text" id="txtPass">
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="btnLogin" type="submit" id="btnLogin" value="Login">
        </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
