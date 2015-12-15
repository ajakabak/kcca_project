
<?php
//including the database connection file
include("Db.php");

//getting id of the data from url
$inv_id = $_GET['$inv_id'];

//deleting the row from table
$result = mysql_query("DELETE FROM invoice WHERE inv_id='$inv_id'");

//redirecting to the display page (URA.php in our case)
header("Location:URA.php");
?>