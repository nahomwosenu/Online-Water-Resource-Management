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
  <?php
if (!isset($_SESSION)) {
  session_start();
}
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
		
        <li><a href="background.html">About Us </a>
		<ul class="sub-menu">
		<li><a href="background.html">Background</a></li>
		<li><a href="mission.html">Misson</a></li>
		<li><a href="mission.html">Map & Diraction</a></li>
		
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
        <li><a href="EmployeeRegistration.php">Service</a>
		<ul class="sub-menu">
		<li><a href="EmployeeRegistration.php"> Registration</a></li>
		<li><a href="login.html"> Maintanance </a></li>
		<li><a href="login.html"> Audit Bill payment</a></li>
		</ul>
		</li>
	
        <li><a href="contact.html">Contact Us</a></li>
		
      </ul>
    </div><!--close menubar-->	
	<div id="sub-menu">
	
	<font color="#000000"> Language </font> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
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
</div><!--close header-->

	
    
	<div id="site_content">		   
	  <div class="sidebar_container">
	    <!--close sidebar-->
	    <div class="sidebar">
          <div class="sidebar_item">
            <div class="sidebar_item">
             <h2>Welcome</h2>
			<p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
          </p>
          </div><!--close sidebar_item--> 
            <h2>Maintenance</h2>
            <h3><a href="AssignShow.php">Received Maintenace</a></h3>
            
            
            <h3><a href="CustomerInformation.php">Customer Information</a></h3>
			 <div class="sidebar_item">
            <h2>Public Sites</h2>
             <h3><a href="www.twitter.com">Twitter</a></h3>
			   <h3><a href="www.gmail.com">Gmail</a></h3>
			    <h3><a href="www.yahoo.com">Yahoo</a></h3>
          </div><!--close sidebar_item--> 
           <div class="sidebar_item">
            <h2><a href="../index.php">Logout</a></h2>
            
          </div><!--close sidebar_item--> 
          </div>
	      <!--close sidebar_item-->
        </div>
	    <p>
	      <!--close sidebar-->
	    </p>
	    <p>
	      <!--close sidebar-->
          <!--close sidebar-->
          </p>
	  </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Message from Manager </h1> 
	      <p align="justify"><span class="style1">Message</span>: It is known that, in the past two decades our region as well as the country as a whole has recorded a significant economic and social development which has never seen before in our history. his achievements assuring that, how far the dimension of our policies and strategies are developmental and the directions we follow are appropriate to our situation and objective realities. </p>
		  
		  <div class="content_image">
		    <img src="images/ba.jpg" alt="image1" width="199" height="162"/>	      </div>
		  <p align="justify"> Now by summarizing and organizing the past years experiences the government has prepared the new five years Growth and Transformation Plan aiming to enhance the pace of the ongoing economic and social development of the country. Following this, the Southern Nation National Regional State on his part, Prepared the regional five years GTP based on the Region’s situation and objectives realities. </p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>
		  
		  <div class="content_image">
		    <img src="images/33.jpg" alt="image1" width="202"/>	      </div>
		  <p align="justify">Then the regional state forwarded the plan to all bodies and sectors to take their part. Here, I want to notice that, the successes of GTP mean a proud and prestige for all citizens in front of the international communities. So every citizen and stakeholders should give their own contribution for its successes.</p>
		 
          <br style="clear:both"/><!--close content_container-->
          <!--close content_container-->
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
