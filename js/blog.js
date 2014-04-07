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
  $('.post').click(function(ev) {
    if (! $(ev.target).hasClass('author')) {
      var link = $(ev.currentTarget).find('a:not(.author)').first();
      window.location = link.attr('href');
    }
  });
});