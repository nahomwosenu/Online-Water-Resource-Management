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
.style7 {
	font-family: "Times New Roman", Times, serif;
	color: #000099;
	font-size: medium;
	font-weight: bold;
}
.style8 {font-size: medium}
-->
  </style>
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
                    <a href="mission.html">Map & Direction</a></li>
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
                        <a href="NewCustRegstration.php"> Registration</a></li>
                  <li>
                    <a href="login.html"> Maintanance </a></li>
                  <li>
                    <a href="login.html"> Bill payment</a></li>
                </ul>
          </div>
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
    <!--close menubar-->
<div id="site_content">	  
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Login</h2>
              User Name: <?php if(isset($_GET['fail'])) echo "<font color=\"red\"><b> Login Error</b></font>"; ?> <input type="text" name ="username" >
			Password: <input type="password" name ="password" >
			<input type="Submit" name="send" value ="sign In" >
			
			<a href="NewUserAccount.php">New User Account  </a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Announcements</h2>
            <h3>May 2017 </h3>
            <p>The final implemntation of this project will finished at the final week of may 2017. So the project...</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Archievs</h2>
            <p>The final implemntation of this project will finished at the final week of may 2017. So the project...</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
    </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Employee Registration</h1>
		   <?php
		if(isset($_POST['Save'])){
		
		$employeeid= $_POST['employeeid'] ;
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$position=$_POST['position'];
		$officenumber=$_POST['officenumber'];
		$telnumber=$_POST['telnumber'];
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect".mysql_error());
		mysql_select_db("bdwss",$con);
		$sql="insert into employee values('$employeeid','$firstname','$lastname','$gender','$age','$position','$officenumber','$telnumber')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		mysql_close($con);
		}
		else {						
		?> 
		  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" id="form1" onsubmit="MM_validateForm('firstname','','R','lastname','','R','age','','RisNum','kebele','','RisNum','phonenumber','','RisNum','housenumber','','RisNum');return document.MM_returnValue">
		    <fieldset>
		    <legend><span class="style7">New Employee Registration</span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="330">
                <tr>
                  <td height="24"><div align="right"><span class="style5">Employee_ID </span></div></td>
                  <td><label>
                    <input type="text" name="employeeid" />
                  </label></td>
                </tr>
                <tr>
                  <td width="164" height="24"><div align="right"><span class="style5">First_Name </span></div></td>
                  <td width="448"><label>
                    <input type="text" name="firstname" />
                  </label></td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Last_Name </span></div></td>
                  <td><label>
                    <input type="text" name="lastname" />
                  </label></td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Gender</span></div></td>
                  <td align="left"><label>&nbsp; &nbsp;
                    <select name="gender" value=>
                      <option>&lt;&lt;Select Here&gt;&gt;</option>
                      <option>F</option>
                      <option>M</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Age</span></div></td>
                  <td><label>
                    <input type="text" name="age" />
                  </label></td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Position</span></div></td>
                  <td><label> &nbsp; &nbsp;  
                  <select name="position">
                    <option>&lt;&lt;Select Here&gt;&gt;</option>
                    <option>Accountant1</option>
					<option>Accountant2</option>
					<option>Bill Collector</option>
                    <option>Bill Officer</option>
                    <option>Meter Reader</option>
                    <option>Technician</option>
                    <option>Technician Mainten</option>
                  </select>
                  </label></td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Office_Number </span></div></td>
                  <td><label>
                    <input type="text" name="officenumber" />
                  </label></td>
                </tr>
                <tr>
                  <td height="36"><div align="right"><span class="style5">Tel_Number </span></div></td>
                  <td><label>
                    <input type="text" name="telnumber" />
                  </label></td>
                </tr>
               
               
                <tr>
                  <td valign="top" align ="right" height="35"><input type="submit" name="Save" value="Save" /></td>
                  <td><label></label>
                    
                    <span class="style5">
                    <label>
                    <input type="reset" name="Clear" value="Clear" />
                    </label>
                    
                    <label>                  </label>
                    </span>
                    <label></label>
                    <span class="style8"><label></label>
                    </span>
                  <label></label></td>
                </tr>
              </table>
	     
		  </fieldset>
          </form>
		  
		  <?php } ?>
		  
		  
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
  
  <div id="footer"><a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
