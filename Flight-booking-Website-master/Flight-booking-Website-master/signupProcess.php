<?php

	// Create database connection
    $db = mysqli_connect("localhost", "root", "Wo^z9Q9fV5QdDAmlGW","flightnow");
	
	
	// Initialize error message 
    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	
	// If upload button is clicked ...
	if (isset($_POST['submit']))
		{
		$username = mysqli_real_escape_string($db, $_REQUEST['username']);
		$password = mysqli_real_escape_string($db, $_REQUEST['password']);
		$DateOfBirth = mysqli_real_escape_string($db, $_REQUEST['DateOfBirth']);
		$phoneNumber = mysqli_real_escape_string($db, $_REQUEST['phoneNumber']);
		$Address = mysqli_real_escape_string($db, $_REQUEST['Address']);
		
		// Get image name and directory
		$fileName = $_FILES['image']['name'];
        $fileTmp = $_FILES['image']['tmp_name'];
        $fileNameFinal = rand(1, 1000000) . "_" . $fileName;
        $ok = move_uploaded_file($fileTmp, "profile/" . $fileNameFinal);
		
		
		
		
		//add users to the database
		$sql = "INSERT INTO client (username,password,DateOfBirth,phoneNumber,Address,image) VALUES ('$username','$password','$DateOfBirth','$phoneNumber','$Address','$fileNameFinal')";
		
		}
		
	if(mysqli_query($db, $sql)){
        header("Location: login.php");
    } //error massege

    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
    mysqli_close($db);
?>