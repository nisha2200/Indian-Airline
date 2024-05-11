<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Wo^z9Q9fV5QdDAmlGW');
   define('DB_DATABASE', 'flightnow');
   define("IMG", "http://" . $_SERVER['SERVER_NAME'] . "/FlightNow/profile/");
   
   try {
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>