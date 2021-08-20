// (C) 2020 ITESaurabh (Saurabh Tanwar)


//Smooth Scroll
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top - 150
	    }, 1100, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


//Dev
document.getElementById("version").innerHTML = "0.45 Beta";