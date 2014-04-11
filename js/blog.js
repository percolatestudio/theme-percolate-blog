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

  //hacked together, needs refactor
  $('.toggle-iframe > a').click(function(toggle) {
    if (! $(toggle.target).hasClass('active')) {
      $(this).addClass('active').siblings().removeClass('active').closest('.toggle-iframe').toggleClass('source');
    }
  });

  //fastclick
  window.addEventListener('load', function() {
      new FastClick(document.body);
  }, false);

});