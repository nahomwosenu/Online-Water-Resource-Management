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
.style2 {
	color: #0000FF;
	font-size: medium;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.style3 {
	font-family: "Times New Roman", Times, serif;
	font-size: medium;
	font-weight: bold;
	color: #0033CC;
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
session_start();
?>
  <div id="header">
	   <div id="banner">
	    
	    <!--<div id="welcome_slogan"> -->
	    <img width="918" height="105" src="images/B1.PNG" />
	    <!--</div> <!--close welcome_slogan-->
	  </div>
	   <!--close banner-->
   </div><!--close header-->
   <!--close menubar-->
<div id="sub-menu">
	
	<font color="#000000"> Language </font> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   <!-- #BeginDate format:Am1a -->April 17, 2017 3:01 PM<!-- #EndDate -->
</div>
  <div id="site_content">			  
       
</div><!--close header-->

	
    
	<div id="site_content">
	  <!--close sidebar_container-->
<div id="content">
        <div class="content_item">
		  <!-- <h1 align="left">Customer Bill Data </h1>-->
		     <fieldset width = "90">
		     <legend class="style2">Customers Bill Information </legend>
		  <table width="90" border="1" bordercolor="#FFFFFF">
              <tr bgcolor="#FFFFFF">
                <td width="80"><div align="center"><span class="style12 style3"><a href="kebele1_8.php">Home</a></span></div></td>                           
              </tr>
            </table>
		     <form id="form1" method="post" action="">
              <?php
    include_once("bdwssoreportgenerate.php");
    $prg = new phpReportGenerator();
        $prg->width = "100%";
    $prg->cellpad = "0";
    $prg->cellspace = "0";
    $prg->border = "1";
    $prg->header_color = "#465584";
    $prg->header_textcolor="#FFFFFF";
    $prg->body_alignment = "left";
    $prg->body_color = "#D1DCEB";
    $prg->body_textcolor = "#000000";
    $prg->surrounded = '1';	
    mysql_connect("localhost","root","");
    mysql_select_db("bdwss");
    $res = mysql_query("select * from bill");
    $prg->mysql_resource = $res;	 	 		
    $prg->generateReport();
    ?>
          </form>
		</fieldset>
        </div>
        <!--close content_item-->
      </div><!--close content-->   
   </div><!--close site_content-->
   <!--close content_grey-->
 </div>
 <!--close main-->
  
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 </a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | <a href="http://www.pdphoto.org/">Images</a> | www.amcwss.com</div>
  <!--close footer-->  
  
</body>
</html>
