function slideOut() {
  $(this).stop().animate({'right':'-10px'}, 200);
};

function slideBack() {
  $(this).stop().animate({'right':'-300px'}, 200);
};

$(document).ready(function() {

//  $("#body_content_right").addClass("float_menu");
//  $("#body_content_left").addClass("float_menu");

  $el = $("#secondary");
  $el.stop().delay(1000).animate({'right':'-300px'}, 1000);
  $el.hover(slideOut, slideBack);

});
