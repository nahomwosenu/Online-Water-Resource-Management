<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Customer Managment System for AMCWSS</title>
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
var load = window.open ('indexx.php','_self',false);

}
function loadEng() {
var load = window.open ('index.php','_self',false);

}
// -->
</script>
<script type="text/javascript">
<!--
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

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
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
        <li class="current">
          <div align="left"><a href="index.php">Home</a></div>
        </li>
		
        <li>
          <div align="left"><a href="background.php">About Us </a>
                <ul class="sub-menu">
                      <li>
                        <div align="left"><a href="background.php">Background</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="mission.html">Misson</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Diraction</a></div>
                  </li>
                </ul>
          </div>
        </li>
        <li>
          <div align="left"><a href="recordOffice.html">Offices</a>
                <ul class="sub-menu">
                      <li>
                        <div align="left"><a href="recordOffice.html">Record office</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="billOffice.html">Bill office</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="accountant.html"> Accountant</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="ict.html"> ICT office</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="techncian.html"> Technician Office</a></div>
                  </li>
                </ul>
          </div>
        </li>
        <li>
          <div align="left"><a href="NewCustRegstration.php">Service</a>
                <ul class="sub-menu">
                      <li>
                        <div align="left"><a href="NewCustRegstration.php"> Registration</a></div>
                  </li>
				  
                  <li>
                    <div align="left"><a href="index.php"> Maintanance </a></div>
                  </li>
                  <li>
                    <div align="left"><a href="index.php"> Bill payment</a></div>
                  </li>
                </ul>
          </div>
        </li>
	
        <li><div align="left"><a href="contact.html">Contact Us</a></div></li>
		
      </ul>
    </div><!--close menubar-->	
   <div id="sub-menu">
	
	  <span class="style1"><font color="#000000"> Language </font></span> 
	  
	    <select name="language" size="1" >
		<option value="eng" onClick="loadEng()">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>		     
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
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
		  <h1>Message from Manager </h1> 
	      <p align="justify"><span class="style1">Message</span>: It is known that, in the past two decades our region as well as the country as a whole has recorded a significant economic and social development which has never seen before in our history. his achievements assuring that, how far the dimension of our policies and strategies are developmental and the directions we follow are appropriate to our situation and objective realities. </p>
		  
		  <div class="content_image">
		    <img src="images/ba.jpg" alt="image1" width="199" height="162"/>	      </div>
		  <p align="justify"> Now by summarizing and organizing the past years experiences the government has prepared the new five years Growth and Transformation Plan aiming to enhance the pace of the ongoing economic and social development of the country. Following this, the Southern nation Nationality Regional State on his part, Prepared the regional five years GTP based on the Region’s situation and objectives realities. </p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>
		  
		  <div class="content_image">
		    <img src="images/33.jpg" alt="image1" width="202"/>	      </div>
		  <p align="justify">Then the regional state forwarded the plan to all bodies and sectors to take their part. Here, we want to notice that, the successes of GTP mean a proud and prestige for all citizens in front of the international communities. So every citizen and stakeholders should give their own contribution for its successes.</p>
		 
          <br style="clear:both"/><!--close content_container-->
          <!--close content_container-->
        </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	  <div class="content_grey_container_box">
		<h4>Events &amp; Announcements</h4>
	    <p> People of arbaminch city are Suggest on the AMWSS are better and good .also ask to </p>
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
	    <p> Mr. Ashik says this project is huge and have agrate role to eradicate </p>
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
