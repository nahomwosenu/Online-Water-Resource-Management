 
<?php  
       session_start();
	  if(isset($_SESSION['user_id']) && isset($_SESSION['User_Name']) )
	  {
      session_destroy();
      header("Location:index.php");
	  
	  }
?>  
