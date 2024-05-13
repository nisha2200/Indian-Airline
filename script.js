// const scroll = new LocomotiveScroll({
//     el: document.querySelector('#main'),
//     smooth: true,
//     lerp:0.1
//   });

// var nav = document.querySelector("#nav1 i")
// var block = document.querySelector("#nav2")
// nav.addEventListener("click",function(dets){
//     block.style.transform = `translateX(-0%)`
// })
// var icon = document.querySelector("#nav2 i")
// icon.addEventListener("click",function(dets){
//     block.style.transform = `translateX(107%)`
// })


var imageCount = 1;
var total = 3;

function slide(x) {
	var image = document.getElementById('image');
	imageCount = imageCount + x;
	if (imageCount > total) { imageCount = 1; }
	if (imageCount < 1) { imageCount = total; }
	image.src = "images/img" + imageCount + ".jpg";
	clearInterval(time); 								// clear interval stops the set interval.
	time = window.setInterval(function slideA() { 		// giving the value of time the same function below starts the loop 
		var image = document.getElementById('image');
		imageCount = imageCount + 1;
		if (imageCount > total) { imageCount = 1; }
		if (imageCount < 1) { imageCount = total; }
		image.src = "images/img" + imageCount + ".jpg";
	}, 5000);
}

var time = window.setInterval(function slideA() {    // just assign the section to the variable so you can target it.
	var image = document.getElementById('image');
	imageCount = imageCount + 1;
	if (imageCount > total) { imageCount = 1; }
	if (imageCount < 1) { imageCount = total; }
	image.src = "images/img" + imageCount + ".jpg";
}, 5000);













// form submission signup
         
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