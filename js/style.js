$(document).ready(function() {
	$('.main-header-nav-hamburger').on('click', function (){
		$('.right-window').css("margin-right", "0%");
		$('.main-header-nav-hamburger').css("opacity"
			, "0");
		$('.right-window_close').on('click', function(){
			$('.main-header-nav-hamburger').css("opacity", "1");
			$('.right-window').css("margin-right", "-100%");
		});
		$('.right-window ul li').on('click', function(){
			$('.main-header-nav-hamburger').css("opacity", "1");
			$('.right-window').css("margin-right", "-100%");
		});
	});
	$('.team').on('mouseenter', function(){
$(this).find('.team-popup').css('opacity', '1');
$(this).find('.triangle').css('opacity', '1');
	});
	$('.team').on('mouseleave', function(){
$(this).find('.team-popup').css('opacity', '0');
$(this).find('.triangle').css('opacity', '0');
	});
});