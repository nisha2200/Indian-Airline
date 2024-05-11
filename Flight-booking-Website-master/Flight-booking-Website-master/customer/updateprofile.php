<?php
	$servername = "localhost";
	$username = "root";
	$password = "Wo^z9Q9fV5QdDAmlGW";
	$dbname = "flightnow";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	// sql to update a record
		$username= $_POST['username'];
		$password= $_POST['password'];

		
		$sql = "UPDATE client SET password='$password' WHERE username= '$username'";	
		
		

	if (mysqli_query($conn, $sql))
	{
	   echo "<script>alert('Flight updated succesfully');document.location='profile.php'</script>";
	}
	//error massege
	else
	{
		echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>





