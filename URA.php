<?php
include_once('Db.php');
//make code insert data to database
if(isset($_POST['Save'])){
 
	$company = $_POST['company'];
	$address = $_POST['address'];
	$invo_no = $_POST['invo_no'];
	$date   = $_POST['date'];
	$Soldto = $_POST['Soldto'];
	$Shipto  = $_POST['Shipto'];
	$sale_person =$_POST['sale_person'];
	$p_O_box =$_POST['p_O_box'];
	$ship_dat = $_POST['ship_dat'];
	$ship_way = $_POST['ship_way'];
	$terms = $_POST['terms'];
	$ref = $_POST['ref']; 
	}
	$sql = mysql_query("INSERT INTO invoice(company,address,invo_no,date,Soldto,Shipto,sale_person,p_O_box,ship_dat,ship_way,terms,ref)VALUES('$company','$address','$invo_no','$date','$Soldto','$Shipto','$sale_person','$p_O_box','$ship_dat','$ship_way','$terms','$ref')");
	 
	if($sql)
	{
		echo 'Successful insert.....!';
		}
		else
		{
			echo 'error occur';
			}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>URA </title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="995" border="0" align="center" bordercolor="#000000" border-radius="20px">
  <tr>
    <th width="989" bgcolor="#000000" scope="col" border-radius="20px"><h2><span class="style1">Uganda Revenue Authority In Voice form </span></h2></th>
  </tr>
</table>
<hr width="995" />
<p><a href="form.php" style="text-decoration:none">Back to main</a> </p>
<table width="971" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <th width="888" height="378" scope="col"><p>&nbsp;</p>
      <table width="613" border="0">
        <tr>
		<form action="URA.php" method="post" />
          <th width="91" scope="col"><div align="left">Comp_name:</div></th>
		  <td width="180"><input type="text" name="company" value=""/></td>
          <th width="101" scope="col"><div align="left">sale person </div></th>
          <th width="223" scope="col"><div align="left">
            <input type="text" name="sale_person"/>
          </div></th>
        </tr>
        <tr>
          <th scope="row"> <div align="left">Address </div></th>
		  <td><textarea name="address"></textarea></td>
          <td>P O Box </td>
		  <th width="223" scope="col"><div align="left">
		    <input name="p_O_box" type="text" id="p_O_box"/>
	      </div></th>
        </tr>
        <tr>
          <th scope="row"><div align="left">invoice_no</div></th>
		  <td><input type="text" name="invo_no"/></td>
          <td>shipped date </td>
		  <th width="223" scope="col"><div align="left">
		    <input type="text" name="ship_dat"/>
	      </div></th>
        </tr>
        <tr>
          <th scope="row"><div align="left">Date</div></th>
		  <td><input type="text" name="date"/></td>
          <td>Shippment way </td>
		  <th width="223" scope="col"><div align="left">
		    <input type="text" name="ship_way"/>
	      </div></th>
        </tr>
        <tr>
          <th scope="row"><div align="left">Sold to </div></th>
		  <td><input type="text" name="Soldto"/></td>
          <td>Terms</td>
		  <th width="223" scope="col"><div align="left">
		    <input type="text" name="terms"/>
	      </div></th>
        </tr>
        <tr>
          <th><div align="left">Ship to </div></th>
          <td><input type="text" name="Shipto"/></td>
          <td>Refernce</td>
		  <th width="223" scope="col"><div align="left">
		    <input type="text" name="ref"/>
	      </div></th>
        </tr>
        <tr>
          <th>&nbsp;</th>
		  <td><form id="form1" name="form1" method="post" action="">
		    <label>
		      <input type="submit" name="Save" value="Save" id="Save" />
		      </label>
		    <label>
		    <input type="button" name="Cancel" value="Cancel" />
		    </label>
		  </form></td>
		 
		  <table width="844" cellpadding="10" cellspacing="10" border="1" bgcolor="#fff">
		  <tr>
		  <td><strong>id</strong></td>
		   <td><strong>Company</strong></td>
		    <td><strong>address</strong></td>
			 <td><strong>invoice_no<strong></td>
			  <td><strong>date</strong></td>
			   <td><strong>saleto</strong></td>
			    <td><strong>ship_to</strong></td>
				 <td><strong>saleperson</strong></td>
				 <td><strong>PO box</strong></td>
				 <td><strong>ship_dat</strong></td>
				   <td><strong>ship_by<strong></td>
				    <td><strong>Terms</strong></td>
					<td><strong>reference<strong></td>
				    <td><strong>operation</strong></td>
				   
		  
		  </tr>
		  </form>  
 <form name="search_form" method="post" action="">
 <input type="text" name="search_me" size="30" value=""/>
<input type="submit" name="search" value="search data..."/>
 
</form>
		     <?php
		 $key="";
	if(isset($_POST['search_me']))
		$key=$_POST['search_me'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM invoice WHERE company like '%$key%' ");
	else
    		$sql_sel=mysql_query("SELECT * FROM invoice");
			$i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    	?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
			    <td><?php echo $row['inv_id'];?></td>
            <td><?php echo $row['company'];?></td>
			 <td><?php echo $row['address'];?></td>
			   <td><?php echo $row['invo_no'];?></td>
			   <td><?php echo $row['date'];?></td>
			   <td><?php echo $row['Soldto'];?></td>
			   <td><?php echo $row['sale_person'];?></td>
			   <td><?php echo $row['p_O_box'];?></td>
			   <td><?php echo $row['ship_dat'];?></td>
		        <td><?php echo $row['ship_way'];?></td>
			   <td><?php echo $row['terms'];?></td>
			   <td><?php echo $row['ref'];?></td>
            <td><a href="edit.php">Update</a>|<a href="Delete.php">Delete</a></td>
         
             
        </tr>
    <?php	
    }
    ?>

	 
		  </table>
		   
           
</table>
 
</body>
</html>
