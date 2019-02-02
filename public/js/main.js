$(document).ready(function() {
  // Select all links with hashes
  $('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links
if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
  &&
  location.hostname == this.hostname
  ) {
// Figure out element to scroll to
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// Does a scroll target exist?
if (target.length) {
// Only prevent default if animation is actually gonna happen
event.preventDefault();
$('html, body').animate({
  scrollTop: target.offset().top -140
}, 1000, function() {
// Callback after animation
// Must change focus!
var $target = $(target);
$target.focus();
if ($target.is(":focus")) { // Checking if the target was focused
  return false;
} else {
$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
$target.focus(); // Set focus again
};
});
}
}
});
});

$(document).ready(function() {
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items:4,
		loop:true,
		margin:10,
		nav: false,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
	});
	$('.play').on('click',function(){
		owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		owl.trigger('stop.owl.autoplay')
	})
});

$(document).ready(function() {
	$('#opcion0').hover(function(){
		$('.cero').fadeToggle('ocultar');
	});;
	$('#opcion1').hover(function(){
		$('.uno').slideToggle('ocultar');
	});;
	$('#opcion2').hover(function(){
		$('.dos').slideToggle('ocultar');
	});
	$('#opcion3').hover(function(){
		$('.tres').slideToggle('ocultar');
	});
	$('#opcion4').hover(function(){
		$('.cuatro').slideToggle('ocultar');
	});
	$('#opcion5').hover(function(){
		$('.cinco').slideToggle('ocultar');
	});
	$('#opcion6').hover(function(){
		$('.seis').slideToggle('ocultar');
	});
	$('#opcion7').hover(function(){
		$('.siete').slideToggle('ocultar');
	});
})