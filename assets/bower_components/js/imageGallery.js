$(document).ready(function () {
  $("a.thumbnail").click(function(){
    slide_idx = parseInt($(this).attr("data-image-id"));
    $('#myCarousel').carousel(slide_idx);
  })
});