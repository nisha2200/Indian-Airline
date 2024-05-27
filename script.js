const scroll = new LocomotiveScroll({
  el: document.querySelector('#main'),
  smooth: true,
  lerp: 0.1
});

// // var nav = document.querySelector("#nav1 i")
// // var block = document.querySelector("#nav2")
// // nav.addEventListener("click",function(dets){
// //     block.style.transform = `translateX(-0%)`
// // })
// // var icon = document.querySelector("#nav2 i")
// // icon.addEventListener("click",function(dets){
// //     block.style.transform = `translateX(107%)`
// // })


// var imageCount = 1;
// var total = 3;

// function slide(x) {
//   var image = document.getElementById('image');
//   imageCount = imageCount + x;
//   if (imageCount > total) { imageCount = 1; }
//   if (imageCount < 1) { imageCount = total; }
//   image.src = "images/img" + imageCount + ".jpg";
//   clearInterval(time); 								// clear interval stops the set interval.
//   time = window.setInterval(function slideA() { 		// giving the value of time the same function below starts the loop 
//     var image = document.getElementById('image');
//     imageCount = imageCount + 1;
//     if (imageCount > total) { imageCount = 1; }
//     if (imageCount < 1) { imageCount = total; }
//     image.src = "images/img" + imageCount + ".jpg";
//   }, 5000);
// }

// var time = window.setInterval(function slideA() {    // just assign the section to the variable so you can target it.
//   var image = document.getElementById('image');
//   imageCount = imageCount + 1;
//   if (imageCount > total) { imageCount = 1; }
//   if (imageCount < 1) { imageCount = total; }
//   image.src = "images/img" + imageCount + ".jpg";
// }, 5000);



// // form submission signup

// var myInput = document.getElementById("password");
// var letter = document.getElementById("letter");
// var capital = document.getElementById("capital");
// var number = document.getElementById("number");
// var length = document.getElementById("length");

// var check = function () {
//   if (document.getElementById('password').value ==
//     document.getElementById('confirmpsw').value) {
//     document.getElementById('message').style.color = 'green';
//     document.getElementById('message').innerHTML = 'matching';
//   } else {
//     document.getElementById('message').style.color = 'red';
//     document.getElementById('message').innerHTML = 'not matching';
//   }
// }

// // myInput.onfocus = function () {
// //   document.getElementById("message").style.display = "block";
// // }


// // myInput.onblur = function () {
// //   document.getElementById("message").style.display = "none";
// // }

// myInput.onkeyup = function () {

//   var lowerCaseLetters = /[a-z]/g;
//   if (myInput.value.match(lowerCaseLetters)) {
//     letter.classList.remove("invalid");
//     letter.classList.add("valid");
//   } else {
//     letter.classList.remove("valid");
//     letter.classList.add("invalid");
//   }

//   if (email.value == "") {
//     email.style.border = "1px solid red";
//     document.getElementById('email_div').style.color = "red";
//     email_error.textContent = "Email is required";
//     email.focus();
//     return false;
//   }
//   // Validate capital letters
//   var upperCaseLetters = /[A-Z]/g;
//   if (myInput.value.match(upperCaseLetters)) {
//     capital.classList.remove("invalid");
//     capital.classList.add("valid");
//   } else {
//     capital.classList.remove("valid");
//     capital.classList.add("invalid");
//   }

//   // Validate numbers
//   var numbers = /[0-9]/g;
//   if (myInput.value.match(numbers)) {
//     number.classList.remove("invalid");
//     number.classList.add("valid");
//   } else {
//     number.classList.remove("valid");
//     number.classList.add("invalid");
//   }

//   // Validate length
//   if (myInput.value.length >= 8) {
//     length.classList.remove("invalid");
//     length.classList.add("valid");
//   } else {
//     length.classList.remove("valid");
//     length.classList.add("invalid");
//   }
//   if (myInput.value != password_confirm.value) {
//     password.style.border = "1px solid red";
//     document.getElementById('pass_confirm_div').style.color = "red";
//     password_confirm.style.border = "1px solid red";
//     password_error.innerHTML = "The two passwords do not match";
//     return false;
//   }
// }







const countries = [
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/FLL-rx.jpg",
    country1: "London",
    country2: "Paris",
    price: "₹7550",
    date: "1 july 2024",
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/ORL-rx.jpg",
    country1: "America",
    country2: "Singapore",
    price: "₹50550",
    date: "16 june 2024"
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/LAX-rx.jpg",
    country1: "India",
    country2: "Bangladesh",
    price: "₹3250",
    date: "2 august 2024",
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/LAS-rx.jpg",
    country1: "Newyork",
    country2: "Washington Dc",
    price: "₹30050",
    date: "7 july 2024",
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/CHI-rx.jpg",
    country1: "Tokyo",
    country2: "Singapore",
    price: "₹62550",
    date: "20 september 2024",
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/GDL-r2x.jpg",
    country1: "Chicago",
    country2: "Los Angeles",
    price: "₹11550",
    date: "4 june 2024",
  },
  {
    image: "https://c.fareportal.com/gcms/portals/2/images/destinations/MNL-r2x.jpg",
    country1: "Mumbai",
    country2: "Delhi",
    price: "₹7050",
    date: "30 may 2024",
  },
  {
    image: "https://www.americanairlines.in/content/images/homepage/b-spot/International/b3-alliances-reciprocity-03012024.jpg",
    country1: "Saudi Arab",
    country2: "Dubai",
    price: "₹84550",
    date: "16 july 2024",
  },
]

var clutter = ""
countries.forEach(function (elem) {
  clutter = clutter + `<div id="cntrycont">
  <img src="${elem.image}" alt="">
  <h2 id="city1">${elem.country1}</h2>
  <h4>to</h4>
  <h2 id="city2">${elem.country2}</h2>
  <span>${elem.price}</span>
  <h3>${elem.date}</h3>
</div>`
})
document.querySelector("#page2").innerHTML = clutter


// signup html code
// script.js
// script.js
document.addEventListener('DOMContentLoaded', function () {
  // Populate the country select element dynamically
  const countrySelect = document.getElementById('country');
  const otherCountryInput = document.getElementById('otherCountry');
  const countries = ["United States", "Canada", "United Kingdom", "Australia", "India", "Other"];

  countries.forEach(country => {
    const option = document.createElement('option');
    option.value = country;
    option.textContent = country;
    countrySelect.appendChild(option);
  });

  // Show/Hide the other country input based on the selected option
  countrySelect.addEventListener('change', function () {
    if (countrySelect.value === 'Other') {
      otherCountryInput.style.display = 'block';
      otherCountryInput.required = true;
    } else {
      otherCountryInput.style.display = 'none';
      otherCountryInput.required = false;
    }
  });
  // Form validation and submission
  const form = document.getElementById('signup-form');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    // Simple validation
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    if (password !== confirmPassword) {
      alert('Passwords do not match');
      return;
    }
    // Here, you can add more validation if needed
    // Collect form data
    const formData = new FormData(form);
    // Example of sending data to the backend
    fetch('/api/signup', {
      method: 'POST',
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Sign up successful!');
          form.reset();
        } else {
          alert('Sign up failed: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Sign up failed due to a network error.');
      });
  });
});



// Book html
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('booking-form');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    // Simple form validation could be added here
    // Collect form data
    const formData = new FormData(form);
    // Example of sending data to the backend
    fetch('/api/book-flight', {
      method: 'POST',
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Flight booking successful!');
          form.reset();
        } else {
          alert('Flight booking failed: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Flight booking failed due to a network error.');
      });
  });
});






