jQuery(document).ready(function($) {
	$('.menu-toggle').click(function() {
  	$('body').toggleClass('menu-active');
  	$('nav .wrapper').toggleClass('active');
	});
	$('.content-overlay').click(function() {
  	$('body').toggleClass('menu-active');
  });
});