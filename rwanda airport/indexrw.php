<?php
include('connect.php');
session_start();

if(isset($_POST['Submit']))
{
$emai=$_POST['email'];
$password=$_POST['password'];

$sql=mysql_query("select * from register_tb where email='$email' AND password='$password'");
if(mysql_num_rows($sql)==0){
$report= header("location: login_error.php");
}
else{
$row = mysql_fetch_array($sql);
$_SESSION['username'] == $row[username];
$_SESSION['password'] == $row[password];

$report=header("location: home.php");
}}
?><style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {color: #FF0000}
-->
</style>
<?php echo $report;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index,rwanda national airport management</title>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<div align="center">
  <table width="888" border="0">
    <tr>
      <td height="88" colspan="3"><table width="907" height="84" border="0">
        <tr>
          <td width="1239" height="80" colspan="6" align="center" bgcolor="#996633"><h1 style="text-align:center;font-family:forte;font-size:40px;color:#990000"><img src="images/kigali.jpg" alt="stev" width="113" height="56" align="left" />Rwanda National Airport</h1></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td width="8" height="126">&nbsp;</td>
      <td width="445">&nbsp;</td>
      <td width="446"><table width="420" height="145" border="0" align="right"><?php echo $report;?><form id="form" name="form" method="post" action="" onSubmit="return validated()">
        <tr>
          <td height="67" colspan="4"style="text-align:left;font-family:Lucida Sans Unicode, Lucida Grande, sans-serif;font-size:40px;color:black" >Login</td>
          </tr>
        <tr>
          <td width="46"><strong class="rw">Emai</strong>l</td>
          <td width="148">
            <label for="email"></label>
           <input type="text" name="email" id="email" placeholder="Your Email" required />
            </td>
          <td width="63" class="rw"><strong>Password</strong></td>
          <td width="145"><span id="sprypassword2">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Your Password" required />
            <span class="passwordRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Login" />
          </td>
          </tr>
        <tr></tr>
        </form>
      </table></td>
    </tr>
    <tr>
      <td height="211">&nbsp;</td>
      <td><table width="428" height="381" border="0" align="left"><form id="form2" name="form2" method="post" action="connect.php"> 
        <tr>
          <td height="79" colspan="4"><div style="text-align:right;font-family:Lucida Sans Unicode, Lucida Grande, sans-serif;font-size:25px;color:black">SignUp </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="437" rowspan="9" background="images/kigali.jpg" class="stev">
          <p style="text-align:center;font-family:times new Georgia, 'Times New Roman', Times, serif;font-size:30px;color:red">Hello Dear <br />
            You Can Fly<br />
            To Any<br />
            Destination of your Choice</p></td>
            
          <td width="4">&nbsp;</td>
          <td width="37" height="35" class="rw"><strong>Sur Name</strong></td>
          
          <td colspan="2">
            <label for="name"></label>
            <input type="text" name="name" id="name" />
          </td>
          </tr>
        <tr>
          <td height="24">&nbsp;</td>
          <td class="rw"><strong>OtherName</strong></td>
          <td colspan="2"><label for="sname"></label>
            <input type="text" name="sname" id="sname" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="24" class="rw"><strong>Sex</strong></td>
          <td width="62"> Male
            <input type="radio" name="sex" id="sex" value="male" />
            <label for="sex"></label></td>
          <td width="104"> Female
            <input type="radio" name="sex" id="sex" value="female" />
            <label for="sex"></label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="24" class="rw"><strong>Country</strong></td>
          <td colspan="2"><select name="country" id="country" >
            <option value="KENYA">Kenya</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Ethiopia">Ethuopia</option>
            <option value="Uganda">Uganda</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Burundi">Burundi</option>
            <option value="South Africa">South Africa</option>
            <option value="Nigeria">Nigeria</option>
            <option value="USA">USA</option>
            <option value="China">China</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="DR Congo">DR Congo</option>
            <option value="France">France</option>
            <option value="Somalia">Somalia</option>
            <option value="Ghana">Ghana</option>
            <option value="UAE">UAE</option>
            <option value="Austria">Austria</option>
            <option value="Australia">Australia</option>
            </select></td>
          </tr>
        <tr>
          <td height="37">&nbsp;</td>
          <td class="rw"><strong>Occupation</strong></td>
          <td colspan="2"><label for="occupation"></label>
            <input type="text" name="occupation" id="occupation" /></td>
          </tr>
        <tr>
          <td height="24">&nbsp;</td>
          <td class="rw"><strong>Telephone</strong></td>
          <td colspan="2"><label for="phone"></label>
            <input type="text" name="phone" id="phone" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="24" class="rw"><strong>Email</strong></td>
          <td colspan="2"><label for="email"></label>
            <input type="text" name="email" id="email" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="24" class="rw"><strong>Password</strong></td>
          <td colspan="2"><span id="sprypassword1">
            <label ></label>
            <input type="password" name="password" id="password" />
            
  </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="left">
            <input type="submit" name="button" id="button" value="Sign" />
            </div></td>
          <td><div align="left"><input type="reset" name="button2" id="button2" value="Reset" />
         
          </div>
         
            <div align="center"></div></td>
          </tr>
          
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        </form>
      </table></td>
      <td width="446"><img src="images/rwan.png" width="435" height="352" alt="rw" /></td>
    </tr>
    
  </table>
</div>
<div align="center">
  <table width="908" border="0">
    <tr>
      <td width="370" bgcolor="#996633">&nbsp;</td>
    </tr>
  </table>
</div>

</body>
</html>