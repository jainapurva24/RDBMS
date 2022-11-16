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
-->
</style>
</head>

<body>
<form name="form2" method="post" action="">
  <table width="1303" height="38" border="1">
    <tr>
      <th width="1293" colspan="2" scope="col"><div align="center" class="style1">Online perfumes Store</div></th>
    </tr>
    <tr>
      <th height="51" scope="col"><div align="justify" class="style2"><a href="Home.php">Home</a> <a href="Register.php">Register</a> <a href="Flight.php"> store</a> <a href="Data.php">Data</a></div></th>
      <th scope="col"><p><span class="style2"><a href="Login.php">Login </a></span> </p>
        <p><span class="style2"><a href="Flight_main.php">
          <input name="btnLogout" type="submit" id="btnLogout" value="LogOut">
        </a></span> <span class="style2"><a href="Flight_main.php"> </a></span></p></th>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<div align="center">
  <table width="608" height="81" border="1">
    <tr>
      <th width="42" height="43" scope="col">ID</th>
      <th width="160" scope="col">Name</th>
      <th width="152" scope="col">From</th>
      <th width="98" scope="col">To</th>
      <th width="122" colspan="3" scope="col">Price</th>
    </tr>
<?php
		
	$con = mysqli_connect("localhost","root","","Sakshi");

	$show = "SELECT * FROM Flight";
	$data = mysqli_query($con, $show);
	
	while($result = mysqli_fetch_assoc($data))
		{

?>
    <tr>
      <td height="30"><?php echo $result['ID']; ?></td>
      <td><?php echo $result['Name']; ?></td>
      <td><?php echo $result['From']; ?></td>
      <td><?php echo $result['To']; ?></td>
      <td><?php echo $result['Price']; ?></td>
    </tr>
	
<?php 
		} 		
?>

  </table>
</div>
</body>
</html>