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
   </div><!--close header-->
<div id="navigation">
       <ul>
        <li class="current"><a href="index.html">Home</a></li>
		
        <li>
          <div align="left"><a href="background.html">About Us </a>
                <ul class="sub-menu">
                      <li>
                        <div align="left"><a href="background.html">Background</a></div>
                      </li>
                  <li>
                    <div align="left"><a href="mission.html">Misson</a></div>
                  </li>
                  <li>
                    <div align="left"><a href="mission.html">Map & Diraction</a></div>
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
	
        <li> <div align="left"><a href="contact.html">Contact Us</a></div></li>
		
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
            <div class="sidebar_item">
               <h2>Welcome</h2>
		 <p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
          </p>
				
				
	
          </form>
              
            </div>
            
            <h2>Announcements</h2>
            <h3>May 2017 </h3>
            <p>.The final implemntation of this project will finished at the final week of may 2017. So the project...</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="../index.php">Logout</a></h2>
            <p>The final implemntation of this project will finished at the final week </p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
    </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>New Employee Account Creation Page</h1>
		  <?php
		if(isset($_POST['send'])){
		$userid=$_POST['userid'];
		$custid=$_POST['custid'];
		$employeeid=$_POST['NewEmplID'];
		$username=$_POST['username'];
		$pwd=$_POST['password'];
		
		$previlage=$_POST['previllage'];
		
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect".mysql_error());
		mysql_select_db("bdwss",$con);
		$sql="insert into user values('$userid','$employeeid','$custid','$username','$pwd','$previlage')";
		$result=mysql_query($sql);
		if(!$result){
		die("unable to insert values".mysql_error());
		}
		else
	echo "<h1>You are welcome! Your Account Successfully Created!".'<br>';
		mysql_close($con);
		}
		else {
		
		
		
		?> 
		  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="form1" onsubmit="MM_validateForm('NewEmplID','','RisNum','username','','R','password','','R');return document.MM_returnValue">
		    <fieldset>
            <legend><span class="style7">New Login Account Form</span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="192">
              <tr>
                <td height="24">&nbsp;</td>
                <td><label>
                  <input type="hidden" name="userid" />
                </label></td>
              </tr>
              <tr>
                <td height="24"><div align="right"></div></td>
                <td><label>
                  <input type="hidden" name="custid" />
                </label></td>
              </tr>
              <tr>
                <td height="24"><div align="right"><span class="style5">Employee_ID</span></div></td>
                <td><label>
                  <input type="text" name="NewEmplID" />
                </label></td>
              </tr>
			  
            
			  <tr>
                <td height="25"><div align="right"><span class="style5">User Name</span></div></td>
                <td width="448"><label>
                  <input type="text" name="username" />
                </label></td>
              </tr>
              <tr>
                <td  height="27"><div align="right"><span class="style5">Password </span></div></td>
                <td width="448"><label>
                  <input type="password" name="password" />
                </label></td>
              </tr>
              <tr>
                <td height="25"><div align="right"><span class="style5">Previllage</span></div></td>
                <td><label> &nbsp; &nbsp;
                <select name="previllage">
                  <option>&lt;&lt;Select Here&gt;&gt;</option>
                  <option>Accountant1</option>
				   <option>Accountant2</option>
                  <option>Bill Officer</option>
                  <option>Meter Reader</option>
                  <option>Technician</option>
                  <option>Bill Collector</option>
                  <option>Technician Mainten</option>
                </select>
                </label></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="25"><div align="right"><span class="style5">
                  <input type="submit" name="send" value="Sign Up" />
                </span></div></td>
                <td><span class="style5">
                  <input type="reset" name="Clear" value="Clear" />
				  <td><h3> <a href="index.php">Back </a></h3></td>
                </span></td>
                <td>&nbsp;</td>
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
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 | www.amcwss.com</a></div>
  <!--close footer-->  
  
</body>
</html>
