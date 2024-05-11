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