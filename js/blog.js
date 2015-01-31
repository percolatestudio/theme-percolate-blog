jQuery(document).ready(function($) {
  //menu interactions
  $('[data-contact]').click(function() {
    //alert('cats');
  	$('body').removeClass('menu-open').toggleClass('contact-open');
  });
  $('[data-menu]').click(function() {
  	$('body').toggleClass('menu-open');
  });
  $('.overlay-close').click(function() {
  	$('body').removeClass('contact-open').removeClass('menu-open');
  });
  $('.wrapper-menu a').click(function() {
  	$('body').removeClass('menu-open');
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

  // Social plugin
  var url = window.location.href;

  $('[data-facebook=button]').social({
    network: 'facebook',
    counter: '[data-facebook=counter]',
    url: url
  });

  $('[data-twitter=button]').social({
    network: 'twitter',
    counter: '[data-twitter=counter]',
    url: url
  });

});