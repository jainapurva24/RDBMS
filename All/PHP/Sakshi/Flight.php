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
<title></title>
<form action="" method="post" name="form1">
  <div align="center">
    <table width="1303" height="38" border="1">
      <tr>
        <th width="1293" colspan="2" scope="col"><div align="center" class="style1">Online perfumes Store</div></th>
      </tr>
      <tr>
        <th height="51" scope="col"><div align="justify" class="style2"><a href="Home.php">Home</a> <a href="Register.php">Register</a> <a href="Flight.php"> <a href="Flight.php">store</a> <a href="Data.php">Data</a></div></th>
        <th scope="col"><p><span class="style2"><a href="Login.php">Login</a></span></p>
          <p> <span class="style2"><a href="Flight_main.php">
            <input name="btnLogout" type="submit" id="btnLogout" value="LogOut">
        </a></span> <span class="style2"><a href="Flight_main.php"> </a></span></p></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="365" border="1">
      <tr>
        <td height="49" colspan="2"><div align="center" class="style3">Sakshi Apurva store: </div></td>
      </tr>
      <tr>
        <td><div align="right">ID</div></td>
        <td><input name="txtID" type="text" id="txtID"></td>
      </tr>
      <tr>
        <td width="163"><div align="right">Name</div></td>
        <td width="186"><input name="txtName" type="text" id="txtName"></td>
      </tr>
      <tr>
        <td><div align="right">Flavour</div></td>
        <td><select name="txtFrom" id="txtFrom">
          <option>Apple</option>
          <option>Orange</option>
          <option>Grape</option>
          <option>Lichi</option>
          <option>pinapple</option>
        </select></td>
      </tr>
      <tr>
        <td><div align="right">Colour</div></td>
        <td><select name="txtTo" id="txtTo">
          <option>Black</option>
          <option>White</option>
          <option>Red</option>
          <option>Blue</option>
          <option>Purple</option>
          <option>Brown</option>
        </select></td>
      </tr>
      <tr>
        <td><div align="right">Price</div></td>
        <td><input name="txtPrice" type="text" id="txtPrice"></td>
      </tr>
      <tr>
        <td height="39"><div align="center">
          <input name="btnBuy" type="submit" id="btnBuy" value="Buy Now">      
        </div></td>
        <td><div align="center">
            <input type="reset" name="Submit2" value="Reset">
</div></td>
      </tr>
    </table>
  <em>  </em>  </div>
</form>
</body>
</html>




<?php

	$con = mysqli_connect("localhost","root","","Sakshi");
		
		
	if($_POST['btnBuy']);
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$from = $_POST['txtFrom'];
			$to = $_POST['txtTo'];
			$price = $_POST['txtPrice'];
			
			$flight = "insert into Flight values('$id','$name','$from','$to','$price')";
			$data = mysqli_query($con, $flight);
				if($data)
					{	
						echo "<script>alert('SuccessFull')</script>";
					}
				else
					{	
						echo "<script>alert('UnsuccessFull')</script>";
					}
		}
?>