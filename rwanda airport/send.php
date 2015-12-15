
<?php
//connect to server and select database
$con = mysql_connect("localhost","root","");
mysql_select_db("airport_db",$con);
//get values from form
$id = $_POST['id'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$identity = $_POST['identity'];
$profession = $_POST['profession'];
$experiance = $_POST['experiance'];
$phone = $_POST['phone'];
$email = $_POST['email'];



//insert data to table
$sql = "insert into airlines_tb(id , name , lname , gender , nation , identity , profession , experiance, phone ,  email) VALUES  ('$id','$name','$lname','$gender','nation','$identity','$profession','$phone','$experiance','$email')";
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