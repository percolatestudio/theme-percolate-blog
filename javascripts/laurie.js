jQuery(document).ready(function($) {
	$(function(){
   	$buttons = $(this).find('.archive_nav a');
   	$slides = $(this).find('.slides > *');

   	$buttons.live('click', function () {
   	  var $this = $(this),
   	  i = $this.index();

   	  $buttons.removeClass('current').eq(i).addClass('current');
   	  $slides.addClass('hide').eq(i).removeClass('hide');
   	});
	});

	//Clickdown functions
		//Search Page
	$(".clickdown").click(function() {
	 	$(this).css('outline','none');
		$(this).next().slideToggle("fast");
		return false;
	}).next().hide();
		//Single Pages
	$(".searchclickdown").append('<span class="searcharrow">&nbsp;&darr;</span>');
	$(".searchclickdown").click(function() {
	 	$(this).css('outline','none');
		$(this).next().slideToggle("fast");
		return false;
	}).next().hide();
	//Work Page
		//Opacity UI
	$('.postwork').siblings().hover(function() {
		$(this).siblings().stop().fadeTo(300,0.4);
	}, function() {
		$(this).siblings().stop().fadeTo(300,1);
	});

});