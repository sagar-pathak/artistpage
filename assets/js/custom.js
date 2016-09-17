$(document).ready(function(){
  $('.bxslider').bxSlider({
  	auto: true,
  	video: true,
  	pager: false
  });

  $(".latest-videos").fitVids();
  loadThumbNails();
});