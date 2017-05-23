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
  <script language="javascript">

function load() {
var load = window.open ('NewCustRegstration.html','_self',false);

}
// -->
</script>
<script type="text/javascript">
tday =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday = d.getDay();
nmonth = d.getMonth();
ndate = d.getDate();
nyear = d.getYear();
nhour = d.getHours();
nmin = d.getMinutes();
nsec = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

if(nhour == 0) {ap = " AM";nhour = 12;}
else if(nhour <= 11) {ap = " AM";}
else if(nhour == 12) {ap = " PM";}
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
}
-->
</style>
</head>

<body>
 <div id="main">
 <?php
session_start();
?>
  <div id="header">
	   <div id="banner">
	    
	    <!--<div id="welcome_slogan"> -->
		 
	      <img width="918" height="105" src="images/B1.PNG">   
	   <!--</div> <!--close welcome_slogan-->
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
                 <li><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Direction</a></li>
                </ul>
          </div>
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
	
        <li><div align="left"><a href="contact.html">Contact Us</a></div></li>
		
      </ul>
    </div><!--close menubar-->	
	<div id="sub-menu">
	
	<font color="#000000"> Language </font> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
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
</div><!--close header-->

	
    
	<div id="site_content">
	  <!--close sidebar_container-->
<div id="content">
        <div class="content_item">
		   <h1 align="left">Customer Meter Read Information </h1>
		     <table width="90" border="1" bordercolor="#FFFFFF">
              <tr bgcolor="#FFFFFF">
                <td width="80"><div align="center"><span class="style12 style1"><strong><a href="kebele1_8.php">Home</a></strong></span></div></td>                           
              </tr>
            </table>
		  
		     <form id="form1" method="post" action="">
            <?php
		  
						//if(isset($_POST['Submit']))
		
						//$kebele=$_POST['kebele'];
						require_once('database.php');
					
						$sql="select * from employee_meter_reading_data";
						
						$result=mysql_query($sql);
						if(!$result)
						die("unable to exectract data values from the table".mysql_error());
	else{
?>	
<?php
if(mysql_num_rows($result) >= 1)
{
?>
    <table  border="1">
      <tr>
        <td ><strong>Employee Reading ID</strong></td>
        <td ><strong>Employee ID</strong></td>
        <td ><strong>Customer ID</strong></td>
        <td ><strong>Reading_Date</strong></td>
        <td ><strong>Previous Read</strong></td>
	    <td ><strong>Current Read</strong></td>
		<td ><strong>Meter Size</strong></td>
		<td ><strong> Meter number</strong></td>
       <td ><strong>Consumption</strong></td>
	    <td ><strong>Fixed Charge</strong></td>
		<td ><strong>Usage Charge</strong></td>
		<td ><strong>Tax</strong></td>
       <td ><strong>Total</strong></td>
      </tr>
	  
<?php
  while($row = mysql_fetch_array($result))
  
     {
	 
       echo "<tr>";
       echo "<td>&nbsp;" . $row['Employee_Reading_ID'] . "</td>";
       echo "<td>&nbsp;" . $row['Employee_ID'] . "</td>";
	   echo "<td>&nbsp;" . $row['Customer_ID'] . "</td>";
	   echo "<td>&nbsp;" . $row['Reading_Date'] . "</td>";
	   echo "<td>&nbsp;" . $row['Previous_Read']. "</td>";
       echo "<td>&nbsp;" . $row['Current_Read'] . "</td>";
       echo "<td>&nbsp;" . $row['Meter_Size'] . "</td>";
	   echo "<td>&nbsp;" . $row['Meter_Number'] . "</td>";  
       echo "<td>&nbsp;" . $row['Consumtion'] . "</td>";
	   echo "<td>&nbsp;" . $row['Fixed_Charge'] . "</td>";
       echo "<td>&nbsp;" . $row['Usage_Charge'] . "</td>";
	   echo "<td>&nbsp;" . $row['Tax'] . "</td>";  
       echo "<td>&nbsp;" . $row['Total'] . "</td>";	   
       echo "</tr>&nbsp;";
    }
	  echo "</table>";
} 
else
      {
	echo "<h4><font color='red'>No Records Found </font></h4>";
     }}
?>	   
          </form>
	
        </div>
        <!--close content_item-->
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
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 </a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | <a href="http://www.pdphoto.org/">Images</a> | www.amcwss.com</div>
  <!--close footer-->  
  
</body>
</html>
