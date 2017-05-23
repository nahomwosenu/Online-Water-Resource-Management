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
.style5 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: medium; }
.style7 {
	font-family: "Times New Roman", Times, serif;
	color: #000099;
	font-size: medium;
	font-weight: bold;
}
.style9 {color: #fff}
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
	
	  <span class="style5"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
	 <div align="right"="clockbox"></div> 
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
		  
		  
		  <h2><a href="index.php" class="style9">Logout</a></h2>
		  
          <p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
          </p>
          <p>&nbsp;  </p>
		</div>
          <div class="sidebar_item">
		  
		  <h2>Applications</h2>
            <h3><a href="ReadBillValue.php">Read Bill Value</a></h3>
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
		  <h1>Maintanance Order </h1>
		     <?php
		if(isset($_POST['Save'])){
		
		$customerid= $_POST['mainCustID'] ;
		$mainNumber=$_POST['mainNumber'];
		$hidden=$_POST['remark'];
		
		$maintananceDate=$_POST['maintananceDate'];
		$MaintenaceType=$_POST['MaintenaceType'];
		$date = date('Y-m-d');
		require_once('database.php');
		$sql="insert into maintenance values('$mainNumber','$customerid','$maintananceDate','$MaintenaceType','$hidden')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		mysql_close($con);
		}
		else {						
		?> 
		  <form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"><fieldset>
		  <legend><span class="style7">Maintanance Order </span></legend>
		      <p>&nbsp;</p>
		        <table width="624" height="203">
                <tr>
                  <td height="24"><div align="right"></div></td>
                  <td><label>
				  <input type="hidden" name="mainNumber" />
                  
                  </label></td>
                </tr>
                <tr>
                  <td width="164" height="24"><div align="right"><span class="style5">Customer ID </span></div></td>
                  <td width="448">
                    <input type="text" name="mainCustID" />
                 </td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Maintainance Date </span></div></td>
                  <td>
				  <input type="text"  name="maintananceDate" readonly="readonly" value="<?php echo date('Y-m-d'); ?>" />
                    
                 </td>
                </tr>
                <tr>
                  <td valign = "top" height="44"><div align="right"><span class="style5">Maintainance Type </span></div></td>
                  <td><label>
				  
                  <textarea name="MaintenaceType" cols="50" rows="6"  ></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td  align="right" valign="top" height="35">&nbsp;</td>
                  <td>
                    <input type="hidden" name="remark" />
                  </td>
                </tr>
                <tr>
                  <td  align="right" valign="top" height="35"><span class="style5">
                    <input type="submit" name="Save" value="Send" />
                  </span></td>
                  <td>
                    <input type="submit" name="Clear" value="Clear" />                    </td>
                </tr>
          </table>
	      <p>&nbsp;</p>
		  </fieldset>
          </form>
		<?php } ?>
        </div><!--close content_item-->
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
	    <p>AMWSS  has announced the new project that sustanability of water around arbaminch city.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_boxl">
		<h4>Latest Projects</h4>
	    <p> Mr. arbaminch says this project is huge and have agrate role to eradicate </p>
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
