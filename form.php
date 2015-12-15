<?php
include_once('Db.php');
       $button = $_GET [ 'submit' ];
       $search = $_GET [ 'search' ]; 
 
       if( !$button )
             echo "you didn't submit a keyword";
       else {
             if( strlen( $search ) <= 1 )
                    echo "Search term too short";
             else {
                    echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
                    mysql_connect( "localhost","root","") ; 
                    mysql_select_db("kcca");
					$output ='';
 
                    $search_exploded = explode ( " ", $search );
                    $x = 0; 
                    foreach( $search_exploded as $search_each ) {
                           $x++;
                           $construct = "";
                           if( $x == 1 )
                                  $construct .="keywords LIKE '%$search_each%'";
                           else
                                  $construct .="AND keywords LIKE '%$search_each%'";
                    }
 
                    $construct = " SELECT * FROM SEARCH_ENGINE WHERE $construct ";
                    $run = mysql_query( $construct );
 
                    $foundnum = mysql_num_rows($run);
 
                    if ($foundnum == 0)
                           echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar  meaning </br> 3. Please check your spelling"; 
                    else {
                           echo "$foundnum results found !<p>";
 
                           while( $runrows = mysql_fetch_assoc( $run ) ) {
                                  $title = $runrows ['title'];
                                  $desc = $runrows ['description'];
                                  $url = $runrows ['url'];
 
                                  echo "<a href='$url'> <b> $title </b> </a> <br> $desc <br> <a href='$url'> $url </a> <p>";
 
                           }
                    }
 
             }
       }
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<title> form</title>
  	<style type="text/css">
	    ul{
	        padding: 0;
	        list-style: none;
	        background: #FFFFFF;
			 
	    }
	    ul li{
	display: inline-block;
	position: relative;
	line-height: 21px;
	text-align: left;
	background-color: #0099FF;
	border-radius:20px;
	    }
	    ul li a{
	        display: block;
	        padding: 8px 25px;
	        color: #333;
	        text-decoration: none;
			border-radius:20px;
				    }
	    ul li a:hover{
	        color: #;
	        background: #00CCFF;
	    }
	    ul li ul.dropdown{
	        min-width: 125px; /* Set width of the dropdown */
	        background: #F3F3F3F3;
	        display: none;
        position: absolute;
	        z-index: 999;
	        left: 0;
		
	    }
	    ul li:hover ul.dropdown{
	        display: block; /* Display the dropdown */
	    }
	    ul li ul.dropdown li{
	        display: block;
	    }

 
