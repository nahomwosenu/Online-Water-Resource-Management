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
.style7 {
	font-size: medium;
	font-style: italic;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	color: #000099;
}
.style8 {font-family: "Times New Roman", Times, serif}
.style12 {font-size: medium; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #FFFFFF; }
-->
  </style>
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
	    <img width="918" height="105" src="images/B1.PNG" />
	    <!--</div> <!--close welcome_slogan-->
	  </div>
	  <!--close banner-->
    </div><!--close header-->
    <!--close menubar-->
    <div id="site_content">
      <!--close sidebar_container-->
<div id="content">
        <div class="content_item">
		  <h1>View Bill Report </h1>
		  
		  <form id="form1" method="post" action="">
		    <fieldset>
		    <legend class="style7">generate bill reports</legend>
		    <table width="90" border="1" bordercolor="#FFFFFF">
              <tr bgcolor="#FFFFFF">
                <td width="80"><div align="center"><span class="style12"><a href="kebele1_8.php">Home</a></span></div></td>                           
              </tr>
            </table>
		    <table width="600" border="1" bordercolor="#FFFFFF">
              <tr bgcolor="#FFFFFF">
                <td width="163"><span class="style12"><a href="fromDebit.php">Payment from Debit </a></span></td>
                
                <td width="421"><span class="style12"> <a href="fromBill.php">Payment from Bill </a></span></td>
              </tr>
            </table>
		    
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
		  </fieldset>
          </form>
		 	 	
	    </div>
        <!--close content_item-->
     </div><!--close content-->   
	</div><!--close site_content-->
	<!--close content_grey-->
  </div>
  <!--close main-->
  
  <div id="footer">
  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017  </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
