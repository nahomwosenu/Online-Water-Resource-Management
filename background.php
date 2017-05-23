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
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: medium;
}
-->
  </style>
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
</head>

<body>
 <div id="main">
  <div id="header">
	  <div id="banner">
	    
	    <!--<div id="welcome_slogan"> -->
		 
	     <img width="918" height="105" src="images/bann.jpg">   
	   <!--</div> <!--close welcome_slogan-->
	  </div><!--close banner-->
   </div><!--close header-->
	<div id="navigation">
      <ul>
        <li class="current"><a href="index.php">Home</a></li>
		
        <li><a href="background.php">About Us </a>
		<ul class="sub-menu">
		<li><a href="background.php">Background</a></li>
		<li><a href="mission.html">Misson</a></li>
		<li><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Direction</a></li>
		</ul>
		</li>
        <li><a href="recordOffice.html">Offices</a>
		<ul class="sub-menu">
		<li><a href="recordOffice.html">Record office</a></li>
		<li><a href="billOffice.html">Bill office</a></li>
		<li><a href="accountant.html"> Accountant</a></li>
		<li><a href="ict.html"> ICT office</a></li>
		<li><a href="techncian.html"> Technician Office</a></li>
		</ul>
		</li>
        <li><a href="NewCustRegstration.php">Service</a>
		<ul class="sub-menu">
	<li><a href="NewCustRegstration.php"> Registration</a></li>
		<li><a href="index.php"> Maintanance </a></li>
		<li><a href="index.php"> Bill payment</a></li>
		</ul>
		</li>
		<li><a href="NewCustRegstration.php">Registration</a></li>
        <li><a href="contact.html">Contact Us</a></li>
		
      </ul>
    </div><!--close menubar-->	
	<div id="sub-menu">
	
	  <span class="style1"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   
   <?php
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
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Login</h2>
             <form action="login.php" method="post" id="form1" onsubmit="MM_validateForm('username','','R','password','','R');return document.MM_returnValue">
            
			User Name:<?php if(isset($_GET['fail'])) echo "<font color=\"red\"><b> Login Error</b></font>"; ?> <input type="text" name ="username" >
			Password: <input type="password" name ="password" >
			<input type="Submit" name="send" value ="sign In" >
			
			<a href="NewUserAccount.php">New User Account  </a>
			</form>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 
		   		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Announcements</h2>
            <h3>May 2017 </h3>
            <p>The final implemntation of this project will finished at the final week of may 2017. So the project...</p>   
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Background for AMWSS  </h1> 
	      <p align="justify"><span class="style1">Background</span>: As we know, today our world is under the control of technology because of this reason the world are related each other. Our country is one part of the world but, we are too late  according to this technology as compare as others western countries. Even if our country is not developed in this project, try to change the Manual office system of Arbaminch water supply service office (AMWSSO) into computerized web based system using today’s technology. </p>
		  
		  <div class="content_image">
		    <img src="images/ba.jpg" alt="image1" width="199" height="162"/>	      </div>
		  <p align="justify"> AMWSSO has many activities. Such as, Customer registration, calculating bill based on their customer information and the likes.
When we see how the new customer joins the organization,  it requires physical present to the office.  The organizations file keeping method is also poor,
i.e. thedocument can be easily damaged because of its traditional way of storing method. So, the project try to reduce this problem and enable
the office system to have very fast service to their customer by designing web based service management system for them. </p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>
		  
		  <div class="content_image">
		    <img src="images/33.jpg" alt="image1" width="202"/>	      </div>
		  <p align="justify">Then the regional state forwarded the plan to all bodies and sectors to take their part. Here, We want to notice that, the successes of GTP mean a proud and prestige for all citizens in front of the international communities. So every citizen and stakeholders should give their own contribution for its successes.</p>
		 
          <br style="clear:both"/><!--close content_container-->
          <!--close content_container-->
        </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	  <div class="content_grey_container_box">
		<h4>Events &amp; Announcements</h4>
	    <p> People of Arba minch city are Suggest on the AMWSS are better and good .also ask to </p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_box">
       <h4>Latest News</h4>
	    <p>AMWSS  has announced the new project that sustanability of water around Arba minch city.</p>
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
