
<?php
//connect to server and select database
$con = mysql_connect("localhost","root","");
mysql_select_db("airport_db",$con);
//get values from form
$id = $_POST['id'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$sex = $_POST['sex'];
$country = $_POST['country'];
$occupation = $_POST['occupation'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$passwordl = $_POST['password'];


//insert data to table
$sql = "insert into register_tb(id , name , sname , sex , country , occupation , phone , email, password) VALUES  ('$id','$name','$sname','$sex','$country','$occupation','$phone','$email','password')";
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