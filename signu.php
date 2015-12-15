<?php
include_once('Db.php');
//make code insert data to database
if (isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = mysql_query("INSERT INTO user(fname,lname,gender,email,password)VALUES('$fname','$lname','$gender','$email','$password')");
	if($sql)
	{
		echo 'Successful insert.....!';
		}
		else
		{
			echo 'error occur';
			}
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color: #000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body {
	background-color: #CCC;
}
</style>

 <div style="border:1px #000 dashed; width:1060; height:80px; margin:auto; text-align:center;font-size:36px; color:#003399; background:#09F">
 <div align="center"> Welcome to Registration page</div>
</div>
 <body>
<table width="390" >

<form action="" method="post" enctype="multipart/form-data">
<tr>
<td> first name</td>
<td><input type="text" name="fname" value=""/></td>
</tr>
 
<tr>
<td> last name</td>
<td><input type="text" name="lname" value=""/></td>
</tr>
 
<tr>
<td> gender</td>
<td><input type="text" name="gender" value=""/></td>
 </tr>
 
 <tr>
 <td> email</td>
<td><input type="text" name="email" value=""/></td>
</tr>
 
 <tr>
 <td> password</td>
   <td><input type="text" name="password" value=""/></td>
 </tr>
 
 <tr>
<td><input type="submit" name="submit" value="submit" /></td>
</tr>
 
<tr>
<td><li><a href="Log.php" style="text-decoration: none">Login Now</a></li></td>
</tr>
</form>
<td> </td>
</br>
</table>
<p>&nbsp;</p>
</body>

</html>