body,td,th {
	color: #000;
	font-size: 18px;
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
    .style1 {
	color: #FFFFFF;
	font-style: italic;
	font-size: 36px;
}
    .style2 {
	color: #FFFFFF;
	font-size: 24px;
}
    .style3 {font-size: 24px}
    body {
	background-color: #0099FF;
}
    </style>
</head>

<body>
<table width="1103" border="0" align="center" border-radius="20px">
  <tr bgcolor="#000000">
    <th scope="col" border-radius="19px"><span class="style1">Welcome to Kampla capital city Website </span> </th>
  </tr>
</table>
<nav>

<div align="right">
  <form id="form1" name="form1" method="post" action="">
    <span class="style3">
    <label class="style3">
    <input name="search" type="text" id="search" size="40" />
    </label>
    </span>
    <label>
      <input name="submit" type="submit" id="submit" value="Search" />
    </label>
  </form>
</div>
<ul>
  <table width="1060" border="0" align="center" cellpadding="2" cellspacing="2" border-radius= "106px">
    <tr>
      <nav>
        <ul>
          <th width="97" height="62" scope="col"><li><a href="Home.php" style="text-decoration: none">Home</a></li></th>
          <th width="112" scope="col"><li><a href="About.php" style="text-decoration: none">About </a></li></th>
          <th width="112" scope="col"><li><a href="Contact.php" style="text-decoration: none">Contact</a></li></th>
          <th width="108" scope="col"><li><a href="KCCCA.php" style="text-decoration: none">KCCA </a></li></th>
		  <th width="95" scope="col"><li><a href="URA.php" style="text-decoration: none">URA</a></li></th>
          <th width="96" scope="col"><li><a href="news.php"  style="text-decoration: none">News</a></li></th>
          <th width="118" scope="col"><li><a href="signu.php" style="text-decoration: none">Sign Up</a></li></th>
          <th width="112"scope="col"><li><a href="Signin.php" style="text-decoration: none">Sign in</a></li></th>
          <th width="154" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
          
        </ul>
      </nav>
    </tr>
</table>
  <table width="1007" height="448" border="0" align="center" bordercolor="#0033FF">
    <tr>
      <td height="419" bgcolor="#FFFFFF"><p>Location</p>
      <p>The headquarters of KCCA are located on <a href="https://en.wikipedia.org/wiki/Nakasero" title="Nakasero">Nakasero Hill</a> in the central business district of Kampala. The headquarters are   immediately southwest of the Uganda Parliament Building. The main   entrance to the KCCA Complex is located on Kimathi Avenue, which comes   off of Parliament Avenue. The coordinates of this building are 0&deg; 18'   54.00&quot;N, 32&deg; 35' 9.00&quot;E (Latitude:0.315000; Longitude:32.585832).<a href="https://en.wikipedia.org/wiki/Kampala_Capital_City_Authority#cite_note-2">[2]</a></p></td>
      <td bgcolor="#FFFFFF"><!-- Start WOWSlider.com BODY section -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
    <li><img src="data1/images/images_4.jpg" alt="images (4)" title="camel raider (4)" id="wows1_0"/></li>
    <li><img src="data1/images/images_5.jpg" alt="images (5)" title="images (5)" id="wows1_1"/></li>
    <li><img src="data1/images/images_6.jpg" alt="images (6)" title=" KCCA workers (6)" id="wows1_2"/></li>
    <li><img src="data1/images/images_7.jpg" alt="images (7)" title="New building (7)" id="wows1_3"/></li>
    <li><img src="data1/images/images_8.jpg" alt="images (8)" title="Kamplala (8)" id="wows1_4"/></li>
    <li><img src="data1/images/images_9.jpg" alt="images (9)" title="new construction (9)" id="wows1_5"/></li>
    <li><img src="data1/images/images_10.jpg" alt="images (10)" title="KCCA Bus  (10)" id="wows1_6"/></li>
    <li><img src="data1/images/images_11.jpg" alt="images (11)" title="market way (11)" id="wows1_7"/></li>
    <li><a href="http://wowslider.net"><img src="data1/images/images.jpg" alt="jquery slider" title="images" id="wows1_8"/></a></li>
    <li><img src="data1/images/images_2.jpg" alt="images (2)" title="images (2)" id="wows1_9"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
      <a href="#" title="images (4)"><span><img src="data1/tooltips/images_4.jpg" alt="images (4)"/>1</span></a>
      <a href="#" title="images (5)"><span><img src="data1/tooltips/images_5.jpg" alt="images (5)"/>2</span></a>
      <a href="#" title="images (6)"><span><img src="data1/tooltips/images_6.jpg" alt="images (6)"/>3</span></a>
      <a href="#" title="images (7)"><span><img src="data1/tooltips/images_7.jpg" alt="images (7)"/>4</span></a>
      <a href="#" title="images (8)"><span><img src="data1/tooltips/images_8.jpg" alt="images (8)"/>5</span></a>
      <a href="#" title="images (9)"><span><img src="data1/tooltips/images_9.jpg" alt="images (9)"/>6</span></a>
      <a href="#" title="images (10)"><span><img src="data1/tooltips/images_10.jpg" alt="images (10)"/>7</span></a>
      <a href="#" title="images (11)"><span><img src="data1/tooltips/images_11.jpg" alt="images (11)"/>8</span></a>
      <a href="#" title="images"><span><img src="data1/tooltips/images.jpg" alt="images"/>9</span></a>
      <a href="#" title="images (2)"><span><img src="data1/tooltips/images_2.jpg" alt="images (2)"/>10</span></a>
      </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">image slider</a> by WOWSlider.com v8.6</div>
  <div class="ws_shadow"></div>
  </div>	
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
  <!-- End WOWSlider.com BODY section --></td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td width="256" height="23" bgcolor="#000000" border-radius="">&nbsp;</td>
      <td width="637" bgcolor="#000000"><span class="style2">Copyright @ajaknyual Web Designer </span></td>
      <td width="100" bgcolor="#000000">&nbsp;</td>
    </tr>
</table>
<p>&nbsp;</p>
</nav>
</ul>
</body>
</html>
