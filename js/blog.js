jQuery(document).ready(function($) {
  //menu interactions
	$('.menu-toggle').click(function() {
  	$('body').toggleClass('menu-active');
  	$('nav .wrapper').toggleClass('active');
	});
	$('.content-overlay').click(function() {
  	$('body').toggleClass('menu-active');
  });

  //post grid
  //map clicks to go to the post
  //TODO FIX ME
  $('.posts-grid > * > *:not(.author)').click(function() {
    var postLink = $(this).find('.title > a').attr('href');
    window.location = postLink;
  });

});