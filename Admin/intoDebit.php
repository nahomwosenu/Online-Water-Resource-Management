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
	
	  <span class="style1"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
   </div>
   <div id="site_content">
      <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/3.jpg" alt="&quot;Main Get Way of AMWSS office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg" alt="&quot;Somewhere water pumping project for public&quot;" /></li>
		<li><img width="880" height="250" src="images/2.jpg" alt="&quot;&quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpeg" alt="&quot;Structure of water read bulb&quot;" /></li>
		<li><img width="880" height="250" src="images/7().jpg" alt="&quot;Office in amwss &quot;" /></li>>
      </ul>    
	 
	  SS
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
        <div class="sidebar_item">
          <h2>Welcome</h2>
            <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";
		  
			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
            <h2>Customer</h2>
            <h3><a href="CustmerUpdate.php">Customer Update </a><a href="index.html"></a></h3>
			 <h2>Bill</h2>
			<h3><a href="BillValue.php">Audit and Analysis</a></h3>
			
			<h3><a href="index.php">Bill Collect</a></h3>
			<h3><a href="Debitt.php">Debit</a></h3>
		<h2>Report</h2>
			<h3><a href="Billreport.php">View </a></h3>
		<h2><a href="../index.php">Logout</a></h2>
	    </div>
          <!--close sidebar_item--> 
        </div><!--close sidebar-->   
   
        <!--close sidebar-->
      </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Customer Debit Data </h1>
		  	<?php
		
		
		$customerid= $_GET['ID'] ;
		$pass=$_SESSION['user_id'] ;
		$readingDate=$_GET['Reading_Date'];
		$firstName=$_GET['First_Name'];
		$lastname=$_GET['Last_Name'];
		$Previous_Read=$_GET['Previous_Read'];
		$Current_Read=$_GET['Current_Read'];
		$Consumtion=$_GET['Consumption'];
		$Tax=$_GET['Tax'];
		$Total=$_GET['Total'];
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect".mysql_error());
		mysql_select_db("bdwss",$con);
		$sql="insert into debitt values('$pass','$customerid','$readingDate','$firstName','$lastname','$Previous_Read','$Current_Read','$Consumtion','$Tax','$Total')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		mysql_close($con);
							
		?> 	   
				   
				   
				   
				   
        </div>
        <!--close content_item-->
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
  <a href="http://validator.w3.org/check?uri=referer">Copyright &copy; 2017  </a> | I<a href="http://www.pdphoto.org/">mages | </a><a href="http://jigsaw.w3.org/css-validator/check/referer">www.amcwss</a>.com</div>
  <!--close footer-->  
  
</body>
</html>
