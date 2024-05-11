<!DOCTYPE html>
<html>
<head>
	<title>Flight Now</title>
	<link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="../css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<style>

</style>
<div class="top">
	<a class="pat" href="index.php">Flight Now</a>
	
	<div class="vl"></div>
	
	
	<div class="top2">
		<input class="search"type="search" placeholder="Search"/>
		<a class="pat2" href="../flights.php">Flights</a>
		<a class="pat2" href="../logout.php">Log Out</a>
	</div>
	
	
</div>


<div style="width:100%; height:1600px; background-color:#E7E3E2; padding-top:50px; text-align:center;">

		<div style="border:2px solid black;  border-radius:20px; width:700px; height:550px;  margin-top:50px; margin-left:600px; font-size:20px;">
          <h4 style="color:black; font-weight:bold;  text-align:center; padding:10px;">Add New Flight</h4>
             <form method="post" action="ADDdata.php">
			 
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;"  type="text" name="id" placeholder="ID" ><br><br>
				 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;"  type="text" name="flightid" placeholder="Flight Id" ><br><br>
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="text" name="name" placeholder="Name" ><br><br>
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="text" name="destination" placeholder="Destination"><br><br>
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="date" name="date" placeholder="Date" ><br><br>             
                 <input style="	border:1px solid #1E3E63; border-radius:5px; color:white; width:70px; height:30px;  background-color:#1E3E63;" type="submit" name="insert" value="ADD" onsubmit="ADDdata.php">  
              </form>
        </div>
		
		<div style="border:2px solid black;  border-radius:20px; width:700px; height:300px;  margin-top:50px; margin-left:600px; font-size:20px;">
            <h4 style="color:black; font-weight:bold;  text-align:center; padding:10px;">Update data in flight</h4>
             <form  method="post" action="UPDATEdata.php">
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;"  type="text" name="flightid" placeholder="Flight Id" ><br><br>
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="date" name="date" placeholder="Date"><br><br>
                 <input style="	border:1px solid #1E3E63; border-radius:5px; color:white; width:70px; height:30px;  background-color:#1E3E63;" type="submit" name="update" value="update" onsubmit="UPDATEdata.php">
            </form>
          </div>
		  
        <div style="border:2px solid black;  border-radius:20px; width:700px; height:200px;  margin-top:50px; margin-left:600px; font-size:20px;">
          <h4 style="color:black; font-weight:bold;  text-align:center; padding:10px;">Remove data from flight</h4>
            <form  method="post" action="Deletedata.php">
                 <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="text" name="flightid" placeholder="Flight Id" ><br><br>
                 <input style="	border:1px solid #1E3E63; border-radius:5px; color:white; width:70px; height:30px;  background-color:#1E3E63;" type="submit" name="delete" value="delete" onsubmit="Deletedata.php">
             </form>
          </div>
		  
          
        <div style="border:2px solid black;  border-radius:20px; width:700px; height:200px;  margin-top:50px; margin-left:600px; font-size:20px;">
			<h4 style="color:black; font-weight:bold;  text-align:center; padding:10px;">Search data in flight</h4>
            <form  method="post" action="Search_data.php">
                <input style="	padding:10px; border:2px solid #65D0E3; border-radius:10px; width:300px; height:40px;" type="text" name="flightid" placeholder="Flight Id" ><br><br>   
                 <input style="	border:1px solid #1E3E63; border-radius:5px; color:white; width:70px; height:30px;  background-color:#1E3E63;" type="submit" name="search" value="search" onsubmit="IUD_data.php">
             </form>
          </div>
          

	
</div>
<div class="clear"></div>

<div class="anim">

	<h1>
	  <a href="" style="color:#E57133; text-decoration:none; letter-spacing:.8em; padding:100px; font-weight: 700;" class="typewrite" data-period="2000" data-type='[ "Travel Now", "Low Price","Best Service" ]'>
		<span class="wrap"></span>
	  </a>
	</h1>
</div>



<div class="spa">
	<h1 style="text-align:center; padding-top:20px; color:#65D0E3;">Partner With<h1>
	
	<div id="part">
		<img src="../img/1.png"/>
		<img src="../img/2.png"/>
		<img src="../img/3.png"/>
	</div>




</div>

<div class="spa2">
<div class="footer-social-icons">
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
	<div style="text-align:center;padding-top:50px;">
		<a class="pat3" href="../book.php">Book Now</a>     |
		<a class="pat3" href="../flights.php">Flights</a>   |
		<a class="pat3" href="../signup.php">Sign Up </a>   |
		<a class="pat3" href="../login.php">Login</a>
	</div>
	 <p style="text-align:center; color:white; font-size:15px; padding-top:50px;">Copyright &copy; Flight Now | Powered By: HTML5 | CSS | JavaScript</p>
	 
	 
</div>
<script src="../js/js.js"></script>
</body>


</html>