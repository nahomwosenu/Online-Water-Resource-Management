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
.style5 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: medium; }
.style7 {
	font-family: "Times New Roman", Times, serif;
	color: #000099;
	font-size: medium;
	font-weight: bold;
}
.style12 {color: #fff}
-->
  </style>
  <script type="text/JavaScript">
<!--
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
		 
	      <img width="918" height="105" src="images/B1.jpg">   
	   <!--</div> <!--close welcome_slogan-->
    </div><!--close banner-->
   </div><!--close header-->
<div id="navigation">
      <ul>
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="background.php">About Us </a>
		<ul>
		<li><a href="background.php">Background</a></li>
		<li><a href="mission.html">Misson</a></li>
		<li><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Direction</a></li>
		</ul>
		</li>
        <li><a href="recordOffice.html">Offices</a>
		<ul>
		<li><a href="recordOffice.html">Record office</a></li>
		<li><a href="billOffice.html">Bill office</a></li>
		<li><a href="accountant.html"> Accountant</a></li>
		<li><a href="ict.html"> ICT office</a></li>
		<li><a href="techncian.html"> Technician Office</a></li>
		</ul>
		</li>
        <li><a href="NewCustRegstration.php">Service</a>
		<ul>
		<li><a href="NewCustRegstration.php"> Registration</a></li>
		<li><a href="index.php"> Maintanance </a></li>
		<li><a href="index.php"> Bill payment</a></li>
		</ul>
		</li>
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
  <div id="site_content">		
       <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/3.jpg" alt="&quot;Main Get Way of AMWSS office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg" alt="&quot;Somewhere water pumping project for public&quot;" /></li>
		<li><img width="880" height="250" src="images/2.jpg" alt="&quot;&quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpeg" alt="&quot;Structure of water read bulb&quot;" /></li>
		<li><img width="880" height="250" src="images/7().jpg" alt="&quot;Office in amwss &quot;" /></li>
      </ul> 
   </div><!--close header-->
    <!--close menubar-->
<div id="site_content">		
	   
    
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
        <div class="sidebar_item">
          <h2> <a href="logout.php" class="style8 style12">Logout</a></h2>
            <p>
              <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
            </p>
            <p>&nbsp;  </p>
        </div>
          <!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
		  <div class="sidebar_item">
            <h2>Application</h2>
		    <h3> <a href="ReadBillValue.php">Read Bill Value</a></h3>
		    <h3><a href="MaintenanceOrder.php">New Maintenance Order</a></h3>
		    <h3><a href="MeterRead.php">Meter Reading</a></h3>
	      </div>
		  <!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Meter Read to Customer </h1>
		      <?php
		if(isset($_POST['Save'])){
		
		$MeterCustID= $_POST['MeterCustID'] ;
		$MeterCurrentRead=$_POST['MeterCurrentRead'];
		$readingID=$_POST['readingID'];
		$metersize=$_POST['metersize'];
		$meterNumber=$_POST['meterNumber'];
		
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect".mysql_error());
		mysql_select_db("bdwss",$con);
		$sql="insert into customer_meter_Read values('$readingID','$MeterCustID','$MeterCurrentRead','$metersize','$meterNumber')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		mysql_close($con);
		}
		else {						
		?> 
		  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="form1" onsubmit="MM_validateForm('MeterCustID','','R','MeterCurrentRead','','RisNum','meterNumber','','RisNum');return document.MM_returnValue">
		    <fieldset>
		  <legend><span class="style7">Meter Reading Value </span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="165">
                <tr>
                  <td height="24">&nbsp;</td>
                  <td><label>
                    <input type="hidden" name="readingID" />
                  </label></td>
                </tr>
                <tr>
                  <td height="24"><div align="right"><span class="style5">Customer ID </span></div></td>
                  <td><label>
                  <input type="text" name="MeterCustID" />
                  </label></td>
                </tr>
                <tr>
                  <td width="164" height="24"><div align="right"><span class="style5">Current Read </span></div></td>
                  <td width="448"><label>
                    <input type="text" name="MeterCurrentRead" />
                  </label></td>
                </tr>
                <tr>
                  <td valign = "top" height="27"><div align="right"><span class="style5">Meter Size </span></div></td>
                  <td><label>&nbsp; 
                    <select name="metersize">
                      <option>&lt;&lt;Select Here&gt;&gt;</option>
                      <option>0.5</option>
                      <option>0.75</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Meter Number </span></div></td>
                  <td><label>
                    <input type="text" name="meterNumber" />
                  </label>
                  </label></td>
                </tr>
                <tr>
                  <td valign="top"><div align="right"><span class="style5">
                    <input type="submit" name="Save" value="Send" />
                  </span></div></td>
                  <td><span class="style5">
                    <input type="submit" name="Clear" value="Clear" />
                  </span></td>
                </tr>
          </table>
	      
		  </fieldset>
          </form>
		  <?PHP } ?>
		  
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
	    <p> Mr. Ashok says this project is huge and have agrate role to eradicate </p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->  
 
</div><!--close main-->
  
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 | www.amcwss.com</a></div>
  <!--close footer-->  
  
</body>
</html>