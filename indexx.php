<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Customer Managment System for BDCWSS</title>
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
		 
	     <img width="918" height="105" src="images/bann.jpg">   
	   <!--</div> <!--close welcome_slogan-->
	  </div><!--close banner-->
   </div><!--close header-->
	<div id="navigation">
      <ul>
        <li class="current"><a href="index.php">መግቢያ</a></li>
		
        <li><a href="background.php">ስለ መስሪያ ቤቱ </a>
		<ul class="sub-menu">
		<li><a href="background.php">ስለ መስሪያ ቤቱ ታሪክ</a></li>
		<li><a href="mission.html">ራዕይ፤ ተልዕኮና ዕሴት</a></li>
		<li><a href="mission.html">የመስሪያ ቤቱ ቦታ እና አቅጣጫ</a></li>
		
		</ul>
		</li>
        <li><a href="recordOffice.php">የመስሪያ ቤቱ ክፍሎች</a>
		<ul class="sub-menu">
		<li><a href="recordOffice.php">መዝገብ ቤት ክፍል</a></li>
		<li><a href="billOffice.php">የቢል ትኬት ክፍል</a></li>
		<li><a href="accountant.php"> ገንዘብ ተቀባይ ክፍል</a></li>
		<li><a href="ict.html"> የአይሲት ክፍል</a></li>
		<li><a href="techncian.php"> የቴክኒሻል ባለሙያ</a></li>
		</ul>
		</li>
        <li><a href="NewCustRegstration.php">የአገልግሎት  ክፍል</a>
		<ul class="sub-menu">
		<li><a href="NewCustRegstration.php"> መመዝገቢያ  ክፍያ</a></li>
		<li><a href="index.php"> ጥገና ክፍል </a></li>
		<li><a href="index.php">ቢል መክፈያ </a></li>
		</ul>
		</li>
		<li><a href="NewCustRegstration.php">መመዝገቢያ ክፍል</a></li>
        <li><a href="contact.html">አድራሻ </a></li>
		
      </ul>
    </div><!--close menubar-->	
   <div id="sub-menu">
	
	  <span class="style1"><font color="#000000"> ቋንቋ </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English </option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
	</div>
  <div id="site_content">			  
      <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/front.jpg" alt="&quot;Main Get Way of BDWSS office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg" alt="&quot;Somewhere water pumping project for public&quot;" /></li>
		<li><img width="880" height="250" src="images/hbt.jpg" alt="&quot;Customers waiting to get service from the bdwss &quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpeg" alt="&quot;Structure of water read bulb&quot;" /></li>
		<li><img width="880" height="250" src="images/office.jpg" alt="&quot;Employee in bdwss &quot;" /></li>
      </ul>   
</div><!--close header-->

	
    
	<div id="site_content">		   
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>መግቢያ ቅጽ</h2>
			<form action="login.php" method="post" id="form1" onsubmit="MM_validateForm('username','','R','password','','R');return document.MM_returnValue">
            
			<b>መገልገያ ስም:</b><?php if(isset($_GET['fail'])) echo "<font color=\"red\"><b> Login Error</b></font>"; ?> <input type="text" name ="username" >
			<b>የሚስጥር ቁልፍ:</b> <input type="password" name ="password" >
			<input type="Submit" name="send" value ="አስገባ " >
			
			<a href="NewUserAccount.php">አዲስ ደንበኛ መመዝገቢያ</a>
			</form>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 
		   		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>ዜናዎችና ለውጦች</h2>
            <h3>ግንቦት  2013 </h3>
            <p>ይህን ፕሮጀክት በግንቦት ፳፩፫ መጀመሪያ ሳምንት እንጨርሳለን።።..</p>   
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>የመሰሪያ ቤቱ አስተዳዳሪ መልክት </h1> 
	      <p align="justify"><span class="style1">መልክት</span>: እንደምናቀው በሁለት አስር አመታት ውስጥ የእኛ ክልልን ጨምሮ በሌሎች የሀገራችን ክፍሎችም ሀገራችን በእድገት ጎዳና ላይ እንደሆነን የሚታወቅ ጉዳይ ነው።ያሉትን ፖሊስዎችና እስትራቴጅዎችን በማስፈፀም የበኩላችን ሚና ልንወጣ ይገባል።</p>
		  
		  <div class="content_image">
		    <img src="images/ba.jpg" alt="image1" width="199" height="162"/>	      </div>
		  <p align="justify">መለስ ብለ እንኳ ባለፉት አምስት አመታት መንግስት የእድገት እና ትራንስፎርሜሽን እቅድ መዘርጋቱ ይታወቃል።
ሆኖም ይህ እቅድ መስመሩን ይዞ ለማስቀጠል የበኩላችን ጥርት ማድርግ አለብን።የእኛ መስሪያ ቤት በአማራ ክልል  በባህር_ዳር ከተማ ውስጥ ንጹሕ ውሃ ለሁሉም ለማዳርስ እና የተለያዩ ፖሊሲዎችን እና ስትራቴጅዎችን እንደ መስሪያ ቤት የበኩሉን ጥርት ያደርጋል።ደንበኞቻችንም በምንሰጣቸው አገልግሎቶች እንደሚደሰቱ አልጠራጠርም። </p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>
		  
		  <div class="content_image">
		    <img src="images/33.jpg" alt="image1" width="202"/>	      </div>
		  <p align="justify">በመጨረሻም ሁሉም የክልል መንግስት ሴክተሮች በየመስካቸው ለትራንስፎሜሽን እቅድ መሳካት የበኩላቸውን እገዛ ሊያደርጉ ይገባል።ለሀገራችን ለውጥ  እንድንነሳ ስል ጥሪየን አስተላልፋለው።</p>
		 
          <br style="clear:both"/><!--close content_container-->
          <!--close content_container-->
        </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	  <div class="content_grey_container_box">
		<h4>ክስተት እና ዜናዎችና ወቅታዊ መረጃዎች</h4>
	    <p> በባህር ዳር ከተማ የሚኖሩት ደንበኞቻችን በመስሪያ ቤታችን አገልግሎት እንደተደሰቱ እና በጥሩ እንደተሻሻለ ተናገሩ። </p>
		<div class="ተጨማሪ">
		  <a href="#">ተጨማሪ</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_box">
       <h4>ዜናዎችና ወቅታዊ መረጃዎች</h4>
	    <p>የባህር ዳር ከተማ ውሃ አገልግሎት ጽ፨ቤት ሹምአቦ ቅርንጫፍ አዲስ ቋሚ የውሃ አገልግሎት ለመስጠት የሚያስችል ፕሮጀክት መጀመሩን </p>
	    <div class="ተጨማሪ">
		  <a href="#">ተጨማሪ</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_boxl">
		<h4>አዳዲስ ፕሮጀክቶች እና ፕሮግራሞች</h4>
	    <p> ዶክተር ተወልደ ብርሃን አሁን በመተግበር ያለው አዲስ ፕሮጀክት በጣም ትልቅ እና ችግሮችን እንደሚፈታ ተናገሩ። </p>
	    <div class="ተጨማሪ">
		  <a href="#">ተጨማሪ</a>
		</div><!--close readmore-->	  
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->  
 
 
</div><!--close main-->
  
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">© የቅጂ መብት 2013 </a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | <a href="http://www.pdphoto.org/">Images</a> | www.bdcwss.com</div>
  <!--close footer-->  
  
</body>
</html>
