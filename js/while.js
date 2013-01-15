var curr = 1; // current slide we're on in carousel
var NUM = 6; // number of slides in carousel

$(document).ready(function() {

	curr = 1;
	$("#curr-slide").html(curr);
	$("#total-slides").html(NUM);
	
	$("#nav-left").click(function() { 
	
		curr = curr - 1;
		if(curr == 0) curr = NUM;
	
		setTimeout(function() { $("#" + curr).fadeIn(); }, 400); // relies on the slides having id's of 1 -> NUM 	
		$(".slide").fadeOut();
		$("#curr-slide").html(curr);
	});
	
	$("#nav-right").click(function() {
	
		curr = curr + 1;
		if(curr == NUM + 1) curr = 1;
			
		setTimeout(function() { $("#" + curr).fadeIn(); }, 400);  // relies on the slides having id's of 1 -> NUM 	
		$(".slide").fadeOut();
		$("#curr-slide").html(curr);
	
	});
	
});