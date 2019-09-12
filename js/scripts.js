$(document).ready(function(){ 
	var full = $(".pictureCurrent img");
	$(".regular").on('afterChange', function(event, slick, currentSlide, nextSlide){
		//console.log(slick);
		full.attr('src', $('.slick-current').children().attr('src'));
	});
});