<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Customer Information Managment System for AMCWSS</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style5 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: medium; }
.style6 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
}
.style7 {
	font-family: "Times New Roman", Times, serif;
	color: #000099;
	font-size: medium;
	font-weight: bold;
}
.style8 {font-size: medium}
-->
  </style>
</head>

<body>
  <div id="main">
   <?php
if (!isset($_SESSION)) {
  session_start();
}
?>
    <div id="header">
	  <div id="banner">
	  <!--<div id="welcome_slogan"> -->
	  <img width="918" height="105" src="images/B1.PNG" />
	  <!--</div> <!--close welcome_slogan-->
	  </div>
	  <!--close banner-->
	  <!-->  <div id="welcome_slogan">-->
	     <!-- <h1>Bahir Dar City Water Supply Service </h1>-->
    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="navigation">
   <ul>
        <li class="current"><a href="index.php">Home</a></li>
		
        <li>
                      <div align="left"><a href="background.html">About Us </a>
                        <ul class="sub-menu">
                          <li>
                            <a href="background.html">Background</a></li>
                          <li>
                            <a href="mission.html">Misson</a></li>
                          <li>
                           <div align="left"><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Direction</a></div></li>
                        </ul>
                      </div>
                      <ul class="sub-menu">
          </ul>
	 </li>
        <li>
          <div align="left"><a href="recordOffice.html">Offices</a>
                <ul class="sub-menu">
                      <li>
                        <a href="recordOffice.html">Record office</a></li>
                  <li>
                    <a href="billOffice.html">Bill office</a></li>
                  <li>
                    <a href="accountant.html"> Accountant</a></li>
                  <li>
                    <a href="ict.html"> ICT office</a></li>
                  <li>
                    <a href="tech.html"> Technician Office</a></li>
                </ul>
          </div>
        </li>
        <li>
          <div align="left"><a href="EmployeeRegistration.php">Service</a>
                <ul class="sub-menu">
                      <li>
                        <div align="left"><a href="EmployeeRegistration.php"> Registration</a></div>
                      </li>
                  <li>
                    <div align="left"><a href="login.html"> Maintanance </a></div>
                  </li>
                  <li>
                    <div align="left"><a href="login.html"> Audit Bill payment</a></div>
                  </li>
                </ul>
          </div>
        </li>
	
        <li>  <div align="left"><a href="contact.html">Contact Us</a></div></li>
		
      </ul>
    </div><!--close menubar-->	
    
	<div id="sub-menu">
	
	  <span class="style1"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">????(Amharic)</option>
      	 
    </select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
   </div>
<div id="site_content">
            
       <ul class="slideshow">
         <li class="show"><img width="880" height="250" src="images/3.jpg" alt="&quot;Main Get Way of AMWSS office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg" alt="&quot;Somewhere water pumping project for public&quot;" /></li>
		<li><img width="880" height="250" src="images/2.jpg" alt="&quot;&quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpeg" alt="&quot;Structure of water read bulb&quot;" /></li>
		<li><img width="880" height="250" src="images/7().jpg" alt="&quot;Office in amwss &quot;" /></li>
      </ul>   
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
  <div class="sidebar_item">
    
	 <h2>Welcome</h2><p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
        </p>
    <h2>Customer</h2>
    <h3> <a href="CustmerUpdate.php">Customer Modify </a></h3>
    <h2>Bill</h2>
    <h3><a href="BillValue.php">Audit and Analysis</a></h3>
    <h3><a href="index.php">Bill Collect</a></h3>
    <h3><a href="Debitt.php">Debit</a></h3>
    <h2>Report</h2>
   
    <h3><a href="Billreport.php">View </a> </h3>
    <h2><a href="../index.php">Logout</a></h2>
  </div>
  <!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
</div>
	  <!--close sidebar_container-->		 
	 
	  
		  <form id="form1" method="post" action="CustomerValueSearch.php">
		   <fieldset>
		    <legend class="style7">Update Customer Information</legend>
		    <p>&nbsp;</p>	
		     <table width="626" height="264">
                <tr>
                  <td width="230" height="24"><div align="right"><span class="style5">Customer ID: </span></div></td>
                  <td width="216"><label>
				  
                   <select name="select">
				    
<?php
require_once('database.php');
$sql="select Customer_ID from customer";
$res=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($res))
{
echo "<option value=".$row['Customer_ID'].">".$row['Customer_ID']."</option>";
}
?>
</select></label></td>

<td width="164" align="left" height="35"><span class="style5">
<input type="submit" name="Submit" value="Search" /></span></td>
</td>
</tr>
<tr>
<td width="164" height="24"><span class="style5">First_Name </span></td>
<td width="448"><label>
<input type="text" name="fname"/>
</label></td>
<td width="448">&nbsp;</td>
              </tr>
                <tr>
<td height="25"><span class="style5">Last_Name </span></td>
                  <td><label>
                  <input type="text" name="lname" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                
                <tr>
                  <td height="31"><span class="style5">Age</span></td>
                  <td><label>
                  <input type="text" name="age"/>
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><span class="style5">Kebele</span></td>
                  <td><label>
                  <input type="text" name="kebele"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="33"><span class="style5">Phone_Number </span></td>
                  <td><label>
                  <input type="text" name="phone" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36"><span class="style5">House_Number </span></td>
                  <td><label>
                  <input type="text" name="house"/>
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" height="35"><span class="style5">
                    <input type="submit" name="update" value="Update" />
                  </span></td>
                  <td><label></label>
                  <span class="style5">
                    <label>
                    <input type="submit" name="delete" value="Delete" />
                    </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
           </table>
		  </fieldset>
          </form>
		  
		  
		  
        </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
		<div id="content_grey">
	  <div class="content_grey_container_box">
		<h4>Events &amp; Announcements</h4>
	    <p> People of Arbaminch city are Suggest on the AMWSS are better and good .also ask to </p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_box">
       <h4>Latest News</h4>
	    <p>AMWSS  has announced the new project that sustanability of water around Arbaminch city.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_boxl">
		<h4>Latest Projects</h4>
	    <p> Mr. Ashok says this project is huge and have agrate role to eradicate </p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  </div><!--close main-->
  
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
