$(document).ready(function(){


	$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');

		});


	$('.minus-btn').on('click', function(e) {
	e.stopPropagation();
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 	
    if (value > 1) {
        value = value - 1;
    } 
    	else {
        value = 0;
    }

  		$input.val(value);
 
	});
 
	
$('.plus-btn').on('click', function(e) {
	e.stopPropagation();
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value < 100) {
		value = value + 1;
		
    } else {
        value =100;
    }
 
    $input.val(value);
});

	


	var bow = true;
	$("#hideMap").click(function(){
		var cont = $("#mapContent");
		cont.animate({top: "-100%"}, 1000);
	});
	$("#mapContent").bind('mousewheel', function(e) {
		if(e.originalEvent.wheelDelta / 120 > 0 && !bow) {
			var cont = $("#mapContent");
		cont.animate({top: "0"}, 500);
		bow = true;
    } else  if(bow){
        var cont = $("#mapContent");
		cont.animate({top: "-100%"}, 500);
		bow = false;
	}
	});
	

	var kol = 0;
	var sum = 0;
	var total_sum = 0;
	var kol_sum = 0;


	$("#pay").click(function(){
		$(".menu_pay").fadeIn(80);
	
		$(".item").each(function(item){
		var $input = $(this).closest('div').find('input');
		var value = parseInt($input.val());
		kol += value;
		kol_sum += value;
		if (value != 0){
			sum += $(this).find(".total-price").html();
		}
		total_sum+=sum*kol_sum;
		sum = 0;
		kol_sum = 0;
	});
		
			$("#kol").html(kol);
			$("#sum_goods").html(total_sum);

	
	});
	$(".btn_close_pay").click(function(){
		$(this).parent().fadeOut(100);
		kol = 0;
		total_sum = 0;
	})

	function showPayMenu(){
		$(".menu_pay").fadeIn(100);
		return false;
	}


	function output()
	{
		alert("testing RadioButton events");
	}


	$("#authorization").click(function(){
		$(".menu_authorization").fadeIn(100);
	});
	$(".btn_close").click(function(){
		$(this).parent().fadeOut(100);
		
	})

	function showAuthMenu(){
		$(".menu_authorization").fadeIn(100);
		return false;
	}

	$(".pay-button").click(function(){
		$(".allert_menu").fadeIn(100);
		setTimeout(function(){$(".allert_menu").fadeOut(100)},3000);
	});

	var tabs = $(".tab_content");
	var current = $(".tab_button_active");
	$(".tab_button").click(function(){
			if($(this).hasClass("tab_button_active"))
				return false;
			current.removeClass("tab_button_active");
			$(this).addClass("tab_button_active");
			current = $(this);
			tabs.each(function(i, elem){
				$(this).toggleClass("tab_hide");
			});
	});

});

	
