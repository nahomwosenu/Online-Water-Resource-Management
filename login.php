<?php
		session_start();
		require_once('database.php');
		$user=$_POST['username'];
        $pass=$_POST['password'];
		$sql="SELECT * FROM  user WHERE User_Name='$user' and Password='$pass'";
		$result=mysql_query($sql) or die(mysql_error($con));
		if(mysql_num_rows($result)!=1)
		{
		header('Location:index.php?fail');
		}
		else{
		
		while($row =($result))
		{
		
						$type=$row['Previllage'];
					   	   $_SESSION['user_id'] =$pass;
						   $_SESSION['User_Name'] =$user;						 						
						if($type=='Bill Officer'){					
							 header("Location:/User/Admin/index.php");
							
							 break; 
						}
						else if($type=='Accountant2'){
							 header('Location:/User/Admin/kebele09_16.php');
							 break; 
						}
						else if($type=='Technician'){
							 header('Location:/User/Admin/Technician.php');
							 break; 
						}
						else if($type=='Meter Reader'){
							header("Location:/User/Admin/EmplMeterRead.php");
							break;
						}
						else if($type=='Bill Collector'){
							header("Location:/User/Admin/Bill_Collect.html");
							break;
						}
						else if($type=='Accountant1'){
							header("Location:/User/Admin/kebele1_8.php");
							break;
						}
						else if($type=='Technician Mainten')
						{
							header("Location:/User/Admin/TechnicianMaintain.php");
							break;
						}
						else if($type=='')
						{
							header("Location: /User/home.php");
							break;
						
					    }	
				}
		}
	
		mysql_close($con);
?>


