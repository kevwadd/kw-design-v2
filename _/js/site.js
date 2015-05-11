// remap jQuery to $
(function($){
	
	var event_type;
	
	if (Modernizr.touch){
	
	 event_type = 'touchstart';
	  
	} else {
	 
	 event_type = 'click';	
	 
	}


$('body').on(event_type, 'button#site-nav-btn', function(){

	$('.wrapper').addClass( 'nav-open');
	$('.side-nav').addClass( 'open');
	
	$('#home-slider').carousel('pause');
	
return false;	
});

$('body').on(event_type, 'button#close-nav', function(){

	$('.wrapper').removeClass( 'nav-open');
	$(this).parent().removeClass( 'open');
	
	$('#home-slider').carousel('cycle');
	
return false;	
});

$('#home-slider').on('slide.bs.carousel', function () {
var area_icon = $("#areas-section").find('.active');
area_icon.removeClass('active').addClass('normal');
//console.log(area_icon);
});

$('#home-slider').on('slid.bs.carousel', function (e) {
  var slide_id = $(this).find(".active").attr("id");
  var id_split = slide_id.split("slide-");
  var area_id = "#area-panel-"+id_split[1];
  
  $(area_id).find('.icon').removeClass("normal").addClass("active");
  //console.log(area_id);
});

$('body').on(event_type, 'li.more-link button', function(){
var parent = $(this).parents('ul');
var hidden = parent.find('li.hidden-link');
var visible_hidden = parent.find('li.visible-hidden');

hidden.toggleClass('hidden-link visible-hidden');
visible_hidden.toggleClass('visible-hidden hidden-link');

$(this).toggleClass('active inactive');

return false;	
});

$('body').on(event_type, 'button#comments-btn', function(){
	
	var parent = $(this).parents('#post-comments');
	$(parent).toggleClass('comments-closed comments-open');
	
	if ($(parent).hasClass('comments-open')) {
	
	$('html, body').animate({
        scrollTop: $("#post-comments").offset().top
    }, 1000);
    
    }
	
	return false;	
});


/* -------------------------------------- */
		
	$(document).ready(function() {
	 
	 window.addEventListener("load",function() {
	// Set a timeout...
		setTimeout(function(){
			// Hide the address bar!
			window.scrollTo(0, 1);
		}, 0);
	});

	});
	
	$(window).load(function() {
		
	});


})(window.jQuery);