$(window).scroll(function(e){ 
	$el = $('.coaster-bar'); 
	if ($(this).scrollTop() > 280 && $el.css('position') != 'fixed'){ 
		$('.coaster-bar').css({'position': 'fixed', 'top': '20px'}); 
	}
	if ($(this).scrollTop() < 280 && $el.css('position') == 'fixed'){ 
		$('.coaster-bar').css({'position': 'absolute', 'top': '300px'}); 
	} 
});

$(document).ready(function(){
	Galleria.loadTheme('res/gal/classic/galleria.classic.min.js');
});

function barScrollAtIndex(index) {
	var offset = 25;
	var dur = 800;
	if(index==0) {
		var world = $('.best-bar').offset()
		var w_top = world.top-offset
		$.scrollTo(w_top, dur);
	}
	if(index==1) {
		var world = $('.build-bar').offset()
		var w_top = world.top-offset
		$.scrollTo(w_top, dur)
	}
	if(index==2) {
		var world = $('.world-bar').offset()
		var w_top = world.top-offset
		$.scrollTo(w_top, dur)
	}
	if(index==3) {
		var world = $('.contact-bar').offset()
		var w_top = world.top-offset
		$.scrollTo(w_top, dur)
	}
	if(index=='top') {
		$.scrollTo(0, dur)
	}
}
function jsLink(url){
	window.location = url;
}
