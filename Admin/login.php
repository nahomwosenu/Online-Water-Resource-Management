
<?php
session_start();
?>
<?php
session_start();

$user=$_POST['username'];
$pass=$_POST['password'];

require_once('database.php');
$sql="SELECT * FROM  user WHERE User_Name='$user' and Password='$pass'";
$result=mysql_query($sql);
if(mysql_num_rows($result)!=1){
echo '<script type="text/javascript">alert("Invalid User name or id!"); </script>';
	//header('Location: signin.html');
	require 'login.html';
}
else{
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
  
while($row = mysql_fetch_assoc($result)){
$type=$row["Previllage"];
//$_SESSION['emp_id'] =$eid;
$_SESSION['username'] =$user;
   $_SESSION['password'] =$pass;

if($type=='Bill Officer'){

if(isset($_SESSION['username']))

{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/index.php");
 
}
if($type=='Accountant'){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/BillValue.php");

}
if($type=='Technician'){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/Technician.php");

}

if($type=='Technician Mainten'){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/TechnicianMaintain.php");

}



if($type=='Meter Reader'){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/EmplMeterRead.php");

}
if($type=='Bill Collector'){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/Admin/Bill_Collect.html");

}
if($type==''){

if(isset($_SESSION['username']))
{		
print "Welcome "."<b><u>".$_SESSION['username']."<u></b>";

}
header("Location: /User/home.html");

}

}
}
}
mysql_close($con);
?>


