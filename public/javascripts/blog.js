function slideOut() {
  $(this).stop().animate({'right':'10px'}, 200);
};


function slideBack() {
  $(this).stop().animate({'right':'-190px'}, 200);
};


jQuery.fn.slideMenu = function() {
  $element = $(this);
//  $element.
}

$(document).ready(function() {

  $("#body_content_right").addClass("float_menu");
  $("#body_content_left").addClass("float_menu");


  $("#body_content_right").stop().delay(500).animate({'right':'-190px'}, 1000);

  $("#body_content_right").hover(slideOut, slideBack);

});
