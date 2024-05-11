<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
	  
       $resultc=mysqli_query($db,"select * from client where username='$username' and password='$password'")
         or die("incorrect username or password");
        $rowc =mysqli_fetch_array($resultc);
		
       $resulta=mysqli_query($db,"select * from admin where username='$username' and password='$password'")
            or die("incorrect username or password");
        $rowa =mysqli_fetch_array($resulta);
		
      // If result matched $myusername and $mypassword, table row must be 1 row
	if ($rowa['username'] == $username && $rowa['password'] == $password)
    {  
        header("Location: admin/order.php");
    }
	elseif($rowc['username'] == $username && $rowc['password'] == $password)
    {  
        header("Location: customer/index.php");    
    }
	else 
	{
		header("Location: loginf.php");
		
	}
   }
?>