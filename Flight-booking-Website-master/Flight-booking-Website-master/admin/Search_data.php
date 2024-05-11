<?php
$servername = "localhost";
$username = "root";
$password = "Wo^z9Q9fV5QdDAmlGW";
$dbname = "flightnow";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$flightid= $_POST['flightid'];
$sql = "SELECT * FROM flight WHERE flightid = $flightid";
$result = $conn->query($sql);


    // output data of each row
while($row = $result->fetch_assoc()) 
{
       
        echo "name: " .  $row["name"].  "<br>";
        echo "destination: " .  $row["destination"].  "<br>";
        echo "date: " .  $row["date"].  "<br>";
}

$conn->close();
?> 