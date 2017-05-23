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
	
	  <span class="style1"><font color="#000000"> Language </font></span> 
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
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Welcome</h2>
		   <p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
          </p>
		    <h2>Maintenance</h2>
			 <h3><a href="ReceiveMainSearch.php">Received Maintenace</a></h3>
			<h3><a href="UserInformation.php">User Information</a></h3>
			<h3><a href="ReceiveTechnicianReport.php">Receive Technician Report</a></h3>
		 <h2>Report</h2>
			<h3><a href="MaintananceReport.php">View </a></h3>
			<h2><a href="../index.php">Logout</a></h2>
		  </div>
          <!--close sidebar_item--> 
        </div><!--close sidebar-->   
        
     </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  
		  
		<h1>Update Maintanance Order </h1>
		  
		   <?php
		
		$customerid= $_GET['Customer_ID'] ;
		//$pass=$_SESSION['user_id'] ;
		//<?php echo '<textarea name="maintype" rows="10" cols="30">'; /
                   // echo $row['Maintanance_Type']; 
                   // echo '</textarea>'/
		//$Maintenance_Number=$_GET['Maintenance_Number'];
		//$Maintenance_Date=$_GET['Maintenance_Date'];
		//$Maintenance_Type=$_GET['Maintenance_Type'];
		require_once('database.php');
		$customerid= $_GET['Customer_ID'] ;
		$maintenanceDate= $_GET['Report_Date'];
		
		$sql="select *  from maintenance where Customer_ID= '$customerid' and Maintenance_Date='$maintenanceDate'";
	
	   $res=mysql_query($sql) or die("query error".mysql_error());
		while($row = mysql_fetch_array($res)) {						
		?>
		  <form id="form1" method="post" action="UpdateMaintanOrder.php"><fieldset>
		  <legend><span class="style7">Update Maintanance Order </span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="181">
                <tr>
                  <td height="24" class="style5"><div align="right">Maintenance Number</div></td>
                  <td>
                  <input type="text" name="Maintenance_Number"  value="<?php echo $row['Maintanance_Number']; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td width="164" height="24"><div align="right"><span class="style5">Customer ID </span></div></td>
                  <td width="448">
                    <input type="text" name="customerID" value="<?php echo $row['Customer_ID']; ?>" />
                 </td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Maintained  Date </span></div></td>
                  <td>
                    <input type="text" name="maintananceDate" value="<?php echo $row['Maintenance_Date']; ?>" /></td>
                </tr>
                <tr>
                  <td height="35"><div align="right"><span class="style5">Maintanance Type</span> </div></td>
                  <td>
                    <input type="text" name="Maintenance_Type"  value="<?php echo $row['Maintenance_Type']; ?>"/>
                 </td>
                </tr>
                <tr>
                  <td height="35"><div align="right"><span class="style5">Remark</span></div></td>
                  <td><label>
                    <input type="text" name="remark"  value="<?php echo $row['Approved']; ?>" />
                  </label></td>
                </tr>
                <tr>
                  <td height="35">&nbsp;</td>
                  <td valign="top"><label></label>
                    
                    <span class="style5">
                    <label>
                    <input type="submit" name="Submit" value="Order Update" />
                    </label>
                    
                    <label>                  </label>
                    </span>
                    <label></label>
                    <span class="style8"><label></label>
                    </span>
                  <label></label></td>
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
	  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017 </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>