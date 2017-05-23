<?php
if(isset($_POST['Save']))  
$ID=$_POST['a'];
$First=$_POST['b'];
$Last=$_POST['c'];
$Gender=$_POST['radiobutton'];
$Age=$_POST['e'];
$kebele=$_POST['f'];
$Phonenumber=$_POST['g'];
$Housenumber=$_POST['h'];

if(!strlen($_POST["a"])||!strlen($_POST["b"])||!strlen($_POST["c"])||!strlen($_POST["radiobutton"])||!strlen($_POST["e"])
||!strlen($_POST["f"])||!strlen($_POST["g"])||!strlen($_POST["h"])){
echo "<h1>You need to fill all the required Field/s.".'<br>';
echo "<a href='NewCustRegstration.html'>Back</a>";
}
elseif(!is_numeric($_POST["a"])||!is_numeric($_POST["f"])||!is_numeric($_POST["g"]))
   {
     echo "<h1>Please, You need to enter numbers only on the Id,Kebele and House_No Field.";
	 
	    }
		elseif(!ctype_digit($_POST["a"])||!ctype_digit($_POST["f"]))
		{
		echo "<h1>You can only Enter normal numbers bigger than or equal to zero in the Id and Kebele Field";
		}
		elseif($_POST['b']==strval(intval($_POST['b']))||
		      $_POST['c']==strval(intval($_POST['c']))||
			  $_POST['e']==strval(intval($_POST['e']))){
		echo "<h1>Please Enter Characters in the First Name,Last Name and City Field.";
				}
else
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("bdwss",$con);
$sql="insert into customer values('$ID','$First', '$Last', '$Gender','$Age','$kebele','$Phonenumber','$Housenumber','$Photo')";
mysql_query($sql);
$sql="select * from customer";
$result=mysql_query($sql);
If(!$result)
	die('Unable to query:' . mysql_error());
echo "<h1>you have successfully Register".'<br>';
mysql_close($con);
}
?>

