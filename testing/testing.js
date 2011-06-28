
function repeater(event) {
  this.currentTime = 5;
  this.play();
}

function timeUpdated(event) {
  if (this.currentTime > event.data.stopat) {
    this.pause();
  }
}

$(document).ready(function() {
  var video = $("video").get(0);

  $("#play").click(function() {
    video.play();
  });

  $("#skip").click(function() {
    video.currentTime = 5;
    video.play();
  });

  $("#repeat").click(function() {
    $("video").bind('ended', repeater);
    video.currentTime = 0;
    video.play();
  });

  $("#section").click(function() {
    $("video").bind('timeupdate', {stopat: 4}, timeUpdated, false);
    video.currentTime = 2;
    video.play();
  });

});

