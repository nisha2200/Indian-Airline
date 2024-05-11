<!DOCTYPE html>
<html>
<head>
	<title>Flight Now</title>
	<link rel="icon" href="img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="css/stylesheet.css"/>
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

		<a class="pat2" href="book.php">Book Now</a>
		<a class="pat2" href="flights.php">Flights</a>
		<a class="pat2" href="signup.php">Sign Up</a>


	</div>
	
	
</div>

<div style="width:100%; height:600px; border:2px solid #1E3E63; border-radius:20px;">

    <form name="loginform" action="loginprocess.php" method="POST">  
        <form action="customer/index.php" method="post">
		
            <div class="user">
				<label>User name</label><br>
				<input type="text" name="username" id="username" placeholder="username"> 
			</div>
			
			<div class="pass">
				<label>Password</label><br>
				<input type="password" name="password" id="password" placeholder="password">
			</div>
			
            <div class="sub">
				<input type="submit" value="Login" class="des"/>  
			</div>
			<p style="text-align:center;font-weight:bold; color:red; font-size:20px;">Invalid username or password!</p>
        </form>
     </form>
</div>


<div class="spa">
	<h1 style="text-align:center; padding-top:20px; color:#65D0E3;">Partner With<h1>
	
	<div id="part">
		<img src="img/1.png"/>
		<img src="img/2.png"/>
		<img src="img/3.png"/>
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
		<a class="pat3" href="book.php">Book Now</a>     |
		<a class="pat3" href="flights.php">Flights</a>   |
		<a class="pat3" href="signup.php">Sign Up </a>   |
		<a class="pat3" href="login.php">Login</a>
	</div>
	 <p style="text-align:center; color:white; font-size:15px; padding-top:50px;">Copyright &copy; Flight Now | Powered By: HTML5 | CSS | JavaScript</p>
	 
	 
</div>
<script src="js/js.js"></script>
</body>


</html>