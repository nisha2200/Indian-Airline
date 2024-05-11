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
		<a class="pat2" href="login.php">Login</a>

	</div>
	
	
</div>

<div style="width:100%; height:900px; background-color:#E7E3E2;">
	<form method="post" action="signupProcess.php" enctype="multipart/form-data">


		<div class="user2">
			<label for="usrname">Username</label><br>

			<input type="text" id="username"  name="username" required>
		
		
		
		<div id="email_div">
		<br>
		  <label >Email</label><br> 
		  <input type="email" name="email" class="textInput" required>
		  <div id="email_error"></div>
		</div>
		<br>

		
		<label for="usrname">Date Of Birth</label><br>

		<input type="text" id="DateOfBirth"  name="DateOfBirth" required>
		<br><br>
		
		<label for="usrname">Phone Number</label><br>

		<input type="text" id="phoneNumber	"  name="phoneNumber" required>
		<br><br>
	
		<label for="usrname">Address</label><br>

		<input type="text" id="Address"  name="Address" required>
		<br><br>
		
		<label for="image">Image</label><br>
		<input type="file" id="image" name="image" >
		
		
		<br><br>
		<label for="password">Password</label><br>
	  <input type="password" id="password" name="password" onkeyup='check();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>


	  

	<br><br>

		
		   <label>Password confirm</label> <br>
		   <input type="password" n  name="confirmpsw" id="confirmpsw"  onkeyup='check();' required><br>
		   <span id='message'></span>
			 <br><br>
		   <div id="password_error"></div>
		    </div>
			<div class="sub">
				<input type="submit" value="Submit" name="submit">
			</div>


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
 <script type="text/javascript">
	  
         
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

	  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpsw').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
  }

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
 
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  if (myInput.value!= password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}


      </script>
</body>


</html>