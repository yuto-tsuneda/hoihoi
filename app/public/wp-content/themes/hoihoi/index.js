$(function(){

  $(".button").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeIn();
  });

  $(".upload__modal--close").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeOut();
  });

});