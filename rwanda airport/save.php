
<?php
//connect to server and select database
$con = mysql_connect("localhost","root","");
mysql_select_db("airport_db",$con);
//get values from form
$id = $_POST['id'];
$company = $_POST['company'];
$country = $_POST['country'];
$planes = $_POST['planes'];
$insuarence = $_POST['insuarence'];
$partners = $_POST['partners'];
$phone = $_POST['phone'];
$email = $_POST['email'];



//insert data to table
$sql = "insert into airlines_tb(id , company , country , planes , identity , insuarence , partners , phone , email) VALUES  ('$id','$company','$country','$planes','password','$insuarence','$partners','$phone','$email')";
$result = mysql_query($sql);
//successfully registered
if($result)
{
echo "You Have Been Fully Registered";
}
else
{
//failure
echo "Error Please Try Again";
}
?>