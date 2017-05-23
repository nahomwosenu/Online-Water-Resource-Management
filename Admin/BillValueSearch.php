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
       <div id="navigation">
    <ul>
        <li class="current">
          <div align="left"><a href="index.php">Home</a></div>
        </li>
		
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
                    <div align="left"><a href="https://maps.google.com.et/maps?q=map+for+bahirdar+ethiopia&client=opera&channel=suggest&ie=UTF-8&ei=qFrFUZu0FoPDO9ODgYgI&ved=0CAoQ_AUoAg">Map & Direction</a></div>
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
                    <div align="left"><a href="tech.html"> Technician Office</a></div>
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
	
        <li>
          <div align="left"><a href="contact.html">Contact Us</a></div>
        </li>
		
		
      </ul>
    </div><!--close menubar-->	
    
	<div id="sub-menu">
	
	<font color="#000000"> Language </font> 
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
          <p>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
          </p>
            <h2>Customer</h2>
            <h3> <a href="CustmerUpdate.php">Customer Modify </a></h3>
            <h2>Bill</h2>
			<h3><a href="BillValue.php">Audit and Analysis</a></h3>
            <h3><a href="Admin/BillValue.php">Payment Bill</a></h3>
            <h3><a href="index.php">Bill Collect</a></h3>
            <h3><a href="Debit.php">Debit</a></h3>
		 
		<h2>Report</h2>
			<h3><a href="Billreport.php">Generate</a></h3>
			<h3><a href="Billreport.php">View </a></h3>
			<h2>Logout</h2>
	    </div>
          <!--close sidebar_item--> 
        </div><!--close sidebar-->   
   
        <!--close sidebar-->
      </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Custemer Bill Payment Form </h1>
		    <?php
			$Customer_ID=$_POST['customerid'];
			
			
				  $Firstname=$_POST['Firstname'];
				  $BillLastname=$_POST['BillLastname'];
				  $BillPreviouseRead=$_POST['BillPreviouseRead'];
				  $BillCurrentRead=$_POST['BillCurrentRead'];
				  $MaintanPayment=$_POST['MaintanPayment'];
				  $debit=$_POST['debit'];
				  $consumptions=$_POST['consumption'];
				  $tax=$_POST['tax'];
				  $usagecharge=$_POST['usagecharge'];
				  $fixedcharge=$_POST['fixedcharge'];
				  $total=$_POST['total'];
				  $consumption=$BillCurrentRead-$BillPreviouseRead;
				  $fixedcharge=8.67;
			
			require_once('database.php');
		
		$sql="SELECT * FROM customer, employee_maintenance_report,employee_meter_reading_data, debitt where customer.Customer_ID=employee_maintenance_report.Customer_ID and customer.Customer_ID = employee_meter_reading_data.Customer_ID and customer.Customer_ID= debitt.Customer_ID";	
	
			
			
			$res=mysql_query($sql) or die("query error".mysql_error());
			
			while($row=mysql_fetch_array($res)){
			?>
		  <form id="form1" method="post" action="BillValueCalc.php">
		    <fieldset>
		    <legend class="style7">Bill Payment Form </legend>
		    <p>&nbsp;</p>
		    <table width="626" height="264">
                <tr>
                  <td height="24"> </td>
                  <td><input type="hidden" name="billid" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="230" height="24"><div align="right"><span class="style5">Customer Identification Number </span></div></td>
                  <td width="216"><label>
                  <input type="text" name="customerid" value="<?php echo $Customer_ID; ?>"/>
                  </label></td>
                  <td width="164"><label></label></td>
                </tr>
                <tr>
                  <td height="24"><div align="right"><span class="style5">First Name </span></div></td>
                  <td><label>
                    <input type="text" name="BillFirstname" value="<?php echo $row['First_Name']; ?>"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Last Name </span></div></td>
                  <td><label>
                    <input type="text" name="BillLastname" value="<?php echo $row['Last_Name']; ?>" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Previouse Read </span></div></td>
                  <td><label>
                    <input type="text" name="BillPreviouseRead" value="<?php echo $row['Previous_Read']; ?>" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">CurrentRead </span></div></td>
                  <td><label>
                    <input type="text" name="BillCurrentRead" value="<?php echo $row['Current_Read']; ?>" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Maintanance Payment </span></div></td>
                  <td><label>
                    <input type="text" name="MaintanPayment" value="<?php echo $row['Maintenance_Payment']; ?>" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31"><div align="right"><span class="style5">Debit</span></div></td>
                  <td><label>
                    <input type="text" name="debit" value="<?php echo $row['Total_Price']; ?>"/>
                  </label></td>
                  <td><label></label></td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Consumption</span></div></td>
                  <td><label>
                    <input type="text" name="consumption"/>
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Tax</span></div></td>
                  <td><label>
                    <input type="text" name="tax" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Usage Charge </span></div></td>
                  <td><label>
                    <input type="text" name="usagecharge" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="33"><div align="right"><span class="style5">Fixed Charge </span></div></td>
                  <td><label>
                    <input type="text" name="fixedcharge" value="<?php echo $fixedcharge; ?>"  />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36"><div align="right"><span class="style5">Total</span></div></td>
                  <td><label>
                    <input type="text" name="total" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36"><div align="right"><span class="style5">Payment Birr  </span></div></td>
                  <td><label><span class="style5">Current Birr is: </span></label>
                  <span class="style6">&nbsp;</span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align ="right" height="35"> <input type="submit" name="Save" value="Update" /></td>
                  <td><label>
                   
                  </label>
                    <label>
                    <input type="submit" name="Clear" value="Clear" />
                  </label></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table>
	      
		  </fieldset>
          </form>
		  <?php } ?>
	    </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	  <div class="content_grey_container_box">
		<h4>Events &amp; Announcements</h4>
	    <p> People of Arba minch city are Suggest on the AMWSS are better and good .also ask to</p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_box">
       <h4>Latest News</h4>
	    <p> AMWSS  has announced the new project that sustanability of water around Arba minch city.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_grey_container_box-->
      <div class="content_grey_container_boxl">
		<h4>Latest Projects</h4>
	    <p> Mr. Ashok says this project is huge and have agrate role to eradicate.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_grey_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_grey-->   
 
  <!--close main-->
  
  <div id="footer">
  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017  </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
