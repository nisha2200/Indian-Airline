<?php

    $link = mysqli_connect("localhost", "root", "Wo^z9Q9fV5QdDAmlGW","flightnow");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id= mysqli_real_escape_string($link, $_REQUEST['id']);
	$flightid= mysqli_real_escape_string($link, $_REQUEST['flightid']);
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
	$date = mysqli_real_escape_string($link, $_REQUEST['date']);
  
    $sql = "INSERT INTO flight (id,flightid,name,destination,date) VALUES (NULL,'$flightid','$name','$destination','$date')";
    if(mysqli_query($link, $sql)){
        
        echo "<script>alert('Flight added succesfully');document.location='order.php'</script>";
       
    } 
    else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>


           