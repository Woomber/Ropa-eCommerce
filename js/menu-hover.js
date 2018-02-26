$(document).ready(function(){
  $(".sub1").hover(function(){
    $(this).parent().addClass("hovered");

  }, function(){
    $(this).parent().removeClass("hovered");
  })
});
