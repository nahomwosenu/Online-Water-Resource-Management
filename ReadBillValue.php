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
  <link rel="stylesheet" type="text/css" href="demo/css/datePicker.css" />
  <script src="demo/js/jquery-1.6.1.min.js" type="text/javascript"></script>
  <script src="demo/js/jquery.datePicker-min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(window).ready(function(){
  $('#date-pick').datePicker({clickInput:true});
});
</script>
  <style type="text/css">
<!--
.style5 {font-size: medium; font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style6 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
}
.style7 {
	font-size: medium;
	font-style: italic;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	color: #000099;
}
.style8 {color: #fff}
-->
  </style>
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
		<li><a href="ict.html"> ICT Office</a></li>
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
	
	  <span class="style5"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">????(Amharic)</option>
      	 
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
		  
		  <h2> <a href="logout.php" class="style8">Logout</a></h2>
		   
		  
		  <p>
		    <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
	      </p>
		  <p>&nbsp;  </p>
		</div>
          <div class="sidebar_item">
		  <h2>Application</h2>
            <h3> <a href="ReadBillValue.php">Read Bill Value</a></h3>
			 <h3><a href="MaintenanceOrder.php">New Maintenance Order</a></h3>
			  <h3><a href="MeterRead.php">Meter Reading</a></h3>
			  <h3><a href="index.php">Message Reading</a></h3>
            
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Custemer Bill Payment Information </h1>
		                           
										  


		  <form id="form1" method="post" action="ReadBillValueResult.php">
		    <fieldset>
		    <legend class="style7">Bill Payment Information Form </legend>
		    <p>&nbsp;</p>
		    <table width="626" height="306">
                <tr>
                  <td width="154" height="24"><div align="right"><span class="style5">Select Date </span></div></td>
                  <td width="191"><label>
                    <input type="text" name="date" id="date-pick"/>
                  </label></td>
                  <td width="265"><label>
                    <input type="submit" name="Submit" value="Search" />
                  </label></td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Customr_ID </span></div></td>
                  <td><label>
                    <input type="text" name="customerid" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Previouse Read </span></div></td>
                  <td><label>
           <input type="text" name="BillPreviouseRead" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Current Read </span></div></td>
                  <td><label>
                    <input type="text" name="BillCurrentRead"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Consumption </span></div></td>
                  <td><label>
                    <input type="text" name="payment"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Usage_Charge</span></div></td>
                  <td><label>
                    <input type="text" name="debit" />
                  </label></td>
                  <td><label></label></td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Tax</span></div></td>
                  <td><label>
                    <input type="text" name="phonenumber"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36"><div align="right"><span class="style5">Total</span></div></td>
                  <td><label>
                    <input type="text" name="housenumber"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36"><div align="right"><span class="style5">Payment Birr  </span></div></td>
                  <td><label><span class="style5">Current Birr is: </span></label>
                  <span class="style6"></span></td>
                  <td>&nbsp;</td>
                </tr>
            </table>
	   
		    </fieldset>
          </form>
		  
		 
						
		
						
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
	    <p> Mr. Ashok says this project is huge and have agrate role to eradicate </p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->  
 
</div><!--close main-->
  
  <div id="footer">
  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017  </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